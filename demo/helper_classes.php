<!DOCTYPE html>
<html lang="en" class="js">
    <head>

        <title>Layout - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
        <?php include_once "modules/_mod_top_include.php"?>
        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <link rel="stylesheet" href="../dist/plugins/prism/prism.min.css">

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
                                <p><b>CSS Components</b></p>
                            </div>
                        </div>
                        <section id="boilerplate" class="pad-top-40">
                            <div class="panel">
                                <div class="panel-body">

                                    <h2><strong>Custom helper classes</strong></h2>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <p><strong>Margin</strong></p>
                                            <ul>
                                                <li>no-margin</li>
                                                <li>no-margin-top</li>
                                                <li>no-margin-bottom</li>
                                                <li>no-margin-top-bottom</li>
                                                <li>no-margin-left-right</li>
                                                <li class=" mg-top-10"><strong>From 5 to 5</strong>
                                                    <ul class="no-padding-top pad-15">
                                                        <li>mg-top-[5 ... 50]</li>
                                                        <li>mg-btm-[5 ... 50]</li>
                                                        <li>mg-left-right-[5 ... 50]</li>
                                                        <li>mg-sep-[5 ... 50]</li>
                                                        <li>mg-[5 ... 50]</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <p><strong>Padding</strong></p>
                                            <ul>
                                                <li>no-padding</li>
                                                <li>no-padding-top</li>
                                                <li>no-padding-bottom</li>
                                                <li>no-padding-top-bottom</li>
                                                <li>no-padding-left-right</li>
                                                <li class=" mg-top-10"><strong>From 5 to 5</strong>
                                                    <ul class="no-padding-top pad-15">
                                                        <li>pad-top-[5 ... 50]</li>
                                                        <li>pad-btm-[5 ... 50]</li>
                                                        <li>pad-left-right-[5 ... 50]</li>
                                                        <li>pad-sep-[5 ... 50]</li>
                                                        <li>pad-[5 ... 50]</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <p><strong>Border</strong></p>
                                            <ul>
                                                <li>no-border</li>
                                                <li>no-border-top</li>
                                                <li>no-border-bottom</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <p><strong>Width</strong></p>
                                            <ul>
                                                <li>width-[10 ... 100]<br><small>(from 10 to 10, as percentage)</small></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <p><strong>Font</strong></p>
                                            <ul>
                                                <li>font-size-[20 ... 200]<br><small>(from 20 to 20, as percentage)</small></li>
                                            </ul>
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
        <script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
        <script src="../dist/js/demo_helpers.js"></script>

        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <script src="../dist/plugins/prism/prism.min.js"></script>
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">
            $(document).ready(function () {
                console.log('Ready, Captain!');

                demoHelpers();
            });
        </script>
        <!-- DOCUMENT-READY:End -->

    </body>
</html>