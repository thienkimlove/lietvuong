<div class="box-form">
    {!! Form::open(['method' => 'POST', 'route' => ['createQuestion'], 'name' => 'questionForm']) !!}
        <input type="text" name="ask_person" class="txt txt-name" placeholder="Họ và tên">
        <input type="email" name="ask_email" class="txt txt-email" placeholder="Email">
        <input type="number" name="ask_phone" class="txt txt-phone" placeholder="Số điện thoại">
        <textarea name="question" class="txt txt-content" placeholder="Nội dung"></textarea>
        <div class="btn-ask">
            <h3>
                <a id="questionSubmit" title="Question">Gửi chuyên gia tư vấn</a>
            </h3>
        </div>
    {!!Form::close()!!}
</div>
<script>
    $(function(){
        $('#questionSubmit').click(function(){
            $('form[name=questionForm]').submit();
        });
    });
</script>








