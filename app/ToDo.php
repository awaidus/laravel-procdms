<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    protected $fillable = ['order_id', 'item', 'details', 'action'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'to_dos';
}
