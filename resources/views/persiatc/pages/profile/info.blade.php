@extends('persiatc.pages.profile.layout', ['title'=> 'فروشگاه اینترنتی'])

@section('content-profile')

    <div class="user-main">
        <div class="private-info full-col">
            <div class="o-headline o-headline--profile"><span>اطلاعات شخصی</span></div>
            <div class="private-info--table">
                <div class="private-info--row">
                    <div class="private-info--col"><span class="col-title">نام و نام خانوادگی</span><span class="col-value">{{auth::user()->name}}</span></div>
                    <div class="private-info--col"><span class="col-title">پست الکترونیک :</span><span class="col-value">{{auth::user()->email ?? '-'}}</span></div>
                </div>
                <div class="private-info--row">
                    <div class="private-info--col"><span class="col-title">شماره تلفن همراه:</span><span class="col-value"> {{auth::user()->mobile}} </span></div>
                    <div class="private-info--col"><span class="col-title">جنسیت :</span><span class="col-value">  {{auth::user()->gender->fa_name ?? '-'}}  </span></div>
                </div>

                <div class="c-profile-stats__action"><a href="useredit" class="btn-link-spoiler btn-link-spoiler--edit"><i class="fa fa-pen"></i> ویرایش اطلاعات شخصی</a></div>
            </div>
        </div>
    </div>


@endsection
