<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Product;
use App\Slider;
use App\Category;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $baskets=Basket::where('user_id', auth()->user()->id)->where('status', '0')->get();
      // $baskets=Basket::where('user_id', auth()->user()->id)->get();

      return view('persiatc.pages.basket', compact('baskets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

      }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if($request->ajax()){
        $id=$request->input('id');
        $product = Product::find($id);
        if(Basket::where([
          ['user_id','=',auth()->user()->id],
          ['product_id','=',$product->id],
          ])->get()->count() == 0){
            Basket::create([
              'user_id'=>auth()->user()->id,
              'product_id'=>$product->id,
              'price'=>(1-$product->discount/100)*$product->price,
            ]);
            $count = count(Basket::where('user_id','=',auth()->user()->id)->where('status','=','0')->get());
            return response()->json(['basket_create'=>'success','count'=>$count]);
          }
          else{
            return response()->json(['exists'=>'exists']);
          }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(Basket $basket)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(Basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basket $basket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basket $basket)
    {
      $basket->delete();
      return redirect(route('basket.index'));
    }

    public function addCount(Request $request)
    {
        $id=$request->input('id');
        $basket = Basket::find($id);
        $i = ++$basket->count;
        $basket->update([
            'count'=> $i,
        ]);

        return response()->json(['basket_create'=>'success','count'=>$basket['count']]);

    }

    public function minusCount(Request $request)
    {
        $id=$request->input('id');
        $basket = Basket::find($id);
        if($basket->count > 1)
        {
            $i = --$basket->count;
            $basket->update([
                'count'=> $i,
            ]);
            return response()->json(['basket_create'=>'success','count'=>$basket['count']]);

        } elseif($basket->count <= 1) {
            $basket->delete();
            return response()->json(['exists'=>'exists']);

        }



    }
}
