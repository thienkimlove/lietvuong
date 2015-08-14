@extends('frontend')
@section('content')
    <section class="section">
        <div class="fix">
            <div class="main-content mt30">
                <div class="col-left">
                    <div class="box-contact">
                        <h3 class="title">
                            Liên hệ
                        </h3>
                        <div class="box-adv">
                            <img src="images/tuelinh.jpg" alt="">
                        </div>
                        <h3>Công ty TNHH Tuệ Linh</h3>
                        <ul class="list-contact">
                            <li><span class="icon-1"></span>Địa chỉ: Số xxx</li>
                            <li><span class="icon-2"></span>Điện thoại: xxx</li>
                            <li><span class="icon-3"></span>Fax: 0xxx</li>
                        </ul>
                        <h3>Tại Hà Nội</h3>
                        <p>
                            Tầng 5 tòa nhà Bê Tông, Hoàng Đạo Thúy, Trung Hòa, Cầu Giấy, Hà nội
                        </p>
                        <ul class="list-contact">
                            <li><span class="icon-2"></span>Điện thoại: xxx</li>
                            <li><span class="icon-3"></span>Fax: 0xxx</li>
                        </ul>
                        <h3>Tại Hồ Chí Minh</h3>
                        <p>
                            Tầng 5 tòa nhà Bê Tông, Hoàng Đạo Thúy, Trung Hòa, Cầu Giấy, Hà nội
                        </p>
                        <ul class="list-contact">
                            <li><span class="icon-2"></span>Điện thoại: xxx</li>
                            <li><span class="icon-3"></span>Fax: 0xxx</li>
                        </ul>
                    </div>
                    <div class="box-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6402599642634!2d105.80298889999997!3d21.00705270000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca1124d6387%3A0x178c49e7f49a1488!2zSG_DoG5nIMSQ4bqhbyBUaMO6eSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1438163672790" width="600" height="450" frameborder="0" style="border:0; width:100%" allowfullscreen></iframe>
                    </div>
                </div><!--//col-left-->
                @include('frontend.right')
                <div class="clear"></div>
            </div><!--//main-content-->
        </div>
    </section><!--//section-->
@endsection