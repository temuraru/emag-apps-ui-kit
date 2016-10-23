<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Layout | Photon - The Superfast, Supersimple UI Kit</title>
        <meta name="description" content="Photon - The superfast, supersimple UI Kit" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="eMAG CORE UI Team">

        <!-- The favicon -->
        <?php include_once "modules/_mod_favicon.php"?>

        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <link rel="stylesheet" href="../dist/plugins/prism/prism.min.css">

        <!-- PHOTON main styles -->
        <link rel="stylesheet" href="../dist/css/main_style.min.css">

        <!--[if lt IE 9]>
            <script src="../dist/js/lib/html5shiv.min.js"></script>
            <script src="../dist/js/lib/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 9]><body class="lt-ie9"> <![endif]-->
        <!--[if lt IE 9]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
        <!-- HEADER:Start -->
        <?php include_once "modules/_mod_header.php"?>
        <!-- HEADER:End -->
        <!-- PAGE:Start -->
            <div class="main-container" id="main-container">
                <div class="main-container-inner">
                <!-- SIDEBAR:Start -->
                <?php include_once "modules/_mod_sidebar.php"?>
                <!-- SIDEBAR:End -->
                <!-- CONTENT:Start -->
                <div class="main-content">
                    <div class="page-content">
                        <div class="jumbotron">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="container-fluid pad-sep-60">
                                        <h1>PHOTON - Layout</h1>
                                        <p>The lightning-fast, modular, mobile-friendly admin template.</p>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <section id="boilerplate" class="pad-top-40">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel">
                                        <div class="show-panel-body">
                                            <h2><strong>Boilerplate</strong></h2>
                                            <p><strong>This is the main HTML template. It is based on the <a href="https://html5boilerplate.com/" target="_blank"><u>The HTML5 Boilerplate project</u></a>.</strong></p>
                                        </div>
                                        <div class="show-panel-footer">
                                            <pre>&lt;!doctype html&gt;
&lt;html class=&quot;no-js&quot; lang=&quot;&quot;&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta http-equiv=&quot;x-ua-compatible&quot; content=&quot;ie=edge&quot;&gt;
        &lt;title&gt;&lt;/title&gt;
        &lt;meta name=&quot;description&quot; content=&quot;Photon - The superfast, supersimple UI Kit&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
        &lt;meta name=&quot;author&quot; content=&quot;eMAG UI Team&quot;&gt;

        &lt;link rel=&quot;apple-touch-icon&quot; href=&quot;apple-touch-icon.png&quot;&gt;
        &lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; href=&quot;favicon.ico&quot;&gt;

        <span class="text-success">&lt;!-- The main stylesheet contains all the essential Bootstrap & Photon styling --&gt;</span>
        &lt;link rel=&quot;stylesheet&quot; href=&quot;css/main_style.min.css&quot;&gt;
        <span class="text-success">
        &lt;!--[if lt IE 9]&gt;
            &lt;script src=&quot;../dist/js/lib/html5shiv.min.js&quot;&gt;&lt;/script&gt;
            &lt;script src=&quot;../dist/js/lib/respond.min.js&quot;&gt;&lt;/script&gt;
        &lt;![endif]--&gt;
        </span>
    &lt;/head&gt;
    &lt;body&gt;<span class="text-success">
        &lt;!--[if lt IE 9]&gt;&lt;body class=&quot;lt-ie9&quot;&gt; &lt;![endif]--&gt;
        &lt;!--[if lt IE 9]&gt;&lt;p class=&quot;browserupgrade&quot;&gt;You are using an &lt;strong&gt;outdated&lt;/strong&gt; browser. Please &lt;a href=&quot;http://browsehappy.com/&quot;&gt;upgrade your browser&lt;/a&gt; to improve your experience.&lt;/p&gt;&lt;![endif]--&gt;
        &lt;!-- HEADER:Start --&gt;
        &lt;!-- HEADER:End --&gt;

        &lt;!-- PAGE:Start --&gt;
        </span>
            &lt;div class=&quot;main-container&quot; id=&quot;main-container&quot;&gt;
                &lt;div class=&quot;main-container-inner&quot;&gt;
                <span class="text-success">
                &lt;!-- SIDEBAR:Start --&gt;
                &lt;!-- SIDEBAR:End --&gt;

                &lt;!-- CONTENT:Start --&gt;</span>
                &lt;div class=&quot;main-content&quot;&gt;
                    &lt;div class=&quot;page-content&quot;&gt;
                        Here is the content                                      
                    &lt;/div&gt;
                &lt;/div&gt;<span class="text-success">
                &lt;!-- CONTENT:End --&gt;

                &lt;!-- FOOTER:Start --&gt;
                &lt;!-- FOOTER:End --&gt;
                 </span>
                &lt;/div&gt;
            &lt;/div&gt;
        <span class="text-success">
        &lt;!-- PAGE:End --&gt;

        &lt;!-- POPUPS:Start --&gt;</span>
        &lt;div id=&quot;popSpace&quot;&gt;&lt;/div&gt;
        <span class="text-success">&lt;!-- POPUPS:End --&gt;

        &lt;!-- SCRIPTS:Start --&gt;</span>
        &lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js&quot;&gt;&lt;/script&gt;
        &lt;script&gt;window.jQuery || document.write(&quot;&lt;script src=\&quot;../dist/js/lib/jquery-1.11.3.min.js\&quot;&gt;&quot;+&quot;&lt;&quot;+&quot;/script&gt;&quot;)&lt;/script&gt;
        
        <span class="text-success">&lt;!-- The main script file contains all the essential Bootstrap & Photon utilities --&gt;</span>
        &lt;script src=&quot;../dist/js/main_script.min.js&quot;&gt;&lt;/script&gt;
        <span class="text-success">&lt;!-- SCRIPTS:End --&gt;

        &lt;!-- DOCUMENT-READY:Start --&gt;</span>
        &lt;script type=&quot;text/javascript&quot;&gt;
            $(document).ready(function() {
                console.log('Ready, Captain!');
            });
        &lt;/script&gt;
        <span class="text-success">&lt;!-- DOCUMENT-READY:End --&gt;</span>
    &lt;/body&gt;
&lt;/html&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="topNavigation" class="pad-top-40">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel">
                                        <div class="show-panel-body">
                                            <h2><strong>Top Navigation</strong></h2>
                                            <p><strong>The header navigation is based on the Bootstrap 3.3.5. component <a href="http://getbootstrap.com/components/#navbar" target="_blank">Navbar</a></strong></p>
                                        </div>
                                    </div>
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body" data-showcase="example">
                                            <nav class="navbar navbar-default">
                                                <div class="container-fluid">
                                                    <div class="navbar-header">
                                                        <div class="nav-controls visible-xs-inline-block pull-left">
                                                            <button class="btn btn-default navbar-btn" id="toggle-sidebar-btn" type="button"><span class="sr-only">Toggle sidepanel</span><i class="fa fa-bars"></i></button>
                                                        </div>
                                                        <a class="navbar-brand" href="javascript:void(0)">
                                                            <img alt="PHOTON Test" src="../dist/css/img/photon-power-logo.png">
                                                        </a>
                                                        <div class="nav-controls visible-xs-inline-block pull-right">
                                                            <button class="btn btn-default navbar-btn" data-target="#test1_navbar" data-toggle="collapse" id="main-min-nav" type="button">
                                                                <span class="sr-only">Toggle navigation</span><i class="fa fa-chevron-down"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="collapse navbar-collapse" id="test2_navbar">
                                                        <h4 class="navbar-text">Title</h4>
                                                    </div>
                                                </div>
                                            </nav>
                                        </div>
                                        <div class="show-panel-footer">
                                            <pre class="language-markup"><code class="language-markup" data-showcase="code"></code></pre>
                                        </div>
                                        <div class="show-panel-body" data-showcase="example">
                                            <nav class="navbar navbar-default">
                                                <div class="container-fluid">
                                                    <div class="navbar-header">
                                                        <div class="nav-controls visible-xs-inline-block pull-left">
                                                            <button class="btn btn-default navbar-btn" id="toggle-sidebar-btn" type="button"><span class="sr-only">Toggle sidepanel</span><i class="fa fa-bars"></i></button>
                                                        </div>
                                                        <a class="navbar-brand" href="javascript:void(0)">
                                                            <img alt="PHOTON Test" src="../dist/css/img/photon-power-logo.png">
                                                        </a>
                                                        <div class="nav-controls visible-xs-inline-block pull-right">
                                                            <button class="btn btn-default navbar-btn" data-target="#test2_navbar" data-toggle="collapse" id="main-min-nav" type="button"><span class="sr-only">Toggle navigation</span><i class="fa fa-chevron-down"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="collapse navbar-collapse" id="test2_navbar">
                                                        <h4 class="navbar-text">Title</h4>
                                                        <button type="button" class="btn btn-danger navbar-btn">Don't press this button!</button>
                                                        <ul class="nav navbar-nav navbar-right">
                                                            <li class="dropdown">
                                                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                                    <div class="profile-thumb hidden-xs">
                                                                        <img class="nav-user-photo" src="../dist/css/img/jon_snow.jpg" onerror="this.src='../dist/css/icons/default_user.png'" alt="" height="36">
                                                                    </div>
                                                                    Jon Snow
                                                                    <i class="fa fa-chevron-down hidden-xs"></i>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li class="dm-header hidden-xs"><span>User actions</span></li>
                                                                    <li><a href="#"><span>Account settings</span></a></li>
                                                                    <li><a href="#"><span>Support</span></a></li>
                                                                    <li><a href="#"><span>Log out</span></a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </nav>
                                        </div>
                                        <div class="show-panel-footer">
                                            <pre class="language-markup"><code class="language-markup" data-showcase="code"></code></pre>
                                        </div>
                                        <div class="show-panel-body" data-showcase="example">
                                            <nav class="navbar navbar-default">
                                                <div class="container-fluid">
                                                    <div class="navbar-header">
                                                        <div class="nav-controls visible-xs-inline-block pull-left">
                                                            <button class="btn btn-default navbar-btn" id="toggle-sidebar-btn" type="button"><span class="sr-only">Toggle sidepanel</span><i class="fa fa-bars"></i></button>
                                                        </div>
                                                        <a class="navbar-brand" href="javascript:void(0)">
                                                            <img alt="PHOTON Test" src="../dist/css/img/photon-power-logo.png">
                                                        </a>
                                                        <div class="nav-controls visible-xs-inline-block pull-right">
                                                            <button class="btn btn-default navbar-btn" data-target="#test3_navbar" data-toggle="collapse" id="main-min-nav" type="button">
                                                                <span class="sr-only">Toggle navigation</span><i class="fa fa-chevron-down"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="collapse navbar-collapse" id="test3_navbar">
                                                        <h4 class="navbar-text">Title</h4>
                                                        <ul class="nav navbar-nav navbar-right">
                                                            <li class="dropdown">
                                                                <a href="javascript:void(0)" class="dropdown-toggle dd-language" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                                    <span class="visible-xs-inline">Limbă</span>                        
                                                                    <span><i class="flag-icon flag-icon-ro"></i> RO</span>
                                                                    <i class="fa fa-chevron-down hidden-xs"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dm-language">
                                                                    <li><a href="#"><i class="flag-icon flag-icon-ro"></i><span> RO</span></a></li>
                                                                    <li><a href="#"><i class="flag-icon flag-icon-gb"></i><span> EN</span></a></li>
                                                                    <li><a href="#"><i class="flag-icon flag-icon-bg"></i><span> BG</span></a></li>
                                                                    <li><a href="#"><i class="flag-icon flag-icon-hu"></i><span> HU</span></a></li>
                                                                    <li><a href="#"><i class="flag-icon flag-icon-pl"></i><span> PL</span></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                                    <i class="fa fa-bell nav-icon-lg hidden-xs"></i>
                                                                    <span class="visible-xs-inline">Notifications</span>
                                                                    <span class="jewel">3</span>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li class="dm-header hidden-xs">
                                                                        <span>Notifications</span>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><span>You have an invalidated offer</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><span>Your account is not up to date</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><span>You have a new order</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="text-center"><span>view all</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </nav>
                                        </div>
                                        <div class="show-panel-footer">
                                            <pre class="language-markup"><code class="language-markup" data-showcase="code"></code></pre>
                                        </div>
                                        <div class="show-panel-body" data-showcase="example">
                                            <nav class="navbar navbar-default">
                                                <div class="container-fluid">
                                                    <div class="navbar-header">
                                                        <div class="nav-controls visible-xs-inline-block pull-left">
                                                            <button class="btn btn-default navbar-btn" id="toggle-sidebar-btn" type="button"><span class="sr-only">Toggle sidepanel</span><i class="fa fa-bars"></i></button>
                                                        </div>
                                                        <a class="navbar-brand" href="javascript:void(0)">
                                                            <img alt="PHOTON Test" src="../dist/css/img/photon-power-logo.png">
                                                        </a>
                                                        <div class="nav-controls visible-xs-inline-block pull-right">
                                                            <button class="btn btn-default navbar-btn" data-target="#test4_navbar" data-toggle="collapse" id="main-min-nav" type="button">
                                                                <span class="sr-only">Toggle navigation</span>
                                                                <i class="fa fa-chevron-down"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="collapse navbar-collapse" id="test4_navbar">
                                                        <h4 class="navbar-text">Title</h4>
                                                        <ul class="nav navbar-nav navbar-right">
                                                            <li class="nav-input-group nav-search">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="example1" id="example1" placeholder="Search">
                                                                    <div class="input-group-btn">
                                                                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                                    <i class="fa fa-bell nav-icon-lg hidden-xs"></i>
                                                                    <span class="visible-xs-inline">Notificare</span>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li class="dm-header hidden-xs">
                                                                        <span>Notifications</span>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><span>You have an invalidated offer</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><span>Your account is not up to date</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><span>You have a new order</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="text-center"><span>view all</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>                                                               
                                                        </ul>
                                                    </div>
                                                </div>
                                            </nav>
                                        </div>
                                        <div class="show-panel-footer">
                                            <pre class="language-markup"><code class="language-markup" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="mainSidebar" class="pad-top-40">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel">
                                        <div class="show-panel-body">
                                            <h2><strong>Sidebar</strong></h2>
                                            <p><strong>Photon's unique sidebar menu.</strong></p>
                                            <p>You can use the buttons below to toggle different sidebar states.</p>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p><strong>Fixed status</strong></p>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="sidebar_fixed_status" class="form-radio-control" value="fixed" checked="checked">
                                                            Fixed
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="sidebar_fixed_status" class="form-radio-control" value="unfixed">
                                                            UN-Fixed
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p><strong>Expanded status</strong></p>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="sidebar_expanded_status" class="form-radio-control" value="expanded" checked="checked">
                                                            Expanded
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="sidebar_expanded_status" class="form-radio-control" value="collapsed">
                                                            Collapsed
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
<pre>&lt;div id=&quot;sidebar&quot; class=&quot;<mark id="sidebar_classes" class="text-danger">sidebar sidebar-fixed</mark>&quot;&gt;
    &lt;div class=&quot;sidebar-outer&quot;&gt;
        &lt;ul class=&quot;sidebar-inner&quot;&gt;
            &lt;li class=&quot;menu-item&quot;&gt;
                &lt;a href=&quot;/your/path&quot;&gt;
                    &lt;i class=&quot;menu-icon fa fa-angle-double-right&quot;&gt;&lt;/i&gt;
                    &lt;span class=&quot;menu-text&quot;&gt;<span class="text-danger"><strong>First level</strong></span>&lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;menu-item menu-item-has-children&quot;&gt;
                &lt;a href=&quot;#&quot;&gt;
                    &lt;i class=&quot;menu-icon fa fa-bolt&quot;&gt;&lt;/i&gt;
                    &lt;span class=&quot;menu-text&quot;&gt;<span class="text-danger"><strong>First level with children</strong></span>&lt;/span&gt;
                &lt;/a&gt;
                &lt;ul class=&quot;sidebar-submenu&quot;&gt;
                    &lt;li class=&quot;menu-item&quot;&gt;
                        &lt;a href=&quot;/your/path/1&quot;&gt;
                            &lt;i class=&quot;menu-icon fa fa-angle-double-right&quot;&gt;&lt;/i&gt;
                            &lt;span class=&quot;menu-text&quot;&gt;<span class="text-danger"><strong>Second level</strong></span>&lt;/span&gt;
                        &lt;/a&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;menu-item menu-item-has-children&quot;&gt;
                        &lt;a href=&quot;/your/path/2&quot;&gt;
                            &lt;i class=&quot;menu-icon fa fa-angle-double-right&quot;&gt;&lt;/i&gt;
                            &lt;span class=&quot;menu-text&quot;&gt;<span class="text-danger"><strong>Second level with children</strong></span>&lt;/span&gt;
                        &lt;/a&gt;
                        &lt;ul class=&quot;sidebar-submenu&quot;&gt;
                            &lt;li class=&quot;menu-item&quot;&gt;
                                &lt;a href=&quot;/your/path/2/2&quot;&gt;
                                    &lt;i class=&quot;menu-icon fa fa-angle-double-right&quot;&gt;&lt;/i&gt;
                                    &lt;span class=&quot;menu-text&quot;&gt;<span class="text-danger"><strong>Third level</strong></span>&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class=&quot;menu-item&quot;&gt;
                                &lt;a href=&quot;/your/path/2/3&quot;&gt;
                                    &lt;i class=&quot;menu-icon fa fa-angle-double-right&quot;&gt;&lt;/i&gt;
                                    &lt;span class=&quot;menu-text&quot;&gt;<span class="text-danger"><strong>Third level</strong></span>&lt;/span&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sidebar-control&quot;&gt;
        &#x3C;div class=&#x22;sidebar-toggle&#x22;&#x3E;
            &#x3C;button type=&#x22;button&#x22; id=&#x22;toggle-sidebar-size-btn&#x22; class=&#x22;btn btn-default btn-sm&#x22;&#x3E;
                &#x3C;i class=&#x22;<mark id="sidebar_control_button_icon_classes" class="text-danger">menu-icon fa fa-arrow-left</mark>&#x22;&#x3E;&#x3C;/i&#x3E;
            &#x3C;/button&#x3E;
        &#x3C;/div&#x3E;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="mainFooter" class="pad-top-40">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel">
                                        <div class="show-panel-body">
                                            <h2><strong>Footer</strong></h2>
                                            <p><strong>Photon's unique CSS footer</strong></p>
                                            <p><strong>Fixed status</strong></p>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="footer_fixed_status" class="form-radio-control" value="unfixed" checked="checked">
                                                    UN-Fixed
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="footer_fixed_status" class="form-radio-control" value="fixed">
                                                    Fixed
                                                </label>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
<pre><span id="footer_fixed_code" class="hide">&#x3C;div id=&#x22;main_footer&#x22; class=&#x22;footer footer-fixed&#x22;&#x3E;
    &#x3C;div class=&#x22;footer-inner&#x22;&#x3E;
        &#x3C;div class=&#x22;footer-content&#x22;&#x3E;
            &#x3C;div class=&#x22;container-fluid&#x22;&#x3E;
                &#x3C;div class=&#x22;pull-left hidden-xs&#x22;&#x3E;
                    &#x3C;span&#x3E;Copyright &#xA9; 2011 - 2016 &#x3C;strong&#x3E;eMAG&#x3C;/strong&#x3E;. &#x3C;br class=&#x22;visible-xs-inline&#x22;&#x3E;All rights reserved.&#x3C;/span&#x3E;
                &#x3C;/div&#x3E;
                &#x3C;div class=&#x22;panel-controls pull-right&#x22;&#x3E;
                    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary&#x22; id=&#x22;save-action-ft&#x22;&#x3E;
                        &#x3C;i class=&#x22;fa fa-check&#x22;&#x3E;&#x3C;/i&#x3E;
                        &#x3C;span&#x3E;Salveaz&#x103;&#x3C;/span&#x3E;
                    &#x3C;/button&#x3E;
                    &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-default&#x22; id=&#x22;cancel-action-ft&#x22;&#x3E;
                        &#x3C;i class=&#x22;fa fa-close&#x22;&#x3E;&#x3C;/i&#x3E;
                        &#x3C;span&#x3E;Anuleaz&#x103;&#x3C;/span&#x3E;
                    &#x3C;/button&#x3E;
                &#x3C;/div&#x3E;
            &#x3C;/div&#x3E;
            &#x3C;div class=&#x22;clearfix text-center pad-top-20 visible-xs-block&#x22;&#x3E;
                &#x3C;span&#x3E;Copyright &#xA9; 2011 - 2016 &#x3C;strong&#x3E;eMAG&#x3C;/strong&#x3E;. &#x3C;br class=&#x22;visible-xs-inline&#x22;&#x3E;All rights reserved.&#x3C;/span&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;</span><span id="footer_unfixed_code">&#x3C;div id=&#x22;main_footer&#x22; class=&#x22;footer&#x22;&#x3E;
    &#x3C;div class=&#x22;footer-inner&#x22;&#x3E;
        &#x3C;div class=&#x22;footer-content text-center&#x22;&#x3E;
            &#x3C;span&#x3E;Copyright &#xA9; 2011 - 2016 &#x3C;strong&#x3E;eMAG&#x3C;/strong&#x3E;. &#x3C;br class=&#x22;visible-xs-inline&#x22;&#x3E;All rights reserved.&#x3C;/span&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;</span></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="gridLayout" class="pad-top-40">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel">
                                        <div class="show-panel-body">
                                            <h2><strong>Grid Layout</strong></h2>
                                            <p><strong>Based on Bootstrap's original grid layout, you can customize the main content strip.</strong></p>                                            
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="pad-top-40">
                                <div class="panel">
                                    <div class="panel-body text-center">
                                        <div class="pad-sep-60">
                                            <strong>Maybe a full-width layout is your thing.</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pad-top-20">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel">
                                            <div class="panel-body text-center">
                                                <div class="pad-sep-60">
                                                    <p><strong>Double the trouble?</strong></p>
<pre>&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-lg-6&quot;&gt; One panel here &lt;/div&gt;
...
&lt;/div&gt;</pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel">
                                            <div class="panel-body text-center">
                                                <div class="pad-sep-60">
                                                    <p></p><strong>Double the trouble?</strong>
<pre>&lt;div class=&quot;row&quot;&gt;
...
&lt;div class=&quot;col-lg-6&quot;&gt; The other one here &lt;/div&gt;
&lt;/div&gt;</pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pad-top-20">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-body text-center">
                                                <div class="pad-sep-60">
                                                    <p><strong>Or maybe the presentation-style centered strip?</strong></p>
                                                    <pre>&lt;div class=&quot;row&quot;&gt;&lt;div class=&quot;col-lg-8 col-lg-offset-2&quot;&gt; Your panel here &lt;/div&gt;&lt;/div&gt;</pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pad-sep-40 text-center">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <p class="text-primary"><strong>HINT:</strong> Whatever you opt for, try to place elements inside a nice panel or widget container. Don't be like the guy who wrote this text directly on the gray body background.</p>
                                    </div>
                                </div>
                            </div>
                        </section>                        
                    </div>
                </div>
                <!-- CONTENT:End -->
                <!-- FOOTER:Start -->
                <?php include_once "modules/_mod_footer.php"?>
                <!-- FOOTER:End -->
                </div>
            </div>
        <!-- PAGE:End -->
        <!-- POPUPS:Start -->
        
        <!-- POPUPS:End -->
        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>
        <script src="../dist/js/main_script.min.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>

        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <script src="../dist/plugins/prism/prism.min.js"></script>

        <!-- SCRIPTS:End -->
        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">
            $(document).ready(function () {
                console.log('Ready, Captain!');

                demoHelpers();  //Requires demo_helpers.js

                showcasing();   //Requires demo_helpers.js, prism.min.js and prism.min.css

                $('input[name="sidebar_fixed_status"], input[name="sidebar_expanded_status"]').on('change', function() {
                    updateSideBarCode();
                });

                $('input[name="footer_fixed_status"]').on('change', function() {
                    updateFooterBarCode();
                });
            });
            $(window).load(function () {
                $('.language-markup .token.tag:contains("nav")+.token.attr-name:contains("class")+.token.attr-value').each(function (index, element) {
                    $(element).find('.token.punctuation').eq(2).before(' navbar-fixed-top');
                });
            });
        </script>
        <!-- DOCUMENT-READY:End -->
    </body>
</html>
