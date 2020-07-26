<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $fillable = [
        'user_id','number', 'total_amount', 
     ];
 

    protected $hidden = [
     'updated_at','deleted_at',
    ];
       
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
