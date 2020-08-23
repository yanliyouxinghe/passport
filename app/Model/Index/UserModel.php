<?php

namespace App\Model\Index;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;

class UserModel extends Model
{
    public $table = 'p_users';
    public $primaryKey = 'user_id';
    public $timestamps = false;

    public static function generateToken($user_id){
        $str = $user_id . Str::random(5) . time() . mt_rand(1111,9999999);
        return strtoupper(substr(Str::random(5) . md5($str),1,20));
    }


    public static function webLogin($user_id,$user_autner){
            $token = UserModel::generateToken($user_id);
            $token_key = 'h:login_info:'.$token;
            $login_info= [
                'token' => $token,
                'user_id' => $user_id,
                'user_autner' => $user_autner,
                'login_time' => date('Y-m-d H:i:s'),
                'login_ip' => $_SERVER['REMOTE_ADDR'],
            ];
            Redis::hMset($token_key,$login_info);
            Redis::expire($token_key,7200);
            session(['user_id'=>$user_id]);
            return $token;


    }

}




