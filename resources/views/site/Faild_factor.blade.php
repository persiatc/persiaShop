@extends('layouts.usersidebar')
                
@section('content')

<div class="sidebar-box ftco-animate col-9">
    
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ $message }}</strong>
    </div>
    @endif

    <section class="ftco-section ftco-cart">
    <div class="container">

        <div class="row">
            <div class=" ftco-animate" style="width: 800px">
                @if(count($factors) > 0)
                <div class="cart-list">             
                    <table class="table">
                        <thead class="thead-primary">
                        <tr class="text-center">
                            <th> شماره فاکتور</th>
                            <th> جمع کل</th>
                            <th>پرداخت</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($factors as $factor): ?>
                           
                                <tr class="text-center">

                                <td class="image-prod">
                                    <h3>{{$factor->id}}</h3>
                                </td>

                                <td class="product-name">
                                    <h3>{{$factor->sum}}</h3>
                                </td>

                                <td class="price">
                                    <a class="btn btn-primary py-3 px-4" href="{{ route('do.payment.faild',[$factor->id]) }}">پرداخت</a>
                                </td>
                                <td class="price">
                                    <form class="" action="{{route('factor.destroy', ['factor'=>$factor->id])}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('آیا برای حذف مطمین هستید؟')" style="color:none; bordeR:1px solid white !important;">حذف</button>
                                      </form>
                                </td>
                            </tr><!-- END TR-->
                          
                          <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                    @else
                    <div class="alert alert-primary alert-block" style="text-align: center;">
                        <button type="button" class="close" data-dismiss="alert" style="margin-top:-10px;">×</button>
                        <strong>فاکتور پرداخت نشده ایی ندارید</strong>
                      </div>
                    @endif

            </div>
        </div>

        
      
    </div>
</section>
</div>
@endsection
