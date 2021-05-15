<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Register</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.html') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/bordered-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.min.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-auth.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
          <div class="auth-wrapper auth-v2">
            <div class="auth-inner row m-0">
              <!-- /Brand logo-->
              <!-- Left Text-->
              <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/pages/register-v2.svg" alt="Register V2"/></div>
              </div>
              <!-- /Left Text-->
              <!-- Register-->
              <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                  <h2 class="card-title font-weight-bold mb-1">Register</h2>
                  <p class="card-text mb-2">Make your app management</p>
                  <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="form-group">
                      <label class="form-label" for="nama_siswa">Nama Siswa</label>
                      <input class="form-control" name="nama_siswa" id="nama_siswa" type="text" value="{{ old('nama_siswa') }}" required autocomplete="nama_siswa" autofocus tabindex="1"/>
                      @error('nama_siswa')
						          <small class="text-danger" style="margin-top: 2px;"> {{ $message }}</small>
    						      @enderror
                    </div>

                    <div class="form-group">
                      <label class="form-label" for="nama_siswa">Kelas ID</label>
                      <input class="form-control" name="nama_siswa" id="kelas_id" type="text" value="{{ old('kelas_id') }}" required autocomplete="kelas_id" autofocus tabindex="1"/>
                      @error('kelas_id')
						          <small class="text-danger" style="margin-top: 2px;"> {{ $message }}</small>
    						      @enderror
                    </div>

                    <div class="form-group">
                      <label class="form-label" for="nis">Nis</label>
                      <input class="form-control" name="nis" id="nis" type="text" value="{{ old('nis') }}" required autocomplete="nis" autofocus tabindex="1"/>
                      @error('nis')
						          <small class="text-danger" style="margin-top: 2px;"> {{ $message }}</small>
    						      @enderror
                    </div>

                    <div class="form-group">
                      <label class="form-label" for="alamat">Alamat</label>
                      <input class="form-control" name="alamat" id="alamat" type="text" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus tabindex="1"/>
                      @error('alamat')
						          <small class="text-danger" style="margin-top: 2px;"> {{ $message }}</small>
    						      @enderror
                    </div>

                    <div class="form-group">
                      <label class="form-label" for="no_telp">No Telpon</label>
                      <input class="form-control" name="no_telp" id="no_telp" type="text" value="{{ old('no_telp') }}" required autocomplete="no_telp" autofocus tabindex="1"/>
                      @error('no_telp')
						          <small class="text-danger" style="margin-top: 2px;"> {{ $message }}</small>
    						      @enderror
                    </div>

                    <div class="form-group">
                      <label class="form-label" for="email">Email</label>
                      <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus tabindex="2"/>
                      @error('email')
						          <small class="text-danger" style="margin-top: 2px;"> {{ $message }}</small>
    						      @enderror
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="password">Password</label>
                      <div class="input-group input-group-merge form-password-toggle">
                        <input class="form-control form-control-merge" id="password" type="password" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus tabindex="2"/>
                        <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                        @error('password')
						            <small class="text-danger" style="margin-top: 2px;"> {{ $message }}</small>
    						        @enderror
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="password-confirm">Password Confirm</label>
                      <div class="input-group input-group-merge form-password-toggle">
                        <input class="form-control form-control-merge" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" tabindex="3"/>
                        @error('password')
						            <small class="text-danger" style="margin-top: 2px;"> {{ $message }}</small>
    						        @enderror
                        <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="register-privacy-policy" type="checkbox" tabindex="4"/>
                        <label class="custom-control-label" for="register-privacy-policy">I agree to<a href="javascript:void(0);">&nbsp;privacy & terms</a></label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-block" tabindex="5">Sign up</button>
                  </form>
                  <p class="text-center mt-2"><span>Sudah punya akun?</span><a href="/login"><span>&nbsp;Sign in</span></a></p>
                  <p class="text-center mt-2"><a href="/"><i data-feather="chevron-left"></i> Back to landingpage</a></p>
                </div>
              </div>
              <!-- /Register-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/page-auth-register.min.js') }}"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
</html>