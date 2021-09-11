<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Basket extends Model
{
//   use SoftDeletes;
  protected $fillable = [
      'user_id', 'product_id', 'price', 'status',
  ];
//   protected $dates = ['deleted_at'];
  public function user(){
    return $this->belongsTo(User::class);
  }

  public function product(){
    return $this->belongsTo(Product::class);
  }
}
