@extends('frontend')
@section('content')
    <section class="section">
        <div class="fix">
            <div class="box-slider">
                <div class="owl-carousel" id="slide-homepage">
                    <div class="item">
                        <a class="thumb" href="" title="">
                            <img src="{{url('images/banner01.jpg')}}"/>
                        </a>
                    </div>
                    <div class="item">
                        <a class="thumb" href="" title="">
                            <img src="{{url('images/banner01.jpg')}}"/>
                        </a>
                    </div>
                </div>
            </div><!--//box-slider-->
            <div class="main-content">
                <div class="col-left">
                    <div class="box-third cf">
                        <h3 class="title">
                            <span>Phì đại tiền liệt tuyến</span>
                        </h3>
                        <div class="list-product">
                            <div class="row">
                                @foreach($listPosts as $post)
                                <article class="item">
                                    <a href="{{url($post->slug.'.html')}}"><img src="{{url('t/220x170', $post->image)}}"  alt=""></a>
                                    <div class="desc">
                                        <h3>{{str_limit($post->title, 40)}}</h3>
                                        <p>{{str_limit($post->desc, 70)}}</p>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>
                       @include('frontend.box_adv')
                    </div>
                    <div class="box-third cf">
                        <h3 class="title">
                            <span>Dinh dưỡng</span>
                        </h3>
                        <div class="list-product">
                            <div class="row">
                                @foreach ($listProducts as $post)
                                <article class="item">
                                    <a href="{{url($post->slug.'.html')}}"><img src="{{url('t/220x170', $post->image)}}" alt=""></a>
                                    <div class="desc">
                                        <h3>{{str_limit($post->title, 40)}}</h3>
                                        <p>{{str_limit($post->desc, 70)}}</p>
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