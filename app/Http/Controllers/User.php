<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class User extends Controller
{
    // Index
    public function index()
    {
       /* if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }*/
        $user     = DB::table('user')->orderBy('user_id', 'DESC')->get();

        $data = array(
            'title'     => 'User - PT SIAP',
            'user'      => $user,
            'themes'    => 'table',
            'content'   => 'admin/user_default'
        );
        return view('layout/wrapper', $data);
    }

    //tambah user
    public function tambah(Request $request)
    {
        if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }
       request()->validate([
            'ni'      => 'required',
            'nama'     => 'required',
            'alamat'   => 'required',
            'username' => 'required|unique:users',
            'email'    => 'required'
        ]);

        // UPLOAD START
        $image                      = $request->file('user_pict');
        if (!empty($image)) {
            $filenamewithextension  = $request->file('user_pict')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = str_slug($filename, '-') . '-' . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath        = public_path('upload/user/thumbs/');
            $img = Image::make($image->getRealPath(), array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath . '/' . $input['nama_file']);
            $destinationPath = public_path('upload/user/');
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            DB::table('user')->insert([
                'user_nip'          => $request->nip,
                'user_nama'          => $request->nama,
                'user_alamat'        => $request->alamat,
                'user_sex'           => $request->gender,
                'user_tlp'           => $request->telp,
                'user_email'         => $request->email,
                'user_username'      => $request->username,
                'user_password'      => sha1($request->password),
                'user_level'         => $request->level,
                'user_pict'          => $input['nama_file']
            ]);
        } else {
            DB::table('user')->insert([
                'user_nip'          => $request->nip,
                'user_nama'          => $request->nama,
                'user_alamat'        => $request->alamat,
                'user_sex'           => $request->gender,
                'user_tlp'           => $request->telp,
                'user_email'         => $request->email,
                'user_username'      => $request->username,
                'user_password'      => sha1($request->password),
                'user_level'         => $request->level
            ]);
        }
        return redirect('user')->with(['sukses' => 'Data telah ditambah']);
        //print_r($request);
    }

    //User Edit
    public function edit($user_id)
    {
        if (Session()->get('username') == "") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']); }
        $user   = DB::table('user')->where('user_id', $user_id)->orderBy('user_id', 'DESC')->first();

        $data = array(
            'title'     => 'Edit User',
            'user'      => $user,
            'themes'    => 'form',
            'content'   => 'admin/user_edit'
        );
        return view('layout/wrapper', $data);
    }

    //User Update
    public function update(Request $request)
    {
           // $slug_user = str_slug($request->nama, '-');
            DB::table('user')->where('user_id', $request->user_id)->update([
                'user_nip'           => $request->nip,
                'user_nama'          => $request->nama,
                'user_alamat'        => $request->alamat,
                'user_sex'           => $request->gender,
                'user_tlp'           => $request->telp,
                'user_email'         => $request->email,
                'user_username'      => $request->username,
                'user_level'         => $request->level,
            ]);

        return redirect('user')->with(['sukses' => 'Data telah diupdate']);
    }

    // User delete
    public function delete($user_id)
    {
        /*if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }*/
        DB::table('user')->where('user_id', $user_id)->delete();
        return redirect('user')->with(['sukses' => 'Data telah dihapus']);
    }

    //User Profil
    public function profil($user_id)
    {
        if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }
        $user   = DB::table('user')->where('user_id', $user_id)->orderBy('user_id', 'DESC')->first();

        $data = array(
            'title'     => 'Profil User',
            'user'      => $user,
            'themes'    => 'form',
            'content'   => 'admin/user_profile'
        );
        return view('layout/wrapper', $data);
    }

    public function upload(Request $request)
    {
        // UPLOAD START
        $image                  = $request->file('photo');
        if (!empty($image)) {
            // UPLOAD START
            $filenamewithextension  = $request->file('photo')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = str_slug($filename, '-') . '-' . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath        = public_path('upload/user/thumbs/');
            $img = Image::make($image->getRealPath(), array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath . '/' . $input['nama_file']);
            $destinationPath = public_path('upload/user/');
            $image->move($destinationPath, $input['nama_file']);

            // END UPLOAD
            // $slug_user = str_slug($request->nama, '-');
            DB::table('user')->where('user_id', $request->user_id)->update([
                'user_pict'          => $input['nama_file']
            ]);
        } else {
            //$slug_user = str_slug($request->nama, '-');
            DB::table('user')->where('user_id', $request->user_id)->update([
                'user_pict'           => 'admin.jpg'
            ]);
        }

        return redirect('user/profil/'.$request->user_id)->with(['sukses' => 'Data telah diupdate']);
    }

}
