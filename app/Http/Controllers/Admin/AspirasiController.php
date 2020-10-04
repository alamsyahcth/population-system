<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aspirasi;
use App\Models\KategoriAspirasi;
use App\Models\Penduduk;
use App\Models\BalasanAspirasi;

class AspirasiController extends Controller{

    public function index() {
        $aspirasi = Aspirasi::join('penduduks','penduduks.id','=','aspirasis.id_penduduk')
                    ->join('kategori_aspirasis','kategori_aspirasis.id','=','aspirasis.id_kategori_aspirasi')
                    ->select('*','aspirasis.id as id_aspirasi','aspirasis.status as status_aspirasi')
                    ->orderBy('aspirasis.id','desc')
                    ->get();
        $balasan = Aspirasi::join('penduduks','penduduks.id','=','aspirasis.id_penduduk')
                    ->join('kategori_aspirasis','kategori_aspirasis.id','=','aspirasis.id_kategori_aspirasi')
                    ->join('balasan_aspirasis','balasan_aspirasis.id_aspirasi','=','aspirasis.id')
                    ->select('*','aspirasis.id as id_aspirasi','aspirasis.status as status_aspirasi');
        $get_balasan = $balasan->get();
        $count_balasan = $balasan->count();
        return view('admin.aspirasi.index', compact(['aspirasi','get_balasan','count_balasan']));
    }

    public function reply(Request $request) {
        $data = new BalasanAspirasi;
        $data->id_aspirasi = $request->id_aspirasi;
        $data->isi_balasan = $request->isi_balasan;

        if($data->save()) {
            $update = Aspirasi::where('id',$request->id_aspirasi)->update(['status'=>'2']);
            if($update) {
                return redirect('admin/aspirasi')->with('success','Balasan Berhasil Dikirim');
            } else {
                return redirect('admin/aspirasi')->with('failed','Balasan Gagal Dikirim');
            }
        }
    }

    public function tolak($id) {
        if(Aspirasi::where('id',$id)->update(['status'=>'3'])) {
            return redirect('admin/aspirasi')->with('success','Aspirasi Ditolak Berhasil Dikirim');
        } else {
            return redirect('admin/aspirasi')->with('failed','Aspirasi Ditolak Gagal Dikirim');
        }
    }
}
