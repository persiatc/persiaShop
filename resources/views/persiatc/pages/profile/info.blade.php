@extends('persiatc.layouts.master', ['title'=> 'فروشگاه اینترنتی'])

@section('content')

<section class="profile-page container">
    <div class="o-page__aside">
        <div class="c-profile-aside">
            <div class="c-profile-box">
                <div class="c-profile-box__header">
                    <div class="c-profile-box__avatar" style="background-image: url(../assets/images/avatars/fd4840b2.svg)"></div>
                    <button id="avatar-modal" class="c-profile-box__btn-edit"></button>
                </div>
                <div class="c-profile-box__username">حسن شفعی</div>
                <div class="c-profile-box__tabs">
                    <a href="#" class="c-profile-box__tab c-profile-box__tab--access">تغییر رمز</a>
                    <a href="#" class="c-profile-box__tab c-profile-box__tab--sign-out">خروج از حساب</a>
                </div>
            </div>
            <div class="c-profile-menu">
                <div class="c-profile-menu__header">حساب کاربری شما</div>
                <ul class="c-profile-menu__items">
                    <li><a href="index.html" class="c-profile-menu__url c-profile-menu__url--dashboard">پروفایل</a></li>
                    <li><a href="orders.html" class="c-profile-menu__url c-profile-menu__url--orders">همه سفارش ها</a></li>
                    <li><a href="orders-return.html" class="c-profile-menu__url c-profile-menu__url--return ">درخواست مرجوعی</a></li>
                    <li><a href="favorites.html" class="c-profile-menu__url c-profile-menu__url--wishlist">لیست علاقه مندی ها</a></li>
                    <li><a href="comments.html" class="c-profile-menu__url c-profile-menu__url--comments">نقد و نظرات</a></li>
                    <li><a href="giftcards.html" class="c-profile-menu__url c-profile-menu__url--gifts">کارت های هدیه</a></li>
                    <li><a href="addresses.html" class="c-profile-menu__url c-profile-menu__url--address">آدرس ها</a></li>
                    <li><a href="notifierlist.html" class="c-profile-menu__url c-profile-menu__url--notif ">اطلاع رسانی ها</a></li>
                    <li><a href="notification.html" class="c-profile-menu__url c-profile-menu__url--notification">پیغام های من</a></li>
                    <li><a href="personal-info.html" class="c-profile-menu__url c-profile-menu__url--personal is-active">اطلاعات شخصی</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="o-page__content">
        <div class="c-message-light c-message-light--info">
            <div class="c-message-light__justify">
                <p class="c-message-light--text">با تایید شماره همراه، از این پس می‌توانید ورودی سریع و آسان داشته باشید. در صورت عدم تایید، امکان ورود با شماره همراه وجود ندارد</p>
                <a href="#" class="btn-light btn-light--gray btn-light--verify">تایید شماره همراه</a>
            </div>
        </div>
        <div class="user-main">
            <div class="private-info full-col">
                <div class="o-headline o-headline--profile"><span>اطلاعات شخصی</span></div>
                <div class="private-info--table">
                    <div class="private-info--row">
                        <div class="private-info--col"><span class="col-title">نام و نام خانوادگی</span><span class="col-value">حسن شفعی</span></div>
                        <div class="private-info--col"><span class="col-title">پست الکترونیک :</span><span class="col-value">mymail@yahoo.com</span></div>
                    </div>
                    <div class="private-info--row">
                        <div class="private-info--col"><span class="col-title">شماره تلفن همراه:</span><span class="col-value"> ۰۹۲۳۴۵۵۶۶۶۷ </span></div>
                        <div class="private-info--col"><span class="col-title">کد ملی:</span><span class="col-value">  ۲۸۲۲۱۳۴۴۴۴  </span></div>
                    </div>
                    <div class="private-info--row">
                        <div class="private-info--col"><span class="col-title">دریافت خبرنامه:</span><span class="col-value"> خیر </span></div>
                        <div class="private-info--col"><span class="col-title">شماره کارت:</span><span class="col-value"> - </span></div>
                    </div>
                    <div class="c-profile-stats__action"><a href="#" class="btn-link-spoiler btn-link-spoiler--edit"><i class="fa fa-pen"></i> ویرایش اطلاعات شخصی</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="modal-avatar__content">
   <button class="remodal-close"><i class="fa fa-window-close"></i></button>
    <div class="c-remodal-avatar__title">تغییر نمایه کاربری شما</div>
    <ul class="c-profile-avatars">
        <li><span class="c-profile-avatars__item" style="background-image: url(../assets/images/avatars/fd4840b2.svg)"></span></li>
        <li><span class="c-profile-avatars__item" style="background-image: url(../assets/images/avatars/df110dcf.svg)"></span></li>
        <li><span class="c-profile-avatars__item" style="background-image: url(../assets/images/avatars/b5f7d7b8.svg)"></span></li>
        <li><span class="c-profile-avatars__item" style="background-image: url(../assets/images/avatars/e8e1a8b5.svg)"></span></li>
        <li><span class="c-profile-avatars__item" style="background-image: url(../assets/images/avatars/a5a6ccef.svg)"></span></li>
        <li><span class="c-profile-avatars__item" style="background-image: url(../assets/images/avatars/6cdbab30.svg)"></span></li>
        <li><span class="c-profile-avatars__item" style="background-image: url(../assets/images/avatars/2a5b1e32.svg)"></span></li>
        <li><span class="c-profile-avatars__item" style="background-image: url(../assets/images/avatars/61f2d6e4.svg)"></span></li>
    </ul>
</section>

<section class="product-wrapper container">
    <div class="headline"><h3>محصولات پیشنهادی برای شما</h3></div>
    <div id="pslider" class="swiper-container">
        <div class="product-box swiper-wrapper">
            <div class="product-item swiper-slide">
                <a href="#"><img src="../assets/images/965174.jpg" alt=""></a>
                <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a>
                <span class="price">۱,۴۳۳,۰۰۰ تومان</span>
            </div><!-- slide item-->
            <div class="product-item swiper-slide">
                <a href="#"><img src="../assets/images/965174.jpg" alt=""></a>
                <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a>
                <span class="price">۱,۴۳۳,۰۰۰ تومان</span>
            </div><!-- slide item-->
            <div class="product-item swiper-slide">
                <a href="#"><img src="../assets/images/965174.jpg" alt=""></a>
                <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a>
                <span class="price">۱,۴۳۳,۰۰۰ تومان</span>
            </div><!-- slide item-->
            <div class="product-item swiper-slide">
                <a href="#"><img src="../assets/images/965174.jpg" alt=""></a>
                <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a>
                <span class="price">۱,۴۳۳,۰۰۰ تومان</span>
            </div><!-- slide item-->
            <div class="product-item swiper-slide">
                <a href="#"><img src="../assets/images/965174.jpg" alt=""></a>
                <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a>
                <span class="price">۱,۴۳۳,۰۰۰ تومان</span>
            </div><!-- slide item-->
            <div class="product-item swiper-slide">
                <a href="#"><img src="../assets/images/965174.jpg" alt=""></a>
                <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a>
                <span class="price">۱,۴۳۳,۰۰۰ تومان</span>
            </div><!-- slide item-->
            <div class="product-item swiper-slide">
                <a href="#"><img src="../assets/images/965174.jpg" alt=""></a>
                <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a>
                <span class="price">۱,۴۳۳,۰۰۰ تومان</span>
            </div><!-- slide item-->
            <div class="product-item swiper-slide">
                <a href="#"><img src="../assets/images/965174.jpg" alt=""></a>
                <a class="title" href="#">گوشی موبایل شیائومی مدل Redmi Note 8 Pro M1906G7G دو سیم‌ کارت</a>
                <span class="price">۱,۴۳۳,۰۰۰ تومان</span>
            </div><!-- slide item-->

            </div><!--wrapper-->
            <!-- Add Arrows -->
            <div id="pslider-nbtn" class="slider-nbtn swiper-button-next"></div>
            <div id="pslider-pbtn" class="slider-pbtn swiper-button-prev"></div>
        </div>
</section> <!--product slider-->



@endsection
