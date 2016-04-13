<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Branding | Photon - The Superfast, Supersimple UI Kit</title>
        <meta name="description" content="Photon - The superfast, supersimple UI Kit" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="eMAG CORE UI Team">

        <!-- The favicon -->
        <link rel="apple-touch-icon" href="../dist/css/icons/favicon.ico">
        <link rel="icon" type="image/png" href="../dist/css/icons/favicon.ico">

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
                                        <h1>PHOTON - Branding</h1>
                                        <p>The lightning-fast, modular, mobile-friendly admin template.</p>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <section id="colourScheme" class="pad-top-40">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel">
                                        <div class="show-panel-body">
                                            <h2><strong>Color scheme</strong></h2>
                                            <p><strong>You can always change these colors by updating their corresponding LESS variable in the <code>variables.less</code> file</strong></p>
                                            <div class="pad-sep-20"> 
                                                <div class="row">
                                                    <div class="col-lg-10 col-lg-offset-1">
                                                        <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fonts-up-140"></i> 
                                                            The branding colours can be used in LESS by calling their corresponding variable. Ex: <code>@branding-primary</code>
                                                        </div>
                                                        <div class="row color-swatches">
                                                            <div class="col-xs-6 col-sm-2 text-center">
                                                                <div class="faux-elem ratio1-1 swatch swatch-primary"></div>
                                                                <div class="pad-top-20"><small>@branding-primary</small></div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-2 text-center">
                                                                <div class="faux-elem ratio1-1 swatch swatch-info"></div>
                                                                <div class="pad-top-20"><small>@branding-info</small></div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-2 text-center">
                                                                <div class="faux-elem ratio1-1 swatch swatch-success"></div>
                                                                <div class="pad-top-20"><small>@branding-success</small></div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-2 text-center">
                                                                <div class="faux-elem ratio1-1 swatch swatch-warning"></div>
                                                                <div class="pad-top-20"><small>@branding-warning</small></div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-2 text-center">
                                                                <div class="faux-elem ratio1-1 swatch swatch-danger"></div>
                                                                <div class="pad-top-20"><small>@branding-danger</small></div>
                                                            </div>
                                                        </div>
                                                        <div class="pad-top-40"></div>
                                                        <div class="alert alert-info" role="alert"><i class="fa fa-info-circle"></i> The shades of gray can be used in LESS by calling their corresponding variable. Ex: <code>@gray-darker</code></div>
                                                        <div class="row color-swatches">
                                                            <div class="col-xs-6 col-sm-2">
                                                                <div class="faux-elem ratio1-1 swatch swatch-gray-darker"></div>
                                                                <div class="pad-top-20"><small>@gray-darker</small></div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-2">
                                                                <div class="faux-elem ratio1-1 swatch swatch-gray-dark"></div>
                                                                <div class="pad-top-20"><small>@gray-dark</small></div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-2">
                                                                <div class="faux-elem ratio1-1 swatch swatch-gray"></div>
                                                                <div class="pad-top-20"><small>@gray</small></div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-2">
                                                                <div class="faux-elem ratio1-1 swatch swatch-gray-light"></div>
                                                                <div class="pad-top-20"><small>@gray-light</small></div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-2">
                                                                <div class="faux-elem ratio1-1 swatch swatch-gray-lighter"></div>
                                                                <div class="pad-top-20"><small>@gray-lighter</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="typography" class="pad-top-40">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel">
                                        <div class="show-panel-body">
                                            <h2><strong>Typography</strong></h2>
                                            <p><strong>You are just my type ;)</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-10 col-lg-offset-1">
                                                        <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fonts-up-140"></i> 
                                                            The current primary font-family is <code><span class="wba-font-primary"></span></code>.This font-family is inherited by all the elements from the start, however, to use it on a specific element, use the <mark>.formatted-sans-serif</mark> class on the element or its parent or, in Less, use the <mark>@font-family-sans-serif</mark> You can view the font glyphs in the example below.
                                                        </div> 
                                                        <div class="pad-btm-20">
                                                            <h1>ABCDEFGHIÎJKLMNOPQRSȘTȚUVWXYZ<br>abcdefghiîjklmnopqrsștțuvwxyz<br>1234567890!@#$%^&amp;*()`~[{]}\|;:'",&lt;.&gt;/?</h1>
                                                        </div>
                                                        <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fonts-up-140"></i> 
                                                            The current serif font-family is <code><span class="wba-font-serif"></span></code>. To use this font-family, use the <mark>.formatted-serif</mark> class on the element or its parent or, in Less, use the <mark>@font-family-serif</mark>. You can view the font glyphs in the example below.
                                                        </div>
                                                        <div class="pad-btm-20">
                                                            <h3 class="formatted-serif">ABCDEFGHIÎJKLMNOPQRSȘTȚUVWXYZ<br>abcdefghiîjklmnopqrsștțuvwxyz<br>1234567890!@#$%^&amp;*()`~[{]}\|;:'",&lt;.&gt;/?</h3>
                                                        </div>
                                                        <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fonts-up-140"></i> 
                                                            The current monospace font-family is <code><span class="wba-font-monospace"></span></code>. To use this font-family, use the <mark>.formatted-monospace</mark> class on the element or its parent or, in LESS, use the <mark>@font-family-monospace</mark>. You can view the font glyphs in the example below.
                                                        </div>
                                                        <div class="pad-btm-20">
                                                            <h3 class="formatted-monospace">ABCDEFGHIÎJKLMNOPQRSȘTȚUVWXYZ<br>abcdefghiîjklmnopqrsștțuvwxyz<br>1234567890!@#$%^&amp;*()`~[{]}\|;:'",&lt;.&gt;/?</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>                        
                        <section id="icons" class="pad-top-40">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel">
                                        <div class="show-panel-body">
                                            <h2><strong>Icons and Flags</strong></h2>
                                            <p><strong>You are iconic!</strong></p>
                                            
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-10 col-lg-offset-1">
                                                        <div class="alert alert-info" role="alert"><i class="fa fa-info-circle"></i> 
                                                            You can <strong>view the whole icon-pack</strong> by accessing the <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank" class="alert-link"><u>official documentation website</u></a>.
                                                        </div>
                                                        <div class="example-icons">
                                                            <ul class="example-icons-list">
                                                                <li>
                                                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                                                    <span class="example-icons-class">.fa .fa-bars</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                                    <span class="example-icons-class">.fa .fa-ellipsis-v</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-close" aria-hidden="true"></i>
                                                                    <span class="example-icons-class">.fa .fa-close</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                                    <span class="example-icons-class">.fa .fa-check</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                                                    <span class="example-icons-class">.fa .fa-cog</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-rocket" aria-hidden="true"></i>
                                                                    <span class="example-icons-class">.fa .fa-rocket</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-bolt" aria-hidden="true"></i>
                                                                    <span class="example-icons-class">.fa .fa-bolt</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                                    <span class="example-icons-class">.fa .fa-exchange</span>
                                                                </li>
                                                            </ul>
                                                        </div>  
                                                        <div class="pad-top-40"></div>                                                  
                                                        <div class="alert alert-info" role="alert"><i class="fa fa-info-circle"></i> 
                                                            You can <strong>view the whole flag-icon-pack</strong> by accessing the <a href="http://lipis.github.io/flag-icon-css/" target="_blank" class="alert-link"><u>official documentation website</u></a>.
                                                        </div>
                                                        <div class="example-icons">
                                                            <ul class="example-icons-list">
                                                                <li>
                                                                    <i class="flag-icon flag-icon-ro" aria-hidden="true"></i>
                                                                    <span class="example-icons-class">flag-icon flag-icon-ro</span>
                                                                </li>
                                                                <li>
                                                                    <i class="flag-icon flag-icon-gb" aria-hidden="true"></i>
                                                                    <span class="example-icons-class">flag-icon flag-icon-gb</span>
                                                                </li>
                                                                <li>
                                                                    <i class="flag-icon flag-icon-hu" aria-hidden="true"></i>
                                                                    <span class="example-icons-class">flag-icon flag-icon-hu</span>
                                                                </li>
                                                                <li>
                                                                    <i class="flag-icon flag-icon-bg" aria-hidden="true"></i>
                                                                    <span class="example-icons-class">flag-icon flag-icon-bg</span>
                                                                </li>
                                                                <li>
                                                                    <i class="flag-icon flag-icon-pl" aria-hidden="true"></i>
                                                                    <span class="example-icons-class">flag-icon flag-icon-pl</span>
                                                                </li>
                                                                <li>
                                                                    <i class="flag-icon flag-icon-fr" aria-hidden="true"></i>
                                                                    <span class="example-icons-class">flag-icon flag-icon-fr</span>
                                                                </li>
                                                                <li>
                                                                    <i class="flag-icon flag-icon-es" aria-hidden="true"></i>
                                                                    <span class="example-icons-class">flag-icon flag-icon-es</span>
                                                                </li>
                                                                <li>
                                                                    <i class="flag-icon flag-icon-it" aria-hidden="true"></i>
                                                                    <span class="example-icons-class">flag-icon flag-icon-it</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="usage" class="pad-top-40">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel">
                                        <div class="show-panel-body">
                                            <h2><strong>Recommended usage</strong></h2>
                                            <p><strong>Be W3C compliant and everything will be alright!</strong></p>
                                            <div class="pad-sep-20">
                                                
                                            </div>
                                        </div>
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
        <!-- SCRIPTS:End -->
        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">
            $(document).ready(function() {
                console.log('Ready, Captain!');
            });
        </script>
        <!-- DOCUMENT-READY:End -->
    </body>
</html>
