<?php

namespace App\Model\Index;

use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    protected $table = 'p_comment';
    protected $guarded = [];
    protected $primaryKey = "comment_id";
    public $timestamps = false;
}
