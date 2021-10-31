<?php

namespace App\Http\Controllers\admin;

use App\Factor;
use App\Payment;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FactorController extends Controller
{
    public function showFactor()
    {
        $factors = Factor::orderBy('created_at', 'DESC')->paginate();

        return view('admin.factor.factor', compact('factors'));
    }
    public function showFactorLocation()
    {
        $factors = Factor::where('payment_method', 'location')->orderBy('created_at', 'DESC')->paginate();

        return view('admin.factor.factor-location', compact('factors'));
    }
    public function payment()
    {
        $payments = Payment::orderBy('created_at', 'DESC')->paginate();

        return view('admin.factor.payment', compact('payments'));
    }

    public function anbar(Request $request)
    {
        if(empty($request->all())){
            $products = Product::latest()->paginate(10);
        }else{
            $products = Product::orderBy($request['item'], $request['method'])->paginate(10);
        }
      return view('admin.anbar.index', compact('products'));
    }
}
