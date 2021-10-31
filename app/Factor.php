<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Factor extends Model
{
    // use SoftDeletes;
    protected $fillable = [
        'user_id', 'sum', 'status', 'address_id', 'payment_method'
    ];
    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->belongsToMany(Product::class);
    }
    public function address(){
        return $this->belongsTo(Address::class);
      }

}
