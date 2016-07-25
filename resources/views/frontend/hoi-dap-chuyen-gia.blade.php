@extends('frontend')
@section('content')
    <section class="section">
        <div class="fix">
            <div class="main-content mt30">
                <div class="col-left">
                    <div class="box-faq">
                        @foreach ($questions as $question)
                            <article class="item">
                                <h3 class="title-faq"><span>{{str_limit($question->question, env('DESC_TRIM'))}}</span></h3>
                                <div class="content">
                                    <a href="" title="">
                                        <img src="{{url('t/220x130', $question->image)}}"  alt="{{$question->question}}">
                                    </a>
                                    <time class="time" datetime="{{$question->updated_at->format('D/m/Y')}}">{{$question->updated_at->format('D/m/Y')}}</time>
                                    <p>
                                        <span class="question">Câu hỏi:</span>
                                        <span>{{str_limit($question->question, env('DESC_TRIM'))}}</span>
                                    </p>
                                    <p class="human">
                                        <span>{{$question->ask_person}}</span>
                                    </p>
                                </div>
                                <div id="accordion">
                                    <a href="#" class="answer">Xem trả lời</a>
                                    <div class="accordion">
                                        <div class="content">
                                            <p>{{$question->answer}}</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                        <div class="box-paging">
                            {!! with(new \App\Pagination\AcmesPresenter($questions))->render() !!}
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