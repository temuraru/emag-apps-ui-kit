<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <title>JS Components - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
        <?php include_once "modules/_mod_top_include.php"?>
        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <link rel="stylesheet" href="../dist/plugins/prism/prism.min.css">
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
                        <div class="jumbotron content-header">
                            <div class="container-fluid">
                                <p>eMAG Apps UI KIT</p>
                                <p><b>AJAX Modals</b></p>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" data-dependency-name="jquery"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>
        <script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
        <script src="../dist/js/demo_helpers.js"></script>

        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <script src="../dist/plugins/prism/prism.min.js"></script>
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript" data-dependency-name="ajax_modal">
                var modalTest = new PhotonModal({
                    id: 'testModal',
                    title: 'This is an AJAX modal',
                    useAjax: true,
                    ajaxModalParams: {
                        method: 'POST',
                        url: '/emag-apps-ui-kit/demo/plugin_ajax_modals_modal_content.html'
                    },
                    size: 'default',
                    type: 'preview',
                    buttons: {
                        save: {
                            label: 'Save',
                            class: 'btn-success',
                            closeModal: true
                        },
                        cancel: {
                            label: 'Cancel',
                            class: 'btn-default',
                            closeModal: true
                        }
                    }
                });

                $('#ajax_modal_start').on('click', function(){
                    modalTest.show();
                });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                console.log('Ready, Captain!');

                demoHelpers();  // Require demo_helpers.js



                showPageCode();
            });
        </script>
        <!-- DOCUMENT-READY:End -->

    </body>
</html>