<header class="header">
    <div class="header-mid">
        <div class="fix">
        <div class="logoTlv">
            <a href="" title="" class="logo">Tiền Liệt Vương</a>
          </div>
            <div class="search">
                {!! Form::open(['method' => 'GET', 'url' =>  url('tim-kiem') ]) !!}
                    <input type="text" placeholder="Từ khóa tìm kiếm" name="q" class="txt">
                    <input type="submit" value="" name="submit" class="btn">
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</header>

<nav id="navGlobal">
    <div class="fix">
        <ul class="cf">
            <li>
                <a class="home {{(!empty($page) && $page == 'index') ? 'active' : ''}}" href="{{url('/')}}" title="Trang Chủ">
                    Trang chủ
                </a>
            </li>
            @foreach ($categories as $cate)
            <li>
                <a class="{{(!empty($page) && $page == $cate->slug) ? 'active' : ''}}" href="{{url($cate->slug)}}" title="{{$cate->name}}"><span>{{$cate->name}}</span></a>
                @if ($cate->subCategories->count() > 0)
                <ul>
                    @foreach ($cate->subCategories as $sub)
                    <li><a href="{{url($sub->slug)}}">{{$sub->name}}</a></li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach

            <li>
                <a class="{{(!empty($page) && $page == 'hoi-dap-chuyen-gia') ? 'active' : ''}}" href="{{url('hoi-dap-chuyen-gia')}}" title=""><span>Hỏi đáp</span></a>
            </li>
            <li>
                <a class="{{(!empty($page) && $page == 'diem-ban') ? 'active' : ''}}" href="{{url('diem-ban')}}" title=""><span>Điểm bán</span></a>
            </li>
            <li>
                <a class="{{(!empty($page) && $page == 'lien-he') ? 'active' : ''}}" href="{{url('lien-he')}}" title=""><span>Liên hệ</span></a>
            </li>
        </ul>
    </div>
</nav>