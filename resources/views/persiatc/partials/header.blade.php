
 <header>
    <section class="top-head container">
        <div class="right-head">
            <div class="logo">
                <a href="{{ url('/') }}"><img style="height: 50px;" src="/persiatc/assets/images/logo/Logo.jpg"></a>
            </div>
            <form action="">
                {{csrf_field()}}
                <button type="submit"><i class="fa fa-search"></i></button>
                <input type="text"  name="name" placeholder="محصول مورد نظر">
            </form>
        </div>
        <div class="left-head">
            <div class="login-box">
                <div class="log-reg" id="logreg">
                    <i class="fa fa-user"></i>
                    @guest
                        <a href="{{route('login')}}"> ورود به حساب کاربری </a>
                    @endguest
                    @auth
                        <div class="user-modal" style="right:-64px !important;">
                            <a class="profile" style="margin-right:0px !important;" href="{{route('userpanel')}}"><i class="fa fa-user"></i> پروفایل</a>
                            <a class="order" href="#" style="margin-right:0px !important;" ><i class="fa fa-folder"></i> پیگیری سفارش</a>
                            <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"><i class="fa  fa-sign-out"></i>
                             خروج
                            </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                        </div>
                    @endauth
                </div>
            </div>
            <div class="devider"></div>
            @auth
            <a href="/basket" class="cart">
                [{{count($baskets)}}]
                <i class="fa fa-shopping-cart"></i>
            </a>
            @else
            <a href="/basket" class="cart">
                <i class="fa fa-shopping-cart"></i>
            </a>
            @endauth
        </div>


    </section>

    <nav class="top-nav container">
        <ul class="dropdown" id="mynavmenu">
            <li class="main-category"><i class="fa fa-bars"></i><a href="#">دسته بندی کالاها</a>
                <ul class="dropdown2">
                    <?php foreach ($categories as $category): ?>
                    <li>
                        <a href="{{ route('cat.show',['cat'=>$category->id]) }}">{{$category->fa_name}}</a>
                        <ul class="megamenu">
                            <?php foreach ($category->children as $cat): ?>
                                <li style="margin-left:60px;margin-bottom:60px">
                                    <a href="{{ route('cat.show',['cat'=>$cat->id]) }}">{{$cat->fa_name}}</a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </li>

            <li><a href="#">وبلاگ</a></li>
            <li><a href="{{ Route('contactt.index') }}">تماس با ما</a></li>
            {{-- <li><a href="#">دیجی شاپ من</a></li>
            <li><a href="#">دیجی کلاب</a></li> --}}
            <li><a href="#">سوالی دارید؟</a></li>
        </ul>
        {{-- <ul class="promotion">
            <li><a href="#">لطفا شهر و استان خود را انتخاب کنید</a><i class="fa fa-map-marker"></i></li>
        </ul> --}}

    </nav>

</header>
