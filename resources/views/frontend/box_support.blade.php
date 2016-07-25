<div class="box-support">
    <div class="fix">
        <div class="col">
            <div class="box-consult">
                <article class="item">
                    <h3>
                <span>
                  Gửi thắc mắc
                </span> <br>tới chuyên gia
                    </h3>
                    <div class="avartar">
                        <img src="{{url('images/professor.png')}}" alt="">
                    </div>
                </article>
            </div>
        </div>
        <div class="col">
            <div class="box-question">
                <div class="title">
                    Câu hỏi thường gặp
                </div>
                <div class="slide-question">
                    <div class="owl-carousel" id="slide-question">
                        @foreach ($homepageQuestions as $question)
                        <div class="item clearFix">
                            <h4>
                                <span><a href="{{url('hoi-dap-chuyen-gia')}}" title="Question">{{$question->question}}</a></span>
                            </h4>
                            
                        </div>
                        @endforeach
                    </div>
                    <div class="btn-ask">
                        <h3>
                            <a href="{{url('hoi-dap-chuyen-gia')}}" title="Question">Xem tất cả</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-question">
                <div class="title">
                    Câu hỏi thường gặp
                </div>
                @include('frontend.box_contact')
            </div>
        </div>
    </div>
</div>