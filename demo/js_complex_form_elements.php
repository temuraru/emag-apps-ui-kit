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
                <section class="pad-top-20">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h4><strong>Masked inputs</strong></h4>

                            <div class="alert alert-info" role="alert">
                                <p><i class="fa fa-info-circle"></i>
                                    Based on the masked input plugin with documentation on <a href="http://digitalbush.com/projects/masked-input-plugin/" class="alert-link">http://digitalbush.com</a>
                                </p>
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
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,masked_custom_date,masked_input">
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
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,masked_phone_format,masked_input">
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
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,masked_serial_number,masked_input">
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
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,masked_custom_number,number_formatter">
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
                <section id="jsTextareaWithInputLimiter" class="pad-top-20">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h4><strong>Textarea with input limiter</strong></h4>

                            <div class="alert alert-info" role="alert">
                                <p><i class="fa fa-info-circle"></i>
                                    Based on the masked input plugin with documentation on <a href="http://rustyjeans.com/jquery-plugins/input-limiter" class="alert-link">http://rustyjeans.com</a>
                                </p>
                            </div>

                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Message</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#textarea-with-input-limiter" aria-expanded="false" aria-controls=textarea-with-input-limiter"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
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
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,textarea_with_input_limiter,input_limiter">
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


                <section id="jsFileUpload" class="pad-top-20">
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>File upload</strong></h4>

                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <p><strong>Simple file-upload buttons</strong></p>
                                    <div class="form-group">
                                        <label for="testfile" class="btn btn-primary">
                                            <i class="fa fa-upload"></i>
                                            <span>Choose a file</span>
                                            <input type="file" name="testfile" id="testfile" class="form-input-control" data-multiple-caption="{count} files selected" multiple/>
                                        </label>
                                    </div>
                                    <div class="form-group pad-btm-20">
                                        <label for="testfile2" class="btn btn-link">
                                            <i class="fa fa-upload"></i>
                                            <span>Another one</span>
                                            <input type="file" name="testfile2" id="testfile2" class="form-input-control" data-multiple-caption="{count} files selected" multiple/>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <p><strong>Input groups with a file-upload button:</strong></p>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" aria-label="..." placeholder="Tell me your fathers name">
                                            <div class="input-group-btn">
                                                <label for="testfile3" class="btn btn-default">
                                                    <i class="fa fa-upload"></i>
                                                    <span>Upload his picture</span>
                                                    <input type="file" name="testfile3" id="testfile3" class="form-input-control" data-multiple-caption="{count} files selected" multiple/>
                                                </label>
                                                <button class="btn btn-default" type="button">Go!</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="jsSelectizeTagInput" class="pad-top-20">
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>Selectize tag input</strong></h4>

                            <div class="alert alert-info" role="alert">
                                <p>
                                    <i class="fa fa-info-circle"></i>
                                    Based on the selectize plugin with documentation on <a href="http://brianreavis.github.io/selectize.js/" class="alert-link">http://brianreavis.github.io/selectize.js/</a>
                                </p>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6 col-md-4 col-lg-4">
                                    <label for="selectize_example">Text input</label>
                                    <input type="text" class="form-control" name="selectize_example" id="selectize_example" placeholder="Input a few tags">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="jsJQueryAutocomplete" class="pad-top-20">
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>jQuery autocomplete</strong></h4>

                            <div class="alert alert-info" role="alert">
                                <p>
                                    <i class="fa fa-info-circle"></i>
                                    Based on the jQuery UI library with documentation on <a href="https://jqueryui.com/" class="alert-link">https://jqueryui.com/</a>
                                </p>
                            </div>
                            <div class="row">
                                <div class="form-groupcol-sm-6 col-md-4 col-lg-4">
                                    <label for="autocomplete_example">Car finder</label>
                                    <input type="text" class="form-control" name="autocomplete_example" id="autocomplete_example" placeholder="Search for a car">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="jsJQueryUISliders" class="pad-top-20">
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>jQuery UI Sliders</strong></h4>

                            <div class="alert alert-info" role="alert">
                                <p>
                                    <i class="fa fa-info-circle"></i>
                                    Based on the jQuery UI library with documentation on <a href="https://jqueryui.com/" class="alert-link">https://jqueryui.com/</a>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
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
                </section>
                <section id="jsJQueryNumericInput" class="pad-top-20">
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>jQuery numeric input</strong></h4>

                            <div class="alert alert-info" role="alert">
                                <p>
                                    <i class="fa fa-info-circle"></i>
                                    Based on the jQuery UI library with documentation on <a href="https://jqueryui.com/" class="alert-link">https://jqueryui.com/</a>
                                </p>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6 col-md-3 col-lg-3">
                                    <input type="text" class="form-control" name="spinner_example" id="spinner_example" placeholder="Tell me a number">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="jsChosenJsAutocomplete" class="pad-top-20">
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>Chosen.js autocomplete</strong></h4>

                            <div class="alert alert-info" role="alert">
                                <p>
                                    <i class="fa fa-info-circle"></i>
                                    Based on the chosen.js jQuery plugin with documentation on <a href="https://harvesthq.github.io/chosen/" class="alert-link">https://harvesthq.github.io/chosen/</a>
                                </p>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="chosen_ex1">Autocomplete multiple</label>
                                        <select id="chosen_ex1" class="form-control chosen-select" data-placeholder="Select a bunch of countries..." multiple>
                                            <option value="RO" >Romania</option>
                                            <option value="HU" >Hungary</option>
                                            <option value="PL" >Poland</option>
                                            <option value="FR" >France</option>
                                            <option value="DE" >Germany</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="chosen_ex2">Autocomplete multiple with option groups (limited to 5)</label>
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
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="chosen_ex3">Autocomplete single</label>
                                        <select id="chosen_ex3" class="form-control chosen-select" data-placeholder="Select a person...">
                                            <option value="0" ></option>
                                            <option value="1" >James Bond</option>
                                            <option value="2" >Ethan Hunt</option>
                                            <option value="3" >Jason Bourne</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="chosen_ex4">Autocomplete single with option groups</label>
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
                                    <div class="form-group">
                                        <label for="chosen_ex5">Singe select with disabled search</label>
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
                                    <div class="alert alert-info" role="alert">
                                        <p><i class="fa fa-info-circle"></i> </code> The disable_search_threshold option can be specified to hide the search input on single selects if there are fewer than (n) options.</p>
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

<script src="../dist/plugins/maskedinput/jQuery.maskedInput-1.4.1.min.js" data-dependency-name="masked_input"></script>

<script src="../dist/plugins/numberformatter/jQuery.numberFormatter-1.0.0.js" data-dependency-name="number_formatter"></script>

<script src="../dist/plugins/inputlimiter/jQuery.inputlimiter.1.3.1.min.js" data-dependency-name="input_limiter"></script>
<script src="../dist/plugins/selectize/selectize-0.12.0.min.js" data-dependency-name="selectize"></script>
<script src="../dist/plugins/chosen/jQuery.chosen-1.4.2.min.js" data-dependency-name="chosen"></script>

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

<script type="text/javascript" data-dependency-name="masked_custom_date">
    $(document).ready(function () {
        $("#date_example").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
    });
</script>

<script type="text/javascript" data-dependency-name="masked_phone_format">
    $(document).ready(function () {
        $("#phone_example").mask("9 (999) 999999");
    });
</script>

<script type="text/javascript" data-dependency-name="masked_serial_number">
    $(document).ready(function () {
        $("#serial_example").mask("9999-9999-9999-9999");
    });
</script>

<script type="text/javascript" data-dependency-name="masked_custom_number">
    $(document).ready(function () {
        $("#formatted_example").numberFormatter({
            decimal_separator: ".",
            thousands_separator: ",",
            no_of_decimals: 2
        });
    });
</script>

<script type="text/javascript" data-dependency-name="textarea_with_input_limiter">
    $(document).ready(function () {
        $('#input_limiter').inputlimiter({
            remText: '%n character%s remaining...',
            limitText: 'max allowed : %n.'
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {

        initMaskedInputs();
        initInputLimiter();
        initSelectize();
        initAutocomplete();
        initSliders();
        initSpinner();
        initChosen();

        function initMaskedInputs() {

        }

        function initInputLimiter() {

        }

        function initSelectize() {
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
        }

        function initAutocomplete() {
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
        }

        function initSliders() {
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
        }

        function initSpinner() {
            $( "#spinner_example" ).spinner();
        }

        function initChosen() {
            var chosenConfig = {
                '#chosen_ex1'  : {},
                '#chosen_ex2'  : {max_selected_options: 5},
                '#chosen_ex3'  : {allow_single_deselect: true},
                '#chosen_ex4'  : {},
                '#chosen_ex5'  : {disable_search_threshold:10}
            }
            for (var selector in chosenConfig) {
                $(selector).chosen(chosenConfig[selector]);
            }
        }
    });
</script>
<!-- DOCUMENT-READY:End -->

</body>
</html>