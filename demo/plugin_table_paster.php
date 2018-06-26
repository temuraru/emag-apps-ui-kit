<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <title>JS Components - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php" ?>
    <?php include_once "modules/_mod_top_include.php" ?>
</head>
<?php include_once "modules/_mod_browser_upgrade.php" ?>

<!-- HEADER:Start -->
<?php include_once "modules/_mod_header.php" ?>
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
                        <p><b>JS Components</b></p>
                    </div>
                </div>
                <section class="pad-top-40">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>Table paster</strong></h2>
                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Demo</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#table_paster_code" aria-expanded="false" aria-controls="table_paster_code"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="table_paster_code">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#table_paster_html_source" aria-controls="table_paster_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#table_paster_js_source" aria-controls="table_paster_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#table_paster_css_source" aria-controls="table_paster_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="table_paster_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="table_paster_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="table_paster_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>
                                <div data-showcase="example" data-dependencies="main_style,jquery,table_paster_source,table_paster_init">
                                    <div class="pad-15">
                                        <table class="table table-striped">
                                            <tr><th>First Name</th><th>Last Name</th><th>Username</th><th>Hobby</th><th>Nickname</th><th>Spiritual Animal</th></tr>
                                            <tr><td>Victor</td><td>Shade</td><td>imallseeing</td><td>Self-employed</td><td>The Vision</td><td>Dolphin</td></tr>
                                            <tr><td>Tony</td><td>Stark</td><td>ironman</td><td>Philantropist</td><td>Iron Man</td><td>Tiger</td></tr>
                                        </table>
                                    </div>
                                    <div class="pad-15">
                                        <label for="example_table_paster">Copy and paste the table here</label>
                                        <textarea class="form-control" name="tablepaster" id="example_table_paster" style="resize: vertical;min-height: 100px;" rows="3"></textarea>
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
<div id="pop_space"></div>
<!-- POPUPS:End -->

<!-- SCRIPTS:Start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" data-dependency-name="jquery"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-3.2.1.min.js\">"+"<"+"/script>")</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
<script src="../dist/plugins/table-paster/table-paster.min.js" data-dependency-name="table_paster_source"></script>
<script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
<script src="../dist/js/demo_helpers.js"></script>

<!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
<script src="../dist/plugins/prism/prism.min.js"></script>

<!-- BOTTOM SCRIPTS:Start -->
<?php include_once "modules/_mod_bottom_scripts.php"; ?>
<!-- BOTTOM SCRIPTS:End -->
<!-- SCRIPTS:End -->

<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
    $(document).ready(function () {
        console.log('Ready, Captain!');
        demoHelpers();  // Require demo_helpers.js
        showPageCode();
    });
</script>
<script type="text/javascript" data-dependency-name="table_paster_init">
    $(document).ready(function () {
        $('#example_table_paster').tablePaster({
            removeEmptyRows: true,
            appendClipboard: true
        });
    });
</script>
<!-- DOCUMENT-READY:End -->
</body>
</html>
