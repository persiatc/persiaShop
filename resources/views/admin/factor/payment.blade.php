@extends('layouts.admin')
@section('direction')
{{-- <li><a href="#">مثال ها</a></li> --}}
<li class="active">لیست پرداخت ها </li>
@endsection

@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">لیست پرداخت ها وبسایت</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-6">

         {{-- <form class="form-inline nav-link">
            {{csrf_field()}}
             <div class="form-group">
                <label for="exampleInputPassword1">مرتب‌سازی بر اساس</label>
                 <select class="form-control" name="item">
                     <option value="sales_number">تعداد فروش</option>
                     <option value="download_number">تعداد بازدید</option>
                     <option value="created_at">زمان اضافه شدن</option>
                 </select>
              </div>
             <div class="form-group">
                <label for="exampleInputPassword1">مرتب‌سازی به صورت</label>
                 <select class="form-control" name="method">
                     <option value="asc">صعودی</option>
                     <option value="desc">نزولی</option>
                 </select>
              </div>
             <button class="btn btn-primary btn-sm" type="submit">جستجو</button>
          </form> --}}
       </div>
       <div class="row">
         <div class="col-sm-12">
           <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
              <tr role="row">
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 73.35px;" aria-label="دسته‌بندی: activate to sort column ascending"> #</th>

                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 140.7px;" aria-sort="ascending" aria-label="نام محصول: activate to sort column descending"> شماره فاکتور</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 73.35px;" aria-label="دسته‌بندی: activate to sort column ascending"> شماره پیگیری</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 269.483px;" aria-label="تولیدکننده: activate to sort column ascending"> وضعیت  </th>

                {{-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 73.35px;" aria-label="حذف: activate to sort column ascending">ویرایش</th> --}}
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 73.35px;" aria-label="حذف: activate to sort column ascending">حذف</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($payments as $factor): ?>
                <tr role="row" class="odd">
                    <td>{{$factor->id}}</td>

                  <td class="sorting_1">{{$factor->factor_id}}</td>
                  <td>{{$factor->authority}}</td>
                  {{-- <td>{{$product->producer->name}}</td> --}}
                  <td>{{$factor->status}}</td>


                  {{-- <td>
                    <img src="/{{$product->image}}" alt="تصویر محصول" style="width:50px; height:50px">
                    <a href="{{ route('create.gallery' , ['product' => $product]) }}" type="button" class="btn btn-block btn-success">گالری</a>

                  </td>
                  <td>
                      @can('product_edit')
                        <a href="{{route('product.edit', ['product'=>$product->id])}}" type="button" class="btn btn-block btn-warning">ویرایش</a>
                      @endcan
                  </td> --}}
                  <td>
                      @can('product_delete')
                        <form class="" action="{{route('factor.destroy', ['factor'=>$factor->id])}}" method="post">
                          {{csrf_field()}}
                          {{method_field('delete')}}
                          <button type="submit" class="btn btn-block btn-danger">حذف</button>
                        </form>
                      @endcan
                  </td>
                </tr>
              <?php endforeach; ?>

            </tbody>
           </table>
         </div>
       </div>
    </div>
  </div>
  {{$payments->links()}}
  <!-- /.box-body -->
</div>
@endsection
