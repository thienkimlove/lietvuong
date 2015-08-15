@extends('frontend')
@section('content')
    <section class="section">
        <div class="fix">
            <div class="box-topnews cf">

                <div class="top-news">
                    <article class="item">
                        <a href="{{url('video', $videoMain->slug)}}" title="top">
                            <img src="{{url('t/560x297', $videoMain->image)}}" alt="{{$videoMain->title}}"/>
                        </a>
                        <h3>
                            <a href="{{url('video', $videoMain->slug)}}" title="{{$videoMain->title}}">{{str_limit($videoMain->title, env('TITLE_TRIM'))}}</a>
                        </h3>
                    </article>
                </div><!--//box-consult-->

                <div class="sub-news">
                    <div class="data">
                        @foreach ($hotVideos->slice(0, 4) as $video)
                            <div class="item">
                                <a href="{{url('video', $video->slug)}}" title="{{$video->title}}">
                                    <img src="{{url('t/206x139', $video->image)}}" alt="{{$video->title}}"/>
                                </a>
                                <h3>
                                    <a href="{{url('video', $video->slug)}}" title="{{$video->title}}">
                                        {{str_limit($video->title, env('TITLE_TRIM'))}}
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
                        <h3 class="title">Video</h3>
                        @foreach ($videos->chunk(2) as $gVideo)
                            <div class="data">
                                @foreach ($gVideo as $video)
                                    <div class="item">
                                        <a href="{{url('video', $video->slug)}}" class="thumb-img">
                                            <img src="{{url('t/335x205', $video->image)}}" alt="{{$video->title}}">
                                        </a>
                                        <h3>
                                            <a href="{{url('video', $video->slug)}}" class="thumb">{{str_limit($video->title, env('TITLE_TRIM'))}}</a>
                                        </h3>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                        <div class="box-paging">
                            {!! with(new \App\Pagination\AcmesPresenter($videos))->render() !!}
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