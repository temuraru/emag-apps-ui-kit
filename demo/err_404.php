<!doctype html>
<html class="no-js error-page" lang="en">
    <head>
        <title>404 - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
        <?php include_once "modules/_mod_top_include.php"?>
    </head>
        <?php include_once "modules/_mod_browser_upgrade.php"?>

        <!-- HEADER:Start -->
            <?php include_once "modules/_mod_header_simple.php"?>
        <!-- HEADER:End -->

        <!-- PAGE:Start -->

            <div class="main-container" id="main-container">
                <div class="main-container-inner">

                <!-- SIDEBAR:Start -->
                <!-- SIDEBAR:End -->

                <!-- CONTENT:Start -->
                <div class="main-content">
                    <div class="page-content">
                        <div class="error-container">
                            <div class="error-number">404</div>
                            <div class="error-content">
                                <div class="error-title">This page has been moved or it doesn't exist!</div>
                                <div class="error-message">Please refresh the page or <a href="javascript:window.history.go(-1);">go back</a>.</div>
                            </div>
                        </div>
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
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-3.2.1.min.js\">"+"<"+"/script>")</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
        <script src="../dist/js/main_script.min.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">
            $(document).ready(function () {
                console.log('Ready, Captain!');
            });
        </script>
        <!-- DOCUMENT-READY:End -->

    </body>
</html>
