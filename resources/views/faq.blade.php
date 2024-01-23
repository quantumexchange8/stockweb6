@extends('layouts.main')
@section('title', 'FAQ | ' . config('app.full_company_name'))


@section('content')
<!-- Inner Banner _____________________ -->
<div class="inner_banner">
    <div class="overlay">
        <div class="banner_tilte">
            <h2>Frequently Asked Questions</h2>
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
            <li>Frequently Asked Questions</li>
        </ul>
    </div>
</div> <!-- End of .page-breadcrumb -->



<!-- FAQ Page Content _________________ -->

<section class="faq_page_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right faq_main_content mTop_fix">

                <div class="faqAndNews">

                    <div class="faq_panel">
                        <div class="panel-group theme-accordion" id="accordion">
                          <div class="panel">
                            <div class="panel-heading active-panel">
                              <h6 class="panel-title">
                                  <span class="icon tran3s"></span>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                    Is {{ config('app.full_company_name') }} a registered company</a>
                              </h6>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <p>Yes {{ config('app.full_company_name') }} is a registered company</p>
                              </div>
                            </div>
                          </div> <!-- /panel 1 -->
                          <div class="panel">
                            <div class="panel-heading">
                              <h6 class="panel-title">
                                  <span class="icon tran3s"></span>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                    What steps do I need to take to join {{ config('app.full_company_name') }}?</a>
                              </h6>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <p>Simply complete our online application form and submit the required KYC papers. Alternately, you may contact us and we will assist you with the various procedures.</p>
                              </div>
                            </div>
                          </div> <!-- /panel 2 -->
                          <div class="panel">
                            <div class="panel-heading">
                              <h6 class="panel-title">
                                  <span class="icon tran3s"></span>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                    How soon can I begin investing or trading with {{ config('app.full_company_name') }}?</a>
                              </h6>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <p>As soon as we have evaluated your investment requirements and received your KYC documentation, one of our specialists will initiate your journey immediately.</p>
                              </div>
                            </div>
                          </div> <!-- /panel 3 -->

                          <div class="panel">
                            <div class="panel-heading">
                              <h6 class="panel-title">
                                  <span class="icon tran3s"></span>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                    Can I invest from anywhere in the world?</a>
                              </h6>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <p>Our network's worldwide reach is exceptional, so you are never limited no matter where you are in the world.</p>
                              </div>
                            </div>
                          </div> <!-- /panel 4 -->

                          <div class="panel">
                            <div class="panel-heading">
                              <h6 class="panel-title">
                                  <span class="icon tran3s"></span>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                    What if I don't know much about the financial markets?</a>
                              </h6>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <p>Our expert team will guide you in every way possible to make you feel comfortable and understand everything you need to know about the investment or trade you will be making.</p>
                              </div>
                            </div>
                          </div> <!-- /panel 5 -->

                          <div class="panel">
                            <div class="panel-heading">
                              <h6 class="panel-title">
                                  <span class="icon tran3s"></span>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                    Does {{ config('app.full_company_name') }} have an internship program?</a>
                              </h6>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <p>We hire a small number of interns each year, so if you have any questions about upcoming opportunities, please send us an email and a member of our staff will respond as soon as possible. We hire a small number of interns each year, so if you have any questions about upcoming opportunities, please send us an email and a member of our staff will respond as soon as possible.</p>
                              </div>
                            </div>
                          </div> <!-- /panel 6 -->

                          <div class="panel">
                            <div class="panel-heading">
                              <h6 class="panel-title">
                                  <span class="icon tran3s"></span>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                    Can I invest or trade using Cryptocurrency?</a>
                              </h6>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <p>Here at {{ config('app.full_company_name') }}, we accept all major Cryptocurrencies.</p>
                              </div>
                            </div>
                          </div> <!-- /panel 7 -->

                         
                        </div> <!-- end #accordion -->
                    </div> <!-- End of .faq_panel -->
                </div>
                
            </div> <!-- End of .faq_main_content -->
        </div> <!-- End of .row -->
    </div> <!-- End of .container -->
</section> <!-- End of .faq_page_wrapper -->


@endsection