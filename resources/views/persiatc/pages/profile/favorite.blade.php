
@extends('persiatc.pages.profile.layout', ['title'=> 'فروشگاه اینترنتی'])

@section('content-profile')
<div class="o-headline o-headline--profile"><span>لیست علاقه‌مندی‌ها</span><span class="grey-txt"> </span></div>
<section class="wishlist-wrapper">
    <ul class="wishlist-list">
        <?php
            $discount = 0;
            $sum = 0;
        ?>
        @foreach ($favorites as $favorite)
            <li class="wishlist-item">
                <div class="wishlist-item-thumb">
                    <a href="{{ url('pro/'.$favorite->product->id) }}"><img style="width:115px;height:115px;" src="/{{$favorite->product->image}}" alt=""></a>
                    <form class="" action="{{route('favorite.destroy', ['favorite'=>$favorite->id])}}" method="post">
                        {{csrf_field()}}
                        {{method_field('delete')}}
                        <button type="submit" class="c-profile-wishlist__list-item-remove"><i class="fa fa-plus"></i></button>
                    </form>
                </div>
                <div class="wishlist-item-content">
                    <a href="{{ url('pro/'.$favorite->product->id) }}" class="title">{{$favorite->product->name}} </a>
                    <div class="wishlist-item-info">
                        {{-- @if($favorite->discount != 0)
                            <div class="c-checkout__price c-checkout__price--del">{{$favorite->price}} تومان </div>
                        @endif
                        <span class="price">{{(1-($favorite->discount)/100)*$favorite->price}} تومان</span> --}}

                        @if($favorite->discount != 0 && $favorite->price != 0)
                            <div class="inc-product-price">
                                <del>{{$favorite->price}}</del>
                                <div class="c-price__discount-oval"><span>{{$favorite->discount}}٪</span></div>
                                <span class="price">{{(1-($favorite->discount)/100)*$favorite->price}}</span> تومان
                            </div>
                        @elseif($favorite->discount == 0 && $favorite->price != 0)
                                <span class="price">{{$favorite->price}} تومان</span>
                        @elseif($favorite->price == 0)
                            <span style="color:red" class="price">برای اطلاع از قیمت هاتماس بگیرید.</span>
                        @endif

                        <a href="{{ url('pro/'.$favorite->product->id) }}" class="btn-primary">مشاهده محصول</a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</section>
@endsection
