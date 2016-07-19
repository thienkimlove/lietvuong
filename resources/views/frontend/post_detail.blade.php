@extends('frontend')
@section('content')
    <section class="section">
        <div class="fix">
            <div class="main-content mt30">
                <div class="col-left">
                    <h1 class="title">
                        <span>{{$post->title}}</span>
                    </h1>
                    <article class="detail">{!! $post->content !!}</article>
                    <div class="box-share">
					<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
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
							<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src =   "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=1571372846430003";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
                        @endforeach
                    </div><!--//box-tags-->
                    <div class="social-follow">
                        <div class="fb-comments" data-href="{{url($post->slug.'.html')}}" data-numposts="5"></div>
						<div class="g-plusone" data-annotation="inline" data-width="500"></div>
						<div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/u/0/114782125946920177277" data-rel="publisher"></div>
						<div id="fb-root"></div>
                    </div>
					<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1571372846430003',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
                    <div class="box-product">
                        <h3 class="head">Tin liên quan</h3>
                        <div class="owl-carousel" id="slide-product">
                            @foreach ($post->related as $rPost)
                            <div class="item">
                                <a href="{{url($rPost->slug.'.html')}}" title="{{$rPost->title}}">
                                    <img src="{{url('t/218x138', $rPost->image)}}"  alt="{{$rPost->title}}"/>
                                </a>
                                <h1>
                                    <a href="{{url($rPost->slug.'.html')}}" title="{{$rPost->title}}">{{$rPost->title}}</a>
                                </h1>
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