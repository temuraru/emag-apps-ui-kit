<!doctype html>
<html class="no-js" lang="">
    <head>
        <title>503 - eMAG Apps UI KIT</title>
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
                            <h1>503 / Down for maintenance</h1>
                            <p>The site is down for maintenance. Please try again in a few minutes.</p>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="pad-btm-20">
                                    <p><strong>Try one of the following:</strong></p>
                                    <ul>
                                        <li>Wait 5 minutes and then refresh the page. Something went wrong somewhere.</li>
                                        <li><a href="#">Read the frequently asked questions.</a></li>
                                        <li><a href="#">Inform us about the problem</a></li>                                        
                                        <li>Give it a minute or two. We might be working on it!</li>
                                    </ul>
                                </div>
                                <div class="panel-controls">
                                    <a href="#" class="btn btn-primary" onclick="location.reload();">
                                        <i class="fa fa-refresh"></i>
                                        <span>Retry</span>
                                    </a>
                                </div>
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