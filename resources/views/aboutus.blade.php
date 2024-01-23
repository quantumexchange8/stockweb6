@extends('layouts.main')
@section('title', 'About Us | ' . config('app.full_company_name'))


@section('content')
<!-- Inner Banner _____________________ -->
<div class="inner_banner">
  <div class="overlay">
    <div class="banner_tilte">
      <h2>About Us</h2>
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
      <li>About Us</li>
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
        <h4 class="p_color_bg s_color">About Us</h4>
      </div> <!-- End of .main_img_holder -->
      <div class="theme_title pFix">
        <h4>What we do?</h4>
      </div><br>
      <p>
        {{ config('app.full_company_name') }}  provides direct real estate investment services and discretionary investment management for mutual fund investors, private clients, and institutions.
        <br><br>As part of our multi-asset business, we invest in alternative investments such as hedge funds and commodities, in addition to equities, bonds, and commercial property, in an effort to generate stable and sustainable returns for our investors.
        <br><br>Our real estate investment team invests client capital in international markets through investment strategies that seek to generate attractive risk-adjusted returns, utilising a core-plus approach. The organisation constructs property portfolios that are relatively conservative in nature, providing opportunities for value creation and stable, rising income returns.
        <br><br>We have developed a variety of services that correspond to the requirements of contemporary investors. Additionally, we have bolstered our fund management team through the recruitment of skilled personnel with expertise in customer service and administration.
        <br><br>Because {{ config('app.full_company_name') }} 's limited liability partnership allows your employees to participate in the company's success, we both possess the same objectives. Our objective is to establish ourselves as a dynamic company committed to delivering favourable risk-adjusted returns to investors while also meeting client requirements for streamlined service.
        <br><br>{{ config('app.full_company_name') }}  is dedicated to consistently providing fair treatment to its consumers in all that it does, in strict adherence to the principles for business established by the Financial Securities Commission. Our senior management oversees this philosophy, which is ingrained in our systems, controls, and culture. Our objective is to ensure fair treatment of consumers throughout the entire product life cycle.

      </p>
      <br><br>
      <div class="theme_title pFix">
        <h4>Why {{ config('app.full_company_name') }}?</h4>
      </div><br>
      <p>
        We provide an engaging experience for our expanding network of clients and collaborators. We are completely devoted to ensuring the financial success of each and every one of our clients. We are not prospering if you are not.
        <br><br>It is by having a comprehensive understanding of our clients' needs that we achieve success. Throughout the relationship, we maintain constant communication and construct an educational framework to ensure that your decisions are well-informed.
        <br><br>Our objective is to increase the amount of capital under management, and this can only be achieved by presenting a clear and reliable proposal.
        <br><br>The purpose of our meticulous advice procedure is to assist clients in making well-informed choices and preventing expensive mistakes. We are committed to assisting individuals in overcoming their financial obstacles and capitalising on their potential.
        <br><br>The primary objective is to establish and sustain long-lasting relationships based on mutual trust and benefit.
        <br><br>We understand that no two clients are identical, and as a result, we take the time to comprehend your individual or corporate goals and provide you with tailored solutions.
        <br><br>We provide a unified relationship to accommodate your every financial planning requirement. We endeavour to provide you with the highest quality service possible in order to foster a lasting relationship.

      </p>

      
     
    </div> <!-- End of .wrapper -->
  </div> <!-- End of .service_page_main_post -->



  <!-- _________________________ SIDE BAR ___________________ -->
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 pull-left side_bar">
        <div class="wrapper">
          <!-- Page List -->
          <ul class="page_list service_page_list">
            <li><a href="{{ url('aboutus') }}" class="tran3s active">Introduction</a></li>
            <li><a href="{{ url('social-governance-and-responsibility') }}" class="tran3s">Social Governance and Responsibility</a></li>
            
          </ul> <!-- End of .page_list -->
        </div> <!-- End of .wrapper -->
      </div> <!-- End of .side_bar -->
</div> <!-- End of .row -->
</div> <!-- End of .container -->
</div> <!-- End of .services_innerPage -->


@endsection