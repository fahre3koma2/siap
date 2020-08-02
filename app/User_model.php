<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User_model extends Model
{
    // kategori
    public function login($username,$password)
    {
        $query = DB::table('user')
            ->select('*')
            ->where(array(  'user.user_username'	=> $username,
                            'user.user_password'    => sha1($password)))
            ->orderBy('user_id','DESC')
            ->first();
        return $query;
    }
}
