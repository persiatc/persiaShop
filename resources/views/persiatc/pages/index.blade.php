@extends('persiatc.layouts.master', ['title'=> 'فروشگاه اینترنتی'])

@section('css')
<style>

.main-slider .slide-item{
    height: 590px;
}
</style>
@endsection

@section('content')

<article class="main-article">
    <!--<div class="main-slider">
        <a class="slide-item" href="#" target="_blank" style="background-image: url(persiatc/assets/images/slider/slide9.jpg)"> </a>
    </div>-->
    <div id="mainslider" class="main-slider swiper-container">
        <div class="swiper-wrapper">
            <a href="#" target="_blank" class="slide-item swiper-slide" style="background-image: url(/persiatc/banner2/Banner-Bisim.jpg)"> </a>
            <a href="#" target="_blank" class="slide-item swiper-slide" style="background-image: url(/persiatc/banner2/Banner-HDD.jpg)"> </a>
            <a href="#" target="_blank" class="slide-item swiper-slide" style="background-image: url(/persiatc/banner2/Banner-Server.jpg)"> </a>
            <a href="#" target="_blank" class="slide-item swiper-slide" style="background-image: url(/persiatc/banner2/Banner-Switch.jpg)"> </a>
        </div>
        <div id="mslider-nbtn" class="swiper-button-"></div>
        <div id="mslider-pbtn" class="swiper-button-prev"></div>
        <div class="swiper-pagination mainslider-btn"></div>
    </div>
    <aside class="c-adplacement">
        <a href="#"><img src="/persiatc/banner2/Left-Passive.jpg" alt=""></a>
        <a href="#"><img src="/persiatc/banner2/Left-Sensor.jpg" alt=""></a>
    </aside>
</article>
<div class="clear"></div>

    {{-- <div class="c-swiper-specials--incredible">
        <section class="icontainer">
            <a href="#" class="specials__title">
                <img src="persiatc/assets/images/d9b15d68.png" alt="پیشنهاد شگفت‌انگیز">
                <div class="specials__btn">مشاهده همه</div>
            </a>
            <div class="swiper--specials">
                <div id="inc-slider" class="swiper-container">
                    <div class="product-box swiper-wrapper">
                        <div class="product-item swiper-slide">
                            <a href="#"><img src="persiatc/assets/images/965174.jpg" alt=""></a>
                            <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a>
                            <div class="inc-product-price">
                                <del>۲,۴۵۶,۰۰۰</del>
                                <div class="c-price__discount-oval"><span>۳۰٪</span></div>
                                <span class="price">۱,۴۳۳,۰۰۰ </span>تومان
                            </div>
                            <div class="c-product-box__amazing">
                                <div class="c-product-box__timer">۱۲:۵۲:۳۹</div>
                            </div>
                        </div>
                        <!--item-->
                        <div class="product-item swiper-slide">
                            <a href="#"><img src="persiatc/assets/images/112948101.jpg" alt=""></a>
                            <a class="title" href="#">گوشی موبایل شیائومی مدل Mi 9T M1903F10G دو سیم‌ کارت</a>
                            <div class="inc-product-price">
                                <del>۸۷,۰۰۰</del>
                                <div class="c-price__discount-oval"><span>۴۰٪</span></div>
                                <span class="price">۴۳,۰۰۰ </span>تومان
                            </div>
                            <div class="c-product-box__amazing">
                                <div class="c-product-box__timer">۱۲:۵۲:۳۹</div>
                            </div>
                        </div>
                        <!--item-->
                        <div class="product-item swiper-slide">
                            <a href="#"><img src="persiatc/assets/images/112551619.jpg" alt=""></a>
                            <a class="title" href="#">گوشی موبایل سامسونگ مدل Galaxy Note 10 Plus N975F/DS</a>
                            <div class="inc-product-price">
                                <del>۱۲,۴۵۶,۰۰۰</del>
                                <div class="c-price__discount-oval"><span>۳۰٪</span></div>
                                <span class="price">۹,۴۳۳,۰۰۰ </span>تومان
                            </div>
                            <div class="c-product-box__amazing">
                                <div class="c-product-box__timer">۱۲:۵۲:۳۹</div>
                            </div>
                        </div>
                        <!--item-->
                        <div class="product-item swiper-slide">
                            <a href="#"><img src="persiatc/assets/images/111253599.jpg" alt=""></a>
                            <a class="title" href="#">تبلت سامسونگ مدل Galaxy Tab S5e 10.5 LTE 2019 SM-T725 </a>
                            <div class="inc-product-price">
                                <del>۶,۶۴۵,۰۰۰</del>
                                <div class="c-price__discount-oval"><span>۳۰٪</span></div>
                                <span class="price">۴,۳۵۳,۰۰۰ </span>تومان
                            </div>
                            <div class="c-product-box__amazing">
                                <div class="c-product-box__timer">۱۲:۵۲:۳۹</div>
                            </div>
                        </div>
                        <!--item-->
                        <div class="product-item swiper-slide">
                            <a href="#"><img src="persiatc/assets/images/113944020.jpg" alt=""></a>
                            <a class="title" href="#">اندروید باکس مدل R69</a>
                            <div class="inc-product-price">
                                <del>۲,۵۴۶,۰۰۰</del>
                                <div class="c-price__discount-oval"><span>۶۶٪</span></div>
                                <span class="price">۱,۴۳۳,۰۰۰ </span>تومان
                            </div>
                            <div class="c-product-box__amazing">
                                <div class="c-product-box__timer">۱۲:۵۲:۳۹</div>
                            </div>
                        </div>
                        <!--item-->
                        <div class="product-item swiper-slide">
                            <a href="#"><img src="persiatc/assets/images/2901119.jpg" alt=""></a>
                            <a class="title" href="#">دسته بازی هویت مدل G89W</a>
                            <div class="inc-product-price">
                                <del>۸۷,۰۰۰</del>
                                <div class="c-price__discount-oval"><span>۴۰٪</span></div>
                                <span class="price">۴۳,۰۰۰ </span>تومان
                            </div>
                            <div class="c-product-box__amazing">
                                <div class="c-product-box__timer">۱۲:۵۲:۳۹</div>
                            </div>
                        </div>
                        <!--item-->
                    </div>
                </div>
        </section>
    </div>
    <section class="image-row container">
        <a href="#"><img src="persiatc/assets/images/inc1.jpg" alt=""></a>
        <a href="#"><img src="persiatc/assets/images/inc2.jpg" alt=""></a>
        <a href="#"><img src="persiatc/assets/images/inc3.jpg" alt=""></a>
        <a href="#"><img src="persiatc/assets/images/inc4.jpg" alt=""></a>
    </section>
    <div class="c-swiper-specials--incredible c-swiper-specials--fresh">
        <section class="icontainer">
            <a href="#" class="specials__title">
                <img src="persiatc/assets/images/8af90c4b.png" alt="پیشنهاد شگفت‌انگیز">
                <div class="specials__btn">مشاهده همه</div>
            </a>
            <div class="swiper--specials">
                <div id="sp-slider" class="swiper-container">
                    <div class="product-box swiper-wrapper">
                        <div class="product-item swiper-slide">
                            <a href="#"><img src="persiatc/assets/images/112178547.jpg" alt=""></a>
                            <a class="title" href="#">کنسرو ماهی تون در روغن ماوی مقدار 180 گرم</a>
                            <div class="inc-product-price">
                                <del>۲۴۵,۰۰۰</del>
                                <div class="c-price__discount-oval"><span>۳۳٪</span></div>
                                <span class="price">۱۴۳,۰۰۰ </span>تومان
                            </div>
                            <div class="c-product-box__amazing">
                                <div class="c-product-box__timer">۱۲:۵۲:۳۹</div>
                            </div>
                        </div>
                        <!--item-->
                        <div class="product-item swiper-slide">
                            <a href="#"><img src="persiatc/assets/images/110534625.jpg" alt=""></a>
                            <a class="title" href="#">ماست سبو پروبیوتیک هراز - 2000 گرم</a>
                            <div class="inc-product-price">
                                <del>۸۷,۰۰۰</del>
                                <div class="c-price__discount-oval"><span>۴۰٪</span></div>
                                <span class="price">۴۳,۰۰۰ </span>تومان
                            </div>
                            <div class="c-product-box__amazing">
                                <div class="c-product-box__timer">۱۲:۵۲:۳۹</div>
                            </div>
                        </div>
                        <!--item-->
                        <div class="product-item swiper-slide">
                            <a href="#"><img src="persiatc/assets/images/113929782.jpg" alt=""></a>
                            <a class="title" href="#">میگو سایز 90-71 بیستون - 500 گرم</a>
                            <div class="inc-product-price">
                                <del>۱۲۶,۰۰۰</del>
                                <div class="c-price__discount-oval"><span>۶۳٪</span></div>
                                <span class="price">۳۳,۰۰۰ </span>تومان
                            </div>
                            <div class="c-product-box__amazing">
                                <div class="c-product-box__timer">۱۲:۵۲:۳۹</div>
                            </div>
                        </div>
                        <!--item-->
                        <div class="product-item swiper-slide">
                            <a href="#"><img src="persiatc/assets/images/119512276.jpg" alt=""></a>
                            <a class="title" href="#">شکر قهوه ای بن مانو مقدار 500 گرم</a>
                            <div class="inc-product-price">
                                <del>۴,۰۰۰</del>
                                <div class="c-price__discount-oval"><span>۵۰٪</span></div>
                                <span class="price">۳۳,۰۰۰ </span>تومان
                            </div>
                            <div class="c-product-box__amazing">
                                <div class="c-product-box__timer">۱۲:۵۲:۳۹</div>
                            </div>
                        </div>
                        <!--item-->
                        <div class="product-item swiper-slide">
                            <a href="#"><img src="persiatc/assets/images/114418008.jpg" alt=""></a>
                            <a class="title" href="#">فرآورده کاکائویی مغزدار شیری باراکا - 450 گرم </a>
                            <div class="inc-product-price">
                                <del>۵۶,۰۰۰</del>
                                <div class="c-price__discount-oval"><span>۶٪</span></div>
                                <span class="price">۳۳,۰۰۰ </span>تومان
                            </div>
                            <div class="c-product-box__amazing">
                                <div class="c-product-box__timer">۱۲:۵۲:۳۹</div>
                            </div>
                        </div>
                        <!--item-->
                        <div class="product-item swiper-slide">
                            <a href="#"><img src="persiatc/assets/images/110228964.jpg" alt=""></a>
                            <a class="title" href="#">کوکی اسمارتیزی لاکچری گرجی وزن 350 گرم</a>
                            <div class="inc-product-price">
                                <del>۸۷,۰۰۰</del>
                                <div class="c-price__discount-oval"><span>۴۰٪</span></div>
                                <span class="price">۴۳,۰۰۰ </span>تومان
                            </div>
                            <div class="c-product-box__amazing">
                                <div class="c-product-box__timer">۱۲:۵۲:۳۹</div>
                            </div>
                        </div>
                        <!--item-->
                    </div>
                </div>
        </section>
    </div> --}}
        {{-- <section class="product-wrapper container">
            <div class="headline">
                <h3>کالای دیجیتال</h3>
            </div>
            <div id="pslider" class="swiper-container">
                <div class="product-box swiper-wrapper">
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="persiatc/assets/images/965174.jpg" alt=""></a> <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="persiatc/assets/images/537196.jpg" alt=""></a> <a class="title" href="#">تلویزیون ال ای دی هوشمند ایکس ویژن مدل 43XT725 سایز 43 اینچ</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="persiatc/assets/images/112544124.jpg" alt=""></a> <a class="title" href="#">گوشی موبایل سامسونگ مدل Galaxy Note 10 SM-N970F/DS دو سیم‌کارت </a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="persiatc/assets/images/3307715.jpg" alt=""></a> <a class="title" href="#">کارت حافظه microSDXC ویکو من مدل Final 600X کلاس 10 استاندارد UHS-I</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="persiatc/assets/images/112309225.jpg" alt=""></a> <a class="title" href="#">دسته بازی بی سیم یوکام کد 8008</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="persiatc/assets/images/119239538.jpg" alt=""></a> <a class="title" href="#">فلش مموری کداک مدل Mini Metal K802 ظرفیت 64 گیگ</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="persiatc/assets/images/965174.jpg" alt=""></a> <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a> <span class="price">۱,۴۳۳,۰۰۰ تومان</span></div>
                </div>
                <div id="pslider-nbtn" class="slider-nbtn swiper-button-next"></div>
                <div id="pslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
            </div>
        </section>
        <section class="image-row container">
            <a href="#"><img src="persiatc/assets/images/1000005395.jpg" alt=""></a>
            <a href="#"><img src="persiatc/assets/images/1000019673.jpg" alt=""></a>
            <a href="#"><img src="persiatc/assets/images/1000009159.jpg" alt=""></a>
            <a href="#"><img src="persiatc/assets/images/1816.jpg" alt=""></a>
        </section> --}}
        <section class="product-wrapper container">
            <div class="headline">
                <h3>محبوب‌ترین محصولات</h3>
            </div>
            <div id="vpslider" class="swiper-container">
                <div class="product-box swiper-wrapper">
                    <?php foreach ($favorites as $favorite): ?>
                        <div class="product-item swiper-slide">
                            <a href="{{ url('pro/'.$favorite->id) }}">
                                <img style="height:200px; width:200px;" src="/{{$favorite->image}}" alt="{{$favorite->name}}">
                            </a>
                            <a class="title" href="{{ url('pro/'.$favorite->id) }}">{{$favorite->name}} </a>
                            @if($favorite->discount != 0 && $favorite->price != 0)
                            <div class="inc-product-price">
                                <del>{{$favorite->price}}</del>
                                <div class="c-price__discount-oval"><span>{{$favorite->discount}}٪</span></div>
                                <span class="price">{{(1-($favorite->discount)/100)*$favorite->price}}</span> تومان
                            </div>
                            @elseif($favorite->discount == 0 && $favorite->price != 0)
                                <span class="price">{{$favorite->price}} تومان</span>
                            @elseif($favorite->price == 0)
                            <span style="color:red" class="price">برای اطلاع از قیمت هاتماس بگیرید.</span>
                            @endif

                        </div>
                    <?php endforeach; ?>

                </div>
                <div id="vpslider-nbtn" class="slider-nbtn swiper-button-next"></div>
                <div id="vpslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
            </div>
        </section>
        <section class="image-row container">
            <a href="#"><img style="max-width: 100%" src="persiatc/banner/Banner/banner-2.jpg" alt=""></a>
        </section>


        <section class="product-wrapper container">
            <div class="headline two-headline">
                <h3>محصولات پرفروش</h3>
                {{-- <a href="#">مشاهده همه</a> --}}
            </div>
            <div id="newpslider" class="swiper-container">
                <div class="product-box swiper-wrapper">
                    <?php foreach ($bestsellers as $bestseller): ?>
                        <div class="product-item swiper-slide">
                            <a href="{{ url('pro/'.$bestseller->id) }}">
                                <img style="height:200px; width:200px;" src="/{{$bestseller->image}}" alt="{{$bestseller->name}}">
                            </a>
                            <a class="title" href="{{ url('pro/'.$bestseller->id) }}">{{$bestseller->name}}</a>

                            @if($bestseller->discount != 0 && $bestseller->price != 0)
                            <div class="inc-product-price">
                                <del>{{$bestseller->price}}</del>
                                <div class="c-price__discount-oval"><span>{{$bestseller->discount}}٪</span></div>
                                <span class="price">{{(1-($bestseller->discount)/100)*$bestseller->price}}</span> تومان
                            </div>
                            @elseif($bestseller->discount == 0 && $bestseller->price != 0)
                                <span class="price">{{$bestseller->price}} تومان</span>
                            @elseif($bestseller->price == 0)
                            <span style="color:red" class="price">برای اطلاع از قیمت هاتماس بگیرید.</span>
                            @endif

                            {{-- <div class="inc-product-price">
                                <del>{{$bestseller->price}}</del>
                                <div class="c-price__discount-oval"><span>{{$bestseller->discount}}٪</span></div>
                                <span class="price">{{(1-($bestseller->discount)/100)*$bestseller->price}}</span>تومان
                            </div> --}}
                            {{-- <span class="price">۲,۴۵۶,۰۰۰ تومان</span> --}}
                        </div>
                    <?php endforeach; ?>
                </div>
                <div id="newpslider-nbtn" class="slider-nbtn swiper-button-next"></div>
                <div id="newpslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
            </div>
        </section>


        <section class="product-wrapper container">
            <div class="headline">
                <h3>دسته‌بندی محصولات (برای دیدن محصولات هر دسته کلیک کنید)</h3>
            </div>
            <div id="mostpslider" class="swiper-container">
                <div class="product-box swiper-wrapper">
                    <?php foreach ($allcategories as $category): ?>
                        <div class="product-item swiper-slide">
                            <a href="{{ route('cat.show',['cat'=>$category->id]) }}">
                                <img src="/{{$category->image}}" alt="">
                            </a>
                            <a class="title" href="{{ route('cat.show',['cat'=>$category->id]) }}">{{$category->fa_name}}</a>
                            {{-- <span class="price">۲۴۶,۰۰۰ تومان</span> --}}
                        </div>
                    <?php endforeach; ?>
                </div>
                <div id="mostpslider-nbtn" class="slider-nbtn swiper-button-next"></div>
                <div id="mostpslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
            </div>
        </section>


        <section class="image-row container">
            <a href="#"><img src="persiatc/banner/Banner/03.jpg" alt=""></a>
            <a href="#"><img src="persiatc/banner/Banner/04.jpg" alt=""></a>
        </section>
        <section class="product-wrapper container">
            <div class="headline">
                <h3>برندهای ویژه</h3>
            </div>
            <div id="brandslider" class="swiper-container">
                <div class="product-box swiper-wrapper">
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="persiatc/assets/images/brand/adata.png" alt=""></a>
                    </div>
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="persiatc/assets/images/brand/samsung.png" alt=""></a>
                    </div>
                    <div class="product-item swiper-slide">
                        <a href="#"><img src="persiatc/assets/images/brand/xvision.png" alt=""></a>
                    </div>

                    <div class="product-item swiper-slide">
                        <a href="#"><img style="width:147px !important; height:147px !important" src="persiatc/brand/motorola-4-282950.png" alt=""></a>
                    </div>
                    <div class="product-item swiper-slide">
                        <a href="#"><img style="width:147px !important; height:147px !important" src="persiatc/brand/western.png" alt=""></a>
                    </div>

                    <div class="product-item swiper-slide">
                        <a href="#"><img style="width:147px !important; height:147px !important" src="persiatc/brand/hikvision.jpg" alt=""></a>
                    </div>
                    {{-- <div class="product-item swiper-slide">
                        <a href="#"><img style="width:147px !important; height:147px !important" src="persiatc/brand/hp.png" alt=""></a>
                    </div>
                    <div class="product-item swiper-slide">
                        <a href="#"><img style="width:147px !important; height:147px !important" src="persiatc/brand/intel_PNG2.png" alt=""></a>
                    </div> --}}
                </div>
                <div id="brandslider-nbtn" class="slider-nbtn swiper-button-next"></div>
                <div id="brandslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
            </div>
        </section>

@endsection
