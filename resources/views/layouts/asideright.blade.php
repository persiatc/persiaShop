<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-right image">
        @if(auth()->user()->image)
        <img src="/{{auth()->user()->image}}" class="img-circle" alt="User Image">
        @else
        <img src="{{ asset('avatar/3.png') }}" class="img-circle" alt="User Image">
        @endif
      </div>
      <div class="pull-right info">
        <p>{{auth()->user()->name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="جستجو">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">منو</li>
      <li class="{{ (Request::is('home') ? 'active' : '') }}">
        <a href="{{route('home')}}">
          <i class="fa fa-home"></i>
            <span>خانه اصلی</span>
          </i>
        </a>
      </li>
      <?php
       ?>
      <li class="treeview {{ (Request::is('admin/permission/create') ? 'active' : '') }} {{ (Request::is('admin/permission') ? 'active' : '') }} {{ (Request::is('admin/user') ? 'active' : '') }} {{ (Request::is('admin/role') ? 'active' : '') }} {{ (Request::is('admin/role/create') ? 'active' : '') }}">
        <a href="#">
          <i class="fa fa-users"></i> <span>مدیریت کاربران</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-right pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            @can('user_list')
                <li class="{{ (Request::is('admin/user') ? 'active' : '') }}"><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i>لیست کاربران</a></li>
            @endcan

          <!-- roles -->
          <li class="{{ (Request::is('admin/role') ? 'active' : '') }}"><a href="{{route('role.index')}}"><i class="fa fa-circle-o"></i>لیست نقش‌ها</a></li>
          <li class="{{ (Request::is('admin/role/create') ? 'active' : '') }}"><a href="{{route('role.create')}}"><i class="fa fa-circle-o"></i>افزودن نقش جدید</a></li>

          <!-- permissions -->
          <li class="{{ (Request::is('admin/permission') ? 'active' : '') }}"><a href="{{route('permission.index')}}"><i class="fa fa-circle-o"></i>لیست دسترسی‌ها</a></li>
          <li class="{{ (Request::is('admin/permission/create') ? 'active' : '') }}"><a href="{{route('permission.create')}}"><i class="fa fa-circle-o"></i>افزودن دسترسی جدید</a></li>
        </ul>
      </li>
      <li class="treeview {{ (Request::is('admin/category/create') ? 'active' : '') }} {{ (Request::is('admin/category') ? 'active' : '') }} {{ (Request::is('admin/product') ? 'active' : '') }} {{ (Request::is('admin/product/create') ? 'active' : '') }}">
        <a href="#">
          <i class="fa fa-cubes"></i> <span>مدیریت محصول</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-right pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            @can('product_list')
                <li class="{{ (Request::is('admin/product') ? 'active' : '') }}"><a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i>لیست محصولات</a></li>
            @endcan
            @can('product_create')
                <li class="{{ (Request::is('admin/product/create') ? 'active' : '') }}"><a href="{{route('product.create')}}"><i class="fa fa-circle-o"></i>افزودن محصول جدید</a></li>
            @endcan

            <li class="{{ (Request::is('admin/category') ? 'active' : '') }}"><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i>لیست دسته‌بندی‌ها</a></li>
            <li class="{{ (Request::is('admin/category/create') ? 'active' : '') }}"><a href="{{route('category.create')}}"><i class="fa fa-circle-o"></i>افزودن دسته‌بندی جدید</a></li>
            {{-- <li><a href="{{route('producer.index')}}"><i class="fa fa-circle-o"></i>لیست تولیدکننده‌ها</a></li> --}}
            {{-- <li><a href="{{route('producer.create')}}"><i class="fa fa-circle-o"></i>افزودن تولیدکننده جدید</a></li> --}}
        </ul>
      </li>

    <li class="treeview {{ (Request::is('admin/tag/create') ? 'active' : '') }} {{ (Request::is('admin/tag') ? 'active' : '') }}">
        <a href="#">
          <i class="fa fa-tags"></i> <span>مدیریت برچسب ها</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-right pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ (Request::is('admin/tag') ? 'active' : '') }}"><a href="{{route('tag.index')}}"><i class="fa fa-circle-o"></i>لیست برچسب‌ها</a></li>
            <li class="{{ (Request::is('admin/tag/create') ? 'active' : '') }}"><a href="{{route('tag.create')}}"><i class="fa fa-circle-o"></i>افزودن برچسب جدید</a></li>
        </ul>
      </li>


      <li class="treeview {{ (Request::is('admin/support') ? 'active' : '') }} {{ (Request::is('admin/contact') ? 'active' : '') }} {{ (Request::is('admin/comment') ? 'active' : '') }}">
        <a href="#">
          <i class="fa fa-comments"></i> <span>مدیریت نظرات</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-right pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            @can('comment_list')
                <li class="{{ (Request::is('admin/comment') ? 'active' : '') }}"><a href="{{route('comment.index')}}"><i class="fa fa-circle-o"></i>مشاهده نظرات</a></li>
            @endcan
            <li class="{{ (Request::is('admin/contact') ? 'active' : '') }}"><a href="{{route('contact.index')}}"><i class="fa fa-circle-o"></i>مشاهده پیام‌های ارتباط با ما</a></li>
            <li class="{{ (Request::is('admin/support') ? 'active' : '') }}"><a href="{{route('support.index')}}"><i class="fa fa-circle-o"></i>مشاهده پیام‌های پشتیبانی</a></li>
        </ul>

      </li>
    <li class="treeview {{ (Request::is('admin/post/create') ? 'active' : '') }} {{ (Request::is('admin/post') ? 'active' : '') }}">
        <a href="#">
          <i class="fa fa-files-o"></i> <span>مدیریت پست‌ها</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-right pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            @can('post_list')
                <li class="{{ (Request::is('admin/post') ? 'active' : '') }}"><a href="{{route('post.index')}}"><i class="fa fa-circle-o"></i>لیست پست‌ها</a></li>
            @endcan
            @can('post_create')
                <li class="{{ (Request::is('admin/post/create') ? 'active' : '') }}"><a href="{{route('post.create')}}"><i class="fa fa-circle-o"></i>افزودن پست جدید</a></li>
            @endcan
        </ul>

      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-image"></i> <span>مدیریت اسلایدشو</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-right pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{route('slider.index')}}"><i class="fa fa-circle-o"></i>لیست اسلایدرها</a></li>
            <li><a href="{{route('slider.create')}}"><i class="fa fa-circle-o"></i>افزودن اسلایدر جدید</a></li>
            <li><a href="{{route('sliderparent.index')}}"><i class="fa fa-circle-o"></i>لیست والدهای اسلایدرها</a></li>
            <li><a href="{{route('sliderparent.create')}}"><i class="fa fa-circle-o"></i>افزودن والد اسلایدر جدید</a></li>
        </ul>
      </li>


      <li class="{{ (Request::is('factors.location') ? 'active' : '') }}">
        <a href="{{ route('factors.location') }}">
          <i class="fa fa-money"></i>
            <span> رزروهای پرداخت در محل </span>
          </i>
        </a>
      </li>
      <li class="{{ (Request::is('factors.payments') ? 'active' : '') }}">
        <a href="{{ route('factors.payments') }}">
          <i class="fa fa-usd"></i>
            <span> پرداخت ها</span>
          </i>
        </a>
      </li>
      <li class="{{ (Request::is('factors.all') ? 'active' : '') }}">
        <a href="{{ route('factors.all') }}">
          <i class="fa fa-file-archive-o"></i>
            <span> فاکتور ها</span>
          </i>
        </a>
      </li>

      <li class="{{ (Request::is('slider.index') ? 'active' : '') }}">
        <a href="">
          <i class="fa  fa-truck"></i>
            <span>  انبارداری</span>
          </i>
        </a>
      </li>





      {{-- <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>مدیریت فیلتر</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-right pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{route('filter.index')}}"><i class="fa fa-circle-o"></i>لیست فیلترها</a></li>
            <li><a href="{{route('filter.create')}}"><i class="fa fa-circle-o"></i>افزودن فیلتر جدید</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>مدیریت اسلایدشو</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-right pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{route('slider.index')}}"><i class="fa fa-circle-o"></i>لیست اسلایدرها</a></li>
            <li><a href="{{route('slider.create')}}"><i class="fa fa-circle-o"></i>افزودن اسلایدر جدید</a></li>
            <li><a href="{{route('sliderparent.index')}}"><i class="fa fa-circle-o"></i>لیست والدهای اسلایدرها</a></li>
            <li><a href="{{route('sliderparent.create')}}"><i class="fa fa-circle-o"></i>افزودن والد اسلایدر جدید</a></li>
        </ul>
      </li> --}}



    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
