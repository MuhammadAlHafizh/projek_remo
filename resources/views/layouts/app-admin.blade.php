<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/me.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/date-picker.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
  </head>
  <body onload="startTime()">
    <div class="loader-wrapper">
      <div class="loader-index">
      </div>
    </div>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index-2.html">
              <img class="img-fluid" src="{{ asset('images/logo/logo.png') }}" alt="bgn">
            </a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
          </div>
          <div class="left-header col horizontal-wrapper ps-0">
            <ul class="horizontal-menu">
        
                <div class="mega-menu-container nav-submenu menu-to-be-close header-mega">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col mega-box">
                        <div class="link-section icon">
                          <div>
                            <h6>Error Page</h6>
                          </div>
                          <ul>
                            <li><a href="error-400.html">Error page 400</a></li>
                            <li><a href="error-401.html">Error page 401</a></li>
                            <li><a href="error-403.html">Error page 403</a></li>
                            <li><a href="error-404.html">Error page 404</a></li>
                            <li><a href="error-500.html">Error page 500</a></li>
                            <li><a href="error-503.html">Error page 503</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section doted">
                          <div>
                            <h6> Authentication</h6>
                          </div>
                          <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="login_one.html">Login with image</a></li>
                            <li><a href="login-bs-validation.html">Login with validation</a></li>
                            <li><a href="sign-up.html">Sign Up</a></li>
                            <li><a href="sign-up-one.html">SignUp with image</a></li>
                            <li><a href="sign-up-two.html">SignUp with image</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section dashed-links">
                          <div>
                            <h6>Usefull Pages</h6>
                          </div>
                          <ul>
                            <li><a href="search.html">Search Website</a></li>
                            <li><a href="unlock.html">Unlock User</a></li>
                            <li><a href="forget-password.html">Forget Password</a></li>
                            <li><a href="reset-password.html">Reset Password</a></li>
                            <li><a href="maintenance.html">Maintenance</a></li>
                            <li><a href="login-sa-validation.html">Login validation</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section">
                          <div>
                            <h6>Email templates</h6>
                          </div>
                          <ul>
                            <li class="ps-0"><a href="basic-template.html">Basic Email</a></li>
                            <li class="ps-0"><a href="email-header.html">Basic With Header</a></li>
                            <li class="ps-0"><a href="template-email.html">Ecomerce Template</a></li>
                            <li class="ps-0"><a href="template-email-2.html">Email Template 2</a></li>
                            <li class="ps-0"><a href="ecommerce-templates.html">Ecommerce Email</a></li>
                            <li class="ps-0"><a href="email-order-success.html">Order Success</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col mega-box">
                        <div class="link-section">
                          <div>
                            <h6>Coming Soon</h6>
                          </div>
                          <ul class="svg-icon">
                            <li><a href="comingsoon.html"> <i data-feather="file"> </i>Coming-soon</a></li>
                            <li><a href="comingsoon-bg-video.html"> <i data-feather="film"> </i>Coming-video</a></li>
                            <li><a href="comingsoon-bg-img.html"><i data-feather="image"> </i>Coming-Image</a></li>
                          </ul>
                          <div>
                            <h6>Other Soon</h6>
                          </div>
                          <ul class="svg-icon">
                            <li><a class="txt-primary" href="landing-page.html"> <i data-feather="cast"></i>Landing Page</a></li>
                            <li><a class="txt-secondary" href="sample-page.html"> <i data-feather="airplay"></i>Sample Page</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">
              <li><span class="header-search"><i data-feather="search"></i></span></li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"> </i><span class="badge rounded-pill badge-secondary">4</span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li><i data-feather="bell"></i>
                    <h6 class="f-18 mb-0">Notitications</h6>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
                  </li>
                  <li>
                    <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
                  </li>
                  <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                </ul>
              </li>
              
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="cart-nav onhover-dropdown">
                <div class="cart-box"><i data-feather="shopping-cart"></i><span class="badge rounded-pill badge-primary">2</span></div>
                <ul class="cart-dropdown onhover-show-div">
                  <li>
                    <h6 class="mb-0 f-20">Shoping Bag</h6><i data-feather="shopping-cart"></i>
                  </li>
                  <li class="mt-0">
                    <div class="media"><img class="img-fluid rounded-circle me-3 img-60" src="../assets/images/ecommerce/01.jpg" alt="">
                      <div class="media-body"><span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                        <p>Yellow(#fcb102)</p>
                        <div class="qty-box">
                          <div class="input-group"><span class="input-group-prepend">
                              <button class="btn quantity-left-minus" type="button" data-type="minus" data-field=""><i data-feather="minus"></i></button></span>
                            <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                              <button class="btn quantity-right-plus" type="button" data-type="plus" data-field=""><i data-feather="plus"></i></button></span>
                          </div>
                        </div>
                        <h6 class="text-end text-muted">$299.00</h6>
                      </div>
                      <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                    </div>
                  </li>
                  <li class="mt-0">
                    <div class="media"><img class="img-fluid rounded-circle me-3 img-60" src="../assets/images/ecommerce/03.jpg" alt="">
                      <div class="media-body"><span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                        <p>Yellow(#fcb102)</p>
                        <div class="qty-box">
                          <div class="input-group"><span class="input-group-prepend">
                              <button class="btn quantity-left-minus" type="button" data-type="minus" data-field=""><i data-feather="minus"></i></button></span>
                            <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                              <button class="btn quantity-right-plus" type="button" data-type="plus" data-field=""><i data-feather="plus"></i></button></span>
                          </div>
                        </div>
                        <h6 class="text-end text-muted">$299.00</h6>
                      </div>
                      <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="total">
                      <h6 class="mb-2 mt-0 text-muted">Order Total : <span class="f-right f-20">$598.00</span></h6>
                    </div>
                  </li>
                  <li><a class="btn btn-block w-100 mb-2 btn-primary view-cart" href="cart.html">Go to shoping bag</a><a class="btn btn-block w-100 btn-secondary view-cart" href="checkout.html">Checkout</a></li>
                </ul>
              </li>
              <li class="onhover-dropdown"><i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li><i data-feather="message-square"></i>
                    <h6 class="f-18 mb-0">Message Box</h6>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/1.jpg" alt="">
                      <div class="status-circle online"></div>
                      <div class="media-body"><span>Erica Hughes</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-success">58 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/2.jpg" alt="">
                      <div class="status-circle online"></div>
                      <div class="media-body"><span>Kori Thomas</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-success">1 hr ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/user/4.jpg" alt="">
                      <div class="status-circle offline"></div>
                      <div class="media-body"><span>Ain Chavez</span>
                        <p>Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12 font-danger">32 mins ago</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="btn btn-primary" href="#">View All</a></li>
                </ul>
              </li>
              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="profile-nav onhover-dropdown p-0 me-0">
                <div class="media profile-media"><img class="b-r-10" src="/images/dashboard/profile.jpg" alt="">
                  <div class="media-body">
                  <span>
                      {{ Auth::user()->nama_admin }}
                      <!--
                      @if(\Illuminate\Support\Facades\Auth::guard('admin')->check())
                      @else
                        {{ Auth::user()->nama_siswa }}
                      @endif
                      -->
                  </span>
                      <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                      <!--
                      @if(\Illuminate\Support\Facades\Auth::guard('admin')->check())
                      @else
                      <p class="mb-0 font-roboto">User <i class="middle fa fa-angle-down"></i></p>
                      @endif
                      -->

                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                  <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>

                  <li>
                      <a href="{{ route('admin.logout') }}"
                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <i data-feather="settings"></i><span>Logout</span></a>
                      <form id="logout-form" action="{{ route('admin.logout') }}" method="get" class="d-none">
                      @csrf
                      </form>
                  </li>
              
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">Marpuah</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
          <div>
            <div class="logo-wrapper"><a href="index-2.html"><img class="img-fluid for-light" src="{{ asset('images/logo/logo.png') }}" alt=""><img class="img-fluid for-dark" src="{{ asset('images/logo/logo_dark.png') }}" alt=""></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="index-2.html"><img class="img-fluid" src="{{ asset('images/logo/logo-icon.png') }}" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="index-2.html"><img class="img-fluid" src="{{ asset('images/logo/logo-icon.png') }}" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-1">General</h6>
                      <p class="lan-2">Dashboards,widgets & layout.</p>
                    </div>
                  </li>
                  <li class="sidebar-list">
                    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title" href="#"><i data-feather="home"></i><span class="lan-3">Dashboard              </span></a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-4" href="index-2.html">Default</a></li>
                      <li><a class="lan-5" href="dashboard-02.html">Ecommerce</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-8">Tabel Master</h6>
                      <p class="lan-9">Data Tabel Utama Aplikasi</p>
                    </div>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="/Admin"><i data-feather="git-pull-request"> </i><span>Admin</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="/Siswa"><i data-feather="git-pull-request"> </i><span>Siswa</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="/Kelas"><i data-feather="git-pull-request"> </i><span>Kelas</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="/Spp"><i data-feather="git-pull-request"> </i><span>Spp</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="message-circle"></i><span>Chat</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="chat.html">Chat App</a></li>
                      <li><a href="chat-video.html">Video chat</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="users"></i><span>Users</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="user-profile.html">Users Profile</a></li>
                      <li><a href="edit-profile.html">Users Edit</a></li>
                      <li><a href="user-cards.html">Users Cards</a></li>
                    </ul>
                  </li>      
                  <!--
                  <li class="{{ request()->is('admin') ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="/admin"><i data-feather="home" class="mt-gw-side-up"></i><span class="menu-title text-truncate mt-gw-side" data-i18n="Dashboards">Dashboards</span>
                  <li class="nav-item {{ request()->is('Admin') ? 'has-sub sidebar-group-active' : '' }} {{ request()->is('User') ? 'has-sub sidebar-group-active' : '' }}"><a class="d-flex align-items-center" href=""><i data-feather="users" class="mt-gw-side-up"></i><span class="menu-title text-truncate mt-gw-side" data-i18n="eCommerce">Pengguna</span></a>
                  -->
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">        
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>@yield('judul_halaman')</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">                                       <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Default      </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>


          <!-- Container-fluid starts-->
          <div class="container-fluid">

            @yield('content')

            <!--
            <div class="row second-chart-list third-news-update">
              <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
                <div class="card o-hidden profile-greeting">
                  <div class="card-body">
                    <div class="media">
                      <div class="badge-groups w-100">
                        <div class="badge f-12"><i class="me-1" data-feather="clock"></i><span id="txt"></span></div>
                        <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
                      </div>
                    </div>
                    <div class="greeting-user text-center">
                      <div class="profile-vector"><img class="img-fluid" src="{{ asset('images/dashboard/welcome.png') }}" alt=""></div>
                      <h4 class="f-w-600"><span id="greeting">Good Morning</span> <span class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span></h4>
                      <p><span> Today's earrning is $405 & your sales increase rate is 3.7 over the last 24 hours</span></p>
                      <div class="whatsnew-btn"><a class="btn btn-primary">Whats New !</a></div>
                      <div class="left-icon"><i class="fa fa-bell"> </i></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 xl-100 dashboard-sec box-col-12">
                <div class="card earning-card">
                  <div class="card-body p-0">
                    <div class="row m-0">
                      <div class="col-xl-3 earning-content p-0">
                        <div class="row m-0 chart-left">
                          <div class="col-xl-12 p-0 left_side_earning">
                            <h5>Dashboard</h5>
                            <p class="font-roboto">Overview of last month</p>
                          </div>
                          <div class="col-xl-12 p-0 left_side_earning">
                            <h5>$4055.56 </h5>
                            <p class="font-roboto">This Month Earning</p>
                          </div>
                          <div class="col-xl-12 p-0 left_side_earning">
                            <h5>$1004.11</h5>
                            <p class="font-roboto">This Month Profit</p>
                          </div>
                          <div class="col-xl-12 p-0 left_side_earning">
                            <h5>90%</h5>
                            <p class="font-roboto">This Month Sale</p>
                          </div>
                          <div class="col-xl-12 p-0 left-btn"><a class="btn btn-gradient">Summary</a></div>
                        </div>
                      </div>
                      <div class="col-xl-9 p-0">
                        <div class="chart-right">
                          <div class="row m-0 p-tb">
                            <div class="col-xl-8 col-md-8 col-sm-8 col-12 p-0">
                              <div class="inner-top-left">
                                <ul class="d-flex list-unstyled">
                                  <li>Daily</li>
                                  <li class="active">Weekly</li>
                                  <li>Monthly</li>
                                  <li>Yearly</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-4 col-12 p-0 justify-content-end">
                              <div class="inner-top-right">
                                <ul class="d-flex list-unstyled justify-content-end">
                                  <li>Online</li>
                                  <li>Store</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xl-12">
                              <div class="card-body p-0">
                                <div class="current-sale-container">
                                  <div id="chart-currently"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row border-top m-0">
                          <div class="col-xl-4 ps-0 col-md-6 col-sm-6">
                            <div class="media p-0">
                              <div class="media-left"><i class="icofont icofont-crown"></i></div>
                              <div class="media-body">
                                <h6>Referral Earning</h6>
                                <p>$5,000.20</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-6 col-sm-6">
                            <div class="media p-0">
                              <div class="media-left bg-secondary"><i class="icofont icofont-heart-alt"></i></div>
                              <div class="media-body">
                                <h6>Cash Balance</h6>
                                <p>$2,657.21</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-12 pe-0">
                            <div class="media p-0">
                              <div class="media-left"><i class="icofont icofont-cur-dollar"></i></div>
                              <div class="media-body">
                                <h6>Sales forcasting</h6>
                                <p>$9,478.50     </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-9 xl-100 chart_data_left box-col-12">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="row m-0 chart-main">
                      <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media align-items-center">
                          <div class="hospital-small-chart">
                            <div class="small-bar">
                              <div class="small-chart flot-chart-container"></div>
                            </div>
                          </div>
                          <div class="media-body">
                            <div class="right-chart-content">
                              <h4>1001</h4><span>Purchase </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media align-items-center">
                          <div class="hospital-small-chart">
                            <div class="small-bar">
                              <div class="small-chart1 flot-chart-container"></div>
                            </div>
                          </div>
                          <div class="media-body">
                            <div class="right-chart-content">
                              <h4>1005</h4><span>Sales</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media align-items-center">
                          <div class="hospital-small-chart">
                            <div class="small-bar">
                              <div class="small-chart2 flot-chart-container"></div>
                            </div>
                          </div>
                          <div class="media-body">
                            <div class="right-chart-content">
                              <h4>100</h4><span>Sales return</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media border-none align-items-center">
                          <div class="hospital-small-chart">
                            <div class="small-bar">
                              <div class="small-chart3 flot-chart-container"></div>
                            </div>
                          </div>
                          <div class="media-body">
                            <div class="right-chart-content">
                              <h4>101</h4><span>Purchase ret</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 xl-50 chart_data_right box-col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="media align-items-center">
                      <div class="media-body right-chart-content">
                        <h4>$95,900<span class="new-box">Hot</span></h4><span>Purchase Order Value</span>
                      </div>
                      <div class="knob-block text-center">
                        <input class="knob1" data-width="10" data-height="70" data-thickness=".3" data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff" data-bgcolor="#eef5fb" value="60">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 xl-50 chart_data_right second d-none"> 
                <div class="card">
                  <div class="card-body">
                    <div class="media align-items-center">
                      <div class="media-body right-chart-content"> 
                        <h4>$95,000<span class="new-box">New</span></h4><span>Product Order Value</span>
                      </div>
                      <div class="knob-block text-center">
                        <input class="knob1" data-width="50" data-height="70" data-thickness=".3" data-fgcolor="#7366ff" data-linecap="round" data-angleoffset="0" value="60">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 news box-col-6">
                <div class="card">
                  <div class="card-header">
                    <div class="header-top">
                      <h5 class="m-0">News &amp; Update</h5>
                      <div class="card-header-right-icon">
                        <div class="dropdown">
                          <button class="btn dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">Today</button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="news-update">
                      <h6>36% off For pixel lights Couslations Types.</h6><span>Lorem Ipsum is simply dummy...</span>
                    </div>
                    <div class="news-update">
                      <h6>We are produce new product this</h6><span> Lorem Ipsum is simply text of the printing... </span>
                    </div>
                    <div class="news-update">
                      <h6>50% off For COVID Couslations Types.</h6><span>Lorem Ipsum is simply dummy...</span>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="bottom-btn"><a href="#">More...</a></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 appointment-sec box-col-6">
                <div class="row"> 
                  <div class="col-xl-12 appointment">
                    <div class="card">
                      <div class="card-header card-no-border">
                        <div class="header-top">
                          <h5 class="m-0">appointment</h5>
                          <div class="card-header-right-icon">
                            <div class="dropdown">
                              <button class="btn dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">Today</button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pt-0">
                        <div class="appointment-table table-responsive">
                          <table class="table table-bordernone">
                            <tbody>
                              <tr>
                                <td><img class="img-fluid img-40 rounded-circle mb-3" src="../assets/images/appointment/app-ent.jpg" alt="Image description">
                                  <div class="status-circle bg-primary"></div>
                                </td>
                                <td class="img-content-box"><span class="d-block">Venter Loren</span><span class="font-roboto">Now</span></td>
                                <td>
                                  <p class="m-0 font-primary">28 Sept</p>
                                </td>
                                <td class="text-end">
                                  <div class="button btn btn-primary">Done<i class="fa fa-check-circle ms-2"></i></div>
                                </td>
                              </tr>
                              <tr>
                                <td><img class="img-fluid img-40 rounded-circle" src="../assets/images/appointment/app-ent.jpg" alt="Image description">
                                  <div class="status-circle bg-primary"></div>
                                </td>
                                <td class="img-content-box"><span class="d-block">John Loren</span><span class="font-roboto">11:00</span></td>
                                <td>
                                  <p class="m-0 font-primary">22 Sept</p>
                                </td>
                                <td class="text-end">
                                  <div class="button btn btn-danger">Pending<i class="fa fa-clock-o ms-2"></i></div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 alert-sec">
                    <div class="card bg-img">
                      <div class="card-header">
                        <div class="header-top">
                          <h5 class="m-0">Alert  </h5>
                          <div class="dot-right-icon"><i class="fa fa-ellipsis-h"></i></div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="body-bottom">
                          <h6>  10% off For drama lights Couslations...</h6><span class="font-roboto">Lorem Ipsum is simply dummy...It is a long established fact that a reader will be distracted by  </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 notification box-col-6">
                <div class="card">
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h5 class="m-0">notification</h5>
                      <div class="card-header-right-icon">
                        <div class="dropdown">
                          <button class="btn dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">Today</button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Tomorrow</a><a class="dropdown-item" href="#">Yesterday  </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="media">
                      <div class="media-body">
                        <p>20-04-2020 <span>10:10</span></p>
                        <h6>Updated Product<span class="dot-notification"></span></h6><span>Quisque a consequat ante sit amet magna...</span>
                      </div>
                    </div>
                    <div class="media">
                      <div class="media-body">
                        <p>20-04-2020<span class="ps-1">Today</span><span class="badge badge-secondary">New</span></p>
                        <h6>Tello just like your product<span class="dot-notification"></span></h6><span>Quisque a consequat ante sit amet magna... </span>
                      </div>
                    </div>
                    <div class="media">
                      <div class="media-body">
                        <div class="d-flex mb-3">
                          <div class="inner-img"><img class="img-fluid" src="../assets/images/notification/1.jpg" alt="Product-1"></div>
                          <div class="inner-img"><img class="img-fluid" src="../assets/images/notification/2.jpg" alt="Product-2"></div>
                        </div><span class="mt-3">Quisque a consequat ante sit amet magna...</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-50 appointment box-col-6">
                <div class="card">
                  <div class="card-header">
                    <div class="header-top">
                      <h5 class="m-0">Market Value</h5>
                      <div class="card-header-right-icon">
                        <div class="dropdown">
                          <button class="btn dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">Year</button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Year</a><a class="dropdown-item" href="#">Month</a><a class="dropdown-item" href="#">Day</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-Body">
                    <div class="radar-chart">
                      <div id="marketchart">       </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 xl-100 chat-sec box-col-6">
                <div class="card chat-default">
                  <div class="card-header card-no-border">
                    <div class="media media-dashboard">
                      <div class="media-body"> 
                        <h5 class="mb-0">Live Chat</h5>
                      </div>
                      <div class="icon-box"><i class="fa fa-ellipsis-h"></i></div>
                    </div>
                  </div>
                  <div class="card-body chat-box">
                    <div class="chat">
                      <div class="media left-side-chat">
                        <div class="media-body d-flex">
                          <div class="img-profile"> <img class="img-fluid" src="../assets/images/user.jpg" alt="Profile"></div>
                          <div class="main-chat">
                            <div class="message-main"><span class="mb-0">Hi deo, Please send me link.</span></div>
                            <div class="sub-message message-main"><span class="mb-0">Right Now</span></div>
                          </div>
                        </div>
                        <p class="f-w-400">7:28 PM</p>
                      </div>
                      <div class="media right-side-chat">
                        <p class="f-w-400">7:28 PM</p>
                        <div class="media-body text-end">
                          <div class="message-main pull-right"><span class="mb-0 text-start">How can do for you</span>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                      <div class="media left-side-chat">
                        <div class="media-body d-flex">
                          <div class="img-profile"> <img class="img-fluid" src="../assets/images/user.jpg" alt="Profile"></div>
                          <div class="main-chat">
                            <div class="sub-message message-main mt-0"><span>It's argently</span></div>
                          </div>
                        </div>
                        <p class="f-w-400">7:28 PM</p>
                      </div>
                      <div class="media right-side-chat">
                        <div class="media-body text-end">
                          <div class="message-main pull-right"><span class="loader-span mb-0 text-start" id="wave"><span class="dot"></span><span class="dot"></span><span class="dot"></span></span></div>
                        </div>
                      </div>
                      <div class="input-group">
                        <input class="form-control" id="mail" type="text" placeholder="Type Your Message..." name="text">
                        <div class="send-msg"><i data-feather="send"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-12 xl-50 calendar-sec box-col-6">
                <div class="card gradient-primary o-hidden">
                  <div class="card-body">
                    <div class="setting-dot">
                      <div class="setting-bg-primary date-picker-setting position-set pull-right"><i class="fa fa-spin fa-cog"></i></div>
                    </div>
                    <div class="default-datepicker">
                      <div class="datepicker-here" data-language="en"></div>
                    </div><span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">                </span></span></span>
                  </div>
                </div>
              </div>
            </div>
            -->
          </div>
          <!-- Container-fluid Ends-->
        </div>
      </div>
    </div>
    <!-- js-->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('js/scrollbar/custom.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{ asset('js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('js/chart/chartist/chartist.js') }}"></script>
    <script src="{{ asset('js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ asset('js/chart/knob/knob-chart.js') }}"></script>
    <script src="{{ asset('js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/default.js') }}"></script>
    <script src="{{ asset('js/notify/index.js') }}"></script>
    <script src="{{ asset('js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('js/sidebar-menu.js') }}"></script>

    <script src="{{ asset('js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('js/tooltip-init.js') }}"></script>
    <script src="{{ asset('js/tooltip-init.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>