@extends('frontend')
@section('content')
    <section class="section">
        <div class="fix">
            <div class="main-content mt30">
                <div class="col-left">
                    <h3 class="title">
                        <span>{{$post->title}}</span>
                    </h3>
                    <article class="detail">{!! $post->content !!}</article>
                    <div class="box-share">
                        <div class="item">
                            <div class="fb-share-button" data-href="https://www.facebook.com/tienlietvuong.vn" data-layout="button_count"></div>
                        </div>
                        <div class="item">
                            <div class="g-plusone" data-size="medium"></div>
                        </div>
                        <div class="clear"></div>
                    </div><!--//box-share-->
                    <div class="box-tags">
                        <span>TAG</span>
                        @foreach ($post->tags as $tag)
                            <a href="{{url('tu-khoa', $tag->slug)}}" title="">{{$tag->name}}</a>
                        @endforeach
                    </div><!--//box-tags-->
                    <div class="social-follow">
                        <div class="fb-comments" data-href="http://www.tienlietvuong.vn" data-width="500" data-numposts="5"></div>
                    </div>
                    <div class="box-product">
                        <h3 class="head">Tin liên quan</h3>
                        <div class="owl-carousel" id="slide-product">
                            @foreach ($post->related as $rPost)
                            <div class="item">
                                <a href="{{url($rPost->slug.'.html')}}" title="{{$rPost->title}}">
                                    <img src="{{url('t/218x138', $rPost->image)}}"  alt="{{$rPost->title}}"/>
                                </a>
                                <h3>
                                    <a href="{{url($rPost->slug.'.html')}}" title="{{$rPost->title}}">{{$rPost->title}}</a>
                                </h3>
                            </div>
                            @endforeach
                        </div>
                    </div><!--//box-product-->
                    <div class="clear"></div>
                </div><!--//col-left-->
                @include('frontend.right')
                <div class="clear"></div>
            </div><!--//main-content-->
        </div>
    </section><!--//section-->
@endsection