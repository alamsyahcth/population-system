<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Masuk;
use App\Models\PendudukSementara;
use App\Models\PendudukTetap;
use App\Models\Keluarga;
use App\Models\Alasan;

class PendudukMasukController extends Controller {

    public function index() {
        $wait = Penduduk::where('status','2')->get();
        $confirm = Penduduk::where('status','1')->orWhere('status','3')->orWhere('status','4')->get();
        return view('admin.penduduk-masuk.index', compact(['wait','confirm']));
    }

}
