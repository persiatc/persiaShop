@extends('layouts.usersidebar')
                
@section('content')

<div class="sidebar-box ftco-animate col-9">

    @if ($message = Session::get('err'))
    <div class="alert alert-danger alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ $message }}</strong>
    </div>
    @endif

    <section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                        <tr class="text-center">
                            <th>حذف</th>
                            <th>تصویر محصول</th>
                            <th>نام محصول</th>
                            <th>قیمت</th>
                            <th>تخفیف</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                            $discount = 0;
                            $sum = 0;
                            $ids = [];
                          ?>
                          <?php foreach ($baskets as $basket): ?>
                            <?php
                              $product = App\Product::find($basket->product_id);
                              $sum += $product->price;
                              $discount += $product->discount/100*$product->price;
                                array_push($ids, $basket->id)
                            ?>

                            <tr class="text-center">
                                <td class="product-remove">
                                  <form class="" action="{{route('basket.destroy', ['basket'=>$basket->id])}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <button type="submit" class="btn btn-outline-danger" style="color:none; bordeR:1px solid white !important;">حذف</button>
                                  </form>
                                </td>

                                <td class="image-prod">
                                    <div class="img" style="background-image:url(/{{$product->image}});"></div>
                                </td>

                                <td class="product-name">
                                    <h3>{{$product->name}}</h3>
                                    <p>{{$product->body}}</p>
                                </td>

                                <td class="price">{{$product->price}} تومان</td>
                                <td class="price">{{$product->discount/100*$product->price}} تومان</td>
                            </tr><!-- END TR-->

                          <?php endforeach; ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <br>
          

            <div class="col-lg-6 mt-6 cart-wrap ftco-animate" style="box-shadow: 10px 7px 5px 0px rgba(48, 45, 45, 0.55);margin-top:20px;">
                <div class="cart-total mb-3">
                    <h3>صورت حساب</h3>
                    <p class="d-flex">
                        <span>جمع کل</span>
                        <span>{{$sum}} تومان</span>
                    </p>
                    </p>
                    <p class="d-flex">
                        <span>تخفیف</span>
                        <span>{{$discount}} تومان</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>جمع کل</span>
                        <span>{{$sum - $discount}} تومان</span>
                    </p>
                </div>
            </div>

            <div class="col-xl-3 ftco-animate" style="margin-right:0px">
                <form action="{{ route('factor.store', ['request'=>$ids]) }}" method="post">
                    @csrf
                <div class="row align-items-end">
                  <div class="w-100"></div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <li>
                        روش پرداخت
                        <input type="checkbox" id="myCheckbox1" name="payment_method" value="zarinpal"/>
                        <label for="myCheckbox1"><img src="{{asset('zarinpal/1.jpeg')}}" /></label>
                       
                      </li>
                  </div>
                  <div>
                    <input type="submit"  class="btn btn-primary py-3 px-4" style="font-size: 20px;margin-right:20px;width:260px" value="پرداخت">
                  </div>
                </div>
               
              <div class="w-100"></div>
              
              </div>
            </form>
            </div>

           
    </div>
</section>
</div>
@endsection

<style>
            ul {
        list-style-type: none;
        }

        li {
        display: inline-block;
        }

        input[type="checkbox"][id^="myCheckbox"] {
        display: none;
        }

        label {
        border: 1px solid #fff;
        padding: 10px;
        display: block;
        position: relative;
        margin: 10px;
        cursor: pointer;
        }

        label:before {
        background-color: white;
        color: white;
        content: " ";
        display: block;
        border-radius: 50%;
        border: 1px solid grey;
        position: absolute;
        top: -5px;
        left: -5px;
        width: 25px;
        height: 25px;
        text-align: center;
        line-height: 28px;
        transition-duration: 0.4s;
        transform: scale(0);
        }

        label img {
        height: 70px;
        width: 70px;
        transition-duration: 0.2s;
        transform-origin: 50% 50%;
        }

        :checked + label {
        border-color: #ddd;
        }

        :checked + label:before {
        content: "✓";
        background-color: grey;
        transform: scale(1);
        }

        :checked + label img {
        transform: scale(0.9);
        /* box-shadow: 0 0 5px #333; */
        z-index: -1;
        }
</style>