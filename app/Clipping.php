<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clipping extends Model
{
    protected $guarded = ['id', 'create_at', 'update_at'];

   // protected $dates = ['created_at', 'updated_at', 'disabled_at'];
}
