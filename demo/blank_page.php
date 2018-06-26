<!DOCTYPE html>
<html lang="en" class="js">
<head>

    <title>Blank page - eMAG Apps UI KIT</title>
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
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed vestibulum lacus, a gravida libero. Aenean hendrerit non enim id pretium. Donec tincidunt quam sit amet nisi semper sodales. Phasellus in libero felis. Nunc eget mauris mi. Suspendisse risus nisi, lobortis ac odio a, facilisis mollis arcu. Proin dignissim mauris ut velit gravida, id sagittis libero consectetur. Donec in vestibulum orci. Donec pulvinar neque vitae enim elementum dignissim. Aenean volutpat iaculis ante a commodo. Donec eleifend ante nibh, a consequat purus ornare ut. Praesent justo nulla, iaculis id vestibulum eget, varius placerat dolor.
                </p>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-3.2.1.min.js\">"+"<"+"/script>")</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
<script src="../dist/js/main_script.min.js"></script>
<script src="../dist/js/demo_helpers.js"></script>

<!-- BOTTOM SCRIPTS:Start -->
<?php include_once "modules/_mod_bottom_scripts.php"; ?>
<!-- BOTTOM SCRIPTS:End -->
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
