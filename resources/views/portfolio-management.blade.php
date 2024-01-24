@extends('layouts.main')
@section('title', 'Portfolio Management | ' . config('app.full_company_name'))


@section('content')
<!-- Inner Banner _____________________ -->
<div class="inner_banner">
  <div class="overlay">
    <div class="banner_tilte">
      <h2>Portfolio Management</h2>
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
      <li>Portfolio Management</li>
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
        <img src="{{ asset('images/portfolio-management.png') }}" alt="{{ config('app.full_company_name') }} " class="img-responsive">
        <h4 class="p_color_bg s_color">Portfolio Management</h4>
      </div> <!-- End of .main_img_holder -->
      
      <p>
        If you need help figuring out finances, {{ config('app.full_company_name') }} 's portfolio management services are here to help. When building and managing investment portfolios for clients, our team of experienced portfolio managers uses their knowledge, data-driven insights, and focus on the client to make sure the portfolios meet the needs and financial goals of each client. We offer a full portfolio management service that includes active monitoring, strategic asset allocation, and risk management to help you get the best results while minimising risks, whether you're looking for growth, income, or a balanced approach. Our clients will be successful in the long run if we communicate clearly, review their portfolios regularly, and stick to a disciplined investment plan. Our portfolio management services are focused on giving our clients value and peace of mind by broadening their investments and keeping a close eye on market trends.
      </p>
     
    </div> <!-- End of .wrapper -->
  </div> <!-- End of .service_page_main_post -->



  <!-- _________________________ SIDE BAR ___________________ -->
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 pull-left side_bar">
        <div class="wrapper">
          <!-- Page List -->
          <ul class="page_list service_page_list">
            <li><a href="{{ url('portfolio-management') }}" class="tran3s active">Portfolio Management</a></li>
            <li><a href="{{ url('investment-management') }}" class="tran3s">Investment Management</a></li>
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