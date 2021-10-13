@extends('layouts.admin')
@section('direction')
{{-- <li><a href="#">مثال ها</a></li> --}}
<li class="active">ویرایش محصول </li>
@endsection

@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">ویرایش {{$product->name}}</h3>
  </div>
  <!-- /.box-header -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        {{-- <h3 class="box-title">مثال ساده</h3> --}}
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post" enctype="multipart/form-data" action="{{route('product.update', ['product'=>$product->id])}}">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">نام محصول<span style="color:red">*</span></label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" value="{{$product->name}}">
          </div>

          <div class="form-group">
            <label for="brand">تولیدکننده یا همان برند محصول <span style="color:red">*</span></label>
            <input name="brand" type="text" class="form-control" id="brand" value="{{$product->brand}}">
          </div>

           <!--<div class="form-group">
            <label for="exampleInputPassword1">تولیدکننده</label>
             <select class="form-control" name="producer_id">
               <?php foreach ($producers as $producer): ?>
                 <?php if ($product->producer->id == $producer->id): ?>
                   <option value="{{$producer->id}}" selected>{{$producer->name}}</option>
                 <?php else: ?>
                   <option value="{{$producer->id}}">{{$producer->name}}</option>
                 <?php endif; ?>
               <?php endforeach; ?>
             </select>
          </div>-->

          <div class="form-group">
            <label for="exampleInputPassword1">دسته‌بندی
                <span style="color:red">* (حتما پیش از افزودن محصول ,  دسته بندی آن را <a href="{{route('category.create')}}">اینجا</a> ثبت کنید)</span>

            </label>
             <select class="form-control" name="category_id">
               <?php foreach ($categories as $category): ?>
                 <?php if ($product->category->id == $category->id): ?>
                   <option value="{{$category->id}}" selected>{{$category->fa_name}}</option>
                 <?php else: ?>
                   <option value="{{$category->id}}">{{$category->fa_name}}</option>
                 <?php endif; ?>
               <?php endforeach; ?>
             </select>
          </div>

            <div class="form-group">
            <label for="exampleInputPassword1">برچسب‌ها
                <span style="color:red">* (حتما پیش از افزودن محصول , برچسب های آن را <a href="{{route('tag.create')}}">اینجا</a> ثبت کنید) </span>

            </label>
             <select class="form-control" name="tag_id[]" multiple>
               <?php foreach ($tags as $tag): ?>
                 <?php if ($protag->contains('id',$tag->id)): ?>
                   <option value="{{$tag->id}}" selected>{{$tag->name}}</option>
                 <?php else: ?>
                   <option value="{{$tag->id}}">{{$tag->name}}</option>
                 <?php endif; ?>
               <?php endforeach; ?>
             </select>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">
                قیمت محصول <span style="color:red">
                    * (در صورت ۰ قرار دادن قیمت  محصول کاربر برای مطلع شدن از قیمت باید تماس بگیرد و درصورت درج قیمت کاربر قیمت محصول را میبیند)
                  </span>
            </label>
            <input name="price" type="text" class="form-control" id="exampleInputPassword1" value="{{$product->price}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">تخفیف<span style="color:red">(سیستم عدد وارد شده را به صورت درصد درنظر میگیرد)</span></label>
            <input name="discount" type="text" class="form-control" id="exampleInputPassword1" value="{{$product->discount}}">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">تصویر شاخص محصول</label>
              <div class="form-group">
              <img src="/{{$product->image}}" alt="{{$product->name}}" style="height:100px; width:100px">
            </div>
            <input name="image" type="file" id="exampleInputFile">

          </div>




            <div class="form-group">
            <label for="exampleInputFile">فایل محصول</label>

            <input name="file" type="file" id="exampleInputFile">

          </div>
          <div class="form-group">
            <label for="exampleInputFile">توضیحات محصول</label>
          </div>
          <textarea name="body" rows="8" cols="140">{{$product->body}}</textarea>

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">ارسال</button>
        </div>
      </form>
    </div>

  </div>
  <!-- /.box-body -->
</div>
@endsection
