@extends('layouts.main')
@section('title', 'Investment Management | ' . config('app.full_company_name'))


@section('content')
<!-- Inner Banner _____________________ -->
<div class="inner_banner">
  <div class="overlay">
    <div class="banner_tilte">
      <h2>Investment Management</h2>
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
      <li>Investment Management</li>
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
        <img src="{{ asset('images/aboutus2.png') }}" alt="{{ config('app.full_company_name') }} " class="img-responsive">
        <h4 class="p_color_bg s_color">Investment Management</h4>
      </div> <!-- End of .main_img_holder -->
      
      <p>
      {{ config('app.full_company_name') }}  helps our clients reach their financial goals by managing their investments in a wide range of ways. Our team of experienced financial professionals is dedicated to providing customised solutions that match each client's specific goals, level of comfort with risk, and time frame. We make custom investment plans for each client that include asset allocation, security selection, and ongoing portfolio tracking. We do this by being meticulous and adhering to strict regulations. We want to achieve the greatest returns while taking a minimal amount of risk by keeping up with both the market changes and using extensive research. Our investment management services are meant to give you clarity, trust, and peace of mind, whether you want capital growth, Passive Income Generation, or maintain a balance somewhere in between. We put open communication, regular evaluations of performance, and consistently executing what's best for our clients at the top of our list of priorities. We want to be your trusted partner as you work to achieve financial success by focusing on providing value and building long-term relationships.
      </p>
    </div> <!-- End of .wrapper -->
  </div> <!-- End of .service_page_main_post -->



  <!-- _________________________ SIDE BAR ___________________ -->
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 pull-left side_bar">
        <div class="wrapper">
          <!-- Page List -->
          <ul class="page_list service_page_list">
            <li><a href="{{ url('portfolio-management') }}" class="tran3s">Portfolio Management</a></li>
            <li><a href="{{ url('investment-management') }}" class="tran3s active">Investment Management</a></li>
            <li><a href="{{ url('stockbroking-services') }}"  class="tran3s">Stockbroking Services</a></li>
				    <li><a href="{{ url('income-investing') }}"  class="tran3s">Income Investing </a></li>
						<li><a href="{{ url('investment-bonds') }}"  class="tran3s">Investment Bonds</a></li>
						<li><a href="{{ url('retirement-planning') }}"  class="tran3s">Retirement Planning</a></li>
						<li><a href="{{ url('estate-and-trust-planning') }}"  class="tran3s">Estate and Trust Planning</a></li>
						<li><a href="{{ url('customised-strategies') }}"  class="tran3s">Customised Strategies</a></li>
						<li><a href="{{ url('sustainable-investment') }}"  class="tran3s">Sustainable Investment</a></li>
						<li><a href="{{ url('financial-data-analysis') }}"  class="tran3s">Financial Data Analysis</a></li>
          </ul> <!-- End of .page_list -->
        </div> <!-- End of .wrapper -->
      </div> <!-- End of .side_bar -->
</div> <!-- End of .row -->
</div> <!-- End of .container -->
</div> <!-- End of .services_innerPage -->


@endsection