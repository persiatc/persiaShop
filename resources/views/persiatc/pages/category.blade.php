@extends('persiatc.layouts.master', ['title'=> 'فروشگاه اینترنتی'])

@section('content')

<section class="search container">
    <div class="o-page__aside">
        <div class="c-listing-sidebar">
            <div class="c-box">
                <div class="c-box__header">جستجو در دسته بندی ها:</div>
                <div class="c-box__content"><input type="text" placeholder="نام محصول یا برند مورد نظر را بنویسید…"></div>
            </div>
            {{-- <div class="c-box">
                <div class="c-filter c-filter--switcher">
                    <span>فقط کالاهای موجود</span>
                    <div class="scroll">
                        <span id="circle">
                            <input id="circle_input" type="checkbox">
                        </span>
                    </div>
                </div>
            </div>
            <div class="c-box">
                <div class="c-filter c-filter--switcher">
                    <span>فقط کالاهای آماده ارسال</span>
                    <div class="scroll">
                        <span id="circle">
                            <input id="circle_input" type="checkbox">
                        </span>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="o-page__content">
        <article>
            <nav>
                <ul class="c-breadcrumb">
                    <li><span>فروشگاه اینترنتی ارتباطات پرشیا</span></li>
                    {{-- <li><span>۸۵۵,۲۶۷ کالا</span></li> --}}
                </ul>
            </nav>
            <div class="c-listing">
                <div class="c-listing__header">
                    <ul class="c-listing__sort" data-label="مرتب‌سازی بر اساس :">
                        <li><span>دسته های اصلی :</span></li>
                        <?php foreach ($categories as $category): ?>
                        <li><a href="{{ route('cat.show',['cat'=>$category->id]) }}" class="@if($cat->id == $category->id) is-active @endif">{{$category->fa_name}}</a></li>
                        <?php endforeach; ?>

                    </ul>
                    {{-- <ul class="c-listing__type">
                        <li><button><i class="fa fa-bars"></i></button></li>
                        <li><button class="is-active"><i class="fa fa-grip-horizontal"></i></button></li>
                    </ul> --}}
                </div>
                <ul class="c-listing__items">
                    <?php foreach ($pros as $pro): ?>
                    <li>
                        <div class="c-product-box c-promotion-box ">
                        <a href="{{ url('pro/'.$pro->id) }}" class="c-product-box__img c-promotion-box__image">
                            <img src="/{{$pro->image}}" alt="{{$pro->name}}">
                        </a>
                        <div class="c-product-box__content">
                            <a href="{{ url('pro/'.$pro->id) }}" class="title">{{$pro->name}}</a>

                            @if($pro->discount != 0 && $pro->price != 0)
                            <div class="inc-product-price">
                                <del>{{$pro->price}}</del>
                                <div class="c-price__discount-oval"><span>{{$pro->discount}}٪</span></div>
                                <span class="price">{{(1-($pro->discount)/100)*$pro->price}}</span> تومان
                            </div>
                            @elseif($pro->discount == 0 && $pro->price != 0)
                                <span class="price">{{$pro->price}} تومان</span>
                            @elseif($pro->price == 0)
                            <span style="color:red" class="price">برای اطلاع از قیمت هاتماس بگیرید.</span>
                            @endif

                            {{-- <span class="price">{{$pro->price}} تومان</span> --}}
                        </div>
                        <div class="c-product-box__tags">
                            {{-- <span class="c-tag c-tag--rate">۳.۹</span> --}}
                        </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
                {{-- <div class="c-pager">
                    <ul class="c-pager__items">
                        <li><a class="c-pager__item is-active" href="#">1</a></li>
                        <li><a class="c-pager__item" href="#">2</a></li>
                        <li><a class="c-pager__item" href="#">3</a></li>
                        <li><a class="c-pager__item" href="#">4</a></li>
                        <li><a class="c-pager__item" href="#">>></a></li>
                    </ul>
                </div> --}}
            </div>
        </article>
    </div>
</section>


@endsection
