      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <div class="top-bar" id="home-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p class="mb-0" style="font-size: 14px!important">
                <span class="mr-3"><i class="fas fa-phone-square-alt"></i> <a href="tel://#">0986 533 386</a></span>
                <span><i class="far fa-envelope"></i> <a href="#">info@yourdomain.com</a></span>
              </p>
            </div>
            <div class="col-md-6">
              <ul class="social-media" style="font-size: 15px">
                <li><a href="#" class="p-2"><span class="icon-facebook"></span></a></li>
                <li><a href="#" class="p-2"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
                <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
                            
                <li class="dropdown dropdown-primary">
                  <button class="btn btn-light dropdown-toggle" style="border-radius: 0px!important;  line-height: 0.5em!important; font-size: 14px!important;" type="button " data-toggle="dropdown">{{__('user.language')}}
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu" style="min-width: 7rem!important; padding: 0!important">
                      <li style="display: block!important;"><a href="{!! route('change-language', ['vn']) !!}"><img src="public/frontend/images/VN-flag.png"> Viet Nam</a></li> 
                      <li style="display: block!important;"><a href="{!! route('change-language', ['en']) !!}"><img src="public/frontend/images/EN-flag.png"> English</a></li>
                    </ul>
                </li>   
              </ul>

            </div>
          </div>
        </div> 
      </div>

      <div class="rain">
        <div class="rain-box">

          <script>
            $(function(){
              $('.selectpicker').selectpicker();
            });
            jQuery(".rain").raindrops({
              color: "#0bd",
              canvasHeight: 10
            });
          </script>
        </div>
      </div>

      <header class="site-navbar js-sticky-header site-navbar-target" role="banner" style="background-color: #0bd">

        <div class="container">
          <div class="row align-items-center">

            <div class="col-11 col-xl-3 d-flex">
              <img style="width: 30%;" src="{{('public/frontend/images/htn-logo.png')}}">
              <h3 class="mb-0 site-logo w-100 d-flex align-items-center"><a href="{{Route('home')}}" class="text-black h2 mb-0">HTN CORP<span class="text-danger"></span> </a></h3>
            </div>
            <div class="col-12 col-md-9 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right" role="navigation">

                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li><a href="{{Route('home')}}" class="nav-link"> <i class="fa fa-home"></i> {{__('user.home')}}</a></li>
                  <li><a href="#product-section" class="nav-link">{{__('user.product')}}</a></li>
                  <li>
                    <a href="#services-section" class="nav-link">{{__('user.services')}}</a>
                  </li>
                  <li class="has-children">
                    <a href="#about-section" class="nav-link">{{__('user.about')}}</a>
                    <ul class="dropdown">

                      <li><a href="#team-section">{{__('user.our-team')}}</a></li>
                      <li><a href="">{{__('user.contact')}}</a></li>
                    </ul>
                  </li>
                  <li><a href="{{Route('blog')}}" class="nav-link">{{__('user.news')}}</a></li>

                </ul>
              </nav>
            </div>


            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>