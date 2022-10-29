<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="html/ltr/vertical-menu-template/index.html"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">ACTC.PRO</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>

        <div class="shadow-bottom"></div>

           <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item">
                    <a class="d-flex align-items-center active" href="{{ url('/admin/dashboard') }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span></a>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='airplay'></i><span class="menu-title text-truncate">Quiz</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Add Quiz</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">View Quiz</span></a>
                        </li>
                    </ul>
                </li>


                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='file-text'></i><span class="menu-title text-truncate">Career</span></a>
                    <ul class="menu-content">
                       <li class="has-sub" style="">
                        <a class="d-flex align-items-center" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <span class="menu-item text-truncate" data-i18n="Second Level">Internship Applicants</span></a>
                            <ul class="menu-content">
                                <li>
                                    <a class="d-flex align-items-center" href="{{ route('admin.onlineinternship') }}"><span class="menu-item text-truncate" data-i18n="Third Level">Online Internship</span></a>
                                </li>
                                <li>
                                    <a class="d-flex align-items-center" href="{{ route('admin.offlineinternship') }}"><span class="menu-item text-truncate" data-i18n="Third Level">Offline Internship</span></a>
                                </li>
                                <li>
                                    <a class="d-flex align-items-center" href="{{ route('admin.specializeinternship') }}"><span class="menu-item text-truncate" data-i18n="Third Level">Specialize Internship</span></a>
                                </li>
                                <li>
                                    <a class="d-flex align-items-center" href="{{ route('admin.trustedinternship') }}"><span class="menu-item text-truncate" data-i18n="Third Level">Trusted Internship</span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub" style="">
                        <a class="d-flex align-items-center" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <span class="menu-item text-truncate" data-i18n="Second Level">Vacancy</span></a>
                            <ul class="menu-content">
                                <li>
                                    <a class="d-flex align-items-center" href="{{ route('vacnacy.view') }}"><span class="menu-item text-truncate" data-i18n="Third Level">Post Vacancy</span></a>
                                </li>
                                <li>
                                    <a class="d-flex align-items-center" href="{{ route('vacnacy.posted') }}"><span class="menu-item text-truncate" data-i18n="Third Level">View Posted Vacancy</span></a>
                                </li>
                                <li>
                                    <a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate" data-i18n="Third Level">View Applicants</span></a>
                                </li>
                             </ul>   
                        </li>

                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='users'></i><span class="menu-title text-truncate">Customers</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Customer List</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='file-text'></i><span class="menu-title text-truncate">Reports</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Reports</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Reports</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Reports</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Reports</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Reports</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="app-file-manager.html"><i data-feather="save"></i><span class="menu-title text-truncate">File Manager</span></a>
                </li>
                
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='hash'></i><span class="menu-title text-truncate">Blog System</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">All Posts</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Category</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='bell'></i><span class="menu-title text-truncate">Marketing</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Flash Deals</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Newseletters</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Bulk SMS</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Subscribers</span></a>
                        </li>

                         <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Coupons</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='link-2'></i><span class="menu-title text-truncate">Support</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Ticket</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Products Queries</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='monitor'></i><span class="menu-title text-truncate">Website Setup</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Header</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Footer</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Pages</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Appearance</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='settings'></i><span class="menu-title text-truncate">Setups And Configuration</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">ONE</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">TWO</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">THREE</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">FOUR</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='user'></i><span class="menu-title text-truncate">Staffs</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">All Staffs</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Staff Permissions</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='server'></i><span class="menu-title text-truncate">Systems</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Updates</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate">Server Status</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>