<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporanController extends Controller {

    public function laporan_pelayanan() {
        return view('admin.laporan.laporan-pelayanan');
    }

    public function laporan_penduduk_masuk() {
        return view('admin.laporan.laporan-penduduk-masuk');
    }

    public function laporan_penduduk_keluar() {
        return view('admin.laporan.laporan-penduduk-keluar');
    }

    public function laporan_kelahiran_penduduk() {
        return view('admin.laporan.laporan-kelahiran-penduduk');
    }

    public function laporan_kematian_penduduk() {
        return view('admin.laporan.laporan-kematian-penduduk');
    }

    public function laporan_data_aspirasi() {
        return view('admin.laporan.laporan-data-aspirasi');
    }

    public function get_laporan(Request $request) {
        $rules = $this->validate($request,[
            'date_start' => 'required',
            'date_end' => 'required',
        ]);

        if ($rules) {
            if($request->date_start < $request->date_end) {
                if($request->sort == 'laporan_pelayanan') {
                    echo 'laporan_pelayanan';
                    $this->pdf($data, $url, $date_from, $date_to);
                } else if($request->sort == 'laporan_penduduk_masuk') {
                    echo 'laporan_penduduk_masuk';
                    $this->pdf($data, $url, $date_from, $date_to);
                } else if($request->sort == 'laporan_penduduk_keluar') {
                    echo 'laporan_penduduk_keluar';
                    $this->pdf($data, $url, $date_from, $date_to);
                } else if($request->sort == 'laporan_kelahiran_penduduk') {
                    echo 'laporan_kelahiran_penduduk';
                    $this->pdf($data, $url, $date_from, $date_to);
                } else if($request->sort == 'laporan_kematian_penduduk') {
                    echo 'laporan_kematian_penduduk';
                    $this->pdf($data, $url, $date_from, $date_to);
                } else if($request->sort == 'laporan_data_aspirasi') {
                    echo 'laporan_data_aspirasi';
                    $this->pdf($data, $url, $date_from, $date_to);
                } else {
                    echo 'data salah';
                    $this->pdf($data, $url, $date_from, $date_to);
                }
            } else {
                return redirect()->back()->with('failed', 'Tanggal Awal Harus Lebih Kecil');
            }
        }
    }

    public function pdf($data, $url, $date_from, $date_to) {
        $pdf = PDF::loadView('admin.laporan.'.$url, compact(['data','date_from','date_to']));
        return $pdf->stream();
    }

}
