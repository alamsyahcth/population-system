<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\PendudukTetap;
use App\Models\PendudukSementara;

class PendudukController extends Controller {
    public function index() {
        $data = Penduduk::where('status','=','1')->get();
        $tetap = PendudukTetap::get();
        $sementara = PendudukSementara::get();
        return view('admin.penduduk.index', compact(['data','tetap','sementara']));
    }
}
