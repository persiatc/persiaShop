
@extends('persiatc.pages.profile.layout', ['title'=> 'فروشگاه اینترنتی'])

@section('content-profile')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>{{ $message }}</strong>
</div>
@endif


<div class="o-headline o-headline--profile"><span>آخرین سفارش‌ها </span></div>
            @if(count($factors) > 0)
                <div class="c-table-orders">
                    <div class="c-table-orders__head--highlighted">
                        <div>#</div>
                        <div>شماره سفارش</div>
                        <div>تاریخ</div>
                        <div>مبلغ قابل پرداخت</div>
                        <div>مبلغ کل</div>
                        <div>عملیات پرداخت</div>
                        <div>عملیات</div>
                    </div>
                    <div class="c-table-orders__body">
                        @foreach ($factors as $factor)
                        <div class="table-row">
                            <div>{{ $loop->index }}</div>
                            <div>{{$factor->id}}</div>
                            <div>{{ Verta::instance($factor->created_at)->format('%B %d، %Y') }}</div>
                            <div>۰</div>
                            <div>{{$factor->sum}} تومان</div>

                            <div><a class="c-table-orders__payment-status--ok" href="{{ route('do.payment.faild',[$factor->id]) }}">پرداخت </a></div>
                            <div>
                                <form class="" action="{{route('factor.destroy', ['factor'=>$factor->id])}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <button type="submit" onclick="return confirm('آیا برای حذف مطمین هستید؟')"><i class="fa fa-trash"></i></button>
                                  </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="o-headline o-headline--profile" style="text-align: center;">
                    <span>فاکتور پرداخت نشده ایی ندارید</span>
                </div>
            @endif
@endsection
