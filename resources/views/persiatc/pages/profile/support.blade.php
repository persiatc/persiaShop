@extends('persiatc.pages.profile.layout', ['title'=> 'فروشگاه اینترنتی'])

@section('content-profile')



<div class="o-headline o-headline--profile"><span> ارسال پیام پشتیبانی</span></div>
<div class="c-profile-return__box">
    @if ($message = Session::get('success'))
        <div class="c-message c-message-light c-message-light--success">
            <p>{{ $message }}</p>
        </div>
    @endif
    {{-- @if ($errors->any()))
        @foreach ($errors->all() as $item)
            <div class="c-message c-message-light c-message-light--danger">
                <p>{{ $item }}</p>
            </div>
        @endforeach
    @endif --}}

    <form action="{{route('supportt.store') }}" method="POST" >
        @csrf
        <p>پیام خود را ارسال کنید. در اولین فرصت رسیدگی میشود.</p>
        <div>
            <input class="c-ui-input__fiel" type="text" name="subject"  placeholder="موضوع">

            <button class="btn-primary" type="submit">ارسال پیام</button>

        </div>
        <div>
            <textarea class="c-ui-input__fiel"  id="" name="content" cols="200" rows="10"  placeholder=" پیام "></textarea>
        </div>
    </form>

</div>
@endsection
