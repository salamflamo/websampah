<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'Artikel';
    protected $guarded = ['id','created_at','updated_at'];
}
