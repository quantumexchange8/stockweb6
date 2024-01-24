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

                <p><span>Phone :</span> +852 0000 0000</p>

                <p><span>Address :</span> 11/F, FORTUNE COMMERCIAL BUILDING, 362 SHA TSUI ROAD, TSUEN WAN, HONG KONG</p>
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
    <div style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:auto;height:600px;"><div id="my-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Fortune+Commercial+Building,+Sha+Tsui+Road,+Tsuen+Wan,+Hong+Kong&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><style>#my-map-canvas img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
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