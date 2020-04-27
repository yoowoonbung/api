<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table="goods";
    protected $primaryKey="id";
    protected $guarded=[];
    protected $timestamps=false;

}
