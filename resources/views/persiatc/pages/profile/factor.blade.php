
@extends('persiatc.pages.profile.layout', ['title'=> 'فروشگاه اینترنتی'])

@section('content-profile')
<div class="o-headline o-headline--profile"><span>آخرین سفارش‌ها </span></div>
    <div class="c-table-orders">
        <div class="c-table-orders__head--highlighted">
            <div>#</div>
            <div>شماره سفارش</div>
            <div>تاریخ</div>
            {{-- <div>مبلغ قابل پرداخت</div> --}}
            <div>مبلغ کل</div>
            <div>عملیات پرداخت</div>
            {{-- <div>جزییات</div> --}}
        </div>
        <div class="c-table-orders__body">
            @foreach ($factors as $factor)
                <?php $products = $factor->product()->get();?>
                {{-- @foreach ($products as $product) --}}
                    <div class="table-row">
                        <div>{{ $loop->index }}</div>
                        <div>{{$factor->id}}</div>
                        <div>{{ Verta::instance($factor->created_at)->format('%B %d، %Y') }}</div>
                        {{-- <div>۰</div> --}}
                        <div>{{$factor->sum}} تومان</div>
                        <div><span class="c-table-orders__payment-status--ok">موفق</span></div>
                        {{-- <div><a href="#"><i class="fa fa-chevron-left"></i></a></div> --}}
                    </div>
                {{-- @endforeach --}}
            @endforeach


        </div>
    </div>
@endsection
