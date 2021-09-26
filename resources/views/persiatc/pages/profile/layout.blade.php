@extends('persiatc.layouts.master', ['title'=> 'فروشگاه اینترنتی'])

@section('content')

<section class="profile-page container">
    <div class="o-page__aside">
        <div class="c-profile-aside">
            <div class="c-profile-box">
                <div class="c-profile-box__header">
                    <div class="c-profile-box__avatar" style="background-image: url(/{{auth::user()->image ?? '../assets/images/avatars/fd4840b2.svg'}})"></div>
                    {{-- <button id="avatar-modal" class="c-profile-box__btn-edit"></button> --}}
                </div>
                <div class="c-profile-box__username">{{auth::user()->name}}</div>
                <div class="c-profile-box__tabs">
                    <a href="#" class="c-profile-box__tab c-profile-box__tab--access">تغییر رمز</a>
                    <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="c-profile-box__tab c-profile-box__tab--sign-out">
                        خروج از حساب
                    </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>

                </div>
            </div>
            <div class="c-profile-menu">
                <div class="c-profile-menu__header">حساب کاربری شما</div>
                <ul class="c-profile-menu__items">
                    <li><a href="userpanel" class="c-profile-menu__url c-profile-menu__url--dashboard">پروفایل</a></li>
                    <li><a href="useredit" class="c-profile-menu__url c-profile-menu__url--personal is-active">ویرایش اطلاعات شخصی</a></li>
                    <li><a href="addresses.html" class="c-profile-menu__url c-profile-menu__url--address">آدرس ها</a></li>
                    {{-- <li><a href="orders.html" class="c-profile-menu__url c-profile-menu__url--orders">همه سفارش ها</a></li> --}}
                    {{-- <li><a href="orders-return.html" class="c-profile-menu__url c-profile-menu__url--return ">درخواست مرجوعی</a></li> --}}
                    <li><a href="/favorite" class="c-profile-menu__url c-profile-menu__url--wishlist">لیست علاقه مندی ها</a></li>
                    <li><a href="/basket" class="c-profile-menu__url c-profile-menu__url--return">سبد خرید</a></li>
                    <li><a href="/factor" class="c-profile-menu__url c-profile-menu__url--gifts">خریدهای انجام شده</a></li>
                    <li><a href="{{ route('factorfaild') }}" class="c-profile-menu__url c-profile-menu__url--notif ">فاکتورهای پرداخت نشده</a></li>
                    <li><a href="/supportt" class="c-profile-menu__url c-profile-menu__url--notification">گزارش مشکلات</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="o-page__content">
        @if($errors->any())

        <div class="c-message-light c-message-light--info" style="background-color: #ca4949;color:white">
            <div class="c-message-light__justify">
                <p class="c-message-light--text">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </p>
                {{-- <a href="#" class="btn-light btn-light--gray btn-light--verify">تایید شماره همراه</a> --}}
            </div>
        </div>
        @endif

       @yield('content-profile')
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

{{-- <section class="product-wrapper container">
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
</section> <!--product slider--> --}}



@endsection
