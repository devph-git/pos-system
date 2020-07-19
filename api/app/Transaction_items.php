<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction_items extends Model
{
    protected $fillable =[
      'transaction_id','user_id','item_id','quantity',
    ];

    protected $hidden =[
       'id','created_at',
    ];
}
