<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable =[
      'title','percent'
    ];

    protected $hidden =[
    'id','created_at','updated_at','deleted_at',
    ];
}
