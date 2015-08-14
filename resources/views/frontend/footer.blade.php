<footer class="footer">
    <div class="fix">
        <div class="box-footer">
            <div class="item item-1">
                <div class="head">Mạng xã hội</div>
                <div class="area-social">
                    <ul class="social">
                        <li>
                            <a href="#" class="i-facebook thumb-img"></a>
                        </li>
                        <li>
                            <a href="#" class="i-tw thumb-img"></a>
                        </li>
                        <li>
                            <a href="#" class="i-youtube thumb-img"></a>
                        </li>
                        <li>
                            <a href="#" class="i-google thumb-img"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item item-2">
                <div class="head">Danh mục</div>
                <ul class="nav-footer">
                    @foreach ($categories as $cate)
                    <li>
                        <a class="{{(!empty($page) && $page == $cate->slug) ? ' active' : ''}}" href="{{url($cate->slug)}}" title="{{$cate->name}}"><span>{{$cate->name}}</span></a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="item item-3">
                <div class="head">LIÊN HỆ</div>
                <ul class="nav-footer">
                    <li> Điện thoại: 0912 001 002</li>
                    <li>
                        Email: <a href="mailto:info@gmail.com" title="info@gmail.com">info@gmail.com</a>
                    </li>
                </ul>
            </div>


            <div class="item item-4">
                <div class="head">Đăng ký nhận tin</div>
                {!! Form::open(['method' => 'POST', 'route' => ['registerEmail'], 'name' => 'registerEmail']) !!}
                    <input type="email" name="email" class="txt txt-email" placeholder="Email">
                    <input type="submit" value="Gửi" class="btn btn-submit">
                {!! Form::close()  !!}
            </div>
            <div class="clear"></div>
        </div>
        <p class="copy">Copyright &copy; 1995-2015 {{env('WEBSITE_NAME')}}, ALL Rights Reserved.</p>
    </div>
</footer><!--//footer-->
<div class="overlay" id="overlay"></div>
<div class="menu-left" id="menu-left">
    <div class="inner">
        <a href="javascript:void(0)" title="Menu" class="btn-menu" id="btn-menu">Menu</a>
        <div class="search">
            <div class="search-in">
                {!! Form::open(['method' => 'GET', 'url' =>  url('tim-kiem') ]) !!}
                    <input type="text" name="q" class="txt" placeholder="Từ khóa tìm kiếm"/>
                    <input type="submit" name="submit" class="btn-find" value=""/>
                {!! Form::close() !!}

            </div>
        </div>
        <nav>
            <ul class="nav-mobile">
                <li>
                    <a class="{{(!empty($page) && $page == 'index') ? 'active' : ''}}" href="{{url('/')}}" title="">
                        Trang chủ
                    </a>
                </li>

                @foreach ($categories as $cate)
                    <li>
                        <a class="{{(!empty($page) && $page == $cate->slug) ? 'active' : ''}} {{($cate->subCategories->count() > 0) ? 'has-sub' : ''}}" href="{{url($cate->slug)}}" title="{{$cate->name}}"><span>{{$cate->name}}</span></a>
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
        </nav>
    </div>
</div>