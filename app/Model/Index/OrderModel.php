<?php

namespace App\Model\Index;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    public $table = 'p_order';
    public $primaryKey = 'order_id';
    public $timestamps = false;
}
