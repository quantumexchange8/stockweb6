@extends('layouts.main')
@section('title', 'Financial Planning | ' . config('app.full_company_name'))


@section('content')
<!-- Inner Banner _____________________ -->
<div class="inner_banner">
    <div class="overlay">
        <div class="banner_tilte">
            <h2>Financial Planning</h2>
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
            <li>Financial Planning</li>
        </ul>
    </div>
</div> <!-- End of .page-breadcrumb -->



<!-- Page Content _________________ -->

<section class="faq_page_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right faq_main_content mTop_fix">

              <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="single_service_wrapper text-center">
                        <div class="img_wrapper">
                          <img src="{{ asset('images/home/portfolio-management.png') }}" alt="image" class="img-responsive">
                        </div>
                        <div class="text">
                          <div>
                        <h5><a href="{{ url('portfolio-management') }}" style="color:#000">Portfolio Management</a></h5>
                      </div>
                      <br>
                    </div> 
                      </div> 
                    </div> 

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="single_service_wrapper text-center">
                        <div class="img_wrapper">
                          <img src="{{ asset('images/home/investment-management.png') }}" alt="image" class="img-responsive">
                        </div>
                        <div class="text">
                          <div>
                        <h5><a href="{{ url('investment-management') }}" style="color:#000">Investment Management</a></h5>
                      </div>
                      <br>
                    </div> 
                      </div> 
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="single_service_wrapper text-center">
                        <div class="img_wrapper">
                          <img src="{{ asset('images/home/stockbroking-services.png') }}" alt="image" class="img-responsive">
                        </div>
                        <div class="text">
                          <div>
                        <h5><a href="{{ url('stockbroking-services') }}" style="color:#000">Stockbroking Services</a></h5>
                      </div>
                      <br>
                    </div> 
                      </div> 
                    </div> 

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="single_service_wrapper text-center">
                        <div class="img_wrapper">
                          <img src="{{ asset('images/home/income-investing.png') }}" alt="image" class="img-responsive">
                        </div>
                        <div class="text">
                          <div>
                        <h5><a href="{{ url('income-investing') }}" style="color:#000">Income Investing</a></h5>
                      </div>
                      <br>
                    </div> 
                      </div> 
                    </div> 

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="single_service_wrapper text-center">
                        <div class="img_wrapper">
                          <img src="{{ asset('images/home/investment-bonds.png') }}" alt="image" class="img-responsive">
                        </div>
                        <div class="text">
                          <div>
                        <h5><a href="{{ url('investment-bonds') }}" style="color:#000">Investment Bonds</a></h5>
                      </div>
                      <br>
                    </div> 
                      </div> 
                    </div> 

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="single_service_wrapper text-center">
                        <div class="img_wrapper">
                          <img src="{{ asset('images/home/retirement-planning.png') }}" alt="image" class="img-responsive">
                        </div>
                        <div class="text">
                          <div>
                        <h5><a href="{{ url('retirement-planning') }}" style="color:#000">Retirement Planning </a></h5>
                      </div>
                      <br>
                    </div> 
                      </div> 
                    </div> 

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="single_service_wrapper text-center">
                        <div class="img_wrapper">
                          <img src="{{ asset('images/home/estate-and-trust-planning.png') }}" alt="image" class="img-responsive">
                        </div>
                        <div class="text">
                          <div>
                        <h5><a href="{{ url('estate-and-trust-planning') }}" style="color:#000">Estate and Trust Planning
                        </a></h5>
                      </div>
                      <br>
                    </div> 
                      </div> 
                    </div> 

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="single_service_wrapper text-center">
                        <div class="img_wrapper">
                          <img src="{{ asset('images/home/customised-strategies.png') }}" alt="image" class="img-responsive">
                        </div>
                        <div class="text">
                          <div>
                        <h5><a href="{{ url('customised-strategies') }}" style="color:#000">Customised Strategies
                        </a></h5>
                      </div>
                      <br>
                    </div> 
                      </div> 
                    </div> 
      

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="single_service_wrapper text-center">
                        <div class="img_wrapper">
                          <img src="{{ asset('images/home/sustainable-investment.png') }}" alt="image" class="img-responsive">
                        </div>
                        <div class="text">
                          <div>
                        <h5><a href="{{ url('sustainable-investment') }}" style="color:#000">Sustainable Investment
                        </a></h5>
                      </div>
                      <br>
                    </div> 
                      </div> 
                    </div> 
      

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="single_service_wrapper text-center">
                        <div class="img_wrapper">
                          <img src="{{ asset('images/home/financial-data-analysis.png') }}" alt="image" class="img-responsive">
                        </div>
                        <div class="text">
                          <div>
                        <h5><a href="{{ url('financial-data-analysis') }}" style="color:#000">Financial Data Analysis
                        </a></h5>
                      </div>
                      <br>
                    </div> 
                      </div> 
                    </div> 
      
      
                
      
                
      
              
      
              
              </div>
                
                
            </div> <!-- End of .main_content -->
        </div> <!-- End of .row -->
    </div> <!-- End of .container -->
</section> <!-- End of .page_wrapper -->


@endsection