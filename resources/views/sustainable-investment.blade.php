@extends('layouts.main')
@section('title', 'Sustainable Investment | ' . config('app.full_company_name'))


@section('content')
<!-- Inner Banner _____________________ -->
<div class="inner_banner">
  <div class="overlay">
    <div class="banner_tilte">
      <h2>Sustainable Investment</h2>
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
      <li>Sustainable Investment</li>
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
        <img src="{{ asset('images/sustainable-investment.png') }}" alt="{{ config('app.full_company_name') }} " class="img-responsive">
        <h4 class="p_color_bg s_color">Sustainable Investment </h4>
      </div> <!-- End of .main_img_holder -->

      <div class="theme_title pFix">
        <h4>ESG Integration</h4>
      </div><br>
      <p>
        When we look at investments and make decisions, we take environmental, social, and political factors into consideration. This helps us find opportunities that will give our clients long-term value while also promoting sustainability and good business practices.
      </p>
      <br><br>
      <div class="theme_title pFix">
        <h4>Impact Investing</h4>
      </div><br>
      <p>
        Our company gives people access to impact investments that aim to make a positive, measurable effect on society or the environment while also making money. Our clients can help make things better in areas like healthcare, education, renewable energy, and community development by investing with an effect.
      </p>
      <br><br>
      <div class="theme_title pFix">
        <h4>Sustainable Portfolio Options</h4>
      </div><br>
      <p>
        There are a number of sustainable investment portfolios that we can put together for people with different risk tolerances and investment choices. These portfolios are put together using ESG factors, and their goal is to make the world a better place while also seeking high financial returns.
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
						<li><a href="{{ url('estate-and-trust-planning') }}"  class="tran3s">Estate and Trust Planning</a></li>
						<li><a href="{{ url('customised-strategies') }}"  class="tran3s">Customised Strategies</a></li>
						<li><a href="{{ url('sustainable-investment') }}"  class="tran3s active">Sustainable Investment</a></li>
						<li><a href="{{ url('financial-data-analysis') }}"  class="tran3s">Financial Data Analysis</a></li>
          </ul> <!-- End of .page_list -->
        </div> <!-- End of .wrapper -->
      </div> <!-- End of .side_bar -->
</div> <!-- End of .row -->
</div> <!-- End of .container -->
</div> <!-- End of .services_innerPage -->


@endsection