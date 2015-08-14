@extends('frontend')
@section('content')
    <section class="section">
        <div class="fix">
            <div class="box-topnews cf">
                @if ($first = $topPosts->shift())
                <div class="top-news">
                    <article class="item">
                        <a href="{{url($first->slug.'.html')}}" title="top">
                            <img src="{{url('t/560x297', $first->image)}}" alt="{{$first->title}}"/>
                        </a>
                        <h3>
                            <a href="{{url($first->slug.'.html')}}" title="{{$first->title}}">{{str_limit($first->title, 40)}}</a>
                        </h3>
                    </article>
                </div><!--//box-consult-->
                @endif
                <div class="sub-news">
                    <div class="data">
                        @foreach ($topPosts as $post)
                        <div class="item">
                            <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">
                                <img src="{{url('t/206x139', $post->image)}}" alt="{{$post->title}}"/>
                            </a>
                            <h3>
                                <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">
                                   {{str_limit($post->title, 40)}}
                                </a>
                            </h3>
                        </div>
                        @endforeach
                        <div class="clear"></div>
                    </div>
                </div><!--//box-partner-->
            </div>
            <div class="main-content">
                <div class="col-left">
                    <div class="box-second cf">
                        <h3 class="title">{{$category->name}}</h3>
                        @foreach ($posts->chunk(2) as $gPosts)
                            <div class="data">
                                @foreach ($gPosts as $post)
                                    <div class="item">
                                        <a href="{{url($post->slug.'.html')}}" class="thumb-img">
                                            <img src="{{url('t/335x205', $post->image)}}" alt="{{$post->title}}">
                                        </a>
                                        <h3>
                                            <a href="{{url($post->slug.'.html')}}" class="thumb">{{str_limit($post->title, 40)}}</a>
                                        </h3>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                        <div class="box-paging">
                            {!! with(new \App\Pagination\AcmesPresenter($posts))->render() !!}
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div><!--//col-left-->
                @include('frontend.right')
                <div class="clear"></div>
            </div><!--//main-content-->
        </div>
    </section><!--//section-->
@endsection