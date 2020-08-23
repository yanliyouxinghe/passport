<?php

namespace App\Model\Index;

use Illuminate\Database\Eloquent\Model;

class OrderGoodsModel extends Model
{
    public $table = 'p_orders_goods';
    public $primaryKey = 'order_id';
    public $timestamps = false;
}
