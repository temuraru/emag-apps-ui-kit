<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <title>Plugins - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php"?>

    <!-- PLUGIN: DateTimePicker -->
    <link rel="stylesheet" href="../dist/plugins/datetimepicker/bootstrap-datetimepicker.4.17.37.min.css">
    <!-- PLUGIN: DateRangePicker -->
    <link rel="stylesheet" href="../dist/plugins/daterangepicker/daterangepicker.min.css">

    <?php include_once "modules/_mod_top_include.php"?>
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
                        <p><b>DateTime</b></p>
                    </div>
                </div>
                <section id="datePicker" class="pad-top-40">
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>Date picker</strong></h4>

                            <div class="alert alert-info" role="alert">
                                <p>
                                    <i class="fa fa-info-circle"></i>
                                    Based on the bootstrap datepicker plugin with documentation on <a href="http://eonasdan.github.io/bootstrap-datetimepicker/" class="alert-link">http://eonasdan.github.io/bootstrap-datetimepicker/</a>
                                </p>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6">
                                    <label for="bootstrap_date">Simple Date Picker</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="bootstrap_date" id="bootstrap_date" placeholder="Enter a date" aria-describedby="basic-addon1">
                                        <div class="input-group-addon cursor-pointer" id="basic-addon1"><i class="fa fa-calendar-o"></i></div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-lg-6">
                                    <label for="bootstrap_multiple_date">Date/Time Picker</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="bootstrap_time_date"  id="bootstrap_time_date" placeholder="Enter date and time" aria-describedby="basic-addon2">
                                        <div class="input-group-addon cursor-pointer" id="basic-addon2"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-lg-6">
                                    <label for="range_bootstrap_date">Date Range Picker</label>
                                    <div class="input-daterange input-group">
                                        <input type="text" class="form-control" id="datepicker_start" placeholder="Enter the start date">
                                        <span class="input-group-addon">to</span>
                                        <input type="text" class="form-control" id="datepicker_end" placeholder="Enter the end date">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-lg-6">
                                    <label for="range_bootstrap_date">Date/Time Range Picker</label>
                                    <div class="input-daterange input-group">
                                        <input type="text" class="form-control" id="datetimepicker_start" placeholder="Enter the start date and time">
                                        <span class="input-group-addon">to</span>
                                        <input type="text" class="form-control" id="datetimepicker_end" placeholder="Enter the end date and time">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-lg-6">
                                    <label for="bootstrap_time">Time Picker</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="bootstrap_time" id="bootstrap_time" placeholder="Enter the hour or resurrection" aria-describedby="basic-addon3">
                                        <div class="input-group-addon cursor-pointer" id="basic-addon3"><i class="fa fa-clock-o"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="dateRangePicker" class="pad-top-20">
                    <div class="show-panel">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>DateRangePicker.js</strong></h4>
                            <p><strong>Standard install</strong></p>
                            <p>You can familiarize yourself with more options and settings by checking out <a href="http://www.daterangepicker.com/" target="_blank">http://www.daterangepicker.com/</a></p>
                        </div>
                        <div class="">
                            <div class="show-panel-body">
                                <form>
                                    <fieldset>
                                        <legend class="sr-only">DateRangePicker example form</legend>
                                        <div data-showcase="example">
                                            <div class="form-group">
                                                <label for="daterangepicker_standard" class="control-label">Standard</label>
                                                <div class="input-group">
                                                    <input type="text" id="daterangepicker_standard" class="form-control" value="" />
                                                    <div class="input-group-addon cursor-pointer"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                                <form>
                                    <fieldset>
                                        <legend class="sr-only">example form</legend>
                                        <div data-showcase="example">
                                            <div class="form-group">
                                                <label for="daterangepicker_standard_with_value" class="control-label">Standard with value</label>
                                                <div class="input-group">
                                                    <input type="text" id="daterangepicker_standard_with_value" class="form-control" value="10/10/2016 - 10/30/2016" />
                                                    <div class="input-group-addon cursor-pointer"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                                <form>
                                    <fieldset>
                                        <legend class="sr-only">example form</legend>
                                        <div data-showcase="example">
                                            <div class="form-group">
                                                <label for="daterangepicker_standard_with_format" class="control-label">Standard with format</label>
                                                <div class="input-group">
                                                    <input type="text" id="daterangepicker_standard_with_format" class="form-control" value="" />
                                                    <div class="input-group-addon cursor-pointer"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                                <form>
                                    <fieldset>
                                        <legend class="sr-only">example form</legend>
                                        <div data-showcase="example">
                                            <div class="form-group">
                                                <label for="daterangepicker_standard_with_predefined_intervals" class="control-label">Standard with predefined intervals</label>
                                                <div class="input-group">
                                                    <input type="text" id="daterangepicker_standard_with_predefined_intervals" class="form-control" value="" />
                                                    <div class="input-group-addon cursor-pointer"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                                <form>
                                    <fieldset>
                                        <legend class="sr-only">example form</legend>
                                        <div data-showcase="example">
                                            <div class="form-group">
                                                <label for="daterangepicker_standard_with_predefined_intervals_no_calendar" class="control-label">Standard with predefined intervals whitout calendars</label>
                                                <div class="input-group">
                                                    <input type="text" id="daterangepicker_standard_with_predefined_intervals_no_calendar" class="form-control" value="" />
                                                    <div class="input-group-addon cursor-pointer"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
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

        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>

        <!-- PLUGIN: moment.js -->
        <script src="../dist/plugins/datetimepicker/moment.2.10.6.min.js"></script>
        <!-- PLUGIN: DateTimePicker -->
        <script src="../dist/plugins/datetimepicker/bootstrap-datetimepicker.4.17.37.min.js"></script>
        <script src="../dist/plugins/datetimepicker/locales/bootstrap-datetimepicker.min.en.js"></script>
        <!-- PLUGIN: DateRangePicker -->
        <script src="../dist/plugins/daterangepicker/daterangepicker.min.js"></script>

        <script src="../dist/js/main_script.min.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">
            $(document).ready(function () {
                console.log('Ready, Captain!');

                demoHelpers();  // Require demo_helpers.js

                initDatePickers();
                initDateRangePickers();

                function initDatePickers() {
                    var datepickerWithIconConfig = {
                        '#bootstrap_date'  : {format : 'DD/MM/YYYY' },
                        '#bootstrap_time_date'  : {},
                        '#bootstrap_time'  : {format : 'HH:mm'}
                    }
                    for (var selector in datepickerWithIconConfig) {
                        $(selector).datetimepicker(datepickerWithIconConfig[selector])
                            .next().on('click', function() {
                                $(this).prev().focus();
                            });
                    }

                    var datepickerRangeConfig = {
                        '#datepicker_start'  : {format : 'DD/MM/YYYY' },
                        '#datepicker_end'  : {format : 'DD/MM/YYYY',useCurrent: false},
                        '#datetimepicker_start'  : {format : 'DD/MM/YYYY HH:mm'},
                        '#datetimepicker_end'  : {format : 'DD/MM/YYYY HH:mm', useCurrent: false},
                    }
                    for (var selector in datepickerRangeConfig) {
                        $(selector).datetimepicker(datepickerRangeConfig[selector]);
                    }

                    $("#datepicker_start").on("dp.change", function (e) {
                        $('#datepicker_end').data("DateTimePicker").minDate(e.date);
                    });
                    $("#datepicker_end").on("dp.change", function (e) {
                        $('#datepicker_start').data("DateTimePicker").maxDate(e.date);
                    });

                    $("#datetimepicker_start").on("dp.change", function (e) {
                        $('#datetimepicker_end').data("DateTimePicker").minDate(e.date);
                    });
                    $("#datetimepicker_end").on("dp.change", function (e) {
                        $('#datetimepicker_start').data("DateTimePicker").maxDate(e.date);
                    });
                }

                function initDateRangePickers() {
                    var dateRangePickerConfig = {
                        '#daterangepicker_standard' : {},
                        '#daterangepicker_standard_with_value' : {},
                        '#daterangepicker_standard_with_format' : {
                            timePicker: true,
                            timePicker24Hour: true,
                            locale: {
                                format: "YYYY-MM-DD HH:mm"
                            }
                        },
                        '#daterangepicker_standard_with_predefined_intervals' : {
                            alwaysShowCalendars: true,
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                'Last 7 Days': [moment().subtract(6, 'days'), moment()]
                            },
                            locale: {
                                format: 'YYYY-MM-DD'
                            }
                        },
                        '#daterangepicker_standard_with_predefined_intervals_no_calendar' : {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                'Last 7 Days': [moment().subtract(6, 'days'), moment()]
                            },
                            locale: {
                                format: 'YYYY-MM-DD'
                            }
                        }
                    }
                    for (var selector in dateRangePickerConfig) {
                        $(selector).daterangepicker(dateRangePickerConfig[selector])
                            .next().on('click', function() {
                                $(this).prev().focus();
                            });
                    }
                }
            });
        </script>
        <!-- DOCUMENT-READY:End -->


</body>
</html>
