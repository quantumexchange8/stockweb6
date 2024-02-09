@extends('layouts.main')
@section('title', 'Contact Us | ' . config('app.full_company_name'))


@section('content')
<!-- Inner Banner _____________________ -->
<div class="inner_banner">
    <div class="overlay">
        <div class="banner_tilte">
            <h2>Contact</h2>
            <span class="s_color_bg"></span>
        </div> <!-- End of .banner_title -->
    </div> <!-- End of .overlay -->
</div> <!-- End of .inner_banner -->


<!-- Page Breadcrumb _____________________ -->
<div class="page-breadcrumb p_color_bg">
    <div class="container clear_fix">
        <ul class="text-center">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
            <li>Contact</li>
        </ul>
    </div>
</div> <!-- End of .page-breadcrumb -->



<!-- Contact Us Page _____________________ -->

<div class="req_callBack mTop_fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 callBack_text">
                <div class="theme_title">
                    <h2>Contact Us</h2>
                </div>
                <p><span>Company : </span> {{ config('app.full_company_name') }}</p>
                
                <h4>Luxembourg</h4>
                    <span style="font-family: 'Roboto', sans-serif; font-weight: 500; color: #272727;">Phone :</span> <span>(+352) 2794 1780 (Switchboard)</span><br>
                    <span style="font-family: 'Roboto', sans-serif; font-weight: 500; color: #272727;">Address :</span> <span>President East Building,Avenue J.F. Kennedy L-1855 Luxembourg</span>
                
                <p><h4>Hong Kong</h4>
                <span style="font-family: 'Roboto', sans-serif; font-weight: 500; color: #272727;">Address :</span> <span>Unit 503, 5/F, Winway Building, 50 Wellington Street, Central, Hong Kong</span></p>

                <p><h4>Japan, Tokyo</h4>
                <span style="font-family: 'Roboto', sans-serif; font-weight: 500; color: #272727;">Address :</span> <span>1 Chome-11番1号,Marunouchi, Chiyoda City Tokyo 100-6213 Japan </span></p>

                <p><h4>Singapore</h4>
                    <span style="font-family: 'Roboto', sans-serif; font-weight: 500; color: #272727;">Address :</span> <span>Ocean Financial Centre,10 Collyer Quay 049315 Singapore</span></p>

                <p><h4>UK, London</h4>
                    <span style="font-family: 'Roboto', sans-serif; font-weight: 500; color: #272727;">Address :</span> <span>1 Poultry, Bank London,EC2R 8EJ United Kingdom </span></p>
                
                <p><h4>Italy, Milan</h4>
                    <span style="font-family: 'Roboto', sans-serif; font-weight: 500; color: #272727;">Address :</span> <span>Torre Diamante Building,Via Mike Bongiorno, 13, 20124 Milano MI Italy</span></p>
                
                
            </div> <!-- End of .callBack_text -->

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 req_callBackForm">
                <form onsubmit="submitFunc()" class="form-validation" autocomplete="off">
                    <div class="input_group">
                        <label>Your Name (required)</label>
                        <input type="text" id="msgName">
                    </div> <!-- End of .input_group -->

                    <div class="input_group">
                        <label>Your Email (required)</label>
                        <input type="email" id="msgEmail">
                    </div> <!-- End of .input_group -->

                    <div class="input_group">
                        <label>Phone Number (required)</label>
                        <input type="text" id="msgPhone">
                    </div> <!-- End of .input_group -->

                    <div class="input_group">
                        <label>Message</label>
                        <input type="text" id="msgMessage">
                    </div> <!-- End of .input_group -->

                    <button class="s_color_bg tran3s font_fix">Submit</button>
                </form>
            </div> <!-- End of .req_callBackForm -->
        </div> <!-- End of .row -->
    </div> <!-- End of .container -->
</div> <!-- End of .req_callBack -->




<!-- Google map _________________________________ -->
<section id="google-map-area">
    <div style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:auto;height:600px;"><div id="my-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Winway+Building,+50+Wellington+Street,+Central,+Hong+Kong+Island,+Hong+Kong&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><style>#my-map-canvas img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
</section>

<script type="text/javascript">
    function submitFunc() {
        var nameValue = encodeURIComponent(document.getElementById('msgName').value);
        var emailValue = encodeURIComponent(document.getElementById('msgEmail').value);
        var phoneValue = encodeURIComponent(document.getElementById('msgPhone').value);
        var messageValue = encodeURIComponent(document.getElementById('msgMessage').value);

        var emailBody = "Name: " + nameValue + "%0D%0AEmail: " + emailValue + "%0D%0APhone: " + phoneValue + "%0D%0AMessage: " + messageValue;

        window.location.href = "mailto:info@silverlionglobal.com?body=" + emailBody;
    }
</script>
@endsection