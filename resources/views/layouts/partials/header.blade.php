 <!-- Header ___________________________________ -->

 <header class="p_color_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 header_left">
                <ul>
                    <li><i class="fa fa-map-marker s_color" aria-hidden="true"></i><a href="https://www.google.com/maps/place/Winway+Building/@22.2817189,114.1528231,17z/data=!4m10!1m2!2m1!1sUnit+503,+5%2FF,+Winway+Building,+50+Wellington+Street,+Central,+Hong+Kong!3m6!1s0x3404007b368f0761:0xe80d2cad2a4a3e24!8m2!3d22.281714!4d114.155398!15sCkhVbml0IDUwMywgNS9GLCBXaW53YXkgQnVpbGRpbmcsIDUwIFdlbGxpbmd0b24gU3RyZWV0LCBDZW50cmFsLCBIb25nIEtvbmeSAQ9idXNpbmVzc19jZW50ZXLgAQA!16s%2Fg%2F11k3mzd5_8?authuser=0&entry=ttu">Unit 503, 5/F, Winway Building, 50 Wellington Street, Central, Hong Kong</a></li>
                    <li><i class="fa fa-phone s_color" aria-hidden="true"></i><a href="tel:+35227941780">Contact Us! (+352) 2794 1780 (Switchboard)</a></li>
                    
                </ul>
            </div> <!-- End of .header_left -->
        </div>  <!-- End of .row -->
    </div> <!-- End of .container -->
</header> <!-- End of header -->

        <!-- Menu ___________________________________ -->

        <div class="main_menu">
        	<div class="container">
        		<div class="logo float_left">
        			<a href="{{ url('/') }}"><img src="{{ asset('images/logo/logo.svg') }}" width="220px" height="27px" alt="{{ config('app.full_company_name') }}" class="img-responsive"></a>
        		</div> <!-- End of .logo -->

        		<nav class="navbar navbar-default float_left">
				   <!-- Brand and toggle get grouped for better mobile display -->
				   <div class="navbar-header">
				     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				       <span class="sr-only">Toggle navigation</span>
				       <span class="icon-bar"></span>
				       <span class="icon-bar"></span>
				       <span class="icon-bar"></span>
				     </button>
				   </div>
				   <!-- Collect the nav links, forms, and other content for toggling -->
				   <div class="collapse navbar-collapse float_left" id="navbar-collapse-1">
				     <ul class="nav navbar-nav">
				       <li><a href="{{ url('/') }}">Home</a></li>
				       <li class="dropdown"><a href="{{ url('aboutus') }}">About Us</a>
				       		<ul class="sub-menu">
				       			<li><a href="{{ url('aboutus') }}">Introduction</a></li>
				       			<li><a href="{{ url('social-governance-and-responsibility') }}">Social Governance and responsibility</a></li>
				       			
				       		</ul> <!-- End of .sub-menu -->
				       </li>
				       <li class="dropdown"><a href="{{ url('financial-planning') }}">Financial Planning</a>
				       		<ul class="sub-menu fix">
				       			<li><a href="{{ url('portfolio-management') }}">Portfolio Management</a></li>
				       			<li><a href="{{ url('investment-management') }}">Investment Management</a></li>
				       			<li><a href="{{ url('stockbroking-services') }}">Stockbroking Services</a></li>
				    			<li><a href="{{ url('income-investing') }}">Income Investing </a></li>
								<li><a href="{{ url('investment-bonds') }}">Investment Bonds</a></li>
								<li><a href="{{ url('retirement-planning') }}">Retirement Planning</a></li>
								<li><a href="{{ url('estate-and-trust-planning') }}">Estate and Trust Planning</a></li>
								<li><a href="{{ url('customised-strategies') }}">Customised Strategies</a></li>
								<li><a href="{{ url('sustainable-investment') }}">Sustainable Investment</a></li>
								<li><a href="{{ url('financial-data-analysis') }}">Financial Data Analysis</a></li>
				       		</ul> <!-- End of .sub-menu -->
				       </li>
				       <li><a href="{{ url('faq') }}">FAQ</a></li>
				       <li><a href="{{ url('contactus') }}">Contact</a></li>
					   <li><a href="https://app.silverlionglobal.com/accounts/login/">Portal Login</a></li>
				     </ul>
				   </div><!-- /.navbar-collapse -->
				</nav>

				<div class="nav_right_area float_right">
					
				   <div class="clear_fix"></div>
				</div> <!-- End of .nav_right_area -->
			<div class="clear_fix"></div>
        	</div> <!-- End of .container -->
        </div> <!-- End of .main_menu -->