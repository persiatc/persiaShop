@extends('persiatc.layouts.master', ['title'=> 'فروشگاه اینترنتی'])

@section('content')




<section class="main-cart container">
    <div class="o-page__content">
        <div class="o-headline">
            <div id="main-cart"><span class="c-checkout-text c-checkout__tab--active">سبد خرید</span><span class="c-checkout__tab-counter">۳</span></div>
            <div id="sfl-cart"><span class="c-checkout-text">لیست خرید بعدی</span></div>
        </div>
        <div class="c-checkout">
            <div class="c-checkout__header ">
                <span class="c-checkout__header-title">ارسال عادی</span>
                <span class="c-checkout__header-extra-info"> (۲ کالا)</span>
                <span class="c-checkout__header-delivery-cost"> هزینه ارسال: رایگان </span>
            </div>
            <ul class="c-checkout__items">
                <li class="c-checkout__item">
                    <div class="c-checkout__row">
                        <div class="c-checkout__col--thumb">
                            <a href="#"><img src="assets/images/119350700.jpg" alt=""></a>
                        </div>
                        <div class="c-checkout__col--desc">
                            <a href="#">تبلت سامسونگ مدل GALAXY TAB S6 ظرفیت 128 گیگابایت</a>
                            <p class="c-checkout__guarantee">گارانتی 18 ماهه آسان سرویس</p>
                            <p class="c-checkout__dealer"> فروشنده: سایتک</p>
                            <div class="c-checkout__variant c-checkout__variant--color"></div>
                            <div class="c-checkout__col--information">
                                <div class="c-checkout__col c-checkout__col--counter">
                                    <div class="c-cart-item__quantity-row">
                                        <div class="c-quantity-selector">
                                            <button type="button" class="c-quantity-selector__add"><i class="fa fa-plus"></i></button>
                                            <div class="c-quantity-selector__number">۱</div>
                                            <button type="button" class="c-quantity-selector__remove"><i class="fa fa-trash"></i></button>
                                        </div>
                                        <a href="#" class="c-cart-item__save-for-later"><i class="fa fa-th-list"></i> ذخیره در لیست خرید بعدی </a>
                                        <div class="c-checkout__quantity-error">امکان تغییر تعداد برای این کالا وجود ندارد.</div>
                                    </div>
                                </div>
                                <div class="c-checkout__col c-checkout__col--price">
                                    <!--incredible
                                    <div class="c-checkout__price c-checkout__price--del">۱۵۰,۰۰۰ تومان </div>
                                    <div class="c-checkout__price c-checkout__price--discount"> تخفیف شگفت‌انگیز: ۷۱,۰۰۰ تومان </div>
                                    <!--incredible-->
                                    <div class="c-checkout__price"> ۱۰,۹۹۹,۰۰۰ تومان</div>
                                </div>
                            </div>
                            <div class="c-cart-item__stock-info"><span><i class="fa fa-bell"></i> ۴ عدد در انبار باقیست - پیش از اتمام بخرید </span></div>
                        </div>

                    </div>
                    <div class="c-checkout__row">
                        <div class="c-checkout__col--thumb">
                            <a href="#"><img src="assets/images/112309225.jpg" alt=""></a>
                        </div>
                        <div class="c-checkout__col--desc">
                            <a href="#">دسته بازی بی سیم یوکام کد 8008</a>
                            <p class="c-checkout__guarantee">رنگ سفید</p>
                            <p class="c-checkout__guarantee">سرویس ویژه دیجی شاپ: ۷ روز تضمین بازگشت کالا </p>
                            <p class="c-checkout__dealer"> فروشنده: رایان دیجیتال </p>
                            <div class="c-checkout__variant c-checkout__variant--color"></div>
                            <div class="c-checkout__col--information">
                                <div class="c-checkout__col c-checkout__col--counter">
                                    <div class="c-cart-item__quantity-row">
                                        <div class="c-quantity-selector">
                                            <button type="button" class="c-quantity-selector__add"><i class="fa fa-plus"></i></button>
                                            <div class="c-quantity-selector__number">۱</div>
                                            <button type="button" class="c-quantity-selector__remove"><i class="fa fa-trash"></i></button>
                                        </div>
                                        <a href="#" class="c-cart-item__save-for-later"><i class="fa fa-th-list"></i> ذخیره در لیست خرید بعدی </a>
                                        <div class="c-checkout__quantity-error">امکان تغییر تعداد برای این کالا وجود ندارد.</div>
                                    </div>
                                </div>
                                <div class="c-checkout__col c-checkout__col--price">
                                    <!--incredible
                                    <div class="c-checkout__price c-checkout__price--del">۱۵۰,۰۰۰ تومان </div>
                                    <div class="c-checkout__price c-checkout__price--discount"> تخفیف شگفت‌انگیز: ۷۱,۰۰۰ تومان </div>
                                    <!--incredible-->
                                    <div class="c-checkout__price"> ۱۵۵,۰۰۰ تومان</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </li><!--cart-item-->
            </ul>
            <div class="c-checkout__to-shipping-sticky">
                <a href="shipping.html" class="c-checkout__to-shipping-link">ادامه فرایند خرید</a>
                <div class="c-checkout__to-shipping-price-report">
                    <p>مبلغ قابل پرداخت</p>
                    <div class="c-checkout__to-shipping-price-report--price">۱۹۶,۷۰۰ <span>تومان</span></div>

                </div>
            </div>
        </div>
    </div>
    <aside class="o-page__aside">
        <div class="c-checkout-aside">
            <div class="c-checkout-summary">
                <ul class="c-checkout-summary__summary">
                    <li>
                    <span>قیمت کالاها (۱)</span>
                    <span> ۱۹۸,۲۰۰ تومان </span>
                    </li>
                    <!--incredible-->
                    <li class="c-checkout-summary__discount">
                        <span> تخفیف کالاها </span>
                        <span class="discount-price">۱,۵۰۰ تومان</span>
                    </li>
                    <!--incredible-->
                    <li class="has-devider">
                        <span>جمع</span>
                        <span> ۱۹۶,۷۰۰ تومان </span>
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
                        <span> ۱۹۶,۷۰۰ تومان </span>
                    </li>
                    <li class="pd-10">
                        <span> <i class="fa fa-money"></i> امتیاز دیجی کلاب</span>
                        <span> ۲۰ امتیاز </span>
                    </li>
                </ul>
                <div class="c-checkout-summary__main">
                    <div class="c-checkout-summary__content">
                        <div><span> کالاهای موجود در سبد شما ثبت و رزرو نشده‌اند، برای ثبت سفارش مراحل بعدی را تکمیل کنید.</span></div>
                    </div>
                </div>
            </div>
            <div class="c-checkout-feature-aside">
                <ul>
                    <li class="c-checkout-feature-aside__item c-checkout-feature-aside__item--guarantee">هفت روز ضمانت تعویض</li>
                    <li class="c-checkout-feature-aside__item c-checkout-feature-aside__item--cash">پرداخت در محل با کارت بانکی</li>
                    <li class="c-checkout-feature-aside__item c-checkout-feature-aside__item--express">تحویل اکسپرس</li>
                </ul>
            </div>
        </div>
    </aside>
</section>
<section class="cart-empty container" id="cart-sfl">
    <div class="cart-sfl__icon"></div>
    <div class="cart-empty__title" style="font-size: 2em;"> لیست خرید بعدی شما خالی است! </div>
    <div class="cart-sfl__links">
        <p>شما می‌توانید محصولاتی که به سبد خرید خود افزوده‌اید و فعلا قصد خرید آن‌ها را ندارید، در لیست خرید بعدی قرار داده و هر زمان مایل بودید آن‌ها را به سبد خرید اضافه کرده و خرید آن‌ها را تکمیل کنید. </p>
    </div>
</section>








@endsection
