<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = "Komentar";
    protected $guarded = ['id','created_at','updated_at'];
}
