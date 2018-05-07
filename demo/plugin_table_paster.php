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
                                        <h4><b>Basic example</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed" data-toggle="collapse" href="#tabs" aria-expanded="false" aria-controls="tabs"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="pad-15">
                                    <table class="table table-striped">
                                        <tr><th>First Name</th><th>Last Name</th><th>Username</th><th>Hobby</th><th>Nickname</th><th>Spiritual Animal</th></tr>
                                        <tr><td>Victor</td><td>Shade</td><td>imallseeing</td><td>Self-employed</td><td>The Vision</td><td>Dolphin</td></tr>
                                        <tr><td>Tony</td><td>Stark</td><td>ironman</td><td>Philantropist</td><td>Iron Man</td><td>Tiger</td></tr>
                                    </table>
                                </div>
                                <div class="pad-15">
                                    <label for="example_table_paster">Copy and paste the table here</label>
                                    <textarea class="form-control" name="tablepaster" id="example_table_paster" cols="30" rows="10"></textarea>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" data-dependency-name="jquery"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>
<script src="../dist/plugins/tether/tether.min.js" data-dependency-name="tether_source"></script>
<script src="../dist/plugins/table-paster/table-paster.min.js" data-dependency-name="table_paster_source"></script>
<script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
<script src="../dist/js/demo_helpers.js"></script>
<!-- SCRIPTS:End -->
<!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
<script src="../dist/plugins/prism/prism.min.js"></script>
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
