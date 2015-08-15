@extends('frontend')
@section('content')
    <section class="section">
        <div class="fix">
            <div class="main-content">
                <div class="col-left">
                    <div class="box-second cf">
                        <h3 class="title">
                           Kết quả tìm kiếm với từ khóa {{$keyword}}
                        </h3>
                        @foreach ($posts->chunk(2) as $gPosts)
                        <div class="data">
                            @foreach ($gPosts as $post)
                            <div class="item">
                                <a href="{{url($post->slug.'.html')}}" class="thumb-img">
                                    <img src="{{url('t/335x205', $post->image)}}" alt="{{$post->title}}">
                                </a>
                                <h3>
                                    <a href="{{url($post->slug.'.html')}}" class="thumb">{{str_limit($post->title, env('TITLE_TRIM'))}}</a>
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