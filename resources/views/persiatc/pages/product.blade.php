@extends('persiatc.layouts.master', ['title'=> 'فروشگاه اینترنتی'])

@section('content')

<style>
    span p{
        font-size:12px !important;
    }
</style>

@include('persiatc.partials.flash-message')

    <div class="container">
        <nav>
            <ul class="c-breadcrumb">
                <li class="list-item"><a href="/">فروشگاه اینترنتی ارتباطات پرشیا</a></li>
                <li class="list-item"><a href="#">{{$pro->name}}</a></li>
            </ul>
        </nav>
        <article class="c-product">
            <section class="c-product__info">
                <div class="c-product__headline">
                    <h1 class="c-product__title">
                        <span class="fa-title"> {{$pro->name}} </span>
                        {{-- <span class="en-title">Samsung GALAXY TAB S6 Tablet 128 GB</span> --}}
                    </h1>
                    <span class="">
                   {{-- امتیاز این محصول {{round($rating, 2)}} از ۵ می باشد --}}
                    </span>
                </div>
                <div class="c-product__attributes">
                    <div class="c-product__right">
                        <div class="c-product__directory">
                            <ul>
                                <li> <span>برند : </span> <a href="#" class="btn-link-spoiler">{{$pro->brand ?? $pro->producer->name}}</a></li>
                                <li> <span>فروخته شده : </span> <a href="#" class="btn-link-spoiler">{{"   ".$pro->sales_number}}</a></li>
                            </ul>
                        </div>
                        <div class="c-product__params">
                            <ul data-title="ویژگی های محصول">
                                <li> <span>دسته بندی:</span> <span>{{$pro->category->fa_name}}</span></li>
                                <li> <span> توضیحات محصول:</span> <span style="font-size:12px !important">{!! $pro->body !!}</span></li>

                            </ul>
                        </div>
                    </div>
                    <div class="c-product__summary">
                        <div class="seller"> <span> فروشنده : </span> <a href="#" class="btn-link-spoiler">ارتباطات پرشیا</a></div>
                        {{-- <div class="c-product__guarantee"> <span>گارانتی ۱۸ ماهه داتیس امارات</span></div> --}}
                        {{-- <div class="c-product__delivery">
                            <div class="delivery-warehouse"> <i class="fa fa-truck"></i><span class="c-product__delivery-warehouse--no-lead-time">آماده ارسال</span></div>
                        </div> --}}

                        @if ($pro->discount != 0 && $pro->price != 0)
                        <div class="inc-product-price">
                            <del>{{$pro->price}}</del>
                            <div class="c-price__discount-oval"><span>{{$pro->discount}}٪</span></div>
                            <span class="c-price original">{{(1-($pro->discount)/100)*$pro->price}} تومان</span>
                        </div>
                        {{-- <div class="c-price original">۲,۶۶۹,۰۰۰ تومان</div> --}}

                        @elseif($pro->discount == 0 && $pro->price != 0)
                        <div class="c-price original">{{$pro->price}} تومان</div>
                        @elseif($pro->price == 0)
                            <span style="color:red" class="price">برای اطلاع از قیمت هاتماس بگیرید.</span>
                        @endif



                        @if(Auth::check())
                            <div class="c-product__add"> <a class="btn-add-to-cart add-to-cart" data-id="{{$pro->id}}" href="#"><span>افزودن به سبد خرید</span></a></div>
                        @else
                            <div class="c-product__add"> <a class="c-btn-seller-add-cart" style="font-size:12px !important"  href="{{ route('login')}}"><span>برای خرید این محصول ابتدا وارد شوید</span></a></div>
                        @endif

                        {{-- <div class="c-product__get-club"><i class="fa fa-money"></i> <span> دریافت ۱۳ امتیاز دیجی‌کلاب با خرید این کالا </span></div>
                        <div class="c-product__unfair-price"> <span>آیا قیمت مناسب‌تری سراغ دارید؟ </span> <a class="btn-link-spoiler" href="#">بله</a> | <a class="btn-link-spoiler" href="#">خیر</a></div> --}}

                    </div>
                </div>
                {{-- <aside class="c-product__feature">
                    <a class="i-item" href="#"> <img src="assets/images/icon/i1.svg" alt=""> <span>امکان تحویل اکسپرس</span> </a>
                    <a class="i-item" href="#"> <img src="assets/images/icon/i2.svg" alt=""> <span>پشتیبانی ۲۴ ساعته</span> </a>
                    <a class="i-item" href="#"> <img src="assets/images/icon/i3.svg" alt=""> <span>امکان پرداخت در محل</span> </a>
                    <a class="i-item" href="#"> <img src="assets/images/icon/i4.svg" alt=""> <span>۷ روز ضمانت بازگشت کالا</span> </a>
                    <a class="i-item" href="#"> <img src="assets/images/icon/i5.svg" alt=""> <span>ضمانت اصل بودن کالا</span> </a>
                </aside> --}}
            </section>
            <section class="c-product__gallery">
                <div class="c-product__special-deal hidden">
                    <div class="c-counter--special-deal"></div>
                </div>
                <div class="c-product__status-bar c-product__status-bar--out-of-stock hidden">ناموجود</div>
                <div class="c-gallery">
                    <div class="c-gallery__item">
                        <ul class="c-gallery__options">
                            @if(Auth::check())
                            <li>
                                <button class="btn-option btn-option--add-to-wish add-to-wish" data-id="{{$pro->id}}"></button>
                            </li>
                            @endif
                            {{-- <li>
                                <button class="btn-option btn-option--social"></button>
                            </li>
                            <li>
                                <button class="btn-option btn-option--compare"></button>
                            </li>
                            <li>
                                <button class="btn-option btn-option--stats"></button>
                            </li> --}}
                        </ul>
                        <div class="c-gallery__img"> <img src="/{{$pro->image}}" style="width:279px;height:369px" class="xzoom" alt="{{$pro->name}}"></div>
                    </div>
                    {{-- <ul class="c-gallery__items">
                        <li><img src="assets/images/119350700.jpg" alt=""></li>
                        <li><img src="assets/images/119350696.jpg" alt=""></li>
                        <li><img src="assets/images/119350706.jpg" alt=""></li>
                        <li><img src="assets/images/119350704.jpg" alt=""></li>
                    </ul> --}}
                </div>
            </section>
        </article>
        {{-- <section id="suppliers" class="c-box-suppliers">
            <div class="c-box-suppliers__headline-container">
                <div class="o-headline o-headline--delivery">
                    <span>لیست فروشنده / گارانتی‌های این محصول</span>
                </div>
                <div class="sell-your-product"><a class="btn-link-spoiler" href="/profile/seller" target="_blank">کالای خود را در دیجی شاپ بفروشید</a></div>
            </div>
            <div class="c-box">
                <div class="c-table-suppliers c-table-suppliers--main">
                    <div class="c-table-suppliers__body">
                        <div class="c-table-suppliers__row  in-list   c-table-suppliers__row--active ">
                            <a href="/seller/3" class="seller-name">حسن</a>
                            <div class="seller-product__variant">
                                <a class="c-product__delivery-warehouse--delay persianumber"> ارسال از ۱ روز کاری آینده</a>
                                <span class="seller-product__guarantee">گارانتی اصالت و سلامت فیزیکی کالا</span>
                            </div>
                            <div class="c-product__variants"><span class="choose-variant">انتخاب رنگ : </span><ul><li style="margin-left: 7px;">
                                <div class="variants">
                                    <input type="radio" name="variety" value="#000000" data-var="2" data-quantity="8" data-sid="3">
                                    <label><span class="color-box" style="background-color:#000000"></span></label>
                                </div></li><li style="margin-left: 7px;">
                                <div class="variants">
                                    <input type="radio" name="variety" value="#ff0000" data-var="2" data-quantity="54" data-sid="3">
                                    <label><span class="color-box" style="background-color:#ff0000"></span></label>
                                </div></li><li data-toggle="tooltip" style="margin-left: 7px;"> <span class="pd-tooltip hidden">اتمام موجودی</span>
                                <div class="variants">
                                    <input type="radio" disabled="" name="variety" value="#0080ff" data-var="2" data-quantity="0" data-sid="3">
                                    <label><span class="color-box" style="background-color:#0080ff"></span></label>
                                </div></li><li style="margin-left: 7px;">
                                <div class="variants">
                                    <input type="radio" name="variety" value="#ff80c0" data-var="2" data-quantity="530" data-sid="3">
                                    <label><span class="color-box" style="background-color:#ff80c0"></span></label>
                                </div></li></ul></div>
                            <span class="seller-product__price persianumber">
                                                                  <style>.seller-product__price {font-size: 1.3em;display: inline-flex;flex-direction: column;}</style>
                                <span class="discount-price">۱,۷۶۶,۰۰۰ تومان</span>
                                                          </span>
                            <span class="seller-product__action"><a class="c-btn-seller-add-cart add-to-the-cart pd-3" href="http://digi.com//cart/add/4/3/1/?var=000000">افزودن به سبد</a></span>
                        </div>
                        <div class="c-table-suppliers__row  in-list  ">
                            <a href="/seller/2" class="seller-name">شفیعی</a>
                            <span class="c-product__delivery-warehouse--no-lead-time">آماده ارسال</span>
                            <span class="seller-product__guarantee">گارانتی ضمانت 3 روزه</span>
                            <span class="seller-product__price persianumber">
                                                                  <style>.seller-product__price {font-size: 1.3em;display: inline-flex;flex-direction: column;}</style>
                                <span class="discount-price">۴,۲۰۰,۰۰۰ تومان</span>
                                                          </span>
                            <span class="seller-product__action"><a class="c-btn-seller-add-cart add-to-the-cart pd-2" href="http://digi.com//cart/add/4/2/1">افزودن به سبد</a></span>
                        </div>
                        <div class="c-table-suppliers__row  ">
                            <a href="/seller/1" class="seller-name">نت پارادیس</a>
                            <div class="seller-product__variant">
                                <a class="c-product__delivery-warehouse--delay persianumber"> ارسال از ۱ روز کاری آینده</a>
                                <span class="seller-product__guarantee">گارانتی اصالت و سلامت فیزیکی کالا</span>
                            </div>
                            <div class="c-product__variants"><span class="choose-variant">انتخاب رنگ : </span><ul><li data-toggle="tooltip" style="margin-left: 7px;"> <span class="pd-tooltip hidden">اتمام موجودی</span>
                                <div class="variants">
                                    <input type="radio" disabled="" name="variety" value="#000000" data-var="2" data-quantity="0" data-sid="1">
                                    <label><span class="color-box" style="background-color:#000000"></span></label>
                                </div></li><li style="margin-left: 7px;">
                                <div class="variants">
                                    <input type="radio" name="variety" value="#ff0000" data-var="2" data-quantity="193" data-sid="1">
                                    <label><span class="color-box" style="background-color:#ff0000"></span></label>
                                </div></li><li data-toggle="tooltip" style="margin-left: 7px;"> <span class="pd-tooltip hidden">اتمام موجودی</span>
                                <div class="variants">
                                    <input type="radio" disabled="" name="variety" value="#0080ff" data-var="2" data-quantity="0" data-sid="1">
                                    <label><span class="color-box" style="background-color:#0080ff"></span></label>
                                </div></li><li style="margin-left: 7px;">
                                <div class="variants">
                                    <input type="radio" name="variety" value="#ff80c0" data-var="2" data-quantity="270" data-sid="1">
                                    <label><span class="color-box" style="background-color:#ff80c0"></span></label>
                                </div></li></ul></div>
                            <span class="seller-product__price persianumber">
                                                                  <style>.seller-product__price {font-size: 1.3em;display: inline-flex;flex-direction: column;}</style>
                                <span class="discount-price">۶,۰۵۸,۰۰۰ تومان</span>
                                                          </span>
                            <span class="seller-product__action"><a class="c-btn-seller-add-cart add-to-the-cart pd-1" href="http://digi.com//cart/add/4/1/1/?var=ff0000">افزودن به سبد</a></span>
                        </div>
                    </div>
                </div>
                <div class="c-table-suppliers-less c-table-suppliers-hidden">
                    <button class="btn-link-spoiler bgf-w">مشاهده کمتر </button>
                </div>
                <div class="c-table-suppliers-more">
                    <button class="btn-link-spoiler bgf-w persianumber">مشاهده (۱) فروشنــــده / گارانتی بیشتـــــر</button>
                </div>
            </div>
        </section>
        <section class="product-wrapper container">
            <div class="headline">
                <h3>محصولات مرتبط</h3></div>
            <div id="pslider" class="swiper-container">
                <div class="product-box swiper-wrapper">
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="assets/images/965174.jpg" alt=""></a> <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="assets/images/119240285.jpg" alt=""></a> <a class="title" href="#">کاور مدل SOR-010 مناسب برای گوشی موبایل سامسونگ</a> <span class="price">۲,۴۵۶,۰۰۰ تومان</span></div>
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="assets/images/363465.jpg" alt=""></a> <a class="title" href="#">شارژر همراه انکر مدل A1271 PowerCore ظرفیت 20100 م</a> <span class="price">۲۴۶,۰۰۰ تومان</span></div>
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="assets/images/112551619.jpg" alt=""></a> <a class="title" href="#">گوشی موبایل سامسونگ مدل Galaxy Note 10 Plus N975F/DS</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="assets/images/111253599.jpg" alt=""></a> <a class="title" href="#">تبلت سامسونگ مدل Galaxy Tab S5e 10.5 LTE 2019 SM-T725</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="assets/images/113944020.jpg" alt=""></a> <a class="title" href="#">اندروید باکس مدل R69</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="assets/images/2901119.jpg" alt=""></a> <a class="title" href="#">دسته بازی هویت مدل G89W</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
                </div>
                <div id="pslider-nbtn" class="slider-nbtn swiper-button-next"></div>
                <div id="pslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
            </div>
        </section> --}}
        <section class="p-tabs">
            <ul class="c-box-tabs">
                {{-- <li class="c-box-tabs__tab is-active"><a id="desc" href="#"><i class="fa fa-glasses"></i> <span>نقد و بررسی</span></a></li> --}}
                {{-- <li class="c-box-tabs__tab is-active"><a id="params" href="#"><i class="fa fa-tasks"></i> <span>مشخصات</span></a></li> --}}
                <li class="c-box-tabs__tab is-active"><a id="comments" href="#"><i class="fa fa-comments"></i> <span>نظرات کاربران</span></a></li>
                {{-- <li class="c-box-tabs__tab"><a id="questions" href="#"><i class="fa fa-question-circle"></i> <span>پرسش و پاسخ</span></a></li> --}}
            </ul>
            <div class="c-box--tabs p-tabs__content">
                {{-- <div id="desc" class="c-content-expert is-active">
                    <article>
                        <h2 class="c-params__headline"> نقد و بررسی اجمالی <span> تبلت سامسونگ مدل GALAXY TAB S6 ظرفیت 128 گیگابایت </span></h2>
                        <section class="c-content-expert__summary">
                            <div class="c-mask">
                                <div class="c-mask__text c-mask__text--product-summary" style="max-height: 250px;height: unset;">
                                    <p>شرکتی جدید با نام «الفون» (Elephone) راه به بازار گوشی‌های همراه باز کرده و با تولید محصولات جدید و متنوع می‌تواند آینده‌ی خوبی پیش رو داشته باشد. یکی از گوشی‌های این شرکت با مدل P8 مانند بسیاری از گوشی‌های جدید ساخت شرکت‌های مطرح، حسگر اثر انگشت دارد. این گوشی در سه رنگ مشکی، قرمز و نسکافه‌ای به بازار عرضه شده است و با مشخصات سخت‌افزاری‌ای که دارد، در دسته‌ی بالارده‌ها قرار می‌گیرد. یک گوشی با سخت‌افزار قوی و حرفه‌ای. گوشی P8 از پردازنده‌ی مدیاتک مدل Helio P25 برای پردازش محاسبات استفاده می‌کند و 6 گیگابایت رم این پردازنده‌ی هشت‌هسته‌ای را همراهی می‌کند که در مجموع عملکرد بسیار روان و مناسبی را فراهم می‌کند. حافظه‌ی داخلی آن ‍64 گیگابایت است و می‌توان با کارت حافظه‌ی جانبی این مقدار را ارتقا داده و تا 128 گیگابایت فضای ذخیره‌سازی داشته باشید که بسیار خوب است. این گوشی از شبکه پرسرعت 4G پشتیبانی می‌کند و دو درگاه سیم‌کارت نانو دارد. البته باید به این نکته توجه کنید که اگر می‌خواهید از شیار دوم برای کارت حافظه استفاده کنید باید قید سیم‌کارت دوم را بزنید؛ چون شیار دوم یا برای سیم‌کارت استفاده می‌شود یا کارت حافظه و شیار مستقلی برای کارت حافظه در نظر گرفته نشده است. قسمت بعدی که به آن می‌پردازیم دوربین این موبایل است که در قاب پشتی از یک دوربین با سنسور 21 مگاپیکسلی به عنوان دوربین اصلی و در قاب جلو از یک سنسور 16 مگاپیکسلی به‌عنوان دوربین سلفی استفاده شده است که در مجموع کیفیت بسیار خوبی را در اختیار کاربر قرار می‌دهد. ویژگی‌های مختلفی از جمله عکاسی Panorama، عکاسی HDR، قابلیت فوکوس اتوماتیک یا فوکوس با اشاره روی سوژه تعدادی از ویژگی‌های این دوربین است. نمایشگر P8 از نوع LCD با فناوری IPS است و اندازه‌ی 5.5 اینچی دارد. رزولوشن این صفحه‌نمایش FullHD معادل 1080x1920 پیکسل است که روشنایی و وضوح بسیار خوبی دارد و برای بازی و تماشای فیلم مناسب است. با وجود سنسور اثر انگشت هم می‌توانید از امنیت فایل‌های شخصی و دیتاهای روی گوشی خود اطمینان داشته باشید. این گوشی برای کسانی مناسب است که می‌خواهند یک موبایل جدید با امکانات خوب داشته باشند ولی هزینه‌ی زیادی هم برای آن نپردازند. برند الفون نامی جدید در صنعت گوشی‌های همراه است و باید دید تا چه حد در رقابت بازار گوشی‌های میان‌رده و در میان برندهای موفق دیگر مثل هوآوی، شیائومی و دیگر شرکت‌ها موفق خواهد بود.</p>
                                </div> <a href="#" class="c-mask__handler">ادامه مطلب</a></div>
                        </section>
                        <section class="c-content-expert__stats">
                            <label for="quality">کیفیت ساخت</label>
                            <select id="quality">
                                <option value="1">خیلی بد</option>
                                <option value="2">بد</option>
                                <option value="3">معمولی</option>
                                <option value="4">خوب</option>
                                <option value="5">عالی</option>
                            </select>
                        </section>
                    </article>
                </div> --}}
                {{-- <div id="params" class="c-content-expert is-active">
                    <article>
                        <h2 class="c-params__headline"> مشخصات فنی <span>Elephone P8 Dual SIM 64GB Mobile Phone</span></h2>
                        <section>
                            <h3 class="c-params__title">مشخصات کلی</h3>
                            <ul class="c-params__list">
                                <li>
                                    <div class="c-params__list-key"> <span class="block">ابعاد</span></div>
                                    <div class="c-params__list-value"> <span class="block">9.5 × 75.5 × 153.9 میلی‌متر</span></div>
                                </li>
                                <li>
                                    <div class="c-params__list-key"> <span class="block">توضیحات سیم کارت</span></div>
                                    <div class="c-params__list-value"> <span class="block">سایز نانو (8.8 × 12.3 میلی‌متر)</span></div>
                                </li>
                                <li>
                                    <div class="c-params__list-key"> <span class="block">وزن</span></div>
                                    <div class="c-params__list-value"> <span class="block">186 گرم</span></div>
                                </li>
                                <li>
                                    <div class="c-params__list-key"> <span class="block">ساختار بدنه</span></div>
                                    <div class="c-params__list-value"> <span class="block">کاربرد شیار دوم برای سیم‌کارت یا کارت حافظه‌ی جانبی</span> <span class="block">قاب پشتی کاملا فلزی از جنس آلومینیوم</span></div>
                                </li>
                                <li>
                                    <div class="c-params__list-key"> <span class="block">ویژگی‌های خاص</span></div>
                                    <div class="c-params__list-value"> <span class="block">مجهز به حس‌گر اثرانگشت , مناسب بازی , مناسب عکاسی , مناسب عکاسی سلفی</span></div>
                                </li>
                                <li>
                                    <div class="c-params__list-key"> <span class="block">تعداد سیم کارت</span></div>
                                    <div class="c-params__list-value"> <span class="block">دو سیم کارت</span></div>
                                </li>
                            </ul>
                        </section>
                    </article>
                </div> --}}
                <div id="comments" class="c-content-expert is-active">
                    {{-- <h2 class="c-comments__headline"> امتیاز کاربران به: <span> تبلت سامسونگ مدل GALAXY TAB S6 ظرفیت 128 گیگابایت  | ۲ / ۵ (۴۲ نفر)</span></h2> --}}
                    <div class="c-comments__summary">
                        {{-- <div class="c-comments__summary-box">rating</div> --}}
                        <div class="c-comments__summary-note">
                            <span>شما هم می‌توانید در مورد این کالا نظر بدهید.</span>
                            <p>
                                <?php if (Auth::check()): ?>
                                <div class="comment-new">
                                <div class="form-holder">
                                    <form action="{{route('commen.store') }}" method="POST">
                                        @csrf


                                        <label for="">متن نظر شما (اجباری)</label>
                                        <textarea name="comment" placeholder="متن نظر خود را بنویسید"></textarea>

                                        {{-- <label for="">رتبه</label>
                                        <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="" data-size="xs"> --}}

                                        <input type="hidden" value="{{ $pro->id }}" name="product_id" >
                                        <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">

                                        <button type="submit" class="btn-add-comment btn-default">
                                            <span>ارسال نظر جدید</span>
                                        </button>

                                    </form>
                                </div>
                            </div>



                                <?php else: ?>
                                   <a href="{{ route('login') }}"> برای ثبت نظر، لازم است ابتدا وارد حساب کاربری خود شوید.</a>
                                <?php endif; ?>
                            </p>

                        </div>
                    </div>
                    <div class="c-comments__filter">
                        <h4 class="c-faq__filter-title">نظرات کاربران</h4>
                        <?php if (count($comments) != 0): ?>
                        <h4 class="mb-5">برای این محصول {{count($comments)}} نظر  وارد شده‌است</h4>
                        <?php else: ?>
                        <h4 class="mb-5">برای این محصول نظری وارد نشده‌است</h4>
                        <?php endif; ?>
                        {{-- <ul class="c-faq__filter-items" data-title="مرتب‌سازی بر اساس:">
                            <li><a class="is-active" href="#">نظر خریداران</a></li>
                            <li><a href="#">مفیدترین نظرات</a></li>
                            <li><a href="#">جدیدترین نظرات</a></li>
                        </ul> --}}
                    </div>
                    <div class="product-comment-list">
                        <ul class="c-comments__list">
                            <?php foreach ($comments as $comment): ?>
                            <li>
                                <section>
                                    <div class="aside">
                                        {{-- <div class="c-message-light c-message-light--purchased">خریدار این محصول</div> --}}
                                        <div class="c-comments__user-shopping">
                                            <li>{{$comment->user->name}}</li>
                                            {{-- <li>خریداری شده از: دیجی کالا</li> --}}
                                        </div>
                                        {{-- <div class="c-message-light c-message-light--opinion-negative"> خرید این محصول را توصیه نمی‌کنم</div> --}}
                                    </div>
                                    <div class="article">
                                        {{-- <div class="header"> <span>بررسی الفون p8</span> <span>توسط محمدزمان کلانی ساروکلایی در تاریخ ۷ شهریور ۱۳۹۷</span></div> --}}
                                        {{-- <div class="c-comments__evaluation">
                                            <div class="c-comments__evaluation-positive"> <span>نقاط قوت</span>
                                                <ul>
                                                    <li>رم و حافظه داخلی بالا</li>
                                                </ul>
                                            </div>
                                            <div class="c-comments__evaluation-negative"> <span>نقاط ضعف</span>
                                                <ul>
                                                    <li>باطری ضعیف</li>
                                                    <li>دوربین ضعیف در شب</li>
                                                    <li>قیمت بالا</li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                        <p>
                                            {{$comment->comment}}
                                        </p>
                                        {{-- <div class="footer">
                                            <div class="c-comments__likes"> <span>آیا این نظر برایتان مفید بود؟</span>
                                                <button class="btn-like"> ۷۵ بله </button>
                                                <button class="btn-like"> ۲۴ خیر </button>
                                            </div>
                                        </div> --}}
                                    </div>
                                </section>
                            </li>
                            <?php endforeach; ?>

                        </ul>
                        {{-- <div class="c-pager">
                            <ul class="c-pager__items">
                                <li><a class="c-pager__item is-active" href="#">1</a></li>
                                <li><a class="c-pager__item" href="#">2</a></li>
                                <li><a class="c-pager__item" href="#">3</a></li>
                                <li><a class="c-pager__item" href="#">4</a></li>
                                <li><a class="c-pager__item" href="#">>></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                {{-- <div id="questions">
                    <div class="c-faq__headline">پرسش و پاسخ <span>پرسش خود را در مورد محصول مطرح نمایید</span></div>
                    <form action="#" class="c-form-faq">
                        <textarea name="qa[body]" title="متن سوال" class="c-ui-textarea__field disabled" disabled=""></textarea>
                        <div class="form-row">
                            <button class="btn-tertiary">ثبت پرسش</button>
                            <div class="agreement">
                                <input id="agree" type="checkbox">
                                <label for="agree"> اولین پاسخی که به پرسش من داده شد، از طریق ایمیل به من اطلاع دهید.
                                    <br> با انتخاب دکمه “ثبت پرسش”، موافقت خود را با قوانین انتشار محتوا در دیجی کالا اعلام می کنم. </label>
                            </div>
                        </div>
                    </form>
                    <div class="c-comments__filter">
                        <h4 class="c-faq__filter-title">نظرات کاربران</h4>
                        <ul class="c-faq__filter-items" data-title="مرتب‌سازی بر اساس:">
                            <li><a class="is-active" href="#">پرسش ها و پاسخ ها ( ۱ پرسش )</a></li>
                            <li><a href="#">بیشترین پاسخ به پرسش های شما</a></li>
                            <li><a href="#">جدیدترین پرسش ها</a></li>
                            <li><a href="#">پرسش های شما</a></li>
                        </ul>
                    </div>
                    <div id="product-questions-list">
                        <ul class="c-faq__list">
                            <li class="is-question">
                                <div class="section">
                                    <div class="c-faq__header c-faq__header--question header">
                                        <p class="h5"> پرسش <span>محمدامین Kor</span></p>
                                    </div>
                                    <p>سلام این گوشی الفون مدلp8 دوسیم کارته ظرفیت64 ایا رجستری شدس؟اگه نه میشه خودمون رجستریش کنیم؟</p>
                                    <div class="footer"> <em>۸ شهریور ۱۳۹۷</em> <a href="#" class="btn-link-spoiler js-add-answer-btn">به این پرسش پاسخ دهید (۱ پاسخ) </a></div>
                                </div>
                            </li>
                            <li class="is-answer">
                                <div class="section">
                                    <div class="header">
                                        <p class="h5">پاسخ</p>
                                    </div>
                                    <div class="c-faq__answer-row">
                                        <div class="c-faq__answer-col c-faq__answer-col--form"> <span class="h3">به این سوال پاسخ دهید</span>
                                            <form action="#">
                                                <textarea></textarea>
                                                <div class="form-row">
                                                    <button class="btn-default">ثبت پاسخ</button>
                                                    <div class="agreement">
                                                        <input id="agree" type="checkbox">
                                                        <label for="agree">با انتخاب دکمه "ثبت پاسخ"، موافقت خود را با قوانین انتشار محتوا در دیجی‌کالا اعلام می‌کنم.</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="c-faq__answer-col c-faq__answer-col--rules"> <span class="h4">چگونه یک پاسخ مناسب بنویسیم ؟</span>
                                            <ul class="c-faq__rules-list">
                                                <li> <span class="h5">قبلا از این محصول استفاده کرده‌اید؟</span>
                                                    <p>همیشه بهتر است، به سوالاتی پاسخ بدهید که سوال شخصی شما پیش از این بوده و با تجربه یا تحقیق پاسخ آن را بدست آورده اید.</p>
                                                </li>
                                                <li> <span class="h5">خوانندگان خود را آموزش دهید</span>
                                                    <p>اگر سوال پرسیده شده مربوط به تخصص یا تجربه شماست، بدون تعصب، پاسخ مرتبط را به شیوه ای که خواننده بتواند از آن استفاده کند، ارائه دهید.</p>
                                                </li>
                                                <li> <span class="h5">خودتان باشید، آموزنده باشید</span>
                                                    <p>نظرات و انتقادات خودتان را بازگو کنید اما به یاد داشته باشید که نظراتتان باید منطقی باشد.</p>
                                                </li>
                                                <li> <span class="h5">مختصرگو باشید</span>
                                                    <p>خلاق باشید اما موضوع نقد را فراموش نکنید، یک عنوان جذاب همیشه خوانندگان را جذب می کند.</p>
                                                </li>
                                                <li> <span class="h5">خوانا بنویسید</span>
                                                    <p>یک ویرایش صحیح و کنترل املای صحیح کلمات اعتبار بیشتری به نقد و بررسی نوشته شده توسط شما می دهد. همچنین برای بالا رفتن خوانایی، فاصله بین پاراگراف ها و بالت گذاری را رعایت کنید.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="is-answer">
                                <div class="section">
                                    <div class="header">
                                        <p class="h5">پاسخ <span>حسن شفیعی</span></p>
                                    </div>
                                    <p>سلام گوشی نو هستش برادر میتونی بعد خرید مالکیت بزنی هیچ مشکلی نداره.. دسته دوم نیس که بگی رجیستر هس یا نه. شما از یه فروشگاه معتبر دیجی کالا خرید میکنی.</p>
                                    <div class="footer"> <em>۲۱ مهر ۱۳۹۷</em>
                                        <div class="c-faq__likes"> <span>آیا این پاسخ برایتان مفید بود ؟</span>
                                            <button class="btn-like"> بله ۲۳ </button>
                                            <button class="btn-like"> خیر ۵ </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </section>
        <section class="product-wrapper container">
            <div class="headline">
                <h3>محصولات مرتبط</h3></div>
            <div id="vpslider" class="swiper-container">
                <div class="product-box swiper-wrapper">
                    @foreach ($mortabet as $item)

                    <div class="product-item swiper-slide">
                        <a href="#">
                            <img src="/{{$item->image}}" alt="">
                        </a>
                        <a class="title" href="#">{{ $item->name }}</a>
                        @if($item->discount != 0 && $item->price != 0)
                        <div class="inc-product-price">
                            <del>{{$item->price}}</del>
                            <div class="c-price__discount-oval"><span>{{$item->discount}}٪</span></div>
                            <span class="price">{{(1-($item->discount)/100)*$item->price}}</span> تومان
                        </div>
                        @elseif($item->discount == 0 && $item->price != 0)
                            <span class="price">{{$item->price}} تومان</span>
                        @elseif($item->price == 0)
                        <span style="color:red" class="price">برای اطلاع از قیمت هاتماس بگیرید.</span>
                        @endif

                        {{-- <div class="inc-product-price">
                            <del>{{$item->price}}</del>
                            <div class="c-price__discount-oval"><span>{{$item->discount}}٪</span></div>
                            <span class="price">{{(1-($item->discount)/100)*$item->price}}</span>تومان
                        </div> --}}
                        {{-- <span class="price">۲,۴۵۶,۰۰۰ تومان</span> --}}
                    </div>
                    @endforeach

                </div>
                <div id="vpslider-nbtn" class="slider-nbtn swiper-button-next"></div>
                <div id="vpslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
            </div>
        </section>
    </div>

@endsection


@section('js')

@endsection
