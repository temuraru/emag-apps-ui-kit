<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Plugins | Photon - The Superfast, Supersimple UI Kit</title>
        <meta name="description" content="Photon - The superfast, supersimple UI Kit" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="eMAG CORE UI Team">

        <!-- The favicon -->
        <?php include_once "modules/_mod_favicon.php"?>

        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <link rel="stylesheet" href="../dist/plugins/prism/prism.min.css">

        <!-- PLUGIN: Magnific -->
        <link rel="stylesheet" href="../dist/plugins/magnific/magnific.min.css">

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
                                        <h1>PHOTON - Image gallery</h1>
                                        <p>The lightning-fast, modular, mobile-friendly admin template.</p>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <section id="summernoteStandard" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Magnific.js</strong></h4>
                                            <p><strong>Standard install</strong></p>
                                            <p>You can familiarize yourself with more options and settings by checking out <a href="http://dimsemenov.com/plugins/magnific-popup/" target="_blank">http://dimsemenov.com/plugins/magnific-popup/</a></p>
                                        </div>
                                        <div class="show-panel-example">
                                            <div class="show-panel-body">
                                                <div class="pad-top-40">
                                                    <div class="row">
                                                        <div class="col-lg-10 col-lg-offset-1" data-showcase="example">
                                                            <div id="default_magnific" class="zoom-gallery zg-grid">
                                                                <a href="../dist/css/img/photo-1.jpg" data-source="https://unsplash.com/photos/4jcFu1byopQ" title="by Davide Ragusa">
                                                                    <img src="../dist/css/img/photo-1.jpg" alt="gallery-image">
                                                                </a>
                                                                <a href="../dist/css/img/photo-4.jpg" data-source="https://unsplash.com/photos/BeIvjuz6k2k" title="by Adrian Pelletier">
                                                                    <img src="../dist/css/img/photo-4.jpg" alt="gallery-image">
                                                                </a>
                                                                <a href="../dist/css/img/photo-5.jpg" data-source="https://unsplash.com/photos/DjlKxYFJlTc" title="by Elliott Engelmann">
                                                                    <img src="../dist/css/img/photo-5.jpg" alt="gallery-image">
                                                                </a>
                                                                <a href="../dist/css/img/photo-6.jpg" data-source="http://www.gettyimages.com/license/484398332" title="by Carl Court">
                                                                    <img src="../dist/css/img/photo-6.jpg" alt="gallery-image">
                                                                </a>
                                                                <a href="../dist/css/img/photo-7.jpg" data-source="http://www.volvooceanrace.com/en/home.html" title="Volvo Ocean Race/Team Vestas Wind/2015">
                                                                    <img src="../dist/css/img/photo-7.jpg" alt="gallery-image">
                                                                </a>
                                                                <a href="../dist/css/img/photo-8.gif" data-source="https://www.youtube.com/watch?v=o0u4M6vppCI" title="'Shia LaBeouf' Live - Rob Cantor">
                                                                    <img src="../dist/css/img/photo-8.gif" alt="gallery-image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                        
                                            <div class="show-panel-footer">
                                                <pre class="language-markup"><code class="language-markup" data-showcase="code"></code></pre>
                                            </div>
                                        </div>
                                        <div class="show-panel-example">
                                            <div class="show-panel-body">
                                                <p><strong>All AJAX</strong></p>
                                                <p>Sometimes, you may want to surprise your audience.</p>
                                                <div class="pad-sep-40">
                                                    <div class="row">
                                                        <div class="col-lg-10 col-lg-offset-1 text-center">
                                                            <a href="../dist/css/img/photo-2.jpg" id="btnajax_magnific" class="btn btn-info">Show me an image of a house.</a><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                        
                                            <div class="show-panel-footer">
                                        </div>
                                        </div>
                                        <div class="show-panel-example">
                                            <div class="show-panel-body">
                                                <p><strong>Youtube/Vimeo/etc. embeds</strong></p>
                                                <p>Sometimes, you may want to surprise your audience.</p>
                                                <div class="pad-sep-40">
                                                    <div class="row">
                                                        <div class="col-lg-10 col-lg-offset-1 text-center">
                                                            <a href="https://www.youtube.com/watch?v=HgzGwKwLmgM" id="youtube_magnific" class="btn btn-info">Open YouTube video</a><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                        
                                            <div class="show-panel-footer">
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

        <!-- PLUGIN: This script file helps display demo code. Don't add it everywhere -->
        <script src="../dist/js/demo_helpers.js"></script>

        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <script src="../dist/plugins/prism/prism.min.js"></script>

        <!-- PLUGIN: Magnific popup -->
        <script src="../dist/plugins/magnific/magnific.min.js"></script>

        <!--MAIN SCRIPT-->
        <script src="../dist/js/main_script.min.js"></script>
        
        <!-- SCRIPTS:End -->
        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">      
            $(document).ready(function () {
                console.log('Ready, Captain!');                

                showcasing(); //Requires demo_helpers.js, prism.min.js and prism.min.css

                $('#default_magnific').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    closeOnContentClick: false,
                    closeBtnInside: false,
                    mainClass: 'mfp-with-zoom mfp-img-mobile',
                    image: {
                        verticalFit: true,
                        titleSrc: function (item) {
                            return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank">image source</a>';
                        }
                    },
                    gallery: {
                        enabled: true
                    },
                    zoom: {
                        enabled: true,
                        duration: 300, // don't foget to change the duration also in CSS
                        opener: function (element) {
                            return element.find('img');
                        }
                    }
                });

                $('#btnajax_magnific').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    image: {
                        verticalFit: true
                    }

                });
                $('#youtube_magnific').magnificPopup({
                    //disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });
            });
        </script>
        <!-- DOCUMENT-READY:End -->
    </body>
</html>