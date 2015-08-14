@extends('frontend')
@section('content')
    <section class="section">
        <div class="fix">
            <div class="main-content mt30">
                <div class="col-left">
                    <div class="title"><span>Điểm bán</span></div>
                    <div class="box-member">
                        @foreach ($category->subCategories as $cate)
                            <div class="title">{{$cate->name}}</div>
                            <div class="data">
                                @foreach ($cate->cities->chunk(6)  as $gPost)
                                    <article class="item">
                                        @foreach ($gPost  as $post)
                                            <a href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{$post->city}}</a>
                                        @endforeach
                                    </article>
                                @endforeach
                            </div>
                        @endforeach

                    </div><!--//box-member-->
                </div><!--//col-left-->
                @include('frontend.right')
                <div class="clear"></div>
            </div><!--//main-content-->
        </div>
    </section><!--//section-->
@endsection