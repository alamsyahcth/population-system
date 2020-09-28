<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdministratorController extends Controller {

    use RegistersUsers;

    public function index() {
        $data = Admin::get();
        return view('admin.administrator.index', compact(['data']));
    }

    public function store(Request $request) {
        $rules = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'jabatan' => ['required', 'string'],
            'periode' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if ($rules) {
            $data = new Admin;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->jabatan = $request->jabatan;
            $data->periode = $request->periode;
            $data->password = Hash::make($request->password);
            if($data->save()) {
                return redirect('admin/administrator')->with('success','Data Berhasil Disimpan !');
            } else {
                return redirect('admin/administrator')->with('failed','Data Gagal Disimpan !');
            }
        }
    }

    public function edit($id) {
        $data = $data = Admin::get();
        $selected = Admin::where('id',$id)->first();
        return view('admin.administrator.update', compact(['data','selected']));
    }

    public function update(Request $request, $id) {
        $rules = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'jabatan' => ['required', 'string'],
            'periode' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if ($rules) {
            $data = Admin::where('id',$id)->first();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->jabatan = $request->jabatan;
            $data->periode = $request->periode;
            $data->password = Hash::make($request->password);
            if($data->save()) {
                return redirect('admin/administrator')->with('success','Data Berhasil Disimpan !');
            } else {
                return redirect('admin/administrator')->with('failed','Data Gagal Disimpan !');
            }
        }
    }

    public function destroy($id) {
        $data = Admin::where('id', $id)->first();
        if($data->delete()) {
            return redirect('admin/administrator')->with('success','Data Berhasil Dihapus !');
        } else {
            return redirect('admin/administrator')->with('failed','Data Gagal Dihapus !');
        }
    }
}
