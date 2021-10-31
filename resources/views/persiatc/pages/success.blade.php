@extends('persiatc.layouts.cart-master', ['title'=> 'فروشگاه اینترنتی'])



@section('content')

<header class="shipping">
    <div class="logo container">
        <a href="#"><img style="width: 90px;" src="/persiatc/banner/PersiaLogo.png"></a>
    </div>
</header>
<style>
    .c-checkout-steps li.is-completed:before {
        width: 97%
    }
</style>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>{{ $message }}</strong>
</div>
@endif
<ul class="c-checkout-steps">
    <li class="is-active is-completed">
        <div class="c-checkout-steps__item c-checkout-steps__item--summary" data-title="اطلاعات ارسال"></div>
    </li>
    <li class="is-active is-completed">
        <div class="c-checkout-steps__item c-checkout-steps__item--delivery" data-title="پرداخت"></div>
    </li>
    <li class="is-active is-completed">
        <div class="c-checkout-steps__item c-checkout-steps__item--payment" data-title="اتمام خرید و ارسال"></div>
    </li>
</ul>
<section class="c-checkout-alert container">
    <div class="c-checkout-alert__icon success"><i class="fa fa-check"></i></div>
    <div class="c-checkout-alert__title">
        <h4>سفارش <span class="c-checkout-alert__highlighted c-checkout-alert__highlighted--success">PTC-{{$factor->id}}</span> با موفقیت در سیستم ثبت شد.</h4></div>
    <div class="c-checkout-alert__content"> <span class="c-checkout-alert__content--success">سفارش شما نهایتا تا یک روز آماده ارسال خواهد شد.</span>
        <br>
    </div>
</section>
<section class="c-checkout-details container">
    <h4 class="c-checkout-details__title">کد سفارش: PTC-{{$factor->id}}</h4>
    <div class="c-checkout-details__row">
        <div class="c-checkout-details__col--text">
            <p>سفارش شما با موفقیت در سیستم ثبت شد و هم اکنون <span class="text-highlight text-highlight--ok">تکمیل شده</span> است.
                {{-- <a href="#" class="btn-link-spoiler">پیگیری سفارش</a> مشاهده نمایید. --}}
            </p>
        </div> <a href="{{route('factor.index') }}" class="btn-order-traking">همه  سفارشات شما</a></div>
    <div class="c-checkout-details__row">
        <div class="c-checkout-details__col--table">
            <div class="c-checkout-table">
                <div class="c-checkout-table__row">
                    <div class="c-checkout-table__col"><span>نام تحویل گیرنده:  {{$factor->address->name}} </span></div>
                    <div class="c-checkout-table__col"><span>شماره تماس : {{$factor->address->name}}</span></div>
                </div>
                <div class="c-checkout-table__row">
                    <div class="c-checkout-table__col"><span>تعداد مرسوله : ۱ </span></div>
                    <div class="c-checkout-table__col"><span>مبلغ کل: {{$factor->sum}} تومان </span></div>
                </div>
                <div class="c-checkout-table__row">
                    <div class="c-checkout-table__col"><span>وضعیت پرداخت: {{$factor->payment_method == 'zarinpal'? 'پرداخت آنلاین' : 'درب منزل'}}</span></div>  </span>
                    </div>
                    <div class="c-checkout-table__col"><span>وضعیت سفارش: {{$factor->status == 'paid'? 'پرداخت شده' : 'درانتظار پرداخت '}}   </span></div>
                </div>
                <div class="c-checkout-table__row">
                    <div class="c-checkout-table__col full-col"><span>آدرس : استان {{$factor->address->provine}} ، شهر {{$factor->address->city}}   {{$factor->address->address}}</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="payment-methods container">
    <div class="o-headline o-headline--checkout"><span>جزئیات پرداخت </span></div>
    <div class="c-checkout-details">
        <div class="c-checkout-orders-table">
            <div class="c-checkout-orders-table__row">
                <div>
                    <p>رديف</p>
                </div>
                <div>
                    <p>درگاه</p>
                </div>
                <div>
                    <p>شماره پيگيري</p>
                </div>
                <div>
                    <p>تاريخ</p>
                </div>
                <div>
                    <p>مبلغ</p>
                </div>
                <div>
                    <p>وضعيت</p>
                </div>
            </div>
            <div class="c-checkout-orders-table__row">
                <div>
                    <p>#</p>
                </div>
                <div>
                    <p>{{$factor->payment_method}}</p>
                </div>
                <div>
                    <p>{{$factor->id}}</p>
                </div>
                <div>
                    <p>{{ Verta::instance($factor->created_at)->format('%B %d، %Y') }}</p>
                </div>
                <div>
                    <p> {{$factor->sum}} تومان</p>
                </div>
                <div>
                    <p>پرداخت موفق</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
