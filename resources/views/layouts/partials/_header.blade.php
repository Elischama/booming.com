<!-- Header -->
<header id="js-header" class="u-header u-header--sticky-top u-header--change-appearance" data-header-fix-moment="300">
    <div  class="u-header__section u-header__section--dark g-bg-black-opacity-0_7 g-transition-0_3 g-py-10" data-header-fix-moment-exclude="g-py-10" data-header-fix-moment-classes="u-shadow-v18 g-py-0">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Responsive Toggle Button -->
                <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
                </button>
                <!-- End Responsive Toggle Button -->
                <!-- Logo -->
                <a class="navbar-brand" href="{{ route('root_path') }}">
                    <img src="../../../assets/img/logo/logo-2.png" alt="Image Description">
                </a>
                <!-- End Logo -->

                <!-- Navigation -->
                <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">

                    <ul class="navbar-nav text-uppercase g-font-weight-600 mr-auto">
                        <li class="nav-item g-mx-25--lg">
                            <a href="" class="nav-link px-0">Hôtels

                            </a>
                        </li>
                        <li class="nav-item g-mx-25--lg">
                            <a href="{{ route('maquis_path') }}" class="nav-link px-0">Maquis

                            </a>
                        </li>
                        <li class="nav-item g-mx-25--lg g-mr-0--lg">
                            <a href="" class="nav-link px-0">Restaurants

                            </a>
                        </li>
                    </ul>

                    <ul id="" class="navbar-nav text-uppercase g-font-weight-600 ml-auto">
                        @if(Auth::guest())
                            <li class="nav-item g-mx-20--lg">
                                <a href="" class="nav-link px-0">S'inscrire

                                </a>
                            </li>
                            <li class="nav-item g-mx-20--lg">
                                <a href="" class="nav-link px-0">Se connecter

                                </a>
                            </li>
                        @else
                            <li class="nav-item g-mx-20--lg">
                                <a href="" class="nav-link px-0"><i class="fa fa-user-circle"></i> {{ Auth::user()->lastname }}

                                </a>
                            </li>
                        @endif
                    </ul>

                    <div class="d-inline-block g-hidden-xs-down g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
                        <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15" href="/">Poster une annonce</a>
                    </div>

                </div>
                <!-- End Navigation -->
            </div>
        </nav>
    </div>
</header>
<!-- End Header -->
