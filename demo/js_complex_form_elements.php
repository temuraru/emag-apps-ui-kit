<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <title>Complex form elements - eMAG Apps UI KIT</title>

    <link rel="stylesheet" href="../dist/css/lib/jquery-ui-custom.1.11.4.min.css" data-dependency-name="jquery_ui_css">
    <link rel="stylesheet" href="../dist/plugins/selectize/selectize-0.12.0.min.css" data-dependency-name="selectize_css">
    <link rel="stylesheet" href="../dist/plugins/chosen/jQuery.chosen-1.4.2.min.css" data-dependency-name="chosen_css">

    <?php include_once "modules/_mod_meta.php"?>
    <?php include_once "modules/_mod_top_include.php"?>
</head>
<body>

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
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Custom date format</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#masked-custom-date" aria-expanded="false" aria-controls="masked-custom-date"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="masked-custom-date">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#masked-custom-date-html-source" aria-controls="masked-custom-date-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#masked-custom-date-js-source" aria-controls="masked-custom-date-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#masked-custom-date-css-source" aria-controls="masked-custom-date-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="masked-custom-date-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="masked-custom-date-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="masked-custom-date-css-source">
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
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Phone format</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#masked-phone-format" aria-expanded="false" aria-controls="masked-phone-format"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="masked-phone-format">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#masked-phone-format-html-source" aria-controls="masked-phone-format-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#masked-phone-format-js-source" aria-controls="masked-phone-format-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#masked-phone-format-css-source" aria-controls="masked-phone-format-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="masked-phone-format-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="masked-phone-format-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="masked-phone-format-css-source">
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
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Serial number format</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#masked-serial-number" aria-expanded="false" aria-controls="masked-serial-number"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="masked-serial-number">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#masked-serial-number-html-source" aria-controls="masked-serial-number-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#masked-serial-number-js-source" aria-controls="masked-serial-number-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#masked-serial-number-css-source" aria-controls="masked-serial-number-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="masked-serial-number-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="masked-serial-number-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="masked-serial-number-css-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,masked_serial_number,masked_input_source">
                                            <div class="form-group">
                                                <label for="serial_example"></label>
                                                <input type="text" class="form-control" name="serial_example" id="serial_example">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Custom number formatting</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#masked-custom-number" aria-expanded="false" aria-controls="masked-custom-number"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="masked-custom-number">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#masked-custom-number-html-source" aria-controls="masked-custom-number-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#masked-custom-number-js-source" aria-controls="masked-custom-number-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#masked-custom-number-css-source" aria-controls="masked-custom-number-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="masked-custom-number-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="masked-custom-number-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="masked-custom-number-css-source">
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
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Message</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#textarea-with-input-limiter" aria-expanded="false" aria-controls="textarea-with-input-limiter"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="textarea-with-input-limiter">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#textarea-with-input-limiter-html-source" aria-controls="textarea-with-input-limiter-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#textarea-with-input-limiter-js-source" aria-controls="textarea-with-input-limiter-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#textarea-with-input-limiter-css-source" aria-controls="textarea-with-input-limiter-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="textarea-with-input-limiter-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="textarea-with-input-limiter-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="textarea-with-input-limiter-css-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,textarea_with_input_limiter_init,input_limiter_source">
                                            <div class="form-group">
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
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Style 1</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#file-upload-demo-1" aria-expanded="false" aria-controls="file-upload-demo-1"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="file-upload-demo-1">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#file-upload-demo-1-html-source" aria-controls="file-upload-demo-1-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#file-upload-demo-1-js-source" aria-controls="file-upload-demo-1-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#file-upload-demo-1-css-source" aria-controls="file-upload-demo-1-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="file-upload-demo-1-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="file-upload-demo-1-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="file-upload-demo-1-css-source">
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
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Style 2</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#file-upload-demo-2" aria-expanded="false" aria-controls="file-upload-demo-2"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="file-upload-demo-2">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#file-upload-demo-2-html-source" aria-controls="file-upload-demo-2-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#file-upload-demo-2-js-source" aria-controls="file-upload-demo-2-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#file-upload-demo-2-css-source" aria-controls="file-upload-demo-2-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="file-upload-demo-2-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="file-upload-demo-2-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="file-upload-demo-2-css-source">
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
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Style 3</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#file-upload-demo-3" aria-expanded="false" aria-controls="file-upload-demo-3"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="file-upload-demo-3">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#file-upload-demo-3-html-source" aria-controls="file-upload-demo-3-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#file-upload-demo-3-js-source" aria-controls="file-upload-demo-3-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#file-upload-demo-3-css-source" aria-controls="file-upload-demo-3-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="file-upload-demo-3-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="file-upload-demo-3-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="file-upload-demo-3-css-source">
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
                                            Based on the selectize plugin with documentation on <a href="http://brianreavis.github.io/selectize.js/" class="alert-link">http://brianreavis.github.io/selectize.js/</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Text input</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#text-input" aria-expanded="false" aria-controls="text-input"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="text-input">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#text-input-html-source" aria-controls="text-input-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#text-input-js-source" aria-controls="text-input-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#text-input-css-source" aria-controls="text-input-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="text-input-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="text-input-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="text-input-css-source">
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
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Text input</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jQuery-autocomplete" aria-expanded="false" aria-controls="jQuery-autocomplete"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jQuery-autocomplete">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jQuery-autocomplete-html-source" aria-controls="jQuery-autocomplete-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jQuery-autocomplete-js-source" aria-controls="jQuery-autocomplete-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jQuery-autocomplete-css-source" aria-controls="jQuery-autocomplete-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jQuery-autocomplete-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jQuery-autocomplete-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jQuery-autocomplete-css-source">
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
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Text input</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jquery-ui-sliders" aria-expanded="false" aria-controls="jquery-ui-sliders"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jquery-ui-sliders">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jquery-ui-sliders-html-source" aria-controls="jquery-ui-sliders-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jquery-ui-sliders-js-source" aria-controls="jquery-ui-sliders-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jquery-ui-sliders-css-source" aria-controls="jquery-ui-sliders-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jquery-ui-sliders-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jquery-ui-sliders-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jquery-ui-sliders-css-source">
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
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Default</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jquery-numeric-input" aria-expanded="false" aria-controls="jquery-numeric-input"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jquery-numeric-input">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jquery-numeric-input-html-source" aria-controls="jquery-numeric-input-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jquery-numeric-input-js-source" aria-controls="jquery-numeric-input-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jquery-numeric-input-css-source" aria-controls="jquery-numeric-input-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jquery-numeric-input-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jquery-numeric-input-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jquery-numeric-input-css-source">
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
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Autocomplete multiple</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#autocomplete-multiple" aria-expanded="false" aria-controls="autocomplete-multiple"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="autocomplete-multiple">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#autocomplete-multiple-html-source" aria-controls="autocomplete-multiple-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#autocomplete-multiple-js-source" aria-controls="autocomplete-multiple-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#autocomplete-multiple-css-source" aria-controls="autocomplete-multiple-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="autocomplete-multiple-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="autocomplete-multiple-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="autocomplete-multiple-css-source">
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
                                                    <option value="RO" >Romania</option>
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
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Autocomplete multiple with option groups (limited to 5)</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#autocomplete-multiple-with-groups" aria-expanded="false" aria-controls="autocomplete-multiple-with-groups"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="autocomplete-multiple-with-groups">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#autocomplete-multiple-with-groups-html-source" aria-controls="autocomplete-multiple-with-groups-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#autocomplete-multiple-with-groups-js-source" aria-controls="autocomplete-multiple-with-groups-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#autocomplete-multiple-with-groups-css-source" aria-controls="autocomplete-multiple-with-groups-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="autocomplete-multiple-with-groups-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="autocomplete-multiple-with-groups-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="autocomplete-multiple-with-groups-css-source">
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
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Autocomplete single</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#autocomplete-single" aria-expanded="false" aria-controls="autocomplete-single"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="autocomplete-single">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#autocomplete-single-html-source" aria-controls="autocomplete-single-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#autocomplete-single-js-source" aria-controls="autocomplete-single-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#autocomplete-single-css-source" aria-controls="autocomplete-single-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="autocomplete-single-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="autocomplete-single-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="autocomplete-single-css-source">
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
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Autocomplete single with option groups</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#autocomplete-single-with-groups" aria-expanded="false" aria-controls="autocomplete-single-with-groups"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="autocomplete-single-with-groups">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#autocomplete-single-with-groups-html-source" aria-controls="autocomplete-single-with-groups-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#autocomplete-single-with-groups-js-source" aria-controls="autocomplete-single-with-groups-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#autocomplete-single-with-groups-css-source" aria-controls="autocomplete-single-with-groups-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="autocomplete-single-with-groups-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="autocomplete-single-with-groups-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="autocomplete-single-with-groups-css-source">
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
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Single select with disabled search</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#autocomplete-single-with-disabled-search" aria-expanded="false" aria-controls="autocomplete-single-with-disabled-search"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="autocomplete-single-with-disabled-search">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#autocomplete-single-with-disabled-search-html-source" aria-controls="autocomplete-single-with-disabled-search-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#autocomplete-single-with-disabled-search-js-source" aria-controls="autocomplete-single-with-disabled-search-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#autocomplete-single-with-disabled-search-css-source" aria-controls="autocomplete-single-with-disabled-search-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="autocomplete-single-with-disabled-search-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="autocomplete-single-with-disabled-search-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="autocomplete-single-with-disabled-search-css-source">
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
<div id="popSpace"></div>

<!-- SCRIPTS:Start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" data-dependency-name="jquery"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>

<!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
<script src="../dist/plugins/prism/prism.min.js"></script>

<script src="../dist/js/lib/jquery-ui.1.11.4.min.js" data-dependency-name="jquery_ui"></script>
<script src="../dist/plugins/tether/tether.min.js" data-dependency-name="tether"></script>

<script src="../dist/plugins/maskedinput/jQuery.maskedInput-1.4.1.min.js" data-dependency-name="masked_input_source"></script>

<script src="../dist/plugins/numberformatter/jQuery.numberFormatter-1.0.0.js" data-dependency-name="number_formatter_source"></script>

<script src="../dist/plugins/inputlimiter/jQuery.inputlimiter.1.3.1.min.js" data-dependency-name="input_limiter_source"></script>

<script src="../dist/plugins/selectize/selectize-0.12.0.min.js" data-dependency-name="selectize_source"></script>

<script src="../dist/plugins/chosen/jQuery.chosen-1.4.2.min.js" data-dependency-name="chosen_source"></script>

<script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
<script src="../dist/js/demo_helpers.js"></script>
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