<div class="col-right">
    @include('frontend.box_adv_right')
    @include('frontend.box_video')
    @include('frontend.box_mostRead')

    <div class="form-question">
        <div class="avartar">
            <img src="{{url('images/number.jpg')}}" alt="">
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
        <div class="item">
            <div class="fb-page" data-href="https://www.facebook.com/tuelinh.vn" data-width="300" data-height="274" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/tuelinh.vn"><a href="https://www.facebook.com/tuelinh.vn">Tuệ Linh</a></blockquote></div></div>
        </div>
    </div>
</div><!--//col-right-->