<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Plugins | Photon - The Superfast, Supersimple UI Kit</title>
        <meta name="description" content="Photon - The superfast, supersimple UI Kit" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="eMAG CORE UI Team">

        <!-- The favicon -->
        <?php include_once "modules/_mod_favicon.php"?>

        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <link rel="stylesheet" href="../dist/plugins/prism/prism.min.css">

        <!-- PLUGIN: Magnific -->
        <link rel="stylesheet" href="../dist/plugins/magnific/magnific.min.css">

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
                        <div class="jumbotron">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="container-fluid pad-sep-60">
                                        <h1>PHOTON - AJAX Modals</h1>
                                        <p>The lightning-fast, modular, mobile-friendly admin template.</p>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <section id="summernoteStandard" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Photon AJAX Modals</strong></h4>
                                            <p><strong>Works great with the standard Bootstrap version</strong></p>
                                            <div class="pad-sep-20">
                                                <button id="ajax_modal_start" type="button" class="btn btn-primary">Show me an ajax modal.</button>
                                            </div>
                                        </div>
                                        <div class="show-panel-example">                                       
                                            <div class="show-panel-footer">
                                                <pre class="language-javascript"><code class="language-javascript">
                                                    var modalTest = new PhotonModal({
                                                        id: 'testModal',
                                                        title: 'This is an AJAX modal',
                                                        content: modalContent,
                                                        size: 'default',
                                                        type: 'preview',
                                                        buttons: {
                                                            save: {
                                                                label: 'Wow, much save',
                                                                class: 'btn-success',
                                                                icon: 'fa fa-check',
                                                                closeModal: true
                                                            },
                                                            cancel: {
                                                                label: 'Very cancel',
                                                                class: 'btn-default',
                                                                icon: 'fa fa-times',
                                                                closeModal: true
                                                            }
                                                        }
                                                    }); 
                                                </code></pre>
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
        <div id="popSpace"></div>
        <!-- POPUPS:End -->
        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>

        <!-- PLUGIN: This script file helps display demo code. Don't add it everywhere -->
        <script src="../dist/js/demo_helpers.js"></script>

        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <script src="../dist/plugins/prism/prism.min.js"></script>

        <!--MAIN SCRIPT-->
        <script src="../dist/js/main_script.min.js"></script>

        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->
        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">
            var modalContent = '<div class="pad-btm-20 text-center">This modal can contain any kind of info.<br>Check out the code documentation on the main page.</div><div class="embed-responsive embed-responsive-16by9"><iframe width="560" height="315" src="https://www.youtube.com/embed/HL1UzIK-flA" allowfullscreen=""></iframe></div>';
            var modalTest = new PhotonModal({
                id: 'testModal',
                title: 'This is an AJAX modal',
                content: modalContent,
                size: 'default',
                type: 'preview',
                buttons: {
                    save: {
                        label: 'Wow, much save',
                        class: 'btn-success',
                        icon: 'fa fa-check',
                        closeModal: true
                    },
                    cancel: {
                        label: 'Very cancel',
                        class: 'btn-default',
                        icon: 'fa fa-times',
                        closeModal: true
                    }
                }
            });      
            $(document).ready(function () {
                console.log('Ready, Captain!');

                demoHelpers();  //Requires demo_helpers.js

                showcasing(); //Requires demo_helpers.js, prism.min.js and prism.min.css
                
                $('#ajax_modal_start').on('click', function(){
                    modalTest.show();
                });
            });
        </script>
        <!-- DOCUMENT-READY:End -->
    </body>
</html>