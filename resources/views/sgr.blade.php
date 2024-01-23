@extends('layouts.main')
@section('title', 'Social Governance and Responsibility | ' . config('app.full_company_name'))


@section('content')
<!-- Inner Banner _____________________ -->
<div class="inner_banner">
  <div class="overlay">
    <div class="banner_tilte">
      <h2>Social Governance and Responsibility</h2>
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
      <li><a href="{{ url('aboutus') }}">About Us</a></li>
      <li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
      <li>Social Governance and Responsibility</li>
    </ul>
  </div>
</div> <!-- End of .page-breadcrumb -->


<!-- Service Inner Page Content ______________________ -->
<div class="services_innerPage">
<div class="container">
<div class="row">
  <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right service_page_main_post ">
    <div class="wrapper">
      
      <div class="main_img_holder">
        <img src="{{ asset('images/aboutus3.png') }}" alt="{{ config('app.full_company_name') }} " class="img-responsive">
        <h4 class="p_color_bg s_color">Social Governance and Responsibility</h4>
      </div> <!-- End of .main_img_holder -->
      
      <p>
        {{ config('app.full_company_name') }}  was established on the belief that a financial services company has an important influence on society. The advice and service presented to clients have the potential to provide both security and opportunity. With purpose and direction, money can bring happiness and make life less complicated.
        <br><br>At {{ config('app.full_company_name') }} , our commitment to enhancing the well-being of our clients is evident in all that we do; from our guiding principle of prioritising people over financial gain to the way in which we safeguard the environment that we jointly inhabit.
        <br><br>We have always cultivated a robust social responsibility culture. Therefore, we documented it and incorporated it into our corporate governance as well. It enhances our enduring dedication to effecting constructive change in the global community.

      </p>
    </div> <!-- End of .wrapper -->
  </div> <!-- End of .service_page_main_post -->



  <!-- _________________________ SIDE BAR ___________________ -->
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 pull-left side_bar">
        <div class="wrapper">
          <!-- Page List -->
          <ul class="page_list service_page_list">
            <li><a href="{{ url('aboutus') }}" class="tran3s">Introduction</a></li>
            <li><a href="{{ url('social-governance-and-responsibility') }}" class="tran3s active">Social Governance and Responsibility</a></li>
            
          </ul> <!-- End of .page_list -->
        </div> <!-- End of .wrapper -->
      </div> <!-- End of .side_bar -->
</div> <!-- End of .row -->
</div> <!-- End of .container -->
</div> <!-- End of .services_innerPage -->


@endsection