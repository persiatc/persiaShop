@extends('layouts.admin')
@section('content')


<section class="content">
  <!-- Info boxes -->
  <div class="row">



    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">تعداد کل فروش</span>
          <span class="info-box-number">{{$sum}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">تعداد کاربران </span>
          <span class="info-box-number">{{$num_user}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
     <!-- fix for small devices only -->
     <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-book"></i></span>

        <div class="info-box-content">
          <span class="info-box-text"> تعداد محصولات</span>
          <span class="info-box-number">{{$num_product}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-edit"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">تعداد پست ها</span>
          <span class="info-box-number">{{$num_post}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

  </div>
  <!-- /.row -->



  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <div class="col-md-8">

       <!-- TABLE: LATEST ORDERS -->
       <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">آخرین فروش ها</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
              <tr>
                <th>شماره</th>
                <th>محصول</th>
                <th> بازدید</th>
                <th>تعداد فروش</th>
                <th>تخفیف</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($latest_sales as $item)
                  <tr>
                    <td><a href="{{route('product.index')}}">{{$item->id}}</a></td>
                    <td>{{$item->name}}</td>
                    <td><span class="label label-info">{{$item->sales_number}}</span></td>
                    <td><span class="label label-success">{{$item->download_number}}</span></td>
                    <td><span class="label label-danger">{{$item->discount}}%</span></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          {{-- <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">نمایش همه</a> --}}
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->


      {{-- <div class="row"> --}}

        {{-- <div class="col-md-10"> --}}
          <!-- USERS LIST -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">آخرین کاربران</h3>

              <div class="box-tools pull-right">
                <span class="label label-danger">{{count($all_user)}} کاربر </span>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <ul class="users-list clearfix">
                @foreach ($all_user as $item)
                <li>
                  {{-- @if($item->image)
                  <img src="/{{$item->image}}" alt="User Image">
                  @else
                  <img src="/avatar/4.jpeg" alt="User Image">
                  @endif --}}
                  <a class="users-list-name" href="#">{{$item->name}}</a>
                  <span class="users-list-date">{{ Verta::instance($item->created_at)->format('%B %d، %Y') }}</span>
                </li>
                @endforeach
              </ul>
              <!-- /.users-list -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="{{route('user.index')}}" class="uppercase">نمایش همه کاربران</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!--/.box -->
        {{-- </div> --}}
        <!-- /.col -->
      {{-- </div> --}}
      <!-- /.row -->


    </div>
    <!-- /.col -->

    <div class="col-md-4">

      <!-- /.info-box -->
      <div class="info-box bg-green">
        <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">تعداد برگزیده ها</span>
          <span class="info-box-number">{{$number_favorite}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 100%"></div>
          </div>

        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
      {{-- <div class="info-box bg-red">
        <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">تعداد دانلود</span>
          <span class="info-box-number">{{$sum_download}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 100%"></div>
          </div>

        </div>
        <!-- /.info-box-content -->
      </div> --}}
      <!-- /.info-box -->
      <div class="info-box bg-aqua">
        <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">پیام های پشتیبانی</span>
          <span class="info-box-number">{{$number_support}}</span>

          <div class="progress">
            <div class="progress-bar" style="width: 100%"></div>
          </div>

        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->



      <!-- PRODUCT LIST -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">آخرین محصولات</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <ul class="products-list product-list-in-box">
            @foreach ($last_product as $item)
            <li class="item">
              <div class="product-img">
                <img src="/{{$item->image}}" alt="Product Image">
              </div>
              <div class="product-info">
                <a href="javascript:void(0)" class="product-title">{{$item->name}}
                  <span class="label label-info pull-left">{{number_format($item->price)}}</span></a>

              </div>
            </li>
            <!-- /.item -->
            @endforeach
          </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
          <a href="{{route('product.index') }}" class="uppercase">نمایش همه</a>
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>


@endsection
