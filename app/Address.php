<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'name', 'user_id', 'mobile', 'city', 'province', 'code_posti', 'address', 'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
      }
      public function factor(){
        return $this->hasMany(Factor::class);
    }

}
