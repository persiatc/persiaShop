@extends('persiatc.layouts.master', ['title'=> 'فروشگاه اینترنتی'])

@section('content')

<section class="main-cart container">
    <div class="o-page__content">
        <div class="o-headline">
            <div id="main-cart"><span class="c-checkout-text c-checkout__tab--active">سبد خرید</span><span class="c-checkout__tab-counter">۳</span></div>
            <div id="sfl-cart"><span class="c-checkout-text">لیست خرید بعدی</span></div>
        </div>
        <div class="c-checkout">

            <section class="product-wrapper container">
                <div class="headline">
                    <h3>محصولات مرتبط</h3></div>
                <div id="vpslider" class="swiper-container">
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
                    <div id="vpslider-nbtn" class="slider-nbtn swiper-button-next"></div>
                    <div id="vpslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
                </div>
            </section>
        </div>
    </div>

</section>
<section class="cart-empty container" id="cart-sfl">
    <div class="cart-sfl__icon"></div>
    <div class="cart-empty__title" style="font-size: 2em;"> لیست خرید بعدی شما خالی است! </div>
    <div class="cart-sfl__links">
        <p>شما می‌توانید محصولاتی که به سبد خرید خود افزوده‌اید و فعلا قصد خرید آن‌ها را ندارید، در لیست خرید بعدی قرار داده و هر زمان مایل بودید آن‌ها را به سبد خرید اضافه کرده و خرید آن‌ها را تکمیل کنید. </p>
    </div>
</section>





















<section class="product-wrapper container">
    <div class="headline">
        <h3>محصولات مرتبط</h3></div>
    <div id="vpslider" class="swiper-container">
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
        <div id="vpslider-nbtn" class="slider-nbtn swiper-button-next"></div>
        <div id="vpslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
    </div>
</section>



@endsection
