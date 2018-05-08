<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <title>Plugins - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php"?>

    <!-- PLUGIN: DateTimePicker -->
    <link rel="stylesheet" href="../dist/plugins/datetimepicker/bootstrap-datetimepicker.4.17.47.min.css" data-dependency-name="datetimepicker_css">
    <!-- PLUGIN: DateRangePicker -->
    <link rel="stylesheet" href="../dist/plugins/daterangepicker/daterangepicker.min.css" data-dependency-name="daterangepicker_css">

    <?php include_once "modules/_mod_top_include.php"?>
</head>
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
                        <p><b>Date & Time</b></p>
                    </div>
                </div>
                <section id="datePicker" class="pad-top-40">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>Date picker</strong></h2>
                            <div class="row">
                                <div class="col-sm-12 mg-top-20">

                                        <div class="alert alert-info no-margin-bottom" role="alert">
                                            <p><i class="fa fa-info-circle"></i>Based on the bootstrap datepicker plugin with documentation on <a href="http://eonasdan.github.io/bootstrap-datetimepicker/" class="alert-link">http://eonasdan.github.io/bootstrap-datetimepicker/</a></p>
                                        </div>

                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Simple Date Picker</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#simple_date_picker" aria-expanded="false" aria-controls="simple_date_picker"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="simple_date_picker">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#simple_date_picker_html_source" aria-controls="simple_date_picker_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#simple_date_picker_js_source" aria-controls="simple_date_picker_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#simple_date_picker_css_source" aria-controls="simple_date_picker_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="simple_date_picker_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="simple_date_picker_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="simple_date_picker_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,moment_source,datetimepicker_source,datetimepicker_en_source,bootstrap_date_init,datetimepicker_css">
                                            <div class="form-group">
                                                <label for="bootstrap_date"></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="bootstrap_date" id="bootstrap_date" placeholder="Enter a date" aria-describedby="basic-addon1">
                                                    <div class="input-group-addon cursor-pointer" id="basic-addon1"><i class="fa fa-calendar-o"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Time Picker</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#time_picker" aria-expanded="false" aria-controls="time_picker"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="time_picker">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#time_picker_html_source" aria-controls="time_picker_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#time_picker_js_source" aria-controls="time_picker_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#time_picker_css_source" aria-controls="time_picker_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="time_picker_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="time_picker_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="time_picker_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,moment_source,datetimepicker_source,datetimepicker_en_source,bootstrap_time_init,datetimepicker_css">
                                            <div class="form-group">
                                                <label for="bootstrap_time"></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="bootstrap_time" id="bootstrap_time" placeholder="Enter the hour or resurrection" aria-describedby="basic-addon3">
                                                    <div class="input-group-addon cursor-pointer" id="basic-addon3"><i class="fa fa-clock-o"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Date/Time Picker</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#date_time_picker" aria-expanded="false" aria-controls="date_time_picker"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="date_time_picker">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#date_time_picker_html_source" aria-controls="date_time_picker_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#date_time_picker_js_source" aria-controls="date_time_picker_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#date_time_picker_css_source" aria-controls="date_time_picker_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="date_time_picker_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="date_time_picker_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="date_time_picker_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,moment_source,datetimepicker_source,datetimepicker_en_source,bootstrap_date_time_init,datetimepicker_css">
                                            <div class="form-group">
                                                <label for="bootstrap_multiple_date"></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="bootstrap_time_date"  id="bootstrap_time_date" placeholder="Enter date and time" aria-describedby="basic-addon2">
                                                    <div class="input-group-addon cursor-pointer" id="basic-addon2"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Date Range Picker</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#boostrap_date_range" aria-expanded="false" aria-controls="boostrap_date_range"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="boostrap_date_range">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#boostrap_date_range_html_source" aria-controls="boostrap_date_range_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#boostrap_date_range_js_source" aria-controls="boostrap_date_range_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#boostrap_date_range_css_source" aria-controls="boostrap_date_range_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="boostrap_date_range_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="boostrap_date_range_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="boostrap_date_range_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,moment_source,datetimepicker_source,datetimepicker_en_source,boostrap_date_range_init,datetimepicker_css">
                                            <div class="form-group">
                                                <label for="range_bootstrap_date"></label>
                                                <div class="input-daterange input-group">
                                                    <input type="text" class="form-control" id="datepicker_start" placeholder="Enter the start date">
                                                    <span class="input-group-addon">to</span>
                                                    <input type="text" class="form-control" id="datepicker_end" placeholder="Enter the end date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Date/Time Range Picker</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#boostrap_date_time_range" aria-expanded="false" aria-controls="boostrap_date_time_range"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="boostrap_date_time_range">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#boostrap_date_time_range_html_source" aria-controls="boostrap_date_time_range_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#boostrap_date_time_range_js_source" aria-controls="boostrap_date_time_range_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#boostrap_date_time_range_css_source" aria-controls="boostrap_date_time_range_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="boostrap_date_time_range_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="boostrap_date_time_range_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="boostrap_date_time_range_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,moment_source,datetimepicker_source,datetimepicker_en_source,boostrap_date_time_range_init,datetimepicker_css">
                                            <div class="form-group">
                                                <label for="range_bootstrap_date"></label>
                                                <div class="input-daterange input-group">
                                                    <input type="text" class="form-control" id="datetimepicker_start" placeholder="Enter the start date and time">
                                                    <span class="input-group-addon">to</span>
                                                    <input type="text" class="form-control" id="datetimepicker_end" placeholder="Enter the end date and time">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <section id="dateRangePicker" class="pad-top-30">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>DateRangePicker.js</strong></h2>

                            <div class="row">
                                <div class="col-sm-12 mg-top-20">
                                    <div class="alert alert-info no-margin-bottom" role="alert">
                                        <p><i class="fa fa-info-circle"></i>You can familiarize yourself with more options and settings by checking out <a href="http://www.daterangepicker.com/" class="alert-link" target="_blank">http://www.daterangepicker.com/</a></p>
                                    </div>
                                </div>
                            </div>


                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Standard</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#date_range_picker" aria-expanded="false" aria-controls="date_range_picker"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="date_range_picker">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#date_range_picker_html_source" aria-controls="date_range_picker_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#date_range_picker_js_source" aria-controls="date_range_picker_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#date_range_picker_css_source" aria-controls="date_range_picker_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="date_range_picker_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="date_range_picker_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="date_range_picker_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,moment_source,daterangepicker_source,drp_init,daterangepicker_css">
                                            <form>
                                                <fieldset>
                                                    <legend class="sr-only">DateRangePicker example form</legend>
                                                    <div class="form-group">
                                                        <label for="daterangepicker_standard" class="control-label"></label>
                                                        <div class="input-group">
                                                            <input type="text" id="daterangepicker_standard" class="form-control" value="" />
                                                            <div class="input-group-addon cursor-pointer"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Standard with value</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#date_range_picker_with_value" aria-expanded="false" aria-controls="date_range_picker_with_value"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="date_range_picker_with_value">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#date_range_picker_with_value_html_source" aria-controls="date_range_picker_with_value_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#date_range_picker_with_value_js_source" aria-controls="date_range_picker_with_value_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#date_range_picker_with_value_css_source" aria-controls="date_range_picker_with_value_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="date_range_picker_with_value_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="date_range_picker_with_value_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="date_range_picker_with_value_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,moment_source,daterangepicker_source,drp_standard_with_value_init,daterangepicker_css">
                                            <form>
                                                <fieldset>
                                                    <legend class="sr-only">Example form</legend>
                                                    <div class="form-group">
                                                        <label for="daterangepicker_standard_with_value" class="control-label"></label>
                                                        <div class="input-group">
                                                            <input type="text" id="daterangepicker_standard_with_value" class="form-control" value="01/01/2018 - 22/10/2018" />
                                                            <div class="input-group-addon cursor-pointer"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Standard with format</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#date_range_picker_with_format" aria-expanded="false" aria-controls="date_range_picker_with_format"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="date_range_picker_with_format">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#date_range_picker_with_format_html_source" aria-controls="date_range_picker_with_format_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#date_range_picker_with_format_js_source" aria-controls="date_range_picker_with_format_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#date_range_picker_with_format_css_source" aria-controls="date_range_picker_with_format_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="date_range_picker_with_format_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="date_range_picker_with_format_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="date_range_picker_with_format_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,moment_source,daterangepicker_source,drp_standard_with_format_init,daterangepicker_css">
                                            <form>
                                                <fieldset>
                                                    <legend class="sr-only">Example form</legend>
                                                    <div class="form-group">
                                                        <label for="daterangepicker_standard_with_format" class="control-label"></label>
                                                        <div class="input-group">
                                                            <input type="text" id="daterangepicker_standard_with_format" class="form-control" value="" />
                                                            <div class="input-group-addon cursor-pointer"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Standard with predefined intervals</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#date_range_picker_predefined_intervals" aria-expanded="false" aria-controls="date_range_picker_predefined_intervals"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="date_range_picker_predefined_intervals">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#date_range_picker_predefined_intervals_html_source" aria-controls="date_range_picker_predefined_intervals_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#date_range_picker_predefined_intervals_js_source" aria-controls="date_range_picker_predefined_intervals_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#date_range_picker_predefined_intervals_css_source" aria-controls="date_range_picker_predefined_intervals_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="date_range_picker_predefined_intervals_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="date_range_picker_predefined_intervals_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="date_range_picker_predefined_intervals_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,moment_source,daterangepicker_source,drp_standard_with_predefined_intervals_init,daterangepicker_css">
                                            <form>
                                                <fieldset>
                                                    <legend class="sr-only">Example form</legend>
                                                    <div class="form-group">
                                                        <label for="daterangepicker_standard_with_predefined_intervals" class="control-label"></label>
                                                        <div class="input-group">
                                                            <input type="text" id="daterangepicker_standard_with_predefined_intervals" class="form-control" value="" />
                                                            <div class="input-group-addon cursor-pointer"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Standard with predefined intervals whitout calendars</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#drp_predefined_intervals_whitout_calendars" aria-expanded="false" aria-controls="drp_predefined_intervals_whitout_calendars"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="drp_predefined_intervals_whitout_calendars">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#drp_predefined_intervals_whitout_calendars_html_source" aria-controls="drp_predefined_intervals_whitout_calendars_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#drp_predefined_intervals_whitout_calendars_js_source" aria-controls="drp_predefined_intervals_whitout_calendars_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#drp_predefined_intervals_whitout_calendars_css_source" aria-controls="drp_predefined_intervals_whitout_calendars_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="drp_predefined_intervals_whitout_calendars_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="drp_predefined_intervals_whitout_calendars_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="drp_predefined_intervals_whitout_calendars_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,moment_source,daterangepicker_source,drp_standard_with_predefined_intervals_no_calendar_init,daterangepicker_css">
                                            <form>
                                                <fieldset>
                                                    <legend class="sr-only">Example form</legend>
                                                    <div class="form-group">
                                                        <label for="daterangepicker_standard_with_predefined_intervals_no_calendar" class="control-label"></label>
                                                        <div class="input-group">
                                                            <input type="text" id="daterangepicker_standard_with_predefined_intervals_no_calendar" class="form-control" value="" />
                                                            <div class="input-group-addon cursor-pointer"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>

                                        </div>
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

        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" data-dependency-name="jquery"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-3.2.1.min.js\">"+"<"+"/script>")</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>

        <!-- PLUGIN: moment.js -->
        <script src="../dist/plugins/datetimepicker/moment.2.10.6.min.js" data-dependency-name="moment_source"></script>
        <!-- PLUGIN: DateTimePicker -->
        <script src="../dist/plugins/datetimepicker/bootstrap-datetimepicker.4.17.47.min.js" data-dependency-name="datetimepicker_source"></script>
        <script src="../dist/plugins/datetimepicker/locales/bootstrap-datetimepicker.min.en.js" data-dependency-name="datetimepicker_en_source"></script>
        <!-- PLUGIN: DateRangePicker -->
        <script src="../dist/plugins/daterangepicker/daterangepicker.min.js" data-dependency-name="daterangepicker_source"></script>

        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <script src="../dist/plugins/prism/prism.min.js"></script>

        <script src="../dist/js/main_script.min.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">
            $(document).ready(function () {
                demoHelpers();  // Require demo_helpers.js
                showPageCode();
            });
        </script>

        <script type="text/javascript" data-dependency-name="bootstrap_date_init">
            $(document).ready(function () {
                $('#bootstrap_date').datetimepicker({format : 'DD/MM/YYYY' })
                .next().on('click', function() {
                    $(this).prev().focus();
                });
            });
        </script>

        <script type="text/javascript" data-dependency-name="bootstrap_date_time_init">
            $(document).ready(function () {
                $('#bootstrap_time_date').datetimepicker({})
                .next().on('click', function() {
                    $(this).prev().focus();
                });
            });
        </script>

        <script type="text/javascript" data-dependency-name="bootstrap_time_init">
            $(document).ready(function () {
                $('#bootstrap_time').datetimepicker({format : 'HH:mm'})
                .next().on('click', function() {
                    $(this).prev().focus();
                });
            });
        </script>

        <script type="text/javascript" data-dependency-name="boostrap_date_range_init">
            $(document).ready(function () {
                var datepickerRangeConfig = {
                    '#datepicker_start'  : {format : 'DD/MM/YYYY' },
                    '#datepicker_end'  : {format : 'DD/MM/YYYY',useCurrent: false}
                };

                for (var selector in datepickerRangeConfig) {
                    $(selector).datetimepicker(datepickerRangeConfig[selector]);
                }

                $("#datepicker_start").on("dp.change", function (e) {
                    $('#datepicker_end').data("DateTimePicker").minDate(e.date);
                });

                $("#datepicker_end").on("dp.change", function (e) {
                    $('#datepicker_start').data("DateTimePicker").maxDate(e.date);
                });
            });
        </script>

        <script type="text/javascript" data-dependency-name="boostrap_date_time_range_init">
            $(document).ready(function () {
                var datepickerRangeConfig = {
                    '#datetimepicker_start'  : {format : 'DD/MM/YYYY HH:mm'},
                    '#datetimepicker_end'  : {format : 'DD/MM/YYYY HH:mm', useCurrent: false}
                };

                for (var selector in datepickerRangeConfig) {
                    $(selector).datetimepicker(datepickerRangeConfig[selector]);
                }

                $("#datetimepicker_start").on("dp.change", function (e) {
                    $('#datetimepicker_end').data("DateTimePicker").minDate(e.date);
                });
                $("#datetimepicker_end").on("dp.change", function (e) {
                    $('#datetimepicker_start').data("DateTimePicker").maxDate(e.date);
                });
            });
        </script>

        <script type="text/javascript" data-dependency-name="drp_init">
            $(document).ready(function () {
                $('#daterangepicker_standard').daterangepicker({})
                .next().on('click', function() {
                    $(this).prev().focus();
                });
            });
        </script>

        <script type="text/javascript" data-dependency-name="drp_standard_with_value_init">
            $(document).ready(function () {
                $('#daterangepicker_standard_with_value').daterangepicker({})
                .next().on('click', function() {
                    $(this).prev().focus();
                });
            });
        </script>

        <script type="text/javascript" data-dependency-name="drp_standard_with_format_init">
            $(document).ready(function () {
                $('#daterangepicker_standard_with_format').daterangepicker({
                    timePicker: true,
                    timePicker24Hour: true,
                    locale: {
                        format: "YYYY-MM-DD HH:mm"
                    }
                })
                .next().on('click', function() {
                    $(this).prev().focus();
                });
            });
        </script>

        <script type="text/javascript" data-dependency-name="drp_standard_with_predefined_intervals_init">
            $(document).ready(function () {
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
                })
                .next().on('click', function() {
                    $(this).prev().focus();
                });
            });
        </script>

        <script type="text/javascript" data-dependency-name="drp_standard_with_predefined_intervals_no_calendar_init">
            $(document).ready(function () {
                $('#daterangepicker_standard_with_predefined_intervals_no_calendar').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()]
                    },
                    locale: {
                        format: 'YYYY-MM-DD'
                    }
                })
                .next().on('click', function() {
                $(this).prev().focus();
                });
            });
        </script>

        <!-- DOCUMENT-READY:End -->
</body>
</html>
