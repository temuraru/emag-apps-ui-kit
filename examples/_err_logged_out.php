<!doctype html>
<html class="no-js" lang="">
    <head>
        <title>Logout - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
    </head>
    <body>
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
                        <div class="jumbotron">
                            <h1>Logged out.</h1>
                            <p>You have been automatically logged out of your account. Your station was inactive for more than <strong>15 minutes</strong> and we care deeply about your privacy.</p>
                            <div class="pad-sep-20">
                                <a href="authentication.php" type="button" class="btn btn-primary">Log back in</a>
                                <a href="overview.php" class="btn btn-default"><span>Go to homepage</span></a>
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

        <!-- POPUPS:Start -->
        <div id="popSpace"></div>
        <!-- POPUPS:End -->

        <?php include_once "modules/_mod_js_footer.php"?>

    </body>
</html>