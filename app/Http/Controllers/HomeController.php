<?php

namespace App\Http\Controllers;

use App\Factor;
use App\Favorite;
use App\Post;
use App\Product;
use App\Support;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //------ all sales ------------------
        $sale_number = Product::pluck('sales_number');
        $sum = 0;
        foreach($sale_number as $item) {
            $sum += $item;
        }

        //------------ all post -------------
        $posts = Post::get();
        $num_post = count($posts);

        //------------ all users -------------
        $users = User::get();
        $num_user = count($users);

        //------------ all products -------------
        $products = Product::get();
        $num_product = count($products);

        //----------- last sales ------------------
        $factors = Factor::where('status',"paid")->orderBy('created_at', 'DESC')->get();
        $latest_sales = array();
        foreach($factors as $item) {

            $product_all =  $item->product()->get();
            foreach($product_all as $val) {

                array_push($latest_sales , $val);

            }
        }

        //--------- last user --------------
        $all_user = User::orderBy('created_at', 'DESC')->paginate(7);

        //-------------- number of download --------------
        $download_number = Product::pluck('download_number');
        $sum_download = 0;
        foreach($download_number as $item) {
            $sum_download += $item;
        }

        //--------------- number of comment support ------------
        $supports = Support::get();
        $number_support = count($supports);

        //---------------- number favorite --------------
        $favorites = Favorite::get();
        $number_favorite = count($favorites);

        //-------------- last product ---------------
        $last_product = Product::orderBy('created_at', 'DESC')->paginate(4);
      
        return view('home',compact('sum','num_product','num_user','num_post','latest_sales','all_user','sum_download','number_support','number_favorite','last_product'));
    }
}
