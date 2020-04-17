<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
  protected $fillable = [
      'user_id', 'product_id', 'rating',
  ];

  public function product(){
      return $this->belongsTo(Product::class);
  }

  public function user(){
      return $this->belongsTo(User::class);
  }
}
