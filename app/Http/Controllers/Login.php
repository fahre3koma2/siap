<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User_model;

class Login extends Controller
{
    // Homepage
    public function index()
    {
        {
        $data = array( 'title'  => 'Login - PT SIAP');
        return view('login/index',$data);
        }
    }

    // Cek
    public function cek(Request $request)
    {
        $username   = $request->username;
        $password   = $request->password;
        $model      = new User_model();
        $user       = $model->login($username,$password);
        if($user) {
            $request->session()->put('id', $user->user_id);
            $request->session()->put('nama', $user->user_nama);
            $request->session()->put('username', $user->user_username);
            $request->session()->put('level', $user->user_level);
            $request->session()->put('pict', $user->user_pict);
            return redirect('home')->with(['sukses' => 'Anda berhasil login']);
        }else{
            return redirect('login')->with(['warning' => 'Mohon maaf, Username atau password salah']);
        }

        $data = array('title'     => 'Login - PT. SIAP');
        return view('login/index', $data);
        //print_r($request);
    }

    public function logout()
    {
        Session()->forget('id_user');
        Session()->forget('nama');
        Session()->forget('username');
        Session()->forget('akses_level');
        return redirect('login')->with(['sukses' => 'Anda berhasil logout']);
    }

}
