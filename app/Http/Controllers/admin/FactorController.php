<?php

namespace App\Http\Controllers\admin;

use App\Factor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Payment;

class FactorController extends Controller
{
    public function showFactor()
    {
        $factors = Factor::orderBy('created_at', 'DESC')->paginate();

        return view('admin.factor.factor', compact('factors'));
    }
    public function showFactorLocation()
    {
        $factors = Factor::where('method_payment', 'location')->orderBy('created_at', 'DESC')->paginate();

        return view('admin.factor.factor-location', compact('factors'));
    }
    public function payment()
    {
        $payments = Payment::orderBy('created_at', 'DESC')->paginate();

        return view('admin.factor.payment', compact('payments'));
    }
}
