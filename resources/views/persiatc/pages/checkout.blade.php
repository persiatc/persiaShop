@extends('persiatc.layouts.cart-master', ['title'=> 'فروشگاه اینترنتی'])

@section('content')

<header class="shipping">
    <div class="logo container">
        <a href="#"><img style="width: 90px;" src="/persiatc/banner/PersiaLogo.png"></a>
    </div>
</header>
<main class="main-cart container">
    <ul class="c-checkout-steps">
        <li class="is-active">
            <div class="c-checkout-steps__item c-checkout-steps__item--summary" data-title="اطلاعات ارسال"></div>
        </li>
        <li>
            <div class="c-checkout-steps__item c-checkout-steps__item--delivery" data-title="پرداخت"></div>
        </li>
        <li>
            <div class="c-checkout-steps__item c-checkout-steps__item--payment" data-title="اتمام خرید و ارسال"></div>
        </li>
    </ul>
    <div class="o-page__content">
        <div id="shipping-data">
            <div class="o-headline o-headline--checkout"><span>انتخاب آدرس تحویل سفارش</span></div>
            <div id="address-section">
                <div id="user-default-address-container" class="c-checkout-contact is-completed">
                    <div class="c-checkout-contact__content">
                        <ul class="c-checkout-contact__items">
                            <li class="c-checkout-contact__item c-checkout-contact__item--username"> <span>گیرنده : حسن شفیعی</span>
                                <button class="c-checkout-contact__btn-edit">اصلاح این آدرس</button>
                            </li>
                            <li class="c-checkout-contact__item c-checkout-contact__item--location">
                                <div class="c-checkout-contact__item c-checkout-contact__item--mobile"> <span>شماره تماس : ۰۹۱۲۶۲۶۲۶۲۶</span></div>
                                <div class="c-checkout-contact__item--message"><span>کد پستی : ۹۱۹۹۶۰</span></div>
                                <br> <span class="full-address">تهران - ورودی اول - ترمینال - پارک - پلاک</span></li>
                        </ul>
                        <div class="c-checkout-contact__badge"></div>
                    </div>
                    <button id="change-sh-address" class="c-checkout-contact__location">تغییر آدرس ارسال</button>
                </div>
            </div>
            <?php
            $discount = 0;
            $sum = 0;
            $ids = [];
          ?>
            <form action="#">
                <div>
                    <div class="o-headline o-headline--checkout"> <span>جزییات</span></div>
                    <div class="c-checkout-pack">
                        <div class="c-checkout-pack__row">
                            <?php foreach ($baskets as $basket): ?>
                            <?php
                                $product = App\Product::find($basket->product_id);
                                $sum += $product->price;
                                $discount += $product->discount/100*$product->price;
                                array_push($ids, $basket->id)
                            ?>
                            <div class="c-product-box c-product-box--compact">
                                <a href="#" class="c-product-box__img"><img style="width:70px;height:70px" src="/{{$product->image}}" alt=""></a>
                                <div class="c-product-box__title">{{$product->name}}</div>
                            </div>
                            <?php endforeach; ?>
                            {{-- <div class="c-product-box c-product-box--compact">
                                <a href="#" class="c-product-box__img"><img src="assets/images/112309225s.jpg" alt=""></a>
                                <div class="c-product-box__title"> دسته بازی بی سیم یوکام کد 8008 </div>
                            </div> --}}
                        </div>
                        <div class="c-checkout-pack__row">
                            <div class="c-checkout-time-table">
                                <div class="c-checkout-time-table__title-bar"> بازه تحویل سفارش: ۲ روز کاری</div>
                                <ul class="c-checkout-time-table__subtitle-bar">
                                    <li>شیوه ارسال: پست پیشتاز (بین ۱ تا ۴ روز کاری)</li>
                                    <li>هزینه ارسال: رایگان</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="c-checkout-shipment__invoice-type">
                <p class="c-checkout-shipment__invoice-type-info">شما می‌توانید فاکتور خرید را پس از تحویل سفارش از بخش جزییات سفارش در حساب کاربری خود دریافت کنید.</p>
            </div>
            <div class="c-checkout__to-shipping-sticky">
                <a href="payment.html" class="c-checkout__to-shipping-link">ادامه فرایند خرید</a>
                <div class="c-checkout__to-shipping-price-report">
                    <p>مبلغ قابل پرداخت</p>
                    <div class="c-checkout__to-shipping-price-report--price">۱۹۶,۷۰۰ <span>تومان</span></div>
                </div>
            </div>
        </div>
        <div class="c-checkout__actions">
            <a href="/basket" class="btn-link-spoiler">« بازگشت به سبد خرید </a>
        </div>
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
</main>
<div class="modal-checkout container" id="address-modal">
    <div class="container">
        <div class="c-form-checkout__headline">افزودن آدرس جدید</div>
        <form>
            <div class="group-input">
                <div class="flname"> <span>نام و نام خانوادگی تحویل گیرنده</span>
                    <input type="text" placeholder="نام تحویل گیرنده را وارد کنید">
                </div>
                <div class="mob"> <span>شماره موبایل</span>
                    <input type="text" placeholder="09xxxxxxxx">
                </div>
            </div>
            <div class="group-input">
                <div class="flname"> <span>استان</span>
                    <select name="provinces">
                        <option value="1">آذربایجان غربی</option>
                        <option value="1">آذربایجان غربی</option>
                        <option value="1">آذربایجان غربی</option>
                        <option value="1">آذربایجان غربی</option>
                    </select>
                </div>
                <div class="mob"> <span>شهر</span>
                    <select name="city">
                        <option value="1">ماکو</option>
                        <option value="1">ماکو</option>
                        <option value="1">ماکو</option>
                        <option value="1">ماکو</option>
                        <option value="1">ماکو</option>
                    </select>
                </div>
            </div>
            <div class="textarea-area"> <span>آدرس پستی</span>
                <br>
                <textarea name="" id="textarea"></textarea>
            </div>
            <div class="textarea-area"> <span>کد پستی</span>
                <br>
                <input type="text">
            </div>
            <div class="foot">
                <button class="btn-checked">ثبت و ارسال به این آدرس</button> <a class="btn-link-spoiler" href="#">انصراف و بازگشت</a></div>
        </form>
    </div>
    <button class="close-modal"><i class="fa fa-plus"></i></button>
</div>

@endsection
