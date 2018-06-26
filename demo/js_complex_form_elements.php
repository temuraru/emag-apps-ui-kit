<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <title>Complex form elements - eMAG Apps UI KIT</title>

    <link rel="stylesheet" href="../dist/css/lib/jquery-ui-custom.1.11.4.min.css" data-dependency-name="jquery_ui_css">
    <link rel="stylesheet" href="../dist/plugins/selectize/selectize-0.12.0.min.css" data-dependency-name="selectize_css">
    <link rel="stylesheet" href="../dist/plugins/chosen/jQuery.chosen.min.css" data-dependency-name="chosen_css">

    <?php include_once "modules/_mod_meta.php"?>
    <?php include_once "modules/_mod_top_include.php"?>
</head>
<?php include_once "modules/_mod_browser_upgrade.php"?>

<!-- HEADER:Start -->
<?php include_once "modules/_mod_header.php" ?>
<!-- HEADER:End -->

<!-- PAGE:Start -->
<div class="main-container" id="main-container">
    <div class="main-container-inner">
        <!-- SIDEBAR:Start -->
        <?php include_once "modules/_mod_sidebar.php" ?>
        <!-- SIDEBAR:End -->
        <!-- CONTENT:Start -->
        <div class="main-content">
            <section class="page-content">
                <div class="jumbotron content-header">
                    <div class="container-fluid">
                        <p>eMAG Apps UI KIT</p>
                        <p><b>Complex form elements</b></p>
                    </div>
                </div>
                <section id="javascriptEnhancements" class="pad-top-40">
                    <div class="show-panel">
                        <div class="show-panel-body">
                            <h2><strong>Javascript Components</strong></h2>
                            <p><strong>These elements need both the main stylesheet and the main javascript file
                                    in order to be displayed and function properly.</strong></p>
                        </div>
                    </div>
                </section>

                <section class="pad-top-30">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>Masked inputs</strong></h2>

                            <div class="row">
                                <div class="col-sm-12 mg-top-20">
                                    <div class="alert alert-info" role="alert">
                                        <p><i class="fa fa-info-circle"></i>
                                            Based on the masked input plugin with documentation on <a href="http://digitalbush.com/projects/masked-input-plugin/" class="alert-link">http://digitalbush.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Custom date format</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#masked_custom_date" aria-expanded="false" aria-controls="masked_custom_date"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="masked_custom_date">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#masked_custom_date_html_source" aria-controls="masked_custom_date_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#masked_custom_date_js_source" aria-controls="masked_custom_date_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#masked_custom_date_css_source" aria-controls="masked_custom_date_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="masked_custom_date_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="masked_custom_date_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="masked_custom_date_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,masked_custom_date_init,masked_input_source">
                                            <div class="form-group">
                                                <label for="date_example"></label>
                                                <input type="text" class="form-control" name="date_example" id="date_example">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Phone format</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#masked_phone_format" aria-expanded="false" aria-controls="masked_phone_format"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="masked_phone_format">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#masked_phone_format_html_source" aria-controls="masked_phone_format_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#masked_phone_format_js_source" aria-controls="masked_phone_format_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#masked_phone_format_css_source" aria-controls="masked_phone_format_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="masked_phone_format_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="masked_phone_format_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="masked_phone_format_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,masked_phone_format_init,masked_input_source">
                                            <div class="form-group">
                                                <label for="phone_example"></label>
                                                <input type="text" class="form-control" name="phone_example" id="phone_example">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Serial number format</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#masked_serial_number" aria-expanded="false" aria-controls="masked_serial_number"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="masked_serial_number">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#masked_serial_number_html_source" aria-controls="masked_serial_number_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#masked_serial_number_js_source" aria-controls="masked_serial_number_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#masked_serial_number_css_source" aria-controls="masked_serial_number_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="masked_serial_number_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="masked_serial_number_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="masked_serial_number_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,masked_serial_number,masked_input_source,masked_serial_number_init">
                                            <div class="form-group">
                                                <label for="serial_example"></label>
                                                <input type="text" class="form-control" name="serial_example" id="serial_example">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Custom number formatting</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#masked_custom_number" aria-expanded="false" aria-controls="masked_custom_number"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="masked_custom_number">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#masked_custom_number_html_source" aria-controls="masked_custom_number_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#masked_custom_number_js_source" aria-controls="masked_custom_number_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#masked_custom_number_css_source" aria-controls="masked_custom_number_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="masked_custom_number_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="masked_custom_number_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="masked_custom_number_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,masked_custom_number_init,number_formatter_source">
                                            <div class="form-group">
                                                <label for="formatted_example"></label>
                                                <input type="text" class="form-control text-right" name="formatted_example" id="formatted_example">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section id="jsTextareaWithInputLimiter" class="pad-top-30">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>Textarea with input limiter</strong></h2>

                            <div class="row">
                                <div class="col-sm-12 mg-top-20">
                                    <div class="alert alert-info no-margin-bottom" role="alert">
                                        <p><i class="fa fa-info-circle"></i>
                                            Based on the masked input plugin with documentation on <a href="http://rustyjeans.com/jquery-plugins/input-limiter" class="alert-link">http://rustyjeans.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Message</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#textarea_with_input_limiter" aria-expanded="false" aria-controls="textarea_with_input_limiter"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="textarea_with_input_limiter">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#textarea_with_input_limiter_html_source" aria-controls="textarea_with_input_limiter_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#textarea_with_input_limiter_js_source" aria-controls="textarea_with_input_limiter_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#textarea_with_input_limiter_css_source" aria-controls="textarea_with_input_limiter_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="textarea_with_input_limiter_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="textarea_with_input_limiter_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="textarea_with_input_limiter_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,textarea_with_input_limiter_init,input_limiter_source">
                                            <div class="form-group form-limited-input">
                                                <label for="input_limiter"></label>
                                                <textarea id="input_limiter" name="input_limiter" class="form-control fixed-width-textarea" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section id="jsFileUpload" class="pad-top-30">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>File upload</strong></h2>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Style 1</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#file_upload_demo_1" aria-expanded="false" aria-controls="file_upload_demo_1"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="file_upload_demo_1">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#file_upload_demo_1_html_source" aria-controls="file_upload_demo_1_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#file_upload_demo_1_js_source" aria-controls="file_upload_demo_1_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#file_upload_demo_1_css_source" aria-controls="file_upload_demo_1_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="file_upload_demo_1_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="file_upload_demo_1_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="file_upload_demo_1_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery">
                                            <div class="form-group">
                                                <label for="testfile" class="btn btn-primary">
                                                    <i class="fa fa-upload"></i>
                                                    <span>Choose a file to upload</span>
                                                    <input type="file" name="testfile" id="testfile" class="form-input-control" data-multiple-caption="{count} files selected" multiple/>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Style 2</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#file_upload_demo_2" aria-expanded="false" aria-controls="file_upload_demo_2"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="file_upload_demo_2">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#file_upload_demo_2_html_source" aria-controls="file_upload_demo_2_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#file_upload_demo_2_js_source" aria-controls="file_upload_demo_2_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#file_upload_demo_2_css_source" aria-controls="file_upload_demo_2_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="file_upload_demo_2_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="file_upload_demo_2_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="file_upload_demo_2_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery">
                                            <div class="form-group">
                                                <label for="testfile2" class="btn btn-link">
                                                    <i class="fa fa-upload"></i><span>Choose a file to upload</span>
                                                    <input type="file" name="testfile2" id="testfile2" class="form-input-control" data-multiple-caption="{count} files selected" multiple/>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Style 3</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#file_upload_demo_3" aria-expanded="false" aria-controls="file_upload_demo_3"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="file_upload_demo_3">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#file_upload_demo_3_html_source" aria-controls="file_upload_demo_3_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#file_upload_demo_3_js_source" aria-controls="file_upload_demo_3_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#file_upload_demo_3_css_source" aria-controls="file_upload_demo_3_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="file_upload_demo_3_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="file_upload_demo_3_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="file_upload_demo_3_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" aria-label="..." placeholder="Add the product name">
                                                    <div class="input-group-btn">
                                                        <label for="testfile3" class="btn btn-default">
                                                            <i class="fa fa-upload"></i>
                                                            <span>Choose a file</span>
                                                            <input type="file" name="testfile3" id="testfile3" class="form-input-control" data-multiple-caption="{count} files selected" multiple/>
                                                        </label>
                                                        <button class="btn btn-default" type="button">Upload</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section id="jsSelectizeTagInput" class="pad-top-30">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>Selectize tag input</strong></h2>

                            <div class="row">
                                <div class="col-sm-12 mg-top-20">
                                    <div class="alert alert-info" role="alert">
                                        <p><i class="fa fa-info-circle"></i>
                                            Based on the selectize plugin with documentation on <a href="https://github.com/selectize/selectize.js" class="alert-link">https://github.com/selectize/selectize.js</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Text input</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#text_input" aria-expanded="false" aria-controls="text_input"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="text_input">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#text_input_html_source" aria-controls="text_input_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#text_input_js_source" aria-controls="text_input_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#text_input_css_source" aria-controls="text_input_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="text_input_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="text_input_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="text_input_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,selectize_init,selectize_source,selectize_css">
                                            <div class="form-group">
                                                <label for="selectize_example"></label>
                                                <input type="text" class="form-control" name="selectize_example" id="selectize_example" placeholder="Input a few tags">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section id="jsJQueryUIAutocomplete" class="pad-top-30">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>jQuery UI autocomplete</strong></h2>

                            <div class="row">
                                <div class="col-sm-12 mg-top-20">
                                    <div class="alert alert-info" role="alert">
                                        <p><i class="fa fa-info-circle"></i>
                                            Based on the jQuery UI library with documentation on <a href="https://jqueryui.com/" class="alert-link">https://jqueryui.com/</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Text input</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jquery_autocomplete" aria-expanded="false" aria-controls="jquery_autocomplete"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jquery_autocomplete">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jquery_autocomplete_html_source" aria-controls="jquery_autocomplete_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jquery_autocomplete_js_source" aria-controls="jquery_autocomplete_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jquery_autocomplete_css_source" aria-controls="jquery_autocomplete_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jquery_autocomplete_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jquery_autocomplete_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jquery_autocomplete_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jquery_ui,jquery_ui_css,jquery_autocomplete_init">
                                            <div class="form-group">
                                                <label for="autocomplete_example"></label>
                                                <input type="text" class="form-control" name="autocomplete_example" id="autocomplete_example" placeholder="Search for a car">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="jsJQueryUISliders" class="pad-top-30">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>jQuery UI sliders</strong></h2>

                            <div class="row">
                                <div class="col-sm-12 mg-top-20">
                                    <div class="alert alert-info" role="alert">
                                        <p><i class="fa fa-info-circle"></i>
                                            Based on the jQuery UI library with documentation on <a href="https://jqueryui.com/" class="alert-link">https://jqueryui.com/</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Text input</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jquery_ui_sliders" aria-expanded="false" aria-controls="jquery_ui_sliders"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jquery_ui_sliders">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jquery_ui_sliders_html_source" aria-controls="jquery_ui_sliders_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jquery_ui_sliders_js_source" aria-controls="jquery_ui_sliders_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jquery_ui_sliders_css_source" aria-controls="jquery_ui_sliders_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jquery_ui_sliders_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jquery_ui_sliders_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jquery_ui_sliders_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jquery_ui,jquery_ui_css,jquery_ui_sliders_init">
                                            <div id="slider_range_1"></div>
                                            <hr>
                                            <div id="slider_range_2" class="has-success"></div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <div id="vertical_slider_1"></div>
                                                </div>
                                                <div class="col-xs-2">
                                                    <div id="vertical_slider_2"></div>
                                                </div>
                                                <div class="col-xs-2">
                                                    <div id="vertical_slider_3"></div>
                                                </div>
                                                <div class="col-xs-2">
                                                    <div id="vertical_slider_4"></div>
                                                </div>
                                                <div class="col-xs-2">
                                                    <div id="vertical_slider_5"></div>
                                                </div>
                                                <div class="col-xs-2">
                                                    <div id="vertical_slider_6"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section id="jsJQueryNumericInput" class="pad-top-30">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>jQuery numeric input</strong></h2>
                            <div class="row">
                                <div class="col-sm-12 mg-top-20">
                                    <div class="alert alert-info" role="alert">
                                        <p><i class="fa fa-info-circle"></i>
                                            Based on the jQuery UI library with documentation on <a href="https://jqueryui.com/" class="alert-link">https://jqueryui.com/</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Default</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jquery_numeric_input" aria-expanded="false" aria-controls="jquery_numeric_input"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jquery_numeric_input">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jquery_numeric_input_html_source" aria-controls="jquery_numeric_input_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jquery_numeric_input_js_source" aria-controls="jquery_numeric_input_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jquery_numeric_input_css_source" aria-controls="jquery_numeric_input_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jquery_numeric_input_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jquery_numeric_input_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jquery_numeric_input_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jquery_ui,jquery_ui_css,jquery_spinner_init">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="spinner_example" id="spinner_example" placeholder="Tell me a number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section id="jsChosenJsAutocomplete" class="pad-top-30">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>Chosen.js autocomplete</strong></h2>
                            <div class="row">
                                <div class="col-sm-12 mg-top-20">
                                    <div class="alert alert-info" role="alert">
                                        <p>
                                            <i class="fa fa-info-circle"></i>
                                            Based on the chosen.js jQuery plugin with documentation on <a href="https://harvesthq.github.io/chosen/" class="alert-link">https://harvesthq.github.io/chosen/</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Autocomplete multiple</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#autocomplete_multiple" aria-expanded="false" aria-controls="autocomplete_multiple"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="autocomplete_multiple">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#autocomplete_multiple_html_source" aria-controls="autocomplete_multiple_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#autocomplete_multiple_js_source" aria-controls="autocomplete_multiple_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#autocomplete_multiple_css_source" aria-controls="autocomplete_multiple_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="autocomplete_multiple_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="autocomplete_multiple_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="autocomplete_multiple_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,autocomplete_multiple_init,chosen_css,chosen_source">
                                            <div class="form-group">
                                                <label for="chosen_ex1"></label>
                                                <select id="chosen_ex1" class="form-control chosen-select" data-placeholder="Select a bunch of countries..." multiple>
                                                    <option value="RO" class="abc">Romania</option>
                                                    <option value="HU" >Hungary</option>
                                                    <option value="PL" >Poland</option>
                                                    <option value="FR" >France</option>
                                                    <option value="DE" >Germany</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Autocomplete multiple with option groups (limited to 5)</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#autocomplete_multiple_with_groups" aria-expanded="false" aria-controls="autocomplete_multiple_with_groups"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="autocomplete_multiple_with_groups">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#autocomplete_multiple_with_groups_html_source" aria-controls="autocomplete_multiple_with_groups_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#autocomplete_multiple_with_groups_js_source" aria-controls="autocomplete_multiple_with_groups_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#autocomplete_multiple_with_groups_css_source" aria-controls="autocomplete_multiple_with_groups_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="autocomplete_multiple_with_groups_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="autocomplete_multiple_with_groups_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="autocomplete_multiple_with_groups_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,autocomplete_multiple_with_groups_init,chosen_css,chosen_source">
                                            <div class="form-group">
                                                <label for="chosen_ex2"></label>
                                                <select class="form-control chosen-select" id="chosen_ex2" multiple>
                                                    <optgroup label="Europe">
                                                        <option value="RO" >Romania</option>
                                                        <option value="FR" >France</option>
                                                        <option value="DE" >Germany</option>
                                                    </optgroup>
                                                    <optgroup label="Asia">
                                                        <option value="CH">China</option>
                                                        <option value="NK" >North Korea</option>
                                                        <option value="DE" >South Korea</option>
                                                    </optgroup>
                                                    <optgroup label="Africa">
                                                        <option value="SA">South Africa</option>
                                                        <option value="FR" >Congo</option>
                                                        <option value="DE" >Sudan</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Autocomplete single</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#autocomplete_single" aria-expanded="false" aria-controls="autocomplete_single"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="autocomplete_single">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#autocomplete_single_html_source" aria-controls="autocomplete_single_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#autocomplete_single_js_source" aria-controls="autocomplete_single_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#autocomplete_single_css_source" aria-controls="autocomplete_single_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="autocomplete_single_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="autocomplete_single_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="autocomplete_single_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,autocomplete_single_init,chosen_css,chosen_source">
                                            <div class="form-group">
                                                <label for="chosen_ex3"></label>
                                                <select id="chosen_ex3" class="form-control chosen-select" data-placeholder="Select a person...">
                                                    <option value="0" ></option>
                                                    <option value="1" >James Bond</option>
                                                    <option value="2" >Ethan Hunt</option>
                                                    <option value="3" >Jason Bourne</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Autocomplete single with option groups</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#autocomplete_single_with_groups" aria-expanded="false" aria-controls="autocomplete_single_with_groups"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="autocomplete_single_with_groups">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#autocomplete_single_with_groups_html_source" aria-controls="autocomplete_single_with_groups_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#autocomplete_single_with_groups_js_source" aria-controls="autocomplete_single_with_groups_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#autocomplete_single_with_groups_css_source" aria-controls="autocomplete_single_with_groups_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="autocomplete_single_with_groups_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="autocomplete_single_with_groups_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="autocomplete_single_with_groups_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,autocomplete_single_with_groups_init,chosen_css,chosen_source">
                                            <div class="form-group">
                                                <label for="chosen_ex4"></label>
                                                <select class="form-control chosen-select" id="chosen_ex4">
                                                    <optgroup label="Europe">
                                                        <option value="RO" >Romania</option>
                                                        <option value="FR" >France</option>
                                                        <option value="DE" >Germany</option>
                                                    </optgroup>
                                                    <optgroup label="Asia">
                                                        <option value="CH">China</option>
                                                        <option value="NK" >North Korea</option>
                                                        <option value="DE" >South Korea</option>
                                                    </optgroup>
                                                    <optgroup label="Africa">
                                                        <option value="SA">South Africa</option>
                                                        <option value="FR" >Congo</option>
                                                        <option value="DE" >Sudan</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Single select with disabled search</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#autocomplete_single_with_disabled_search" aria-expanded="false" aria-controls="autocomplete_single_with_disabled_search"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="autocomplete_single_with_disabled_search">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#autocomplete_single_with_disabled_search_html_source" aria-controls="autocomplete_single_with_disabled_search_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#autocomplete_single_with_disabled_search_js_source" aria-controls="autocomplete_single_with_disabled_search_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#autocomplete_single_with_disabled_search_css_source" aria-controls="autocomplete_single_with_disabled_search_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="autocomplete_single_with_disabled_search_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="autocomplete_single_with_disabled_search_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="autocomplete_single_with_disabled_search_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15 no-padding-bottom">
                                            <div class="alert alert-info no-margin-bottom" role="alert">
                                                <p><i class="fa fa-info-circle"></i> </code> The disable_search_threshold option can be specified to hide the search input on single selects if there are fewer than (n) options.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,autocomplete_single_with_disabled_search_init,chosen_css,chosen_source">
                                            <div class="form-group">
                                                <label for="chosen_ex5"></label>
                                                <select class="form-control chosen-select" id="chosen_ex5">
                                                    <option value="RO" >Romania</option>
                                                    <option value="FR" >France</option>
                                                    <option value="DE" >Germany</option>
                                                    <option value="NK" >North Korea</option>
                                                    <option value="DE" >South Korea</option>
                                                    <option value="FR" >Congo</option>
                                                    <option value="DE" >Sudan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>
    <!-- CONTENT:End -->
    <!-- FOOTER:Start -->
    <?php include_once "modules/_mod_footer.php" ?>
    <!-- FOOTER:End -->
</div>
</div>
<!-- PAGE:End -->

<!-- POPUPS:Start -->
<div id="pop_space"></div>

<!-- SCRIPTS:Start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" data-dependency-name="jquery"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-3.2.1.min.js\">"+"<"+"/script>")</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>

<!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
<script src="../dist/plugins/prism/prism.min.js"></script>

<script src="../dist/js/lib/jquery-ui.1.11.4.min.js" data-dependency-name="jquery_ui"></script>
<script src="../dist/plugins/tether/tether.min.js" data-dependency-name="tether"></script>

<script src="../dist/plugins/maskedinput/jQuery.maskedInput-1.4.1.min.js" data-dependency-name="masked_input_source"></script>

<script src="../dist/plugins/numberformatter/jQuery.numberFormatter-1.0.0.js" data-dependency-name="number_formatter_source"></script>

<script src="../dist/plugins/inputlimiter/jQuery.inputlimiter.1.3.1.min.js" data-dependency-name="input_limiter_source"></script>

<script src="../dist/plugins/selectize/selectize-0.12.0.min.js" data-dependency-name="selectize_source"></script>

<script src="../dist/plugins/chosen/jQuery.chosen.min.js" data-dependency-name="chosen_source"></script>
<script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
<script src="../dist/js/demo_helpers.js"></script>

<!-- BOTTOM SCRIPTS:Start -->
<?php include_once "modules/_mod_bottom_scripts.php"; ?>
<!-- BOTTOM SCRIPTS:End -->
<!-- SCRIPTS:End -->

<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
    $(document).ready(function () {
        demoHelpers();  // Require demo_helpers.js
        showPageCode();
    });
</script>

<script type="text/javascript" data-dependency-name="masked_custom_date_init">
    $(document).ready(function () {
        $("#date_example").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
    });
</script>

<script type="text/javascript" data-dependency-name="masked_phone_format_init">
    $(document).ready(function () {
        $("#phone_example").mask("9 (999) 999999");
    });
</script>

<script type="text/javascript" data-dependency-name="masked_serial_number_init">
    $(document).ready(function () {
        $("#serial_example").mask("9999-9999-9999-9999");
    });
</script>

<script type="text/javascript" data-dependency-name="masked_custom_number_init">
    $(document).ready(function () {
        $("#formatted_example").numberFormatter({
            decimal_separator: ".",
            thousands_separator: ",",
            no_of_decimals: 2
        });
    });
</script>

<script type="text/javascript" data-dependency-name="textarea_with_input_limiter_init">
    $(document).ready(function () {
        $('#input_limiter').inputlimiter({
            remText: '%n character%s remaining...',
            limitText: 'max allowed : %n.'
        });
    });
</script>

<script type="text/javascript" data-dependency-name="selectize_init">
    $(document).ready(function () {
        $( "#selectize_example" ).selectize({
            delimiter: ',',
            persist: true,
            create: function(input) {
                return {
                    value: input,
                    text: input
                }
            }
        });
    });
</script>

<script type="text/javascript" data-dependency-name="jquery_autocomplete_init">
    $(document).ready(function () {
        var availableTags = [
            "Aston Martin",
            "Audi",
            "Bentley",
            "Bmw",
            "Bugatti",
            "Chrysler",
            "Cadillac",
            "Dodge",
            "Ford"
        ];
        $("#autocomplete_example").autocomplete({
            appendTo: $("#autocomplete_example").parent(),
            source: availableTags
        });
    });
</script>

<script type="text/javascript" data-dependency-name="jquery_ui_sliders_init">
    $(document).ready(function () {
        var sliderConfig = {
            '#slider_range_1'     : {range: true,min: 0,max: 100,values: [ 15, 90 ]},
            '#slider_range_2'     : {range: true,min: 0,max: 100,values: [ 9, 75 ]},
            '#vertical_slider_1'  : {orientation: "vertical",min: 0,max: 100,value: 30},
            '#vertical_slider_2'  : {orientation: "vertical",min: 0,max: 100,value: 40},
            '#vertical_slider_3'  : {orientation: "vertical",min: 0,max: 100,value: 50},
            '#vertical_slider_4'  : {orientation: "vertical",min: 0,max: 100,value: 60},
            '#vertical_slider_5'  : {orientation: "vertical",min: 0,max: 100,value: 50},
            '#vertical_slider_6'  : {orientation: "vertical",min: 0,max: 100,value: 40}
        }
        for (var selector in sliderConfig) {
            $(selector).slider(sliderConfig[selector]);
        }
    });
</script>

<script type="text/javascript" data-dependency-name="jquery_spinner_init">
    $(document).ready(function () {
        $( "#spinner_example" ).spinner();
    });
</script>

<script type="text/javascript" data-dependency-name="autocomplete_multiple_init">
    $(document).ready(function () {
        $('#chosen_ex1').chosen({});
    });
</script>

<script type="text/javascript" data-dependency-name="autocomplete_multiple_with_groups_init">
    $(document).ready(function () {
        $('#chosen_ex2').chosen({max_selected_options: 5});
    });
</script>

<script type="text/javascript" data-dependency-name="autocomplete_single_init">
    $(document).ready(function () {
        $('#chosen_ex3').chosen({allow_single_deselect: true});
    });
</script>

<script type="text/javascript" data-dependency-name="autocomplete_single_with_groups_init">
    $(document).ready(function () {
        $('#chosen_ex4').chosen({});
    });
</script>

<script type="text/javascript" data-dependency-name="autocomplete_single_with_disabled_search_init">
    $(document).ready(function () {
        $('#chosen_ex5').chosen({disable_search_threshold:10});
    });
</script>

<!-- DOCUMENT-READY:End -->

</body>
</html>
