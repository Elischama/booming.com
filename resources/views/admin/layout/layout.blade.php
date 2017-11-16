<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Booming | Administration</title>
    <!-- Favicon-->
    <link rel="icon" href="/favicon.png" type="image/x-icon">

    <!--REQUIRED PLUGIN CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="/admin/css/bootstrap.css" rel="stylesheet">
    <link href="/admin/css/waves.css" rel="stylesheet" />
    <link href="/admin/css/animate.css" rel="stylesheet" />
    <link href="/admin/css/spinkit.css" rel="stylesheet">

    <!--REQUIRED THEME CSS -->
    <link href="/admin/css/style.css" rel="stylesheet">
    <link href="/admin/css/layout.css" rel="stylesheet">
    <link href="/admin/css/main_theme.css" rel="stylesheet" />

    <!--THIS PAGE LEVEL CSS-->
    <link href="/admin/css/morris.css" rel="stylesheet" />
    <!--Chat Css-->
    <link href="/admin/css/style-light.css" rel="stylesheet">
    <link href="/admin/css/mobile.css" rel="stylesheet" id="style">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />

    <!--#End# Chat Css-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="theme-indigo dark layout-fixed">
<div class="wrapper">

    <!-- top navbar-->
    <header class="topnavbar-wrapper">
        <nav role="navigation" class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
                <a href="/adminzone" class="navbar-brand">
                    <div class="brand-logo">
                        <img src="/admin/img/logo.png" alt="Admin Logo" class="img-responsive">
                    </div>
                    <div class="brand-logo-collapsed">
                        <img src="/admin/img/logo-single.png" alt="Admin Logo" class="img-responsive">
                    </div>
                </a>
            </div>
            <!-- END navbar header-->
            <!-- START Nav wrapper-->
            <div class="nav-wrapper">
                <!-- START Left navbar-->
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" data-trigger-resize="" data-toggle-state="aside-collapsed" class="hidden-xs">
                            <em class="material-icons">menu</em>
                        </a>
                        <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
                            <em class="material-icons">menu</em>
                        </a>
                    </li>
                </ul>
                <!-- END Left navbar-->
                <!-- START Right Navbar-->
                <ul class="nav navbar-nav navbar-right">
                    {{--<li>--}}
                        {{--<a href="#" data-search-open="">--}}
                            {{--<em class="material-icons">search</em>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    <li class="visible-lg">
                        <a href="/logout" data-toggle-fullscreen="">
                            <i class="fa fa-sign-out fa-2x"></i>
                        </a>
                    </li>
                    {{--<!-- Notifications -->--}}
                    {{--<li class="dropdown">--}}
                        {{--<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">--}}
                            {{--<i class="material-icons">notifications</i>--}}
                            {{--<span class="badge badge-success">7</span>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li class="header">NOTIFICATIONS</li>--}}
                            {{--<li class="body">--}}
                                {{--<ul class="menu">--}}
                                    {{--<li class="media">--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="media-left">--}}
                                                {{--<div class="icon-circle bg-red">--}}
                                                    {{--<i class="material-icons">done</i>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body menu-note">--}}
                                                {{--<p class="pull-right">Just Now</p>--}}
                                                {{--<h4> Privacy settings changed</h4>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="media">--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="media-left">--}}
                                                {{--<div class="icon-circle bg-indigo">--}}
                                                    {{--<i class="material-icons">add</i>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body menu-note">--}}
                                                {{--<p class="pull-right">2 mins</p>--}}
                                                {{--<h4> Mike has added you as friend</h4>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="media">--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="media-left">--}}
                                                {{--<div class="icon-circle bg-blue">--}}
                                                    {{--<i class="material-icons">alarm</i>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body menu-note">--}}
                                                {{--<p class="pull-right">20 mins</p>--}}
                                                {{--<h4> New item added</h4>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="media">--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="media-left">--}}
                                                {{--<div class="icon-circle bg-orange">--}}
                                                    {{--<i class="material-icons">thumb_up</i>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body menu-note">--}}
                                                {{--<p class="pull-right">2 hrs</p>--}}
                                                {{--<h4> Ketty like your photo</h4>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="media">--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="media-left">--}}
                                                {{--<div class="icon-circle bg-green">--}}
                                                    {{--<i class="material-icons">cached</i>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body menu-note">--}}
                                                {{--<p class="pull-right">3 days</p>--}}
                                                {{--<h4> Server 10 is not working Properly</h4>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="media">--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="media-left">--}}
                                                {{--<div class="icon-circle bg-grey">--}}
                                                    {{--<i class="material-icons">settings</i>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body menu-note">--}}
                                                {{--<p class="pull-right">5 days</p>--}}
                                                {{--<h4> Restart your system</h4>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="footer">--}}
                                {{--<a href="javascript:void(0);">View All Notifications</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    <!-- #END# Notifications -->
                    <!-- Task -->
                    {{--<li class="dropdown">--}}
                        {{--<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">--}}
                            {{--<i class="material-icons">mail</i>--}}
                            {{--<span class="badge badge-danger">7</span>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li class="header">--}}
                                {{--You have--}}
                                {{--<span class="font-bold">7 New</span> Messages--}}
                            {{--</li>--}}
                            {{--<li class="body">--}}
                                {{--<ul class="menu media-list">--}}
                                    {{--<li class="media unread">--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="media-left">--}}
                                                {{--<img class="media-object img-circle" width="32" src="../assets/images/mail/nine.jpg" alt="user">--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<p class="pull-right"><small>Just Now</small></p>--}}
                                                {{--<h4 class="media-heading body-text">Lisa Headon</h4>--}}
                                                {{--<p class="font-12">Cras justo odio, dapibus ac facilisis in.</p>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="media">--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="media-left">--}}
                                                {{--<img class="media-object img-circle" width="32" src="../assets/images/mail/2.jpg" alt="user">--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<p class="pull-right"><small>2 hour ago</small></p>--}}
                                                {{--<h4 class="media-heading body-text">Lucy Doe</h4>--}}
                                                {{--<p class="font-12">Duis mollis, est non commodo luctus, nisi erat</p>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="media">--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="media-left">--}}
                                                {{--<img class="media-object img-circle" width="32" src="../assets/images/mail/five.jpg" alt="user">--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<p class="pull-right"><small>12 hour ago</small></p>--}}
                                                {{--<h4 class="media-heading body-text">Jhon Doe</h4>--}}
                                                {{--<p class="font-12">Aenean lacinia bibendum nulla sed consectetur. </p>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="media">--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="media-left">--}}
                                                {{--<img class="media-object img-circle" width="32" src="../assets/images/mail/1.jpg" alt="user">--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<p class="pull-right"><small>2 days ago</small></p>--}}
                                                {{--<h4 class="media-heading body-text">Daniel Richard</h4>--}}
                                                {{--<p class="font-12">Donec id elit non mi porta gravida at eget metus. </p>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="media">--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="media-left">--}}
                                                {{--<img class="media-object img-circle" width="32" src="../assets/images/mail/seven.jpg" alt="user">--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<p class="pull-right"><small>3 days ago</small></p>--}}
                                                {{--<h4 class="media-heading body-text">Kelly Brook</h4>--}}
                                                {{--<p class="font-12">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="media unread">--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="media-left">--}}
                                                {{--<img class="media-object img-circle" width="32" src="../assets/images/mail/three.jpg" alt="user">--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<p class="pull-right"><small>4 days ago</small></p>--}}
                                                {{--<h4 class="media-heading body-text">Olivia Wild</h4>--}}
                                                {{--<p class="font-12">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh</p>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="media">--}}
                                        {{--<a href="#">--}}
                                            {{--<div class="media-left">--}}
                                                {{--<img class="media-object img-circle" width="32" src="../assets/images/mail/two.jpg" alt="user">--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<p class="pull-right"><small>2 weeks ago</small></p>--}}
                                                {{--<h4 class="media-heading body-text">Andrew Smith</h4>--}}
                                                {{--<p class="font-12">Nulla vitae elit libero, a pharetra augue.</p>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="footer">--}}
                                {{--<a href="javascript:void(0);">View All Messages</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    <!-- #END# Task -->
                    {{--<li>--}}
                        {{--<a href="#" data-toggle-state="offsidebar-open" data-no-persist="true">--}}
                            {{--<em class="material-icons">more_vert</em>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                </ul>
                <!-- #END# Right Navbar-->
            </div>
        </nav>
        <!-- END Top Navbar-->
    </header>
    <!-- sidebar-->
    <aside class="aside">
        <!-- START Sidebar (left)-->
        <div class="aside-inner">
            <nav data-sidebar-anyclick-close="" class="sidebar">
                <!-- START sidebar nav-->
                <ul class="nav menu">
                    <!-- Iterates over all sidebar items-->
                    <li class="nav-heading ">
                        <span>MENU PRINCIPAL</span>
                    </li>
                    <li>
                        <a href="/adminzone" title="Dashboard">
                            <em class="material-icons">dashboard</em>
                            <span>Accueil</span>
                        </a>
                    </li>
                    <li class="nav-heading ">
                        <span>UTILISATEURS</span>
                    </li>
                    <li>
                        <a href="{{ route('all.users') }}">
                            <i class="fa fa-users"></i>
                            <span> Tous les utilisateurs</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('all.users.advertiser') }}">
                            <i class="fa fa-users"></i>
                            <span> Les annonceurs</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('all.users.standard') }}">
                            <i class="fa fa-users"></i>
                            <span> Les utilisateurs Standard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('all.users.admin') }}">
                            <i class="fa fa-user-secret"></i>
                            <span> Les Administrateurs</span>
                        </a>
                    </li>
                    <li class="nav-heading ">
                        <span>ANNONCES</span>
                    </li>
                    <li>
                        <a href="#advanceui" data-toggle="collapse" class="menu-toggle">
                            <i class="fa fa-bullhorn"></i>
                            <span>Les Annonces</span>
                        </a>
                        <ul id="advanceui" class="nav sidebar-subnav collapse">
                            <li class="sidebar-subnav-header">Advance UI</li>
                            <li>
                                <a href="{{ route('all.hotels') }}">
                                    <span>Hotels</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('all.restaurants') }}">
                                    <span>Restaurants</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('all.maquis') }}">
                                    <span>Maquis</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#enattente" data-toggle="collapse" class="menu-toggle">
                            <i class="fa fa-spinner fa-spin"></i>
                            <span>En attentes de validation</span>
                        </a>
                        <ul id="enattente" class="nav sidebar-subnav collapse">
                            <li class="sidebar-subnav-header">Advance UI</li>
                            <li>
                                <a href="{{ route('all.hotels.waiting') }}">
                                    <span>Hotels</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('all.restaurants.waiting') }}">
                                    <span>Restaurants</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('all.maquis.waiting') }}">
                                    <span>Maquis</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- END sidebar nav-->
            </nav>
        </div>
        <!-- #END# Sidebar (left)-->
    </aside>
    <!-- offsidebar-->
    <aside class="offsidebar hide">
        <!-- START Off Sidebar (right)-->
        <nav>
            <div role="tabpanel">
                <!-- Nav tabs-->
                <ul role="tablist" class="nav nav-tabs nav-tabs-inline nav-justified">
                    <li role="presentation" class="active">
                        <a href="#app-skins" aria-controls="app-settings" role="tab" data-toggle="tab">
                            <em class="material-icons">color_lens</em>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#app-settings" aria-controls="app-chat" role="tab" data-toggle="tab">
                            <em class="material-icons">settings</em>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                    <div id="app-skins" role="tabpanel" class="tab-pane fade in active">
                        <ul class="skin_selector" id="sidebar_clr_selector">
                            <h2>Sidebar Skins</h2>
                            <li data-theme="light" class="active">
                                <div class="grey"></div>
                                <span>Light</span>
                            </li>
                            <li data-theme="dark">
                                <div class="black"></div>
                                <span>Dark</span>
                            </li>
                        </ul>
                        <ul class="skin_selector" id="skin_selector">
                            <h2>Navbar Skins</h2>
                            <li data-theme="red">
                                <div class="red"></div>
                                <span>Red</span>
                            </li>
                            <li data-theme="pink">
                                <div class="pink"></div>
                                <span>Pink</span>
                            </li>
                            <li data-theme="purple">
                                <div class="purple"></div>
                                <span>Purple</span>
                            </li>
                            <li data-theme="indigo">
                                <div class="indigo"></div>
                                <span>Indigo</span>
                            </li>
                            <li data-theme="blue" class="active">
                                <div class="blue"></div>
                                <span>Blue</span>
                            </li>
                            <li data-theme="light-blue">
                                <div class="light-blue"></div>
                                <span>Light Blue</span>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                                <span>Cyan</span>
                            </li>
                            <li data-theme="teal">
                                <div class="teal"></div>
                                <span>Teal</span>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                                <span>Green</span>
                            </li>
                            <li data-theme="lime">
                                <div class="lime"></div>
                                <span>Lime</span>
                            </li>
                            <li data-theme="yellow">
                                <div class="yellow"></div>
                                <span>Yellow</span>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                                <span>Orange</span>
                            </li>
                            <li data-theme="brown">
                                <div class="brown"></div>
                                <span>Brown</span>
                            </li>
                            <li data-theme="grey">
                                <div class="grey"></div>
                                <span>Grey</span>
                            </li>
                        </ul>
                    </div>
                    <div id="app-settings" role="tabpanel" class="tab-pane fade">
                        <div class="demo-settings ">
                            <ul class="setting-list">
                                <h2>Layout Settings</h2>
                                <li>
                                    <span>Fixed</span>
                                    <div class="switch">
                                        <label><input id="chk-fixed" type="checkbox"  data-toggle-state="layout-fixed"><span class="lever switch-col-grey"></span></label>
                                    </div>
                                </li>
                                <li>
                                    <span>Boxed</span>
                                    <div class="switch">
                                        <label><input id="chk-boxed" type="checkbox" data-toggle-state="layout-boxed"><span class="lever switch-col-grey"></span></label>
                                    </div>
                                </li>
                                <li>
                                    <span>Collapsed</span>
                                    <div class="switch">
                                        <label><input id="chk-collapsed" type="checkbox" data-toggle-state="aside-collapsed"><span class="lever switch-col-grey"></span></label>
                                    </div>
                                </li>
                                <li>
                                    <span>Collapsed Text</span>
                                    <div class="switch">
                                        <label><input id="chk-collapsed-text" type="checkbox" data-toggle-state="aside-collapsed-text"><span class="lever switch-col-grey"></span></label>
                                    </div>
                                </li>
                                <li>
                                    <span>Float</span>
                                    <div class="switch">
                                        <label><input id="chk-float" type="checkbox" data-toggle-state="aside-float"><span class="lever switch-col-grey"></span></label>
                                    </div>
                                </li>
                                <li>
                                    <span>Show Scrollbar</span>
                                    <div class="switch">
                                        <label><input id="chk-hover" type="checkbox" data-toggle-state="show-scrollbar" data-target=".sidebar"><span class="lever switch-col-grey"></span></label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- #END# Off Sidebar (right)-->
    </aside>

    <section>
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="container-fluid">

                @yield('content')

            </div>
        </div>
    </section>

<!-- FOOTER-->
<footer>
    <span>&copy; 2017 - Booming By <b class="col-blue">tds</b></span>
</footer>
</div>
<!-- CORE PLUGIN JS -->
<script src="/admin/js/jquery.min.js"></script>
<script src="/admin/js/bootstrap.js"></script>
<script src="/admin/js/admin.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
@yield('js')

<script src="/admin/js/modernizr.custom.js"></script>
<script src="/admin/js/screenfull.js"></script>
<script src="/admin/js/jquery.storageapi.js"></script>
<script src="/admin/js/jquery.slimscroll.js"></script>
<script src="/admin/js/node-waves/waves.js"></script>



<script src="/admin/js/index.js"></script>

<!-- LAYOUT JS -->
<script src="/admin/js/demo.js"></script>
<script src="/admin/js/layout.js"></script>



</body>

</html>