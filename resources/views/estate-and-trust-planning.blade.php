@extends('layouts.main')
@section('title', 'Estate and Trust Planning | ' . config('app.full_company_name'))


@section('content')
<!-- Inner Banner _____________________ -->
<div class="inner_banner">
  <div class="overlay">
    <div class="banner_tilte">
      <h2>Estate and Trust Planning</h2>
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
      <li>Estate and Trust Planning</li>
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
        <img src="{{ asset('images/estate-and-trust-planning.png') }}" alt="{{ config('app.full_company_name') }} " class="img-responsive">
        <h4 class="p_color_bg s_color">Estate and Trust Planning</h4>
      </div> <!-- End of .main_img_holder -->
   
      <p>
        At {{ config('app.full_company_name') }}, we understand how essential it is to plan an estate and a trust to ensure our clients' loved ones have access to any assets left behind. Our full estate and trust planning services are made to handle the complicated issues of transferring wealth, keeping assets secure, and making sure our clients' desires prove fulfilled.
      </p>
     

      
     
    </div> <!-- End of .wrapper -->
  </div> <!-- End of .service_page_main_post -->



  <!-- _________________________ SIDE BAR ___________________ -->
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 pull-left side_bar">
        <div class="wrapper">
          <!-- Page List -->
          <ul class="page_list service_page_list">
            <li><a href="{{ url('portfolio-management') }}" class="tran3s">Portfolio Management</a></li>
            <li><a href="{{ url('investment-management') }}" class="tran3s">Investment Management</a></li>
            <li><a href="{{ url('stockbroking-services') }}"  class="tran3s">Stockbroking Services</a></li>
				    <li><a href="{{ url('income-investing') }}"  class="tran3s">Income Investing </a></li>
						<li><a href="{{ url('investment-bonds') }}"  class="tran3s">Investment Bonds</a></li>
						<li><a href="{{ url('retirement-planning') }}"  class="tran3s">Retirement Planning</a></li>
						<li><a href="{{ url('estate-and-trust-planning') }}"  class="tran3s active">Estate and Trust Planning</a></li>
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