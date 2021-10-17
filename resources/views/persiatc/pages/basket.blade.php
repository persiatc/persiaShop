@extends('persiatc.layouts.master', ['title'=> 'فروشگاه اینترنتی'])

@section('content')

<section class="main-cart container">
    <div class="o-page__content">
        <div class="o-headline">
            <div id="main-cart"><span class="c-checkout-text c-checkout__tab--active">سبد خرید</span><span class="c-checkout__tab-counter">{{count($baskets)}}</span></div>
            {{-- <div id="sfl-cart"><span class="c-checkout-text">لیست خرید بعدی</span></div> --}}
        </div>
        <?php
        $discount = 0;
        $sum = 0;
        $ids = [];
      ?>
        @if(count($baskets) != 0)
        <div class="c-checkout">
            <div class="c-checkout__header">
                <span class="c-checkout__header-title">ارسال عادی</span>
                <span class="c-checkout__header-extra-info"> ({{count($baskets)}} کالا)</span>
                <span class="c-checkout__header-delivery-cost"> هزینه ارسال: رایگان </span>
            </div>
            <ul class="c-checkout__items">
                <li class="c-checkout__item">

                    <?php foreach ($baskets as $basket): ?>
                    <?php
                        $product = App\Product::find($basket->product_id);
                        $sum += $product->price;
                        $discount += $product->discount/100*$product->price;
                        array_push($ids, $basket->id)
                    ?>
                    <div class="c-checkout__row">
                        <div class="c-checkout__col--thumb">
                            <a href="#"><img src="/{{$product->image}}" alt=""></a>
                        </div>
                        <div class="c-checkout__col--desc">
                            <a href="#">{{$product->name}}</a>
                            <p class="c-checkout__guarantee">{!! $product->body !!}</p>
                            <p class="c-checkout__dealer"> برند : {{$product->brand ?? $product->producer->name}}</p>
                            <div class="c-checkout__variant c-checkout__variant--color"></div>
                            <div class="c-checkout__col--information">
                                <div class="c-checkout__col c-checkout__col--counter">
                                    <div class="c-cart-item__quantity-row">
                                        <div class="c-quantity-selector">
                                            <button type="button" class="c-quantity-selector__add"><i class="fa fa-plus"></i></button>
                                            <div class="c-quantity-selector__number">۱</div>
                                            <button type="button" class="c-quantity-selector__add"><i class="fa fa-minus"></i></button>

                                            <form class="" action="{{route('basket.destroy', ['basket'=>$basket->id])}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <button type="submit" class="c-quantity-selector__remove"><i class="fa fa-trash"></i></button>

                                                {{-- <button type="submit" class="btn btn-outline-danger" style="color:none; bordeR:1px solid white !important;">حذف</button> --}}
                                              </form>
                                        </div>
                                        {{-- <a href="#" class="c-cart-item__save-for-later"><i class="fa fa-th-list"></i> ذخیره در لیست خرید بعدی </a> --}}
                                        <div class="c-checkout__quantity-error">امکان تغییر تعداد برای این کالا وجود ندارد.</div>
                                    </div>
                                </div>
                                <div class="c-checkout__col c-checkout__col--price">
                                    <!--incredible-->

                                    @if($product->discount != 0 && $product->price != 0)
                                    <div class="inc-product-price">
                                        <del>{{$product->price}}</del>
                                        <div class="c-price__discount-oval"><span>{{$product->discount}}٪</span></div>
                                        <span class="price">{{(1-($product->discount)/100)*$product->price}}</span> تومان
                                    </div>
                                    @elseif($product->discount == 0 && $product->price != 0)
                                        <span class="price">{{$product->price}} تومان</span>
                                    @elseif($product->price == 0)
                                    <span style="color:red" class="price">برای اطلاع از قیمت هاتماس بگیرید.</span>
                                    @endif
                                    {{-- <div class="c-checkout__price c-checkout__price--del">{{$product->price}} تومان </div>
                                    <div class="c-checkout__price c-checkout__price--discount"> تخفیف شگفت‌انگیز: {{(1-($product->discount)/100)*$product->price}} تومان </div> --}}

                                    <!--incredible-->
                                    {{-- <div class="c-checkout__price"> {{$product->price}} تومان</div> --}}
                                </div>
                            </div>
                            {{-- <div class="c-cart-item__stock-info"><span><i class="fa fa-bell"></i> ۴ عدد در انبار باقیست - پیش از اتمام بخرید </span></div> --}}
                        </div>

                    </div>
                    <?php endforeach; ?>

                </li><!--cart-item-->
            </ul>
            <div class="c-checkout__to-shipping-sticky">
                <a href="{{route('factor.create', ['request'=>$ids])}}" class="c-checkout__to-shipping-link">ادامه فرایند خرید</a>
                <div class="c-checkout__to-shipping-price-report">
                    <p>مبلغ قابل پرداخت</p>
                    <div class="c-checkout__to-shipping-price-report--price">{{$sum - $discount}} <span>تومان</span></div>

                </div>
            </div>
        </div>
        @else
        <div class="c-checkout">
            <div class="c-checkout__header">
                <h3> سبد خرید شما خالی است</h3>
            </div>
        </div>
        @endif
    </div>
    <aside class="o-page__aside">
        <div class="c-checkout-aside">
            <div class="c-checkout-summary">
                <ul class="c-checkout-summary__summary">
                    <li>
                    <span>قیمت کالاها (۱)</span>
                    <span> {{$sum}} تومان </span>
                    </li>
                    <!--incredible-->
                    <li class="c-checkout-summary__discount">
                        <span> تخفیف کالاها </span>
                        <span class="discount-price">{{$discount}}  تومان</span>
                    </li>
                    <!--incredible-->
                    <li class="has-devider">
                        <span>جمع</span>
                        <span> {{$sum - $discount}} تومان </span>
                    </li>
                    <li>
                        <span>هزینه ارسال</span>
                        <span></span>
                    </li>
                    <li>
                        <span style="font-size: 1.1em;padding-right: 10px;">ارسال عادی</span>
                        <span style="font-size: 1.1em;padding-right: 10px;">رایگان</span>
                    </li>
                    <li class="has-devider">
                        <span> مبلغ قابل پرداخت </span>
                        <span> {{$sum - $discount}} تومان </span>
                    </li>
                    {{-- <li class="pd-10">
                        <span> <i class="fa fa-money"></i> امتیاز دیجی کلاب</span>
                        <span> ۲۰ امتیاز </span>
                    </li> --}}
                </ul>
                <div class="c-checkout-summary__main">
                    <div class="c-checkout-summary__content">
                        <div><span> کالاهای موجود در سبد شما ثبت و رزرو نشده‌اند، برای ثبت سفارش مراحل بعدی را تکمیل کنید.</span></div>
                    </div>
                </div>
            </div>
            {{-- <div class="c-checkout-feature-aside">
                <ul>
                    <li class="c-checkout-feature-aside__item c-checkout-feature-aside__item--guarantee">هفت روز ضمانت تعویض</li>
                    <li class="c-checkout-feature-aside__item c-checkout-feature-aside__item--cash">پرداخت در محل با کارت بانکی</li>
                    <li class="c-checkout-feature-aside__item c-checkout-feature-aside__item--express">تحویل اکسپرس</li>
                </ul>
            </div> --}}
        </div>
    </aside>
</section>
{{-- <section class="cart-empty container" id="cart-sfl">
    <div class="cart-sfl__icon"></div>
    <div class="cart-empty__title" style="font-size: 2em;"> لیست خرید بعدی شما خالی است! </div>
    <div class="cart-sfl__links">
        <p>شما می‌توانید محصولاتی که به سبد خرید خود افزوده‌اید و فعلا قصد خرید آن‌ها را ندارید، در لیست خرید بعدی قرار داده و هر زمان مایل بودید آن‌ها را به سبد خرید اضافه کرده و خرید آن‌ها را تکمیل کنید. </p>
    </div>
</section> --}}




@endsection
