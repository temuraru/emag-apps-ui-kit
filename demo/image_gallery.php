<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <title>Plugins - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
        <link rel="stylesheet" href="../dist/plugins/magnific/magnific.min.css" data-dependency-name="magnific_css">
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
                                <p><b>Image gallery</b></p>
                            </div>
                        </div>
                        <section id="summernoteStandard" class="pad-top-40">
                            <div class="show-panel code-example">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Magnific.js</strong></h2>
                                    <div class="row">
                                        <div class="col-sm-12 mg-top-20">
                                            <div class="alert alert-info no-margin-bottom" role="alert">
                                                <p><i class="fa fa-info-circle"></i>You can familiarize yourself with more options and settings by checking out <a href="http://dimsemenov.com/plugins/magnific-popup/"  class="alert-link" target="_blank">http://dimsemenov.com/plugins/magnific-popup/</a></p>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="code-container">
                                        <div class="row flex-container code-header no-border-top">
                                            <div class="col-xs-8 module-description">
                                                <h4><b>Standard install</b></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#summernote" aria-expanded="false" aria-controls="summernote"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="summernote">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#summernote_html_source" aria-controls="summernote_html" role="tab" data-toggle="tab">HTML</a></li>
                                                <li role="presentation"><a href="#summernote_js_source" aria-controls="summernote_js" role="tab" data-toggle="tab">JS</a></li>
                                                <li role="presentation"><a href="#summernote_css_source" aria-controls="summernote_css" role="tab" data-toggle="tab">CSS</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="summernote_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                                <div role="tabpanel" class="tab-pane js-source" id="summernote_js_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                                <div role="tabpanel" class="tab-pane css-source" id="summernote_css_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,magnific_source,magnific_standard_init,magnific_css">
                                                    <div id="default_magnific" class="zoom-gallery zg-grid">
                                                        <a href="img/photo-1.jpg" data-source="https://unsplash.com/photos/4jcFu1byopQ" title="by Davide Ragusa">
                                                            <img src="img/photo-1.jpg" alt="gallery-image">
                                                        </a>
                                                        <a href="img/photo-4.jpg" data-source="https://unsplash.com/photos/BeIvjuz6k2k" title="by Adrian Pelletier">
                                                            <img src="img/photo-4.jpg" alt="gallery-image">
                                                        </a>
                                                        <a href="img/photo-5.jpg" data-source="https://unsplash.com/photos/DjlKxYFJlTc" title="by Elliott Engelmann">
                                                            <img src="img/photo-5.jpg" alt="gallery-image">
                                                        </a>
                                                        <a href="img/photo-6.jpg" data-source="http://www.gettyimages.com/license/484398332" title="by Carl Court">
                                                            <img src="img/photo-6.jpg" alt="gallery-image">
                                                        </a>
                                                        <a href="img/photo-7.jpg" data-source="http://www.volvooceanrace.com/en/home.html" title="Volvo Ocean Race/Team Vestas Wind/2015">
                                                            <img src="img/photo-7.jpg" alt="gallery-image">
                                                        </a>
                                                        <a href="img/photo-8.gif" data-source="https://www.youtube.com/watch?v=o0u4M6vppCI" title="'Shia LaBeouf' Live - Rob Cantor">
                                                            <img src="img/photo-8.gif" alt="gallery-image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-container">
                                        <div class="row flex-container code-header no-border-top">
                                            <div class="col-xs-8 module-description">
                                                <h4><b>All AJAX</b></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#magnific_ajax" aria-expanded="false" aria-controls="magnific_ajax"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="magnific_ajax">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#magnific_ajax_html_source" aria-controls="magnific_ajax_html" role="tab" data-toggle="tab">HTML</a></li>
                                                <li role="presentation"><a href="#magnific_ajax_js_source" aria-controls="magnific_ajax_js" role="tab" data-toggle="tab">JS</a></li>
                                                <li role="presentation"><a href="#magnific_ajax_css_source" aria-controls="magnific_ajax_css" role="tab" data-toggle="tab">CSS</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="magnific_ajax_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                                <div role="tabpanel" class="tab-pane js-source" id="magnific_ajax_js_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                                <div role="tabpanel" class="tab-pane css-source" id="magnific_ajax_css_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,magnific_source,magnific_ajax_init,magnific_css">
                                                    <a href="img/photo-2.jpg" id="btnajax_magnific" class="btn btn-primary">Show me an image of a house.</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-container">
                                        <div class="row flex-container code-header no-border-top">
                                            <div class="col-xs-8 module-description">
                                                <h4><b>Youtube/Vimeo/etc. embeds</b></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#magnific_embeds" aria-expanded="false" aria-controls="magnific_embeds"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="magnific_embeds">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#magnific_embeds_html_source" aria-controls="magnific_embeds_html" role="tab" data-toggle="tab">HTML</a></li>
                                                <li role="presentation"><a href="#magnific_embeds_js_source" aria-controls="magnific_embeds_js" role="tab" data-toggle="tab">JS</a></li>
                                                <li role="presentation"><a href="#magnific_embeds_css_source" aria-controls="magnific_embeds_css" role="tab" data-toggle="tab">CSS</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="magnific_embeds_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                                <div role="tabpanel" class="tab-pane js-source" id="magnific_embeds_js_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                                <div role="tabpanel" class="tab-pane css-source" id="magnific_embeds_css_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,magnific_source,magnific_embeds_init,magnific_css">
                                                    <a href="https://www.youtube.com/watch?v=HgzGwKwLmgM" id="youtube_magnific" class="btn btn-primary">Open YouTube video</a>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" data-dependency-name="jquery"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>
        
        <!-- PLUGIN: Magnific popup -->
        <script src="../dist/plugins/magnific/magnific.min.js" data-dependency-name="magnific_source"></script>

        <script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->

        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <script src="../dist/plugins/prism/prism.min.js"></script>

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">
            $(document).ready(function () {
                demoHelpers();  // Require demo_helpers.js
                showPageCode();
            });
        </script>

        <script type="text/javascript" data-dependency-name="magnific_standard_init">
            $(document).ready(function () {
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
            });
        </script>

        <script type="text/javascript" data-dependency-name="magnific_ajax_init">
            $(document).ready(function () {
                $('#btnajax_magnific').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    image: {
                        verticalFit: true
                    }

                });
            });
        </script>

        <script type="text/javascript" data-dependency-name="magnific_embeds_init">
            $(document).ready(function () {
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