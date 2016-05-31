<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>503 | Photon - The Superfast, Supersimple UI Kit</title>
        <meta name="description" content="Photon - The superfast, supersimple UI Kit" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="eMAG CORE UI Team">

        <!-- The favicon -->
        <?php include_once "modules/_mod_favicon.php"?>

        <!-- PHOTON main styles -->
        <link rel="stylesheet" href="../dist/css/main_style.min.css">

        <!--[if lt IE 9]>
            <script src="../dist/js/lib/html5shiv.min.js"></script>
            <script src="../dist/js/lib/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 9]><body class="lt-ie9"> <![endif]-->
        <!--[if lt IE 9]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
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

        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>

        <!--MAIN SCRIPT-->
        <script src="../dist/js/main_script.min.js"></script>

        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->
        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">
            $(document).ready(function() {
                console.log('Ready, Captain!');
            });
        </script>
        <!-- DOCUMENT-READY:End -->
    </body>
</html>