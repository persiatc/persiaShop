@extends('layouts.admin')

@section('direction')
{{-- <li><a href="#">مثال ها</a></li> --}}
<li class="active">افزودن محصول جدید</li>
@endsection


@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">افزودن محصول</h3>
  </div>
  <!-- /.box-header -->
    <div class="row">
        <div class="col-md-2">
        </div>
  <div class="col-md-8">

    <!-- general form elements -->
    <div class="box box-primary">

      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post" enctype="multipart/form-data" action="{{route('product.store')}}">
        {{csrf_field()}}
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">نام محصول <span style="color:red">*</span></label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" value="{{old('name')}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">دسته‌بندی محصول
                <span style="color:red">* (حتما پیش از افزودن محصول ,  دسته بندی آن را <a href="{{route('category.create')}}">اینجا</a> ثبت کنید)</span>
            </label>
             <select class="form-control" name="category">
               <?php foreach ($categories as $category): ?>
                 <option value="{{$category->id}}">{{$category->fa_name}}</option>
               <?php endforeach; ?>
             </select>
          </div>

          <div class="form-group">
            <label for="brand">تولیدکننده یا همان برند محصول <span style="color:red">*</span></label>
            <input name="brand" type="text" class="form-control" id="brand" value="{{old('brand')}}">
          </div>

          <div class="form-group">
            <label for="number">تعداد موجود از کالا </label>
            <input name="number" type="text" class="form-control" id="number" value="{{old('number')}}">
          </div>

          <!--<div class="form-group">
            <label for="exampleInputPassword1">تولیدکننده <span style="color:red">*</span></label>
             <select class="form-control" name="producer">
               <?php foreach ($producers as $producer): ?>
                 <option value="{{$producer->id}}">{{$producer->name}}</option>
               <?php endforeach; ?>
             </select>
          </div> -->
          {{-- <div class="form-group">
            <label>چند انتخابی</label>
            <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                    style="width: 100%;">
              <option>تهران</option>
              <option>مشهد</option>
              <option>اصفهان</option>
              <option>شیراز</option>
              <option>اهواز</option>
              <option>تبریز</option>
              <option>کرج</option>
            </select>
          </div> --}}

          <div class="form-group">
            <label for="exampleInputPassword1">
              قیمت محصول <span style="color:red">
                * (در صورت ۰ قرار دادن قیمت  محصول کاربر برای مطلع شدن از قیمت باید تماس بگیرد و درصورت درج قیمت کاربر قیمت محصول را میبیند)
              </span>
            </label>
            <input name="price" type="text" class="form-control" id="exampleInputPassword1"  value="{{old('price')}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">تخفیف <span style="color:red">(سیستم عدد وارد شده را به صورت درصد درنظر میگیرد)</span></label>
            <input name="discount" type="text" class="form-control" id="exampleInputPassword1"  value="{{old('discount')}}">
          </div>
            <div class="form-group">
            <label for="exampleInputPassword1">برچسب‌ها
              <span style="color:red">* (حتما پیش از افزودن محصول , برچسب های آن را <a href="{{route('tag.create')}}">اینجا</a> ثبت کنید) </span>
            </label>
             <select class="form-control" name="tag_id[]" multiple>
               <?php foreach ($tags as $tag): ?>
                 <option value="{{$tag->id}}">{{$tag->name}}</option>
               <?php endforeach; ?>
             </select>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">تصویر شاخص محصول <span style="color:red">*</span></label>
            <input name="image" type="file" id="exampleInputFile">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">فایل محصول</label>
            <input name="file" type="file" id="exampleInputFile">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">توضیحات محصول</label>
          </div>
          <textarea name="body" id ="body" rows="8" cols="140" class="ckeditor">{{old('body')}}</textarea>
          <script type="text/javascript">
            CKEDITOR.replace( 'body' );
         </script>


        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">ارسال</button>
        </div>
      </form>
    </div>
    <!-- /.box -->

    <!-- Form Element sizes -->

    <!-- /.box -->


    <!-- /.box -->

    <!-- Input addon -->

    <!-- /.box -->

  </div>
  <!-- /.box-body -->
</div>
</div>
@endsection
