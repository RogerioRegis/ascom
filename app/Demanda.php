<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demanda extends Model
{
    protected $guarded = ['id', 'create_at', 'update_at'];
}
