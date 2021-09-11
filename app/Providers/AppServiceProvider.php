<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Basket;
use App\Category;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $auth = auth()->user();
        if($auth != null){
            $baskets=Basket::where('user_id', auth()->user()->id)->where('status', '0')->get();
        }else{
            $baskets= array();
        }
        $cats = Category::where('chid', '!=', 0)->get();
        $categories = Category::where('chid', 0)->get();
        view()->share([
            'categories'=>$categories,
            'cats'=>$cats,
            'baskets'=>$baskets,
        ]);

      view()->composer('persiatc.partials.header', function($view){
        $categories = Category::where('chid', 0)->get();
        $cats = Category::where('chid', '!=', 0)->get();
        $auth = auth()->user();
        if($auth != null){
          $baskets=Basket::where('user_id', auth()->user()->id)->where('status', '0')->get();
          // $baskets=Basket::where('user_id', auth()->user()->id)->get();
          $view->with([
            'baskets'=>$baskets,
            'categories'=>$categories,
            'cats'=>$cats,

          ]);
        }else{
          $view->with([
            'baskets'=>null,
            'categories'=>$categories,
            'cats'=>$cats,
          ]);
        }
      });


    }
}
