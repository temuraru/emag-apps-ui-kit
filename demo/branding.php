<!DOCTYPE html>
<html lang="en" class="js">
    <head>

        <title>Branding - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
        <?php include_once "modules/_mod_top_include.php"?>

    </head>
        <?php include_once "modules/_mod_browser_upgrade.php"?>

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
                        <div class="jumbotron content-header">
                            <div class="container-fluid">
                                <p>eMAG Apps UI KIT</p>
                                <p><b>Branding</b></p>
                            </div>
                        </div>
                        <section id="colourScheme" class="pad-top-40">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Color scheme</strong></h2>
                                    <p><strong>You can always change these colors by updating their corresponding LESS variable in the <code>variables.less</code> file.</strong></p>
                                    <p><strong>The UI KIT colors should be used like this:</strong></p>
                                    <ul>
                                        <li>Blue should be used for buttons, panel's header, panel's border and for links;</li>
                                        <li>Green should be used for Save/Submit buttons and for success messages;</li>
                                        <li>Red should be used for Delete/Remove buttons and for error messages;</li>
                                        <li>Black should be used for text and icons;</li>
                                        <li>Grey and white should be used for borders and backgrounds;</li>
                                        <li>Orange should be used for warning messages.</li>
                                    </ul>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fonts-up-140"></i>
                                                    The branding colours can be used in LESS by calling their corresponding variable. Ex: <code>@branding-primary</code>
                                                </div>
                                                <div class="row color-swatches">
                                                    <div class="col-xs-6 col-sm-2 text-center mg-btm-20">
                                                        <div class="faux-elem ratio1-1 swatch swatch-primary"><span>#005eb7</span></div>
                                                        <div class="pad-10"><small>@brand-primary</small></div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-2 text-center mg-btm-20">
                                                        <div class="faux-elem ratio1-1 swatch swatch-info"><span>#2790f3</span></div>
                                                        <div class="pad-10"><small>@brand-info</small></div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-2 text-center mg-btm-20">
                                                        <div class="faux-elem ratio1-1 swatch swatch-success"><span>#38833a</span></div>
                                                        <div class="pad-10"><small>@brand-success</small></div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-2 text-center mg-btm-20">
                                                        <div class="faux-elem ratio1-1 swatch swatch-warning"><span>#f4b350</span></div>
                                                        <div class="pad-10"><small>@brand-warning</small></div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-2 text-center mg-btm-20">
                                                        <div class="faux-elem ratio1-1 swatch swatch-danger"><span>#e1302b</span></div>
                                                        <div class="pad-10"><small>@brand-danger</small></div>
                                                    </div>
                                                </div>
                                                <div class="pad-top-40"></div>
                                                <div class="alert alert-info" role="alert"><i class="fa fa-info-circle"></i> The shades of gray can be used in LESS by calling their corresponding variable. Ex: <code>@gray-darker</code></div>
                                                <div class="row color-swatches">
                                                    <div class="col-xs-6 col-sm-2 text-center mg-btm-20">
                                                        <div class="faux-elem ratio1-1 swatch swatch-black"><span>#000</span></div>
                                                        <div class="pad-10"><small>@black</small></div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-2 text-center mg-btm-20">
                                                        <div class="faux-elem ratio1-1 swatch swatch-gray-76"><span>#c3c3c3</span></div>
                                                        <div class="pad-10"><small>@gray-76</small></div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-2 text-center mg-btm-20">
                                                        <div class="faux-elem ratio1-1 swatch swatch-gray-80"><span>#ccc</span></div>
                                                        <div class="pad-10"><small>@gray-80</small></div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-2 text-center mg-btm-20">
                                                        <div class="faux-elem ratio1-1 swatch swatch-gray-87"><span>#dedede</span></div>
                                                        <div class="pad-10"><small>@gray-87</small></div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-2 text-center mg-btm-20">
                                                        <div class="faux-elem ratio1-1 swatch swatch-gray-93"><span>#eee</span></div>
                                                        <div class="pad-10"><small>@gray-93</small></div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-2 text-center mg-btm-20">
                                                        <div class="faux-elem ratio1-1 swatch swatch-gray-96"><span>#f6f6f6</span></div>
                                                        <div class="pad-10"><small>@gray-96</small></div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-2 text-center mg-btm-20">
                                                        <div class="faux-elem ratio1-1 swatch swatch-gray-98"><span>#fafafa</span></div>
                                                        <div class="pad-10"><small>@gray-98</small></div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-2 text-center">
                                                        <div class="faux-elem ratio1-1 swatch swatch-white"><span>#fff</span></div>
                                                        <div class="pad-10"><small>@white</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="navigationThemes" class="pad-top-40">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Navigation themes</strong></h2>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <div class="alert alert-info" role="alert"><i class="fa fa-info-circle"></i>
                                                    To change the navigation theme, use <mark>navbar-inverse</mark> alone or in combination with one of the following classes: <mark>'navbar-blue', 'navbar-green', 'navbar-purple', 'navbar-cyan', 'navbar-brown'</mark>. For sidebar use one of the following classes: <mark>'sidebar-inverse', 'sidebar-blue', 'sidebar-green', 'sidebar-purple', 'sidebar-cyan', 'sidebar-brown'</mark>.
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <p><strong>Inverse theme</strong><button type="button" class="btn btn-default scheme-inverse mg-15 no-margin-top-bottom">Apply</button></p>
                                                <img src="img/inverse-theme-preview.png" alt="Inverse theme" class="img-responsive mg-50 no-margin-top no-margin-left-right">

                                                <p><strong>Blue theme</strong> <button type="button" class="btn btn-default scheme-blue mg-15 no-margin-top-bottom">Apply</button></p>
                                                <img src="img/blue-theme-preview.png" alt="Blue theme" class="img-responsive mg-50 no-margin-top no-margin-left-right">

                                                <p><strong>Green theme</strong> <button type="button" class="btn btn-default scheme-green mg-15 no-margin-top-bottom">Apply</button></p>
                                                <img src="img/green-theme-preview.png" alt="Green theme" class="img-responsive mg-50 no-margin-top no-margin-left-right">

                                                <p><strong>Purple theme</strong> <button type="button" class="btn btn-default scheme-purple mg-15 no-margin-top-bottom">Apply</button></p>
                                                <img src="img/purple-theme-preview.png" alt="Purple theme" class="img-responsive mg-50 no-margin-top no-margin-left-right">

                                                <p><strong>Cyan theme</strong> <button type="button" class="btn btn-default scheme-cyan mg-15 no-margin-top-bottom">Apply</button></p>
                                                <img src="img/cyan-theme-preview.png" alt="Cyan theme" class="img-responsive mg-50 no-margin-top no-margin-left-right">

                                                <p><strong>Brown theme</strong> <button type="button" class="btn btn-default scheme-brown mg-15 no-margin-top-bottom">Apply</button></p>
                                                <img src="img/brown-theme-preview.png" alt="Brown theme" class="img-responsive mg-50 no-margin-top no-margin-left-right">

                                                <p><strong>Default theme</strong> <button type="button" class="btn btn-default scheme-default mg-15 no-margin-top-bottom">Apply</button></p>
                                                <img src="img/default-theme-preview.png" alt="Default theme" class="img-responsive">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="icons" class="pad-top-30">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Icons & flags</strong></h2>
                                    <p><strong>You are iconic!</strong></p>

                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-lg-7">
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

        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-3.2.1.min.js\">"+"<"+"/script>")</script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
        <script src="../dist/js/main_script.min.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">
            $(document).ready(function () {
                var schemeClasses = ['default', 'inverse', 'blue', 'green', 'purple', 'cyan', 'brown'];

                function removeClasses() {
                    for (var i = 0; i < schemeClasses.length; i++) {
                        $('.navbar-' + schemeClasses[i]).removeClass('navbar-' + schemeClasses[i]);
                        $('.sidebar-' + schemeClasses[i]).removeClass('sidebar-' + schemeClasses[i]);
                    }
                }

                function changeLogo(scheme) {
                    if (scheme == 'default') {
                        $('.navbar-brand').html('<img src="img/logo-eMAG-apps-ui-kit.png" alt="Demo">');
                    } else {
                        $('.navbar-brand').html('<img src="img/logo-eMAG-apps-ui-kit-white.png" alt="Demo">');
                    }
                }

                function addClasses(color) {
                    $navbar = $('.navbar');
                    if (color == "default") {
                        $navbar.addClass('navbar-' + color);
                    } else {
                        $navbar.addClass('navbar-inverse').addClass('navbar-' + color);
                        $('#sidebar').addClass('sidebar-' + color);
                    }
                }

                for (var i = 0; i < schemeClasses.length; i++) {
                    $('.scheme-' + schemeClasses[i]).on('click', {color: schemeClasses[i]}, function (e) {
                        removeClasses();
                        addClasses(e.data.color);
                        changeLogo(e.data.color);
                    });
                }

                demoHelpers();  // Require demo_helpers.js
            });
        </script>
        <!-- DOCUMENT-READY:End -->
    </body>
</html>
