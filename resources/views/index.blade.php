@extends('layouts.main')
@section('title', 'Home | ' . config('app.full_company_name'))


@section('content')

        <!-- Banner ___________________________________ -->

		<section class="banner">
			<div class="rev_slider_wrapper">
				<div id="main_slider" class="rev_slider"  data-version="5.0">
					<ul>

						<li data-index='rs-355' class="slide_show slide_1" data-transition='boxslide' data-slotamount='default' data-easein='default' data-easeout='default' data-masterspeed='default' data-rotate='0' data-saveperformance='off' data-title='Slide Boxes' data-description=''> <!-- Slide_show -->
							<img src="{{ asset('images/home/banner1.png') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" >
							
							<div class="main_heading tp-caption tp-resizeme"
								data-x="['left','left','left','left']" data-hoffset="['0','0','30','40']" 
								data-y="['middle','middle','middle','middle']" data-voffset="['-290','-169','-139','-80']"
				        		data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;" 
								data-transform_out="y:[100%];s:1000;s:1000;" 
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
								data-start="2000" 
								data-splitin="none" 
								data-splitout="none">
								<h1 style="color:#fff">Financial Solutions<br>and Advisory</h1>
							</div>
							<div class="tp-caption tp-resizeme"
								data-x="['left','left','left','left']" data-hoffset="['0','0','30','40']" 
								data-y="['middle','middle','middle','middle']" data-voffset="['-166','-16','-06','20']"
								data-transform_idle="o:1;"
								data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" 
								data-transform_out="y:[100%];s:1000;s:1000;" 
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
								data-start="3000" 
								data-splitin="none" 
								data-splitout="none"
								data-elementdelay="0.05">
								<p style="color:#fff">We provide an engaging experience for our expanding network <br> of clients and collaborators.</p>
							</div>
							
							
						</li> <!-- /Slide_show -->

						<li data-index='rs-356' class="slide_show slide_2" data-transition='slotslide-vertical' data-slotamount='default' data-easein='default' data-easeout='default' data-masterspeed='default' data-rotate='0' data-saveperformance='off' data-title='Slide Slots vertical' data-description=''> <!-- Slide2 -->

							<img src="{{ asset('images/home/banner2.png') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

							<div class="tp-caption tp-resizeme"
								data-x="['center','center','center','center']" data-hoffset="['268','268','100','0']" 
								data-y="['middle','middle','middle','middle']" data-voffset="['-169','-169','-129','-50']"
								data-transform_idle="o:1;"
								data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="2000" 
								data-splitin="none" 
								data-splitout="none">
								<h1 style="color:#fff">Providing leading<br>Business Solutions</h1>
							</div>
							<div class="main_heading tp-caption tp-resizeme"
								data-x="['center','center','center','center']" data-hoffset="['265','265','97','28']" 
								data-y="['middle','middle','middle','middle']" data-voffset="['-16','-16','24','48']"
								data-transform_idle="o:1;"
								data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="3000" 
								data-splitin="none" 
								data-splitout="none">
								<p style="color:#fff">Our company offers a full range of consulting<br>services in all the countries</p>
							</div>
							
						</li> <!-- /Slide2 -->
						
					</ul>
				</div> <!-- /main_slider -->
			</div> <!-- /rev_slider_wrapper -->
		</section> <!-- /banner -->




		<!-- Request Quote _____________________________________ -->
		<div class="request_quote">
			<div class="container">
				<p class="float_left">We’ll ensure you always get the best guidance.</p>
				<a href="{{ url('contactus') }}" class="theme_button s_color_bg float_right tran3s">Contact Us</a>
				<div class="clear_fix"></div>
			</div> <!-- End of .container -->
		</div> <!-- End of .request_quote -->



		<!-- Company Excellence _________________________________ -->

		<div class="company_excellance">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_excellance">
						<div class="hexagon tran3s">
							<span class="ficon flaticon-staticsscreen"></span>
						</div> <!-- End of .hexagon -->

						<div class="text">
							<h5>Financial Data Analysis</h5>
							<span class="s_color_bg tran3s"></span>
							<p class="tran3s">We use cutting-edge methods to examine financial data and establish valuable insights to assist us in making educated business decisions. Our data-driven approach, which helps us identify hidden patterns, assess risk, and identify opportunities across a broad spectrum of asset classes. This enables us to offer our clients the best performance possible.</p>
						</div> <!-- End of .text -->
					</div> <!-- End of .single_excellance -->

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_excellance">
						<div class="hexagon tran3s">
							<span class="ficon flaticon-statics"></span>
						</div> <!-- End of .hexagon -->

						<div class="text">
							<h5>Estate and Trust Planning </h5>
							<span class="s_color_bg tran3s"></span>
							<p class="tran3s">We understand how essential it is to plan an estate and a trust to ensure our clients' loved ones have access to any assets left behind. Our full estate and trust planning services are made to handle the complicated issues of transferring wealth, keeping assets secure, and making sure our clients' desires prove fulfilled.</p>
						</div> <!-- End of .text -->
					</div> <!-- End of .single_excellance -->

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_excellance">
						<div class="hexagon tran3s">
							<span class="ficon flaticon-wheel"></span>
						</div> <!-- End of .hexagon -->

						<div class="text">
							<h5>Investment Management </h5>
							<span class="s_color_bg tran3s"></span>
							<p class="tran3s">Our team of experienced financial professionals is dedicated to providing customised solutions that match each client's specific goals, level of comfort with risk, and time frame. We make custom investment plans for each client that include asset allocation, security selection, and ongoing portfolio tracking.</p>
						</div> <!-- End of .text -->
					</div> <!-- End of .single_excellance -->

				</div> <!-- End of .row -->
			</div> <!-- End of .container -->
		</div> <!-- End of .company_excellance -->


		<!-- About ConsultPress & Testimonial ____________ -->

		<div class="about_testimonial">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 about_ConsultPress">
						<div class="theme_title">
							<h3>About Us</h3>
						</div>
						<p>Established in 2019, {{ config('app.full_company_name') }} is a wealth management firm that caters to individual needs. Besides our headquarters in Hong Kong, we also have regional offices in Taiwan and London.
						  <br><br>By aligning ourselves with your particular aspirations, goals, and objectives, we are able to provide you and your ecosystem with unrestricted assistance and value in our capacity as certified financial advisers and asset management specialists. We invest effort in understanding the journey that awaits you and offer assistance as you traverse this trajectory. Our objective is to support you in reaching your goals through the expansion of your investments in a transparent, effective, and tax-efficient manner.
							<br><br>You are more than a client in our eyes. By joining our ecosystem, you are welcomed into a realm of mutual respect and assistance where the value of financial advice transcends mere numerical data. Collaboratively developing a strategy to improve the future for all members of society is the essence of constructing a community that is committed to your best interests.</p>
					</div> <!-- End of .about_ConsultPress -->

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 testimonial">
						<img src="{{ asset('images/home/about.jpg') }}" alt="{{ config('app.full_company_name') }}" class="img-responsive" >
						
					</div> <!-- End of .testimonial -->
				</div> <!-- End of .row -->
			</div> <!-- End of .container -->
		</div> <!-- End of .about_testimonial -->



		<!-- What Makes us Special _________________________ -->

		<div class="makesUs_special">
			<div class="overlay">
				<div class="container">
					<div class="theme_title">
						<h2>What Special?</h2>
					</div>
					<div class="row">
						<!-- _____________ Item ____________ -->
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="special_item">
								<div class="icon float_left"><span class="ficon flaticon-peopletwo"></span></div> <!-- End of .icon -->
								<div class="text float_left">
									<span class="timer" data-from="1" data-to="150" data-speed="5000" data-refresh-interval="50">150</span><span> ++</span>
									<p>Exclusive clients</p>
								</div> <!-- End of .text -->
								<div class="clear_fix"></div>
							</div> <!-- End of .special_item -->
						</div> <!-- End of .col -->

						<!-- _____________ Item ____________ -->
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="special_item">
								<div class="icon float_left"><span class="ficon flaticon-screen"></span></div> <!-- End of .icon -->
								<div class="text float_left">
									<span class="timer" data-from="1" data-to="92" data-speed="5000" data-refresh-interval="50">92</span><span>%</span>
									<p>Success rate</p>
								</div> <!-- End of .text -->
								<div class="clear_fix"></div>
							</div> <!-- End of .special_item -->
						</div> <!-- End of .col -->

						<!-- _____________ Item ____________ -->
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="special_item">
								<div class="icon float_left"><span class="ficon flaticon-smile"></span></div> <!-- End of .icon -->
								<div class="text float_left">
									<span class="timer" data-from="1" data-to="100" data-speed="5000" data-refresh-interval="50">100</span><span>%</span>
									<p>Satisfied clients</p>
								</div> <!-- End of .text -->
								<div class="clear_fix"></div>
							</div> <!-- End of .special_item -->
						</div> <!-- End of .col -->

					</div> <!-- End of .row -->
				</div> <!-- End of .container -->
			</div> <!-- End of .overlay -->
		</div> <!-- End of .makesUs_special -->




		<!-- Why Choose Us ________________________ -->

		<section class="why_choose_us">
			<div class="container">
				<div class="theme_title_center">
					<h2>Services</h2>
					<span></span>
				</div> <!-- End of .theme_title_center -->

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
				</div>
				<br><br>
			</div> <!-- End of .container -->
		</section> <!-- End of .why_choose_us -->
@endsection