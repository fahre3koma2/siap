<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Konfigurasi_model;

class Home extends Controller
{
    // Homepage
    public function index()
    {
        if (Session()->get('username') == "") {return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']); }

        $site     = DB::table('konfigurasi')->first();

        $data = array(
            'title'     => $site->namaweb . ' - ' . $site->tagline,
            'deskripsi' => $site->namaweb . ' - ' . $site->tagline,
            'keywords'  => $site->namaweb . ' - ' . $site->tagline,
            'site'      => $site,
            'themes'    => 'tabel',
            'content'   => 'home/index'
        );
        return view('layout/wrapper', $data);
    }

    // data Dokumen
    public function file()
    {
         if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }
        $site        = DB::table('konfigurasi')->first();
        $dokumen     = DB::table('dokumen')->orderBy('file_id', 'DESC')->get();
        //$data['found'] = 0;

        $data = array(
            'title'     => $site->namaweb . ' - ' . $site->tagline,
            'deskripsi' => $site->namaweb . ' - ' . $site->tagline,
            'keywords'  => $site->namaweb . ' - ' . $site->tagline,
            'dokumen'   => $dokumen,
            'site'      => $site,
            'themes'    => 'tabel',
            'content'   => 'home/file_default'
        );
        return view('layout/wrapper', $data);
    }

    //upload file
    public function upload(Request $request)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'desk'     => 'required',
            'docs'  => 'file|mimes:doc,docx,xls,xlsx,pdf|max:2048',
        ]);
        // UPLOAD START
        $docs                      = $request->file('doc');
        if (!empty($docs)) {
            $filenamewithextension  = $request->file('doc')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = str_slug($filename, '-') . '-' . time() . '.' . $docs->getClientOriginalExtension();
            $destinationPath = public_path('upload/file/');
            //$img->save($destinationPath . '/' . $input['nama_file']);
            $docs->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            DB::table('dokumen')->insert([
                'file_nama'          => $request->nama,
                'file_display'       => $request->display,
                'file_dept'          => $request->dept,
                'file_status'        => ('Open'),
                'file_desk'          => $request->desk,
                'file_tag'           => 'sop',
                'file_created'       => date('Y-m-d'),
                'file_createby'      => '1',
                'file_updated'       => date('Y-m-d'),
                'file_updateby'      => '1',
                'file_dok'           => $input['nama_file']
            ]);
        } else {
            DB::table('dokumen')->insert([
                'file_nama'          => $request->nama,
                'file_display'       => $request->display,
                'file_dept'          => $request->dept,
                'file_status'        => ('Close'),
                'file_desk'          => $request->desk,
                'file_tag'           => 'sop',
                'file_created'       => date('Y-m-d'),
                'file_createby'      => '1',
                'file_updated'       => date('Y-m-d'),
                'file_updateby'      => '1'
            ]);
        }
        return redirect('home/file')->with(['sukses' => 'Data telah ditambah']);
        //print_r($request);
    }

    //user approval
    public function approval($file_id)
    {
        // $slug_user = str_slug($request->nama, '-');
        DB::table('dokumen')->where('file_id', $file_id)->update([
            'file_status'    => ('Approve')
        /*  'file_app'       =>
            'file_tgl_app'   =>
            'file_update'    =>
            'file_updateby'  => */

        ]);

        return redirect('home/file')->with(['sukses' => 'File telah di Approve']);
    }

    // File delete
    public function delete($file_id)
    {
        if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }

        DB::table('dokumen')->where('file_id', $file_id)->delete();

        return redirect('home/files')->with(['sukses' => 'Data telah dihapus']);
    }



}



