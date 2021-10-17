@extends('persiatc.pages.profile.layout', ['title'=> 'فروشگاه اینترنتی'])

@section('content-profile')
<form action="{{route('userupdate')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="user-main">
        <div class="private-info full-col">
            <div class="o-headline o-headline--profile"><span>ویرایش اطلاعات شخصی</span></div>
            <div class="private-info--table">
                <div class="private-info--row">
                    <div class="private-info--col">
                        <span class="col-title">نام و نام خانوادگی</span>
                        <span class="col-value"><input name="name" type="text" class="c-ui-input__fiel" value="{{auth::user()->name}}"></span>
                    </div>
                    <div class="private-info--col">
                        <span class="col-title">پست الکترونیک :</span>
                        <span class="col-value">
                            <input name="email" type="text" class="c-ui-input__fiel" value="{{auth::user()->email ?? ''}}">
                        </span>
                    </div>
                </div>
                <div class="private-info--row">
                    <div class="private-info--col">
                        <span class="col-title">تصویر:</span>
                        @if(auth::user()->image)
                        <div class="form-group">
                            <img src="/{{auth::user()->image}}" alt="{{auth::user()->name}}" style="height:100px; width:100px">
                          </div>
                          @endif

                          <input  name="image" type="file">
                        <span class="col-value">
                        </span>
                    </div>


                    <div class="private-info--col">
                        <span class="col-title">جنسیت :</span>
                        <span class="col-value">
                            @if(isset(auth::user()->gender_id))
                            @foreach ($genders as $gender)
                            <label class="container">{{$gender->fa_name}}
                                @if(auth::user()->gender->id == $gender->id)
                                    <input type="radio" name="gender_id" value="{{$gender->id}}" checked>
                                @else
                                    <input type="radio" name="gender_id" value="{{$gender->id}}">
                                 @endif
                              </label>
                            @endforeach
                        @else
                            @foreach ($genders as $gender)
                            <label class="container">{{$gender->fa_name}}
                                <input type="radio" name="gender_id" value="{{$gender->id}}">
                              </label>
                            @endforeach
                        @endif
                        </span>
                    </div>
                </div>

                <div class="c-profile-stats__action">
                    <button  class="btn-link-spoiler btn-link-spoiler--edit" type="submit" >
                        <i class="fa fa-pen"></i>
                        ذخیره تغییرات
                    </button>
                </div>
            </div>
        </div>
    </div>

</form>
@endsection
