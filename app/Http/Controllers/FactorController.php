<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Factor;
use App\Address;
use App\Product;
use Zarinpal\Zarinpal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FactorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factors = auth()->user()->factor()->where('status',1)->orderBy('created_at', 'DESC')->get();
        return view('persiatc.pages.profile.factor', compact('factors'));
    }

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment(Request $request)
    {
        $baskets=Basket::where('user_id', auth()->user()->id)->where('status','=','0')->get();
        return view('persiatc.pages.payment', compact('baskets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $baskets=Basket::where('user_id', auth()->user()->id)->where('status','=','0')->get();
        return view('persiatc.pages.checkout', compact('baskets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if($request->payment_method == "zarinpal") {

            $r = $request->all();
            $ids = $r['request'];
            $factor = Factor::create([
                'user_id'=>auth()->user()->id,
                'sum'=>0,
                'address_id'=>Address::where('user_id', auth()->user()->id)->where('status', 1)->first()->id,
                'payment_method'=>'zarinpal',
                'status'=>'pending'
                ]);
            $sum = 0;
            for ($id = 0; $id < sizeof($ids); $id++){
                $basket = Basket::find($ids[$id]);
                $product = Product::find($basket->product_id);
                $product->increment('sales_number');
                $sum += (1-$product->discount/100)*$product->price;
                $basket->update(['status' => 1]);
                $product->factor()->attach($factor);
            }
            $factor->update(['sum'=>$sum]);
            $factors = Factor::where('id', $factor->id)->get();

            $this->do_payment_zarinpal($factor);
        }
        elseif($request->payment_method == "location"){

            $r = $request->all();
            $ids = $r['request'];
            $factor = Factor::create([
                'user_id'=>auth()->user()->id,
                'sum'=>0,
                'address_id'=>Address::where('user_id', auth()->user()->id)->where('status', 1)->first()->id,
                'payment_method'=>'location',
                'status'=>'unpaid'
                ]);
            $sum = 0;
            for ($id = 0; $id < sizeof($ids); $id++){
                $basket = Basket::find($ids[$id]);
                $product = Product::find($basket->product_id);
                $product->increment('sales_number');
                $sum += (1-$product->discount/100)*$product->price;
                $basket->update(['status' => 1]);
                $product->factor()->attach($factor);
            }
            $factor->update(['sum'=>$sum]);
            $factors = Factor::where('id', $factor->id)->get();

            return view('persiatc.pages.success', compact('factors', 'factor'));


        }else{
            return back()->with('err','لطفا روش پرداخت رو تایید کنید !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function edit(Factor $factor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factor $factor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factor $factor)
    {
        $factor->delete();
        session('success','فاکتور با شماره'.$factor->id.' باموفقیت حذف شد');
        return redirect(route('factorfaild'));
    }

    public function showFaild() {

        $factors = auth()->user()->factor()->where('status',0)->orderBy('created_at', 'DESC')->get();
        return view('persiatc.pages.profile.factorfaild', compact('factors'));
    }

    public function do_payment_zarinpal($factor) {

        $id = $factor['id'];
        $zarinpal = new Zarinpal('XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX');
        $zarinpal->enableSandbox();                                 // active sandbox mod for test env
        // $zarinpal->isZarinGate();                                // active zarinGate mode
        $results = $zarinpal->request(
            route('payment.zarinpal.callback',['id'=>$id]),         //required
            $factor['sum'],                                         //required
            'نام پرداخت کننده : '.$factor->user->name,              //required
            $factor->user->email,                                   //optional
            '09000000000',                                          //optional
            [                                                       //optional
                "Wages" => [
                    "zp.1.1"=> [
                        "Amount"=> 120,
                        "Description"=> "part 1"
                    ],
                    "zp.2.5"=> [
                        "Amount"=> 60,
                        "Description"=> "part 2"
                    ]
                ]
            ]
        );
        echo json_encode($results);
        if (isset($results['Authority'])) {
            file_put_contents('Authority', $results['Authority']);
            $zarinpal->redirect();
        }

    }
    public function do_payment_zarinpal_faild($id){

       $factor = Factor::find($id);
        $zarinpal = new Zarinpal('XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX');
        $zarinpal->enableSandbox();                                 // active sandbox mod for test env
        // $zarinpal->isZarinGate();                                // active zarinGate mode
        $results = $zarinpal->request(
            route('payment.zarinpal.callback',['id'=>$id]),         //required
            $factor['sum'],                                         //required
            'نام پرداخت کننده : '.$factor->user->name,              //required
            $factor->user->email,                                   //optional
            '09000000000',                                          //optional
            [                                                       //optional
                "Wages" => [
                    "zp.1.1"=> [
                        "Amount"=> 120,
                        "Description"=> "part 1"
                    ],
                    "zp.2.5"=> [
                        "Amount"=> 60,
                        "Description"=> "part 2"
                    ]
                ]
            ]
        );
        echo json_encode($results);
        if (isset($results['Authority'])) {
            file_put_contents('Authority', $results['Authority']);
            $zarinpal->redirect();
        }
    }
    public function Zarinpal_callback($id) {

        $status = $_GET['Status'];
        $authority= $_GET['Authority'];
        if($status == "OK") {

            $payment_data = array();
            $payment_data['status'] = "payment success";
            $payment_data['authority'] = $authority;
            $payment_data['factor_id'] = $id;
            $payment_id = DB::table('payments')
            ->insertGetId($payment_data);

            $factor = Factor::find($id);
            $factor->status = "paid";
            $factor->update();

            $factors = Factor::where('id', $factor->id)->where('status',"paid")->get();
            session('success','خرید شما انجام شد');
            return view('persiatc.pages.success', compact('factors', 'factor'));



        }
        elseif($status == "NOK") {

            $payment_data = array();
            $payment_data['status'] = "payment faild";
            $payment_data['authority'] = $authority;
            $payment_data['factor_id'] = $id;
            $payment_id = DB::table('payments')
            ->insertGetId($payment_data);

            $factor = Factor::find($id);
            $factor->status = "faild";
            $factor->update();

            $products = $factor->product()->get();
            $user = auth()->user()->id;
            foreach($products as $item) {
                $basket = Basket::where('product_id',$item->id)->where('status','1')->where('user_id',$user)->first();
                $basket->delete();
            }
            // return view('persiatc.pages.faild', compact( 'factor'))->with('err','پرداخت شما ناموفق بود!');

            return back()->with('err','پرداخت شما ناموفق بود!');
        }
    }
}
