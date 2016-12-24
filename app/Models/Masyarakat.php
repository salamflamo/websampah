<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $table = 'Masyarakat';

    protected $guarded = ['id','updated_at','created_at'];
}
