<!DOCTYPE html>
<html lang="en" class="js">
<head>

    <title>Layout - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php"?>
    <?php include_once "modules/_mod_top_include.php"?>
    <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
    <link rel="stylesheet" href="../dist/plugins/prism/prism.min.css">

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
                <div class="jumbotron content-header">
                    <div class="container-fluid">
                        <p>eMAG Apps UI KIT</p>
                        <p><b>Technical details</b></p>
                    </div>
                </div>
                <section id="boilerplate" class="pad-top-40">
                    <div class="panel">
                        <div class="panel-body">

                            <h2><strong>Plugins versions</strong></h2>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <table class="table table-bordered mg-top-30">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Version</th>
                                            <th>Observations</th>
                                            <th>Repository</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="js_components.php#js-block-ui">BlockUI</a></td>
                                            <td><span class="label label-info">2.70.0</span></td>
                                            <td></td>
                                            <td><a href="https://github.com/malsup/blockui" target="_blank">malsup / blockui</a></td>
                                        </tr>
                                        <tr>
                                            <td>Bootstrap multiselect</td>
                                            <td><span class="label label-info">0.9.15</span></td>
                                            <td></td>
                                            <td><a href="https://github.com/davidstutz/bootstrap-multiselect" target="_blank">davidstutz / bootstrap-multiselect</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="js_components.php#js-custom-notifications">Bootstrap notify</a></td>
                                            <td><span class="label label-info">3.1.5</span></td>
                                            <td><span class="label label-warning">modified</span></td>
                                            <td><a href="https://github.com/mouse0270/bootstrap-notify" target="_blank">mouse0270 / bootstrap-notify</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="plugin_stats.php#charts">Chart</a></td>
                                            <td><span class="label label-info">2.7.2</span></td>
                                            <td></td>
                                            <td><a href="https://github.com/chartjs/Chart.js" target="_blank">chartjs / Chart.js</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="js_complex_form_elements.php#jsChosenJsAutocomplete">Chosen</a></td>
                                            <td><span class="label label-info">1.8.7</span></td>
                                            <td><span class="label label-warning">modified</span></td>
                                            <td><a href="https://github.com/harvesthq/chosen" target="_blank">harvesthq / chosen</a></td>
                                        </tr>
                                        <tr>
                                            <td>Countdown<br>Using: Moment-timezone</td>
                                            <td><span class="label label-info">2.2.0</span><br><span class="label label-info">0.5.5</span></td>
                                            <td></td>
                                            <td><a href="" target="_blank"></a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="plugin_datetime.php#dateRangePicker">Daterangepicker</a></td>
                                            <td><span class="label label-info">2.1.27</span></td>
                                            <td><span class="label label-warning">modified</span></td>
                                            <td><a href="https://github.com/dangrossman/daterangepicker" target="_blank">dangrossman / daterangepicker</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="plugin_datetime.php">Datetimepicker</a></td>
                                            <td><span class="label label-info">4.17.47</span></td>
                                            <td><span class="label label-warning">modified</span></td>
                                            <td><a href="https://github.com/Eonasdan/bootstrap-datetimepicker" target="_blank">Eonasdan / bootstrap-datetimepicker</a></td>
                                        </tr>
                                        <tr>
                                            <td>Drop</td>
                                            <td><span class="label label-info">1.4.2</span></td>
                                            <td><span class="label label-warning">modified</span></td>
                                            <td><a href="https://github.com/HubSpot/drop" target="_blank">HubSpot / drop</a></td>
                                        </tr>
                                        <tr>
                                            <td>Dropzone</td>
                                            <td><span class="label label-info">5.5.0</span></td>
                                            <td></td>
                                            <td><a href="https://gitlab.com/meno/dropzone" target="_blank">meno / dropzone</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="plugin_fancytree.php">Fancytree</a><br>Using: jquery.fancytree.filter.js</td>
                                            <td><span class="label label-info">2.29.1</span><br><span class="label label-info">2.29.1</span></td>
                                            <td><span class="label label-warning">modified</span></td>
                                            <td><a href="https://github.com/mar10/fancytree" target="_blank">mar10 / fancytree</a></td>
                                        </tr>
                                        <tr>
                                            <td>Hierarchicalselect</td>
                                            <td><span class="label label-info">1.0.0</span></td>
                                            <td><span class="label label-default">eMAG Apps UI KIT plugin</span></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><a href="js_complex_form_elements.php#jsTextareaWithInputLimiter">Input Limiter</a></td>
                                            <td><span class="label label-info">1.3.1</span></td>
                                            <td></td>
                                            <td><a href="https://code.google.com/archive/p/jquery-inputlimiter/" target="_blank">jquery-inputlimiter</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="plugin_introjs.php">IntroJS</a></td>
                                            <td><span class="label label-info">2.9.3</span></td>
                                            <td><span class="label label-warning">modified</span></td>
                                            <td><a href="https://github.com/usablica/intro.js" target="_blank">usablica/intro.js</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="plugin_jqgrid.php">jqGrid</a></td>
                                            <td><span class="label label-info">5.3.1</span></td>
                                            <td><span class="label label-warning">modified</span></td>
                                            <td><a href="https://github.com/tonytomov/jqGrid" target="_blank">tonytomov / jqGrid</a></td>
                                        </tr>
                                        <tr>
                                            <td>jQuery</td>
                                            <td><span class="label label-info">3.3.1</span></td>
                                            <td></td>
                                            <td><a href="https://github.com/jquery/jquery" target="_blank">jquery / jquery</a></td>
                                        </tr>
                                        <tr>
                                            <td>jQuery Cookie</td>
                                            <td><span class="label label-info">1.4.1</span></td>
                                            <td></td>
                                            <td><a href="https://github.com/carhartl/jquery-cookie" target="_blank">carhartl / jquery-cookie</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="image_gallery.php">Magnific</a></td>
                                            <td><span class="label label-info">1.1.0</span></td>
                                            <td></td>
                                            <td><a href="https://github.com/dimsemenov/Magnific-Popup" target="_blank">dimsemenov / Magnific-Popup</a></td>
                                        </tr>
                                        <tr>
                                            <td>Nprogress</td>
                                            <td><span class="label label-info">0.2.0</span></td>
                                            <td></td>
                                            <td><a href="https://github.com/rstacruz/nprogress" target="_blank">rstacruz / nprogress</a></td>
                                        </tr>
                                        <tr>
                                            <td>Prism</td>
                                            <td><span class="label label-info">1.15.0</span></td>
                                            <td></td>
                                            <td><a href="https://github.com/PrismJS/prism" target="_blank">PrismJS / prism</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="js_complex_form_elements.php#jsSelectizeTagInput">Selectize</a></td>
                                            <td><span class="label label-info">0.12.6</span></td>
                                            <td><span class="label label-warning">modified</span></td>
                                            <td><a href="https://github.com/selectize/selectize.js" target="_blank">selectize / selectize.js</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="plugin_jqgrid.php#jqGrid-with-sticky-panels">Sticky-kit</a></td>
                                            <td><span class="label label-info">1.1.2</span></td>
                                            <td><span class="label label-warning">modified</span></td>
                                            <td><a href="https://github.com/leafo/sticky-kit" target="_blank">leafo / sticky-kit</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="plugin_wysiwyg.php">Summernote</a></td>
                                            <td><span class="label label-info">0.8.10</span></td>
                                            <td></td>
                                            <td><a href="https://github.com/summernote/summernote" target="_blank">summernote / summernote</a></td>
                                        </tr>
                                        <tr>
                                            <td>Tether</td>
                                            <td><span class="label label-info">1.4.4</span></td>
                                            <td></td>
                                            <td><a href="https://github.com/HubSpot/tether" target="_blank">HubSpot / tether</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="plugin_wizard.php">Wizard</a></td>
                                            <td><span class="label label-info">3.16.7</span></td>
                                            <td><span class="label label-warning">modified</span></td>
                                            <td><a href="https://github.com/ExactTarget/fuelux" target="_blank">ExactTarget / fuelux</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
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

<!-- SCRIPTS:Start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" data-dependency-name="jquery"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-3.3.1.min.js\">"+"<"+"/script>")</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
<script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
<script src="../dist/js/demo_helpers.js"></script>

<!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
<script src="../dist/plugins/prism/prism.min.js"></script>

<!-- BOTTOM SCRIPTS:Start -->
<?php include_once "modules/_mod_bottom_scripts.php"; ?>
<!-- BOTTOM SCRIPTS:End -->
<!-- SCRIPTS:End -->

<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
    $(document).ready(function () {
        console.log('Ready, Captain!');

        demoHelpers();
    });
</script>
<!-- DOCUMENT-READY:End -->

</body>
</html>
