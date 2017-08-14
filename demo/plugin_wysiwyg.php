<!DOCTYPE html>
<html lang="en" class="js">
    <head>

        <title>Plugins - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
        
        <!-- PLUGIN: Summernote -->
        <link rel="stylesheet" href="../dist/plugins/summernote/summernote.min.css" data-dependency-name="summernote_css">
        
        <?php include_once "modules/_mod_top_include.php"?>

    </head>
        <?php include_once "modules/_mod_browser_upgrade.php"?>

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
                                <p><b>Wysiwyg editor</b></p>
                            </div>
                        </div>
                        <section id="summernoteStandard" class="pad-top-40">
                            <div class="show-panel code-example">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Summernote.js</strong></h2>

                                    <div class="row">
                                        <div class="col-sm-12 mg-top-20">
                                            <div class="alert alert-info no-margin-bottom" role="alert">
                                                <p><i class="fa fa-info-circle"></i>You can familiarize yourself with more options and settings by checking out <a href="http://summernote.org/" class="alert-link" target="_blank">summernote.org</a>. Additional plugin installed  <a href="https://github.com/StudioJunkyard/summernote-cleaner" class="alert-link" target="_blank">summernote-cleaner</a>.</p>
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
                                                <li role="presentation" class="active"><a href="#summernote-html-source" aria-controls="summernote-html" role="tab" data-toggle="tab">HTML</a></li>
                                                <li role="presentation"><a href="#summernote-js-source" aria-controls="summernote-js" role="tab" data-toggle="tab">JS</a></li>
                                                <li role="presentation"><a href="#summernote-css-source" aria-controls="summernote-css" role="tab" data-toggle="tab">CSS</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="summernote-html-source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                                <div role="tabpanel" class="tab-pane js-source" id="summernote-js-source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                                <div role="tabpanel" class="tab-pane css-source" id="summernote-css-source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,tether,summernote_source,summernote_standard_init,summernote_css">
                                                    <div id="summernote1">This is the infamous summernote. Check it out!</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-container">
                                        <div class="row flex-container code-header no-border-top">
                                            <div class="col-xs-8 module-description">
                                                <h4><b>Air mode</b></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#summernote-air" aria-expanded="false" aria-controls="summernote-air"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="summernote-air">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#summernote-air-html-source" aria-controls="summernote-air-html" role="tab" data-toggle="tab">HTML</a></li>
                                                <li role="presentation"><a href="#summernote-air-js-source" aria-controls="summernote-air-js" role="tab" data-toggle="tab">JS</a></li>
                                                <li role="presentation"><a href="#summernote-air-css-source" aria-controls="summernote-air-css" role="tab" data-toggle="tab">CSS</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="summernote-air-html-source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                                <div role="tabpanel" class="tab-pane js-source" id="summernote-air-js-source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                                <div role="tabpanel" class="tab-pane css-source" id="summernote-air-css-source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,tether,summernote_source,summernote_air_init,summernote_css">
                                                    <div id="summernote2">
                                                        <p>Bacon ipsum dolor amet laborum ullamco reprehenderit qui ut voluptate officia turducken corned beef andouille sint. Non consequat chicken shank ball tip, incididunt esse nostrud. Nostrud dolore ut veniam andouille pork belly. Turkey shankle magna pig aliquip. Fugiat bresaola tempor pork alcatra t-bone exercitation aliqua esse. Nisi flank pork chop t-bone aute non corned beef dolor doner quis sint. Fatback ut tongue leberkas eu pancetta nisi.</p>
                                                        <p>Ex bresaola landjaeger biltong labore. In pariatur consectetur, dolore pork rump ribeye. Beef adipisicing occaecat, excepteur brisket officia fatback porchetta id alcatra elit pastrami reprehenderit labore. Excepteur rump shank enim cupidatat biltong t-bone hamburger eu. Fatback meatloaf flank ut eu, officia meatball.</p>
                                                        <p>Irure ground round tempor, sed flank meatball incididunt cillum pork loin landjaeger picanha beef ribs. Tri-tip commodo beef ribs ea irure quis nostrud andouille beef biltong picanha shoulder sunt pork loin. Pork belly ribeye labore, corned beef tri-tip nulla id sausage pork loin biltong consequat. Pariatur dolore deserunt eiusmod pig velit rump. Rump flank beef ribs, consectetur sirloin salami pariatur sausage ground round dolor sunt. Aute jerky ribeye lorem, in pig reprehenderit aliquip pork sunt picanha ut doner.</p>
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

        <!-- POPUPS:Start -->
        <div data-dependency-name="pop_space">
            <!-- Div with id 'pop_space' must be inserted before the end of the body tag -->
            <div id="pop_space"></div>
        </div>
        <!-- POPUPS:End -->
        
        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" data-dependency-name="jquery"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>

        <script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
        <script src="../dist/js/demo_helpers.js"></script>

        <script src="../dist/plugins/tether/tether.min.js" data-dependency-name="tether"></script>
        <script src="../dist/plugins/summernote/summernote.min.js" data-dependency-name="summernote_source"></script>


        <!-- SCRIPTS:End -->

        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <script src="../dist/plugins/prism/prism.min.js"></script>

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">               
            $(document).ready(function () {
                demoHelpers();
                showPageCode();
            });
        </script>

        <script type="text/javascript" data-dependency-name="summernote_standard_init">
            $(document).ready(function () {
                $('#summernote1').summernote({
                    minHeight: 300,
                    dialogsInBody: true,
                    toolbar: [
                        ['cleaner',['cleaner']],
                        // [groupName, [list of button]]
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']]
                    ],
                    cleaner:{
                        notTime: 2400, // Time to display Notifications.
                        action: 'both', // both|button|paste 'button' only cleans via toolbar button, 'paste' only clean when pasting content, both does both options.
                        newline: '<br>', // Summernote's default is to use '<p><br></p>'
                        notStyle: 'position:absolute;top:0;left:0;right:0', // Position of Notification
                        icon: '<i class="note-icon">Clean HTML</i>',
                        keepHtml: false, // Remove all Html formats
                        keepOnlyTags: ['<p>', '<br>', '<ul>', '<li>', '<b>', '<strong>','<i>', '<a>'], // If keepHtml is true, remove all tags except these
                        keepClasses: false, // Remove Classes
                        badTags: ['style', 'script', 'applet', 'embed', 'noframes', 'noscript', 'html'], // Remove full tags with contents
                        badAttributes: ['style', 'start'] // Remove attributes from remaining tags
                    }
                });
            });
        </script>

        <script type="text/javascript" data-dependency-name="summernote_air_init">
            $(document).ready(function () {
                $('#summernote2').summernote({
                    dialogsInBody: true,
                    airMode: true
                });
            });
        </script>

            <!-- DOCUMENT-READY:End -->

    </body>
</html>