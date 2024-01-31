   		<!-- Footer ____________________________ -->

   		<footer>
            <div class="overlay">
                <div class="main_footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 quick_links">
                                <div class="theme_title">
                                 <h4>Quick Links</h4>
                             </div>

                             <ul class="float_left" style="padding-right: 50px;">
                                 <li><a href="{{ url('/') }}" class="tran3s">Home</a></li>
                                 <li><a href="{{ url('aboutus') }}" class="tran3s">About Us</a></li>
                                 <li><a href="{{ url('social-governance-and-responsibility') }}" class="tran3s">Social Governance and responsibility</a></li>
                                 <li><a href="{{ url('faq') }}" class="tran3s">FAQ</a></li>
                                 <li><a href="{{ url('articles-insights') }}" class="tran3s">Articles / Insights</a></li>
                                 <li><a href="{{ url('contactus') }}" class="tran3s">Contact us</a></li>
                                 <li><a href="https://app.silverlionglobal.com/accounts/login/" class="tran3s">Login</a></li>
                                 <li><a href="https://app.silverlionglobal.com/applications/create/" class="tran3s">Register</a></li>
                                 <li><a href="#" class="tran3s"></a></li>
                                 <li><a href="#" class="tran3s"></a></li>
                             </ul>
                             <ul class="border_fix">
                                <li><a href="{{ url('portfolio-management') }}" class="tran3s">Portfolio Management</a></li>
                                <li><a href="{{ url('investment-management') }}" class="tran3s">Investment Management</a></li>
                                <li><a href="{{ url('stockbroking-services') }}"  class="tran3s">Stockbroking Services</a></li>
                                <li><a href="{{ url('income-investing') }}"  class="tran3s">Income Investing </a></li>
                                <li><a href="{{ url('investment-bonds') }}"  class="tran3s">Investment Bonds</a></li>
                                <li><a href="{{ url('retirement-planning') }}"  class="tran3s">Retirement Planning</a></li>
                                <li><a href="{{ url('estate-and-trust-planning') }}"  class="tran3s">Estate and Trust Planning</a></li>
                                <li><a href="{{ url('customised-strategies') }}"  class="tran3s">Customised Strategies</a></li>
                                <li><a href="{{ url('sustainable-investment') }}"  class="tran3s">Sustainable Investment</a></li>
                                <li><a href="{{ url('financial-data-analysis') }}"  class="tran3s">Financial Data Analysis</a></li>
                             </ul>
                             <div class="clear_fix"></div>
                            </div> <!-- End of .quick_links -->

                            


                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 footer_contact">
                                <div class="theme_title">
                                 <h4>Contact</h4>
                             </div>
                             <p><span class="ficon flaticon-map"></span>11/F, Fortune Commercial Building, 362 Sha Tsui Road, Tsuen Wan, Hong Kong</p>
                             <p><span class="ficon flaticon-phone"></span> <a href="tel:+442070304061">(+44) 20703 04061 (Switchboard)</a></p>
                             <p><span class="ficon flaticon-messagetwo"></span> <a href="mailto:info@silverlionglobal.com">info@silverlionglobal.com</a></p>
                            
                            </div> <!-- End of .footer_contact -->
                        </div> <!-- End of .row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <br><br>
                                <p>This website contains for reference purposes only information, news, opinions, research, and analyses. Every piece of current information presented on this website by {{ config('app.full_company_name') }} is subject to change at any time. Online platforms may experience hardware, software, and connection issues, as well as communication failures; precautions have been taken to reduce the likelihood of such complications; however, users should remain cognizant and accountable for such potential setbacks. This communication failure is not the responsibility of {{ config('app.full_company_name') }}. Utilising this website in an unauthorised manner is strictly forbidden, including all and any information.</p>
                            </div>
                        </div>
                    </div> <!-- End of .container -->
                </div> <!-- End of .main_footer -->

                <div class="bottom_footer">
                    <div class="container">
                        <p class="text-center font_fix">{{ config('app.full_company_name') }}  &copy; 2019 - {{ now()->year }}</p>                      
                        <div class="clear_fix"></div>
                    </div>
                </div> <!-- End of .bottom_footer -->
            </div> <!-- End of .overlay -->
        </footer>


         <!-- Scroll Top Button -->
         <button class="scroll-top tran3s s_color_bg border_round">
             <span class="ficon flaticon-up-arrow"></span>
         </button>
