<header class="main-header header-style-two"> 
  <!--Header-Upper-->
  <div class="header-upper">
    <div class="auto-container clearfix">
      <div class="pull-left logo-box">
        <div class="logo">
            <a href="index.html">
                <img src="{{ asset('frontend/images/logo-3-01.png') }}" alt="" title="">
            </a>
        </div>
      </div>
      <div class="nav-outer clearfix"> 
        <!-- Mobile Navigation Toggler -->
        <div class="mobile-nav-toggler">
            <span class="icon flaticon-menu"></span>
        </div>
        <!-- Main Menu -->
        <nav class="main-menu navbar-expand-md">
          <div class="navbar-header"> 
            <!-- Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </button>
          </div>
          <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
            <ul class="navigation clearfix">
              <li class="current dropdown"><a href="index.html" onclick="window.location.href=this">Home</a></li>
              <li class="dropdown"><a href="about.html" onclick="window.location.href=this">What We Do?</a>  
                <ul>
                    <li><a href="matrimonial.html">Divorce & Matrimonial Matter</a></li>
                    <li><a href="criminal.html">Criminal Matter</a></li>
                    <li><a href="service-law.html">Service Matter</a></li>
                    <li><a href="civil.html">Civil Matter</a></li>
                    <li><a href="property.html">Property Dispute Matter</a></li>
                </ul>
              </li>

              <li class="dropdown"><a href="ourteampage.html" onclick="window.location.href=this">Our Team</a>
                <ul>
                  <li><a href="partner.html">Partner </a></li>
                  <li><a href="advocate.html">Associates/ Our Experts Advocate </a></li>
                  <li><a href="administration.html">Human Resource & Administration </a></li>
                  <li><a href="assistant.html">Office Assistant </a></li>
                </ul>
              </li>
				
				<li class="dropdown"><a href="careers.html" onclick="window.location.href=this">Careers</a>
                    <ul>
                        <li class="dropdown"><a href="#">Internship </a>
            				<ul>
            					<li><a href="online-internship.html">online internship</a></li>
                                <li><a href="offline-internship.html"> Offline  internship</a></li>
                                <li><a href="specialize-internship.html"> Specialize Internship</a></li>
                                <li><a href="trusted-internship.html"> our trusted internship</a></li>		  
            				</ul>
        				</li>
                        <li><a href="vacancy.html">Vacancy</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="publicationwebstore.html" onclick="window.location.href=this">Publication & Webstore </a>
				  <ul>
    				<li><a href="Book-Publication.html"> Book Publication</a></li>
    				<li><a href="publication.html">Articals publication</a></li>
    				<li><a href="publication.html">Verdict & Judgement</a></li>
				  </ul>
				</li>
             
                <li class="dropdown"><a href="#">More</a> 
                    <ul>
                        <li><a href="#l">News & Update</a></li>
                        <li class="dropdown"><a href="#">Gallery</a>
                            <ul>
                                <li><a href="gallery.html">  Photo </a></li>
                                <li><a href="video.html"> Video </a></li>
                            </ul>
                        </li>
                        <li><a href="#l">Alumni</a></li>
                    </ul>
                </li>
              
                <li class="dropdown"><a href="#">Important Link</a>
                    <ul>
                        <li><a href="https://main.sci.gov.in/" target="_blank">Supreme Court</a></li>
                        <li><a href="http://patnahighcourt.gov.in/" target="_blank">High Court</a></li>
                        <li><a href="https://districts.ecourts.gov.in/patna" target="_blank">Civil Court</a></li>
                        <li><a href="http://land.bihar.gov.in/LandTribunal/default.aspx" target="_blank">Bihar Tribunal </a></li>
                        <li><a href="https://state.bihar.gov.in/main/CitizenHome.html" target="_blank">Bihar Govt Authority /Department</a></li> 
                    </ul>
                </li>

				        <li class="dropdown">
                  @auth
                  <a href="">{{ Auth::user()->name }} | Portal</a>
                   <ul>
                        <li><a href="{{ url('/dashboard') }}">Get Inside Your Portal</a></li>
                        <li><a href="{{ route('admin.logout') }}">Logout</a></li>
                    </ul>
                  @else
                  <a href="contact.html">Join Us</a>
                  <ul>
                        <!--<li><a href="panel/member/login.html">Member Login</a></li>-->
                        <li><a href="{{ route('login') }}">Intern's Login</a></li>
                    </ul>
                  @endauth
                </li>
            </ul>
          </div>
        </nav>
        
        <!-- Main Menu End-->
        <div class="outer-box clearfix"> 
          <!-- Btn Box -->
        </div>
      </div>
    </div>
  </div>
  <!--End Header Upper--> 
  
  <!-- Sticky Header  -->
  <div class="sticky-header">
    <div class="auto-container clearfix"> 
      <!--Logo-->
      <div class="logo pull-left"> <a href="index.html" title=""><img src="{{ asset('frontend/images/logo-3-01.png') }}" alt="" title=""></a> </div>
      <!--Right Col-->
      <div class="pull-right"> 
        <!-- Main Menu -->
        <nav class="main-menu"> 
          <!--Keep This Empty / Menu will come through Javascript--> 
        </nav>
        <!-- Main Menu End--> 
        
        <!-- Main Menu End-->
        <div class="outer-box clearfix"> 
          
          <!-- Btn Box -->
          
          
          <!-- Mobile Navigation Toggler -->
          <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Sticky Menu --> 
  
  <!-- Mobile Menu  -->
  <div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
    <nav class="menu-box">
      <div class="nav-logo"><a href="index.html"><img src="{{ asset('frontend/images/logo-3-01.png') }}" alt="" title=""></a></div>
      <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
    </nav>
  </div>
<!-- End Mobile Menu --> 
</header>