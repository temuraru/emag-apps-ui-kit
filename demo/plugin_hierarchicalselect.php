<!DOCTYPE html>
<html lang="en" class="js">
<head>

    <title>JS Components - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php"?>
    <link rel="stylesheet" href="../dist/plugins/css3spinners/css3-spinners.1.2.2.min.css">
    <link rel="stylesheet" href="../dist/plugins/hierarchicalselect/hierarchicalselect.min.css">
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
                        <p><b>Hierarchical select</b></p>
                    </div>
                </div>
                <section class="pad-top-40">
                    <div class="show-panel">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>Hierarchical select</strong></h4>

                            <div class="form-group">
                                <label for="hierarchical_select">Categories</label>
                                <div class="hide-with-opacity">
                                    <select id="hierarchical_select" name="hierarchical_select"></select>
                                </div>
                                <div class="row hierarchical-container">
                                    <div class="col-sm-12">
                                        <div id="id_hierarchical_select"></div>
                                    </div>
                                </div>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sed ante non felis accumsan egestas eu sed libero. Etiam finibus arcu id mollis tincidunt. Proin nec ultrices est. Donec porta luctus arcu, ac blandit augue ultricies ac. Maecenas quis dictum libero. Vivamus euismod non ligula sed euismod. Donec porta, ante in porta hendrerit, sapien ipsum tristique elit, sit amet condimentum nisl lectus in tortor. Fusce at mi a augue pellentesque posuere. Sed quis arcu mattis, efficitur libero imperdiet, gravida nibh. Aenean vitae condimentum nisl. Vestibulum elementum laoreet hendrerit. Etiam vehicula sodales quam, ac convallis ligula porttitor scelerisque. Pellentesque elit ex, eleifend quis tincidunt eget, vestibulum eu dui. Ut pulvinar iaculis porta. Quisque at auctor lectus.</p>
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
<script src="../dist/js/lib/jquery-ui.1.11.4.min.js"></script>
<script src="../dist/js/main_script.min.js"></script>
<script src="../dist/plugins/hierarchicalselect/hierarchicalselect.min.js"></script>
<script src="../dist/js/demo_helpers.js"></script>
<!-- SCRIPTS:End -->

<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
    $(document).ready(function () {
        console.log('Ready, Captain!');

        demoHelpers();  // Require demo_helpers.js

        $('#id_hierarchical_select').HierarchicalSelect({
            data: {
                0: [
                    {'key':1512,	'title':'AC',	                        'folder':true,	'selected':false},
                    {'key':2097,	'title':'AC Others',	                'folder':true,	'selected':false},
                    {'key':1453,	'title':'Auto Parts',	                'folder':true,	'selected':false},
                    {'key':1517,	'title':'AV & HiFi',	                'folder':true,	'selected':false},
                    {'key':357,	    'title':'Beauty',	                    'folder':true,	'selected':false}
                ]
            },
            select: '#hierarchical_select',
            ajaxRoute: 'http://iv1.photon-power.local/emag-apps-ui-kit/demo/hierarchicalselect_api.php'
        });
    });
</script>
<!-- DOCUMENT-READY:End -->

</body>
</html>