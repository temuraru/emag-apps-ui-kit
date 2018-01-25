<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <title>JS Components - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php"?>
    <link rel="stylesheet" href="../dist/plugins/intro/intro.min.css" data-dependency-name="intro_css">
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
                        <p><b>IntroJS</b></p>
                    </div>
                </div>
                <section class="pad-top-40">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>IntroJS</strong></h2>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Demo</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#introjs" aria-expanded="false" aria-controls="introjs"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="introjs">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#introjs_html_source" aria-controls="introjs_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#introjs_js_source" aria-controls="introjs_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#introjs_css_source" aria-controls="introjs_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="introjs_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="introjs_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="introjs_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,introjs_source,introjs_init,intro_css">
                                            <button id="intro_js_default" type="button" class="btn btn-primary">Default</button>
                                            <button id="intro_js_without_bullets" type="button" class="btn btn-primary">Without bullets</button>
                                            <button id="intro_js_without_buttons" type="button" class="btn btn-primary">Without buttons</button>
                                            <button id="intro_js_with_progressbar" type="button" class="btn btn-primary">With progress bar</button>
                                            <button id="intro_js_with_auto_positioning" type="button" class="btn btn-primary">Auto Positioning</button>
                                            <button id="intro_js_html_in_tooltip" type="button" class="btn btn-primary">HTML in tooltip</button>
                                            <button id="intro_js_hints" type="button" class="btn btn-primary">Hints</button>

                                            <div class="row">
                                                <div id="section1" class="col-sm-4">
                                                    <h3>Section 1</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis augue a neque cursus ac blandit orci faucibus. Phasellus nec metus purus.</p>
                                                </div>
                                                <div id="section5" class="col-sm-4">
                                                    <h3>Section 5</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis augue a neque cursus ac blandit orci faucibus. Phasellus nec metus purus.</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div id="section2" class="col-sm-4">
                                                    <h3>Section 2</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis augue a neque cursus ac blandit orci faucibus. Phasellus nec metus purus.</p>
                                                </div>
                                                <div id="section6" class="col-sm-4">
                                                    <h3>Section 6</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis augue a neque cursus ac blandit orci faucibus. Phasellus nec metus purus.</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div id="section3" class="col-sm-4">
                                                    <h3>Section 3</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis augue a neque cursus ac blandit orci faucibus. Phasellus nec metus purus.</p>
                                                </div>
                                                <div id="section7" class="col-sm-4">
                                                    <h3>Section 7</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis augue a neque cursus ac blandit orci faucibus. Phasellus nec metus purus.</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div id="section4" class="col-sm-4">
                                                    <h3>Section 4</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis augue a neque cursus ac blandit orci faucibus. Phasellus nec metus purus.</p>
                                                </div>
                                                <div id="section8" class="col-sm-4">
                                                    <h3>Section 8</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis augue a neque cursus ac blandit orci faucibus. Phasellus nec metus purus.</p>
                                                </div>
                                            </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" data-dependency-name="jquery"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-3.2.1.min.js\">"+"<"+"/script>")</script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>

<script src="../dist/plugins/intro/intro.min.js" data-dependency-name="introjs_source"></script>

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

<script type="text/javascript" data-dependency-name="introjs_init">
    $(document).ready(function () {

        var $body = $('body');

        initStepData();

        $body.on('click', '#intro_js_default', function () {
            startIntroJs({
                steps: window.defaultsIntroSteps
            });
        });

        $body.on('click', '#intro_js_without_bullets', function () {
            startIntroJs({
                showBullets: false,
                steps: window.defaultsIntroSteps
            });
        });

        $body.on('click', '#intro_js_without_buttons', function () {
            startIntroJs({
                showButtons: false,
                steps: window.defaultsIntroSteps
            });
        });

        $body.on('click', '#intro_js_with_progressbar', function () {
            startIntroJs({
                showProgress: true,
                steps: window.defaultsIntroSteps
            });
        });

        $body.on('click', '#intro_js_with_auto_positioning', function () {
            startIntroJs({
                tooltipPosition: 'auto',
                steps: window.autoPositioningIntroSteps
            });
        });

        $body.on('click', '#intro_js_html_in_tooltip', function () {
            startIntroJs({
                steps: window.introStepsWithHtml
            })
        });

        $body.on('click', '#intro_js_hints', function () {
            addHintsForIntroJs({
                hints: window.introHints
            });
        });

        function initStepData() {
            window.defaultsIntroSteps = [
                {
                    element: '#section1',
                    intro: 'This is a step positioned left.',
                    position: 'left'
                },
                {
                    element: '#section2',
                    intro: 'This is a step positioned right.',
                    position: 'right'
                },
                {
                    element: '#section3',
                    intro: 'This is a step positioned top.',
                    position: 'top'
                },
                {
                    element: '#section4',
                    intro: 'This is a step positioned bottom.',
                    position: 'bottom'
                },
                {
                    element: '#section5',
                    intro: 'This is a step without position set.'
                },
                {
                    intro: 'This is a step which is not attached to any element.'
                }
            ];

            window.autoPositioningIntroSteps = [
                {
                    element: '#section1',
                    intro: 'This is a step with a big description that should be displayed as positioned left, but there is not enough space in left.',
                    position: 'left'
                },
                {
                    element: '#section2',
                    intro: 'Positioned left too.',
                    position: 'left'
                },
                {
                    element: '#section7',
                    intro: 'Positioned left too.',
                    position: 'left'
                }
            ];

            window.introStepsWithHtml = [
                {
                    element: '#section1',
                    intro: 'In this step we use the <b>bold text HTML</b> tag.'

                },
                {
                    element: '#section2',
                    intro: 'In this step we use the <i>italic text HTML</i> tag.'
                },
                {
                    element: '#section8',
                    intro: 'As <b>you</b> <u>already</u> <i>seen</i> <sub>you</sub> <sup>can</sup> use any HTML tag you want inside a step. <i class="fa fa-smile-o" aria-hidden="true"></i>'
                }
            ];

            window.introHints = [
                {
                    element: '#section1',
                    hint: 'This is a hint with position left.',
                    position: 'left'
                },
                {
                    element: '#section2',
                    hint: 'This is a hint with position right.',
                    position: 'right'
                },
                {
                    element: '#section3',
                    hint: 'This is a hint with position top.',
                    position: 'top'
                },
                {
                    element: '#section4',
                    hint: 'This is a hint with hintPosition top-left.',
                    hintPosition: 'top-left'
                },
                {
                    element: '#section5',
                    hint: 'This is a hint with hintPosition top-middle and position left.',
                    hintPosition: 'top-middle',
                    position: 'left'
                },
                {
                    element: '#section6',
                    hint: 'This is a hint with hintPosition top-right and position right.',
                    hintPosition: 'top-right',
                    position: 'right'
                },
                {
                    element: '#section7',
                    hint: 'This is a hint with hintPosition bottom-right and position right.',
                    hintPosition: 'bottom-right',
                    position: 'right'
                },
                {
                    element: '#section8',
                    hint: 'This is a hint without any position set.'
                }
            ];
        }

        function setIntroJsOptions(options) {
            var intro = introJs();
            intro.setOptions(options);
            return intro;
        }

        function startIntroJs(options) {
            options.nextLabel = '<i class="fa fa-angle-right" aria-hidden="true"></i>';
            options.prevLabel = '<i class="fa fa-angle-left" aria-hidden="true"></i>';

            setIntroJsOptions(options).start();
        }

        function addHintsForIntroJs(options) {
            setIntroJsOptions(options).addHints();
        }


    });
</script>
<!-- DOCUMENT-READY:End -->

</body>
</html>
