
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
        @foreach ($addresses as $address)
            <div class="address-section">
                <div class="profile-address-card">
                    <div class="c-profile-address-card__desc">
                        <h4>{{$address->name}}</h4>
                        <p class="c-checkout-address__text">
                            استان  {{$address->province}} ، ‌شهر {{$address->city}} ، {{$address->address}}
                            @if($address->status == 1)<button class="c-checkout-contact__btn-edit"> آدرس فعال </button>@endif
                            @if($address->status == 0)<button class="c-checkout-contact__btn-edit"> فعال کردن این ادرس </button>@endif
                        </p>
                    </div>
                    <div class="c-profile-address-card__data">
                        <ul class="c-profile-address-card__methods">
                            <li class="c-profile-address-card__method c-profile-address-card__method--post">کد پستی : {{$address->code_posti}}</li>
                            <li class="c-profile-address-card__method c-profile-address-card__method--mobile">تلفن همراه : {{$address->mobile}}</li>
                        </ul>
                        <div class="c-profile-address-card__actions">
                            <a href="{{route('address.edit', $address->id)}}" class="btn-note">ویرایش</a>

                            <form action="{{route('address.destroy', ['address'=>$address->id])}}" method="post" style="display:inline">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <button type="submit" class="btn-note" onclick="return confirm('آیا برای حذف اطمینان دارید؟');">حذف</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>



</div>

<div class="modal-checkout container" id="address-modal">
    <div class="container">
        <div class="c-form-checkout__headline">افزودن آدرس جدید</div>
        <form action="{{ route('address.store') }}" method="post" >
            @csrf
            <div class="group-input">
                <div class="flname">
                    <span>نام و نام خانوادگی تحویل گیرنده</span>
                    <input type="text" name="name" placeholder="نام تحویل گیرنده را وارد کنید">
                </div>
                <div class="mob">
                    <span>شماره موبایل</span>
                    <input type="text" name="mobile" placeholder="09xxxxxxxx">
                </div>
            </div>
            <div class="group-input">
                <div class="flname">
                    <span>استان</span>
                    <input type="text" name="province" placeholder="">

                    {{-- <select name="provinces">
                        <option value="1">آذربایجان غربی</option>
                        <option value="1">آذربایجان غربی</option>
                        <option value="1">آذربایجان غربی</option>
                        <option value="1">آذربایجان غربی</option>
                    </select> --}}
                </div>
                <div class="mob">
                    <span>شهر</span>
                    <input type="text" name="city" placeholder="">

                    {{-- <select name="city" >
                        <option value="1">ماکو</option>
                        <option value="1">ماکو</option>
                        <option value="1">ماکو</option>
                        <option value="1">ماکو</option>
                        <option value="1">ماکو</option>
                    </select> --}}
                </div>
            </div>
            <div class="textarea-area">
                <span>آدرس پستی</span><br>
                <textarea name="address" id="textarea"></textarea>
            </div>
            <div class="textarea-area">
                <span>کد پستی</span><br>
                <input type="text" name="code_posti">
            </div>
            <div class="foot">
                <button type="submit"class="btn-checked">ثبت و ارسال به این آدرس</button>
                <a class="btn-link-spoiler" href="#">انصراف و بازگشت</a>
            </div>
        </form>
    </div>
    <button class="close-modal"><i class="fa fa-plus"></i></button>
</div>
@endsection
