<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <title>Plugins - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php"?>
    <?php include_once "modules/_mod_top_include.php"?>
</head>
<body>
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
                <section id="summernoteStandard" class="pad-top-40">
                    <div class="show-panel">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>IntroJS</strong></h4>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>


<script src="../dist/js/main_script.min.js"></script>
<script src="../dist/js/demo_helpers.js"></script>
<!-- SCRIPTS:End -->

<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
    $(document).ready(function () {
        console.log('Ready, Captain!');

        demoHelpers();  // Require demo_helpers.js


    });
</script>
<!-- DOCUMENT-READY:End -->

</body>
</html>