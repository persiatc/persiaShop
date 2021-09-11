<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;

class Category extends Model
{
  // use Searchable;
  protected $fillable = [
      'chid', 'fa_name', 'en_name','image',
  ];

  public function product(){
    return $this->hasMany(Product::class);
  }

  public static function search($data){
    $category = Category::orderBy('id','DESC');
    if(sizeof($data) > 0){
      // dd($data);
      if(array_key_exists('name', $data)){
        $category = $category->where('title','like','%'.$data['name'].'%')
                              ->orWhere('title_fa','like','%'.$data['name'].'%');
      }
    }

    $category = $category->paginate(10);
    return $category;
  }

  public function children(){
      return $this->hasMany(self::class, 'chid', 'id');
  }

  public function parent(){
      return $this->hasOne(self::class, 'id', 'chid');
  }
}
