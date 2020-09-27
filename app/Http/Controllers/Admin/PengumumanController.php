<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengumuman;
use Str;
use File;

class PengumumanController extends Controller {
    public function index() {
        $data = Pengumuman::get();
        return view('admin.pengumuman.index', compact(['data']));
    }

    public function create() {
        return view('admin.pengumuman.create');
    }

    public function store(Request $request) {
        $rules = $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);
        if ($rules) {
            $file = $request->file('image');
            $image_name = $request->title.'-'.$request->date.$file->getClientOriginalName();
            $to = 'img/photo';
            $file->move($to, $image_name); 

            $data = new Pengumuman;
            $data->title = $request->title;
            $data->slug = Str::slug($request->title);
            $data->date = date("Y-m-d");
            $data->author = $request->author;
            $data->content = $request->content;
            $data->image = $image_name;
            if($data->save()) {
                return redirect('admin/pengumuman')->with('success','Data Berhasil Disimpan !');
            } else {
                return redirect('admin/pengumuman')->with('failed','Data Gagal Disimpan !');
            }
        }
    }

    public function edit($id) {
        $selected = Pengumuman::where('id',$id)->first();
        return view('admin.pengumuman.update', compact(['selected']));
    }

    public function update(Request $request, $id) {
        $rules = $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
        ]);
        if ($rules) {
            $data = Pengumuman::where('id',$id)->first();
            $data->title = $request->title;
            $data->slug = Str::slug($request->title);
            $data->date = $request->date;
            $data->author = $request->author;
            $data->content = $request->content;
            if ($request->image != '') {
                $file = $request->file('image');
                $image_name = $request->title.'-'.$request->date.$file->getClientOriginalName();
                $to = 'img/photo';
                $file->move($to, $image_name);
                File::delete(base_path().'/public/img/photo/'.$request->old_image);
                $data->image = $image_name;
            } else {
                $data->image = $request->old_image;
            }
            if($data->save()) {
                return redirect('admin/pengumuman')->with('success','Data Berhasil Disimpan !');
            } else {
                return redirect('admin/pengumuman')->with('failed','Data Gagal Disimpan !');
            }
        }
    }

    public function destroy($id) {
        $data = Pengumuman::where('id', $id)->first();
        File::delete(base_path().'/public/img/photo/'.$data->image);
        if($data->delete()) {
            return redirect('admin/pengumuman')->with('success','Data Berhasil Dihapus !');
        } else {
            return redirect('admin/pengumuman')->with('failed','Data Gagal Dihapus !');
        }
    }
}
