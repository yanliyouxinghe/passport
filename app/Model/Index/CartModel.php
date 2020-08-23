<?php

namespace App\Model\Index;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;

class CartModel extends Model
{
    //
    public $table = 'p_cart';
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
    /**
     * 获取购物车中商品及数量
     */
    public static function goods()
    {
        $uuid = $_COOKIE['uuid'];
        $redis_cart_ss_goods_num = 'ss:cart:goods_num:' . $uuid;     //商品个数

        //获取购物车中商品及个数
        return Redis::zrevRange($redis_cart_ss_goods_num, 0, -1, true);

    }

    /**
     * 清空购物车
     * 删除两个key  'ss:cart:goods:'.$uuid  与 'ss:cart:goods_num:'.$uuid;
     */
    public static function clear()
    {
        $uuid = $_COOKIE['uuid'];
        $key1 = 'ss:cart:goods:'.$uuid;         //商品
        $key2 = 'ss:cart:goods_num:'.$uuid;     //商品个数
        Redis::del($key1,$key2);
    }
}
