
@extends('persiatc.pages.profile.layout', ['title'=> 'فروشگاه اینترنتی'])

@section('content-profile')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>{{ $message }}</strong>
</div>
@endif

<div class="o-page__content">
        {{-- <div class="c-message-light c-message-light--info">
            <div class="c-message-light__justify">
                <p class="c-message-light--text">با تایید شماره همراه، از این پس می‌توانید ورودی سریع و آسان داشته باشید. در صورت عدم تایید، امکان ورود با شماره همراه وجود ندارد</p>
                <a href="#" class="btn-light btn-light--gray btn-light--verify">تایید شماره همراه</a>
            </div>
        </div> --}}
    <div class="profile-navbar">
        <span class="title">آدرس ها</span>
        <button class="c-profile-navbar__btn-location js-add-address-btn"><i class="fa fa-map-marked"></i></button>
    </div>

    <div class="user-main">
        <div class="address-btn" id="addnewaddr">
            <button class="c-profile-address-add">افزودن آدرس جدید</button>
        </div>
        <div class="address-section">
            <div class="profile-address-card">
                <div class="c-profile-address-card__desc">
                    <h4>حسن شفعی</h4>
                    <p class="c-checkout-address__text">استان آذربایجان غربی، ‌شهر ماکو، شهرک ولیعصر - سایت ب - نت پارادیس</p>
                </div>
                <div class="c-profile-address-card__data">
                    <ul class="c-profile-address-card__methods">
                        <li class="c-profile-address-card__method c-profile-address-card__method--post">کد پستی : ۲۸۲۳۵۴۷۲</li>
                        <li class="c-profile-address-card__method c-profile-address-card__method--mobile">تلفن همراه : ۰۸۸۱۲۳۴۷</li>
                    </ul>
                    <div class="c-profile-address-card__actions">
                        <button class="btn-note">ویرایش</button>
                        <button class="btn-note">حذف</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

<div class="modal-checkout container" id="address-modal">
    <div class="container">
        <div class="c-form-checkout__headline">افزودن آدرس جدید</div>
        <form>
            <div class="group-input">
                <div class="flname">
                    <span>نام و نام خانوادگی تحویل گیرنده</span>
                    <input type="text" placeholder="نام تحویل گیرنده را وارد کنید">
                </div>
                <div class="mob">
                    <span>شماره موبایل</span>
                    <input type="text" placeholder="09xxxxxxxx">
                </div>
            </div>
            <div class="group-input">
                <div class="flname">
                    <span>استان</span>
                    <select name="provinces">
                        <option value="1">آذربایجان غربی</option>
                        <option value="1">آذربایجان غربی</option>
                        <option value="1">آذربایجان غربی</option>
                        <option value="1">آذربایجان غربی</option>
                    </select>
                </div>
                <div class="mob">
                    <span>شهر</span>
                    <select name="city" >
                        <option value="1">ماکو</option>
                        <option value="1">ماکو</option>
                        <option value="1">ماکو</option>
                        <option value="1">ماکو</option>
                        <option value="1">ماکو</option>
                    </select>
                </div>
            </div>
            <div class="textarea-area">
                <span>آدرس پستی</span><br>
                <textarea name="" id="textarea"></textarea>
            </div>
            <div class="textarea-area">
                <span>کد پستی</span><br>
                <input type="text">
            </div>
            <div class="foot">
                <button class="btn-checked">ثبت و ارسال به این آدرس</button>
                <a class="btn-link-spoiler" href="#">انصراف و بازگشت</a>
            </div>
        </form>
    </div>
    <button class="close-modal"><i class="fa fa-plus"></i></button>
</div>
@endsection
