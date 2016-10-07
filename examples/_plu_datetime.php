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

    <!-- PLUGIN: DateRangePicker -->
    <link rel="stylesheet" href="../dist/plugins/daterangepicker/daterangepicker.min.css">

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
                                <h1>PHOTON - DateTime</h1>
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
                                    <h4 class="text-primary"><strong>DateRangePicker.js</strong></h4>
                                    <p><strong>Standard install</strong></p>
                                    <p>You can familiarize yourself with more options and settings by checking out <a href="http://www.daterangepicker.com/" target="_blank">http://www.daterangepicker.com/</a></p>
                                </div>
                                <div class="show-panel-example">
                                    <div class="show-panel-body">
                                        <form>
                                            <fieldset>
                                                <legend class="sr-only">DateRangePicker example form</legend>
                                                <div data-showcase="example">
                                                    <div class="form-group">
                                                        <label for="daterangepicker_standard" class="control-label">DateRangePicker Standard</label>
                                                        <div class="input-group">
                                                            <input type="text" id="daterangepicker_standard" class="form-control" value="" />
                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="show-panel-footer">
                                        <pre class="language-markup"><code class="language-markup" data-showcase="code"></code></pre>
                                    </div>
                                </div>
                                <div class="show-panel-example">
                                    <div class="show-panel-body">
                                        <form>
                                            <fieldset>
                                                <legend class="sr-only">DateRangePicker example form</legend>
                                                <div data-showcase="example">
                                                    <div class="form-group">
                                                        <label for="daterangepicker_standard_with_value" class="control-label">DateRangePicker Standard with value</label>
                                                        <div class="input-group">
                                                            <input type="text" id="daterangepicker_standard_with_value" class="form-control" value="10/10/2016 - 10/30/2016" />
                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="show-panel-footer">
                                        <pre class="language-markup"><code class="language-markup" data-showcase="code"></code></pre>
                                    </div>
                                </div>
                                <div class="show-panel-example">
                                    <div class="show-panel-body">
                                        <form>
                                            <fieldset>
                                                <legend class="sr-only">DateRangePicker example form</legend>
                                                <div data-showcase="example">
                                                    <div class="form-group">
                                                        <label for="daterangepicker_standard_with_format" class="control-label">DateRangePicker Standard with format</label>
                                                        <div class="input-group">
                                                            <input type="text" id="daterangepicker_standard_with_format" class="form-control" value="" />
                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="show-panel-footer">
                                        <pre class="language-markup"><code class="language-markup" data-showcase="code"></code></pre>
                                    </div>
                                </div>
                                <div class="show-panel-example">
                                    <div class="show-panel-body">
                                        <form>
                                            <fieldset>
                                                <legend class="sr-only">DateRangePicker example form</legend>
                                                <div data-showcase="example">
                                                    <div class="form-group">
                                                        <label for="daterangepicker_standard_with_predefined_intervals" class="control-label">DateRangePicker Standard with predefined intervals</label>
                                                        <div class="input-group">
                                                            <input type="text" id="daterangepicker_standard_with_predefined_intervals" class="form-control" value="" />
                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="show-panel-footer">
                                        <pre class="language-markup"><code class="language-markup" data-showcase="code"></code></pre>
                                    </div>
                                </div>
                                <div class="show-panel-example">
                                    <div class="show-panel-body">
                                        <form>
                                            <fieldset>
                                                <legend class="sr-only">DateRangePicker example form</legend>
                                                <div data-showcase="example">
                                                    <div class="form-group">
                                                        <label for="daterangepicker_standard_with_predefined_intervals_no_calendar" class="control-label">DateRangePicker Standard with predefined intervals whitout calendars</label>
                                                        <div class="input-group">
                                                            <input type="text" id="daterangepicker_standard_with_predefined_intervals_no_calendar" class="form-control" value="" />
                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="show-panel-footer">
                                        <pre class="language-markup"><code class="language-markup" data-showcase="code"></code></pre>
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

<!-- POPUPS:End -->
<!-- SCRIPTS:Start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>

<!-- PLUGIN: This script file helps display demo code. Don't add it everywhere -->
<script src="../dist/js/demo_helpers.js"></script>

<!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
<script src="../dist/plugins/prism/prism.min.js"></script>

<!-- PLUGIN: moment.js -->
<script src="../dist/plugins/datetimepicker/moment.2.10.6.min.js"></script>

<!-- PLUGIN: DateRangePicker -->
<script src="../dist/plugins/daterangepicker/daterangepicker.min.js"></script>

<!--MAIN SCRIPT-->
<script src="../dist/js/main_script.min.js"></script>
<!-- SCRIPTS:End -->
<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
    $(document).ready(function () {
        console.log('Ready, Captain!');

        demoHelpers();  //Requires demo_helpers.js

        showcasing(); //Requires demo_helpers.js, prism.min.js and prism.min.css

        $('#daterangepicker_standard').daterangepicker();
        $('#daterangepicker_standard_with_value').daterangepicker();
        $('#daterangepicker_standard_with_format').daterangepicker({
            timePicker: true,
            timePicker24Hour: true,
            locale: {
                format: "YYYY-MM-DD HH:mm"
            }
        });
        $('#daterangepicker_standard_with_predefined_intervals').daterangepicker({
            alwaysShowCalendars: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()]
            },
            locale: {
                format: 'YYYY-MM-DD'
            }
        });$('#daterangepicker_standard_with_predefined_intervals_no_calendar').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()]
            },
            locale: {
                format: 'YYYY-MM-DD'
            }
        });
    });
</script>
<!-- DOCUMENT-READY:End -->
</body>
</html>