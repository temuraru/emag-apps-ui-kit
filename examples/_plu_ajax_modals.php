<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <title>JS Components - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
    </head>
    <body>
        
        <?php include_once "modules/_mod_browser_upgrade.php"?>

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
                                        <h1>eMAG Apps Ui KIT - AJAX Modals</h1>
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
                                            <h4 class="text-primary"><strong>eMAG Apps UI KIT - AJAX Modals</strong></h4>
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
        
        <?php include_once "modules/_mod_js_footer.php"?>

    </body>
</html>