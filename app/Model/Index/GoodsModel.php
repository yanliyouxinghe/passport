<?php

namespace App\Model\Index;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;

class GoodsModel extends Model
{
    //
    public $table = 'p_goods';
    public $primaryKey = 'goods_id';
    public $timestamps = false;

    /**
     * 获取商品信息 有缓存则取缓存，缓存则取数据库
     * @param $id
     */
    public static function detail($id)
    {
        $key = 'h:goods:'.$id;

        $goods_info = Redis::hgetall($key);
        //无缓存，读库
        if(empty($goods_info)){
            $goods_info = self::find($id)->toArray();
            //写入缓存
            Redis::hMset($key,$goods_info);
            Redis::expire($key,3600);       //设置过期时间
        }

        return $goods_info;
    }
}
