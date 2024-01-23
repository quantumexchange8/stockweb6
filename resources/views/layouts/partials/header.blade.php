 <!-- Header ___________________________________ -->

 <header class="p_color_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 header_left">
                <ul>
                    <li><i class="fa fa-map-marker s_color" aria-hidden="true"></i><a href="#">11/F, FORTUNE COMMERCIAL BUILDING, 362 SHA TSUI ROAD, TSUEN WAN, HONG KONG</a></li>
                    <li><i class="fa fa-phone s_color" aria-hidden="true"></i><a href="#">Contact Us! (+852) 0000 0000 </a></li>
                    
                </ul>
            </div> <!-- End of .header_left -->
        </div>  <!-- End of .row -->
    </div> <!-- End of .container -->
</header> <!-- End of header -->

        <!-- Menu ___________________________________ -->

        <div class="main_menu">
        	<div class="container">
        		<div class="logo float_left">
        			<a href="index.html"><img src="{{ asset('images/logo/logo.svg') }}" width="220px" height="27px" alt="{{ config('app.full_company_name') }}" class="img-responsive"></a>
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
				       <li class="dropdown"><a href="#">About Us</a>
				       		<ul class="sub-menu">
				       			<li><a href="{{ url('aboutus') }}">Introduction</a></li>
				       			<li><a href="{{ url('social-governance-and-responsibility') }}">Social Governance and responsibility</a></li>
				       			
				       		</ul> <!-- End of .sub-menu -->
				       </li>
				       <li class="dropdown"><a href="#">Financial Planning</a>
				       		<ul class="sub-menu fix">
				       			<li><a href="">Portfolio Management</a></li>
				       			<li><a href="">Investment Management</a></li>
				       			<li><a href="">Stockbroking Services</a></li>
				       			<li><a href="">Income Investing </a></li>
								<li><a href="">Investment Bonds</a></li>
								<li><a href="">Retirement Planning</a></li>
								<li><a href="">Estate and Trust Planning</a></li>
								<li><a href="">Customised Strategies</a></li>
								<li><a href="">Sustainable Investment</a></li>
								<li><a href="">Financial Data Analysis</a></li>
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