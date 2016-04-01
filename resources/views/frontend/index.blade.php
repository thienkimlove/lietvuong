@extends('frontend')
@section('content')
    <section class="section">
        <div class="fix">
            <div class="box-slider">
                <div class="owl-carousel" id="slide-homepage">
                    <div class="item">
                        <a class="thumb" href="" title="">
                            <img src="{{ $settings['index_slide_banner1'] }}"/>
                        </a>
                    </div>
                    <div class="item">
                        <a class="thumb" href="" title="">
                            <img src="{{ $settings['index_slide_banner2'] }}"/>
                        </a>
                    </div>
                </div>
            </div><!--//box-slider-->
            <div class="main-content">
                <div class="col-left">
                    <div class="box-third cf">
                        <h3 class="title">
                            <a href="http://www.tienlietvuong.vn/phi-dai-tien-liet-tuyen" target="_blank" style="color:#0294df"><span>Phì đại tiền liệt tuyến</span></a>                        </h3>
                        <div class="list-product">
                            <div class="row">
                                @foreach($listPosts as $post)
                                <article class="item">
                                    <a href="{{url($post->slug.'.html')}}"><img src="{{url('t/220x170', $post->image)}}"  alt=""></a>
                                    <div class="desc">
                                        <h3><a href="{{url($post->slug.'.html')}}">{{str_limit($post->title, env('TITLE_TRIM'))}}</a></h3>
                                        <p>{{str_limit($post->desc, env('DESC_TRIM'))}}</p>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>
                       @include('frontend.box_adv')
                    </div>
                    <div class="box-third cf">
                        <h3 class="title">
                            <span><a href="http://www.tienlietvuong.vn/dinh-duong" target="_blank" style="color:#0294df">Dinh dưỡng</a></span>                        </h3>
                        <div class="list-product">
                            <div class="row">
                                @foreach ($listProducts as $post)
                                <article class="item">
                                    <a href="{{url($post->slug.'.html')}}"><img src="{{url('t/220x170', $post->image)}}" alt=""></a>
                                    <div class="desc">
                                        <h3><a href="{{url($post->slug.'.html')}}">{{str_limit($post->title, env('TITLE_TRIM'))}}</a></h3>
                                        <p>{{str_limit($post->desc, env('DESC_TRIM'))}}</p>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div><!--//col-left-->
                <div class="col-right">
                    @include('frontend.box_mostRead')
                    @include('frontend.box_video')
                </div><!--//col-right-->
                <div class="clear"></div>
            </div><!--//main-content-->
        </div>
    </section><!--//section-->
@endsection