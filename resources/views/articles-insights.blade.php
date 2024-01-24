@extends('layouts.main')
@section('title', 'Articles / Insights | ' . config('app.full_company_name'))


@section('content')
<!-- Inner Banner _____________________ -->
<div class="inner_banner">
    <div class="overlay">
        <div class="banner_tilte">
            <h2>Articles / Insights</h2>
            <span class="s_color_bg"></span>
        </div> <!-- End of .banner_title -->
    </div> <!-- End of .overlay -->
</div> <!-- End of .inner_banner -->


<!-- Page Breadcrumb __________________ -->
<div class="page-breadcrumb p_color_bg">
    <div class="container clear_fix">
        <ul class="text-center">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
            <li>Articles / Insights</li>
        </ul>
    </div>
</div> <!-- End of .page-breadcrumb -->



<!-- Page Content _________________ -->

<section class="faq_page_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right faq_main_content mTop_fix">

                
                
                
            </div> <!-- End of .main_content -->
        </div> <!-- End of .row -->
    </div> <!-- End of .container -->
</section> <!-- End of .page_wrapper -->


@endsection