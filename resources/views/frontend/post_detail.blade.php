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
                            <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
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
                        <img src="{{url('images/social01.jpg')}}" alt="">
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