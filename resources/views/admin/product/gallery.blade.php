@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
@endsection

@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">گالری محصول {{$product->name}}</h3>
  </div>

  {{-- <a href="{{ route('delete.allgallery',['product' => $product]) }}" class="btn btn-danger" onclick="return confirm('آیا برای حذف همه عکس ها مطمئن هستید ؟')">
    Delete all
    </a> --}}


  <div class="col-md-12">

    <div class="box box-primary">

        <form method="post" action="{{route('add.gallery')}}" enctype="multipart/form-data"
        class="dropzone" id="dropzone">
            @csrf
            <input type="text" hidden value="{{ $product->id }}" name="value_id">
        </form>

      {{-- <form role="form" method="post" enctype="multipart/form-data" action="{{url('admin/product/upload?id='.$product->id)}}">
        {{csrf_field()}}
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputFile">تصاویر گالری</label>
            <input type="file" name="file[]" multiple />
          </div>
        </div>


        <div class="box-footer">
          <button type="submit" class="btn btn-primary">ارسال</button>
        </div>
      </form> --}}

      <div class="p-3 pr-3">
        @if ($product->images)
        <div class="row">
            @foreach ($product->images as $item)
            <div class="col-2">
                <a href="{{ route('delete.gallery' , ['id' => $item->id]) }}" title="حذف تصویر" onclick="return confirm('آیا برای حذف مطمئن هستید ؟')" style="color: red">حذف </a>
                <a href="/{{ $item->url ?? '' }}" target="_blank">
                <img src="/{{ $item->url ?? '' }}" style="width:160px;max-height:60px;height: auto; padding:2px" alt="{{ $product->name ?? '' }}">
              </a>
            </div>
            @endforeach
        </div>


        @endif
    </div>
    </div>


  </div>

</div>
@endsection

@section('script')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

{{-- <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css"> --}}
@endsection
