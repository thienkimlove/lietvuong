<div class="col-right">
    @include('frontend.box_adv_right')
    @include('frontend.box_video')
    @include('frontend.box_mostRead')

    <div class="form-question">
        <div class="avartar">
            <img src="{{url('images/avatar.jpg')}}" alt="">
        </div>
        <div class="title">
            Hỏi đáp chuyên gia
        </div>
        <div class="box-form">
            {!! Form::open(['method' => 'POST', 'route' => ['createQuestion'], 'name' => 'questionFormRight']) !!}
            <input type="text" name="ask_person" class="txt txt-name" placeholder="Họ và tên">
            <input type="email" name="ask_email" class="txt txt-email" placeholder="Email">
            <input type="number" name="ask_phone" class="txt txt-phone" placeholder="Số điện thoại">
            <textarea name="question" class="txt txt-content" placeholder="Nội dung"></textarea>
            <div class="btn-ask">
                <h3>
                    <a id="questionSubmitRight" title="Question">Gửi chuyên gia tư vấn</a>
                </h3>
            </div>
            {!!Form::close()!!}
        </div>
        <script>
            $(function(){
                $('#questionSubmitRight').click(function(){
                    $('form[name=questionFormRight]').submit();
                });
            });
        </script>
    </div>
    <div class="box-social">
        <h3 class="global-title">
            Bài thuốc trên facebook
        </h3>
        <div class="item">
            <img src="{{url('images/social.jpg')}}" alt="">
        </div>
    </div>
</div><!--//col-right-->