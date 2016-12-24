<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    protected $table = 'Jasa';

    protected $guarded = ['id_jasa','created_at','updated_at'];
}
