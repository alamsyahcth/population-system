<?php

namespace App\Http\Controllers\Penduduk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keperluan;
use App\Models\Pelayanan;
use App\Models\DetailPelayanan;
use Cart;
use Auth;


class PelayananController extends Controller {

    public function index() {
        $keperluan = Keperluan::get();
        return view('penduduk.pelayanan', compact(['keperluan']));
    }

    public function add(Request $request) {
        $data = Cart::add([
            'id' => rand(1,1000),
            'name' => $request->keperluan,
            'price' => $request->keterangan,
        ]);

        if($data) {
            return redirect('penduduk/pelayanan');
        }
    }

    public function remove($id) {
        $data = Cart::remove($id);
        if($data) {
            return redirect('penduduk/pelayanan');
        }
    }

    public function remove_all() {
        $data = Cart::clear();
        if($data) {
            return redirect('penduduk/pelayanan');
        }
    }

    public function save() {
        $data = new Pelayanan;
        $data->no_sp = $this->get_no_sp();
        $data->tanggal = date("Y-m-d");
        $data->status = '1';

        if($data->save()) {
            $pelayanan = Pelayanan::where('no_sp',$data->no_sp)->first();

            $items = Cart::getContent();
            foreach($items as $row) {
                $detail = new DetailPelayanan;
                $detail->id_pelayanan = $pelayanan->id;
                $detail->id_penduduk = Auth::user()->id;
                $detail->id_keperluan = $row->name;
                $detail->keterangan = $row->price;
                $detail->save();
            }
            Cart::clear();
            return redirect('penduduk/pelayanan')->with('success','Data Berhasil Disimpan, Segera Melapor Ke Pengurus RT Dengan Membawa Dokumen Yang Dibutuhkan');;
        }
    }

    public function get_no_sp() {
        $id = Pelayanan::orderBy('id','desc');
        $data_id = $id->first();
        $count = $id->count();
        
        if($count == null) {
            $no_sp = '1/SP/'.date("d").'/'.date("m").'/'.date("Y");
        } else if($data_id->id > 0) {
            $id_sp = ((int)$data_id->id)+1;
            $no_sp = $id_sp.'/SP/'.date("d").'/'.date("m").'/'.date("Y");
        }
        return $no_sp;
    }

}
