<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  protected $fillable = [
      'factor_id', 'authority', 'status',
  ];

  public function factor(){
      return $this->belongsTo(Factor::class);
  }
}
