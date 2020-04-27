<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $fillable = [
        'user_id','subject','content', 'status',
    ];
    public function user(){
    return $this->belongsTo(User::class);
  }
}
