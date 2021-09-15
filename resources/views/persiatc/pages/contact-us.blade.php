@extends('persiatc.layouts.master', ['title'=> 'فروشگاه اینترنتی'])

@section('content')

@if($errors->any())
<div class="c-message-light c-message-light--info" style="background-color: #ca4949;color:white">
    @foreach ($errors->all() as $error)
    <div class="c-message-light__justify">
        <p class="c-message-light--text">
        <div>{{ $error }}</div>
        </p>
    </div>
    @endforeach
</div>
@endif

@if($message = Session::get('success'))
<div class="c-message-light c-message-light--info" style="background-color: #b1ee99a8;color:white">
    <div class="c-message-light__justify">
        <p class="c-message-light--text">

            <div>{{ $message }}</div>

        </p>
        {{-- <a href="#" class="btn-light btn-light--gray btn-light--verify">تایید شماره همراه</a> --}}
    </div>
</div>
@endif
  <section class="add-comment container">




        <div class="comment-new">
            <div class="form-holder">
                <h3>فرم ارتباطی</h3>
                <form  action="{{route('contactt.store') }}" method="POST" class="bg-white p-5 contact-form">
                    @csrf
                     <label for="">نام</label>
                    <input type="text" placeholder="عنوان نظر خود را بنویسید">

                    <label for="">ایمیل</label>
                    <input type="text" placeholder="عنوان نظر خود را بنویسید">

                    <label for="">موضوع</label>
                    <input type="text" placeholder="عنوان نظر خود را بنویسید">


                    <label for="">پیام (اجباری)</label>
                    <textarea placeholder="متن نظر خود را بنویسید"></textarea>
                    <button class="btn-default">ارسال پیام</button>
                </form>
            </div>
            <div class="description">
                <h3>اطلاعات ارتباطی</h3>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                      <p><span>آدرس:</span> ایران - تهران - خ کریم خان زند - خ استاد نجات الهی - کوچه حقیقت طلب - پلاک 34 - طبقه اول و دوم </p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                      <p><span>تلفن:</span> <a href="tel://86192165021">86192165 021 </a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                      <p><span>ایمیل:</span> <a href="mailto:info@persiatc.com">info@persiatc.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                      <p><span>وب سایت</span> <a href="www.persiatc.com">www.persiatc.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
