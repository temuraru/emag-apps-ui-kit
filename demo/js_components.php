<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <title>JS Components - eMAG Apps UI KIT</title>

    <link rel="stylesheet" href="../dist/plugins/css3spinners/css3-spinners.1.2.2.min.css">

    <!-- PLUGIN: jqGrid: Added in demo for boostrap tabs. Is not necessary for boostrap tabs.-->
    <link rel="stylesheet" href="../dist/plugins/jqgrid/ui.jqgrid.min.css">

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
                        <p><b>JS Components</b></p>
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



                <section id="modals" class="pad-top-30">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h4><strong>Modals</strong></h4>

                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Default styling</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed hide" data-toggle="collapse" href="#default-modal-style" aria-expanded="false" aria-controls="default-modal-style"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="default-modal-style">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#default-modal-style-html-source" aria-controls="default-modal-style-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#default-modal-style-js-source" aria-controls="default-modal-style-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#default-modal-style-css-source" aria-controls="default-modal-style-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="default-modal-style-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="default-modal-style-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="default-modal-style-css-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15 no-padding-bottom">
                                            <p>Modals are streamlined, but flexible, dialog prompts with the minimum required
                                                functionality and smart defaults.</p>
                                            <div class="alert alert-info">
                                                <i class="fa fa-warning fonts-up-140"></i>&nbsp;<strong>Multiple open modals not
                                                    supported</strong> Be sure not to open a modal while another is still
                                                visible. Showing more than one modal at a time requires custom code.
                                            </div>
                                            <div class="alert alert-info no-margin-bottom">
                                                <i class="fa fa-warning fonts-up-140"></i>&nbsp;<strong>Modal markup
                                                    placement</strong> Try to place a modal's HTML code inside the <code>&lt;div
                                                    id="popSpace"&gt;&lt;div&gt;</code> in your document to avoid other
                                                components affecting the modal's appearance and/or functionality.
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="pad-15" data-showcase="example">
                                    <div class="show-example-modal" data-example-id="static-modal">
                                        <div class="modal" tabindex="-1" role="dialog">
                                            <div class="modal-dialog pull-left">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close" aria-hidden="true"></i></button>
                                                        <h4 class="modal-title">Modal title</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Modal with form</p>
                                                        <form id="exampleForm1" action="" method="post">
                                                            <fieldset>
                                                                <legend class="sr-only">Simple form</legend>
                                                                <div class="form-group has-error">
                                                                    <label class="control-label required" for="exampleInputEmail1">Email address</label>
                                                                    <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" placeholder="example@example.com" required>
                                                                    <div class="help-block">Please complete this field.</div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label required" for="exampleInputPassword1">Password</label>
                                                                    <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="password" required>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="pull-left">
                                                            <div class="form-sep">
                                                            <span
                                                                class="required">Some fields may be required.</span>
                                                            </div>
                                                        </div>
                                                        <div class="pull-right panel-controls">
                                                            <button type="button" id="special_submit"
                                                                    class="btn btn-success"><span>Save</span>
                                                            </button>
                                                            <button type="reset" id="special_reset"
                                                                    class="btn btn-default" data-dismiss="modal">
                                                                <span>Cancel</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-sm-8 module-description">
                                        <h4><b>Ajax modal</b></h4>
                                    </div>
                                    <div class="col-sm-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#ajax-modal" aria-expanded="false" aria-controls="ajax-modal"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="ajax-modal">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#ajax-modal-html-source" aria-controls="ajax-modal-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#ajax-modal-js-source" aria-controls="ajax-modal-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#ajax-modal-css-source" aria-controls="ajax-modal-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="ajax-modal-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="ajax-modal-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="ajax-modal-css-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,ajax_modal,jquery">
                                    <button id="ajax_modal_start" type="button" class="btn btn-primary">Show me an ajax modal.</button>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-sm-8 module-description">
                                        <h4><b>Modals with different sizing</b></h4>
                                    </div>
                                    <div class="col-sm-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#modals-different-size" aria-expanded="false" aria-controls="modals-different-size"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="modals-different-size">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#modals-different-size-html-source" aria-controls="modals-different-size-html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#modals-different-size-js-source" aria-controls="modals-different-size-js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#modals-different-size-css-source" aria-controls="modals-different-size-css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="modals-different-size-html-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="modals-different-size-js-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="modals-different-size-css-source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,modals_different_size,modal_in_page">
                                            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                <div class="btn-group" role="group">
                                                    <button type="button" id="mySmallDemoModal" class="btn btn-default" data-toggle="modal" data-target="#myDemoModal">Small</button>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myDemoModal">Normal</button>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <button type="button" id="myLargeDemoModal" class="btn btn-default" data-toggle="modal" data-target="#myDemoModal">Large</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>



                <section class="pad-top-20">


                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <p><strong>Informational modals:</strong></p>
                            <div class="pad-sep-20">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default info-modal-button">Info modal</button>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default warning-modal-button">Warning modal</button>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default error-modal-button">Error modal</button>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default success-modal-button">Success modal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <p><strong>Alerts modals:</strong></p>
                            <div class="pad-sep-20">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                            <div class="btn-group" role="group">
                                                <button type="button" id="confirmation_alert" class="btn btn-default">Confirmation</button>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button type="button" id="confirmation_alert_no_overlay" class="btn btn-default">Confirmation - No overlay</button>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button type="button" id="error_alert" class="btn btn-default">Error</button>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button type="button" id="error_alert_no_overlay" class="btn btn-default">Error - No overlay</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="js-custom-error-messages" class="pad-top-20">
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>Custom error messages</strong></h4>

                            <div class="alert alert-info" role="alert">
                                <p>
                                    <i class="fa fa-info-circle"></i>
                                    Based on the bootstrap-notify plugin with documentation on <a href="http://bootstrap-notify.remabledesigns.com/" class="alert-link">http://bootstrap-notify.remabledesigns.com/</a>
                                </p>
                            </div>

                            <button type="button" id="show_info" class="btn btn-default">
                                Show info message
                            </button>
                            <button type="button" id="show_success" class="btn btn-default">
                                Show success message
                            </button>
                            <button type="button" id="show_success_full_color" class="btn btn-default">
                                Show success (full color) message
                            </button>
                            <button type="button" id="show_warning" class="btn btn-default">
                                Show warning message
                            </button>
                            <button type="button" id="show_error" class="btn btn-default">
                                Show error message
                            </button>
                            <button type="button" id="show_black" class="btn btn-default">
                                Show black message
                            </button>
                        </div>
                    </div>
                </section>
                <section id="js-tooltips" class="pad-top-20">
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>Tooltips</strong></h4>
                            <div class="pad-sep-40" data-showcase="example">
                                <button type="button" class="btn btn-default" data-toggle="tooltip"
                                        data-placement="left" title="Tooltip type danger" data-type="danger">
                                    Tooltip type danger
                                </button>
                                <button type="button" class="btn btn-default" data-toggle="tooltip"
                                        data-placement="bottom" title="Tooltip type warning"
                                        data-type="warning">Tooltip type warning
                                </button>
                                <button type="button" class="btn btn-default" data-toggle="tooltip"
                                        data-placement="right" title="Tooltip type default" data-type="default">
                                    Tooltip type default
                                </button>
                                <button type="button" class="btn btn-default" data-toggle="tooltip"
                                        data-placement="top" title="Tooltip without type">Tooltip without type
                                </button>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="js-tabs" class="pad-top-20">
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>Tabs</strong></h4>
                            <div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">jqGrid basic</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">jqGrid with inline editing</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <table id="grid_table" class="table table-bordered"></table>
                                        <div id="grid_pager"></div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <table id="grid_table_with_inline_edit" class="table table-bordered"></table>
                                        <div id="grid_pager_with_inline_edit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="js-popovers" class="pad-top-20">
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>Popovers</strong></h4>
                            <div class="pad-sep-40" data-showcase="example">
                                <button type="button" class="btn btn-default" data-type="danger" data-toggle="popover" title="Popover title" data-placement="left" data-content="Popover type danger">Popover type danger</button>
                                <button type="button" class="btn btn-default" data-type="warning" data-toggle="popover" title="Popover title" data-placement="top" data-content="Popover type warning">Popover type warning</button>
                                <button type="button" class="btn btn-default" data-type="default" data-toggle="popover" title="Popover title" data-placement="bottom" data-content="Popover type default">Popover type default</button>
                                <button type="button" class="btn btn-default" data-toggle="popover" title="Popover title" data-placement="right" data-content="Popover type danger">Popover without type</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="js-utilities" class="pad-top-20">
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>Utilities:</strong></h4>
                            <p>A couple of HTML snippets with javascript enhancements:</p>
                            <p><strong>Upload file input type:</strong></p>
                            <div class="pad-sep-20">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" aria-label="..."
                                                       placeholder="Tell me your fathers name">
                                                <div class="input-group-btn">
                                                    <label for="testfile3" class="btn btn-primary">
                                                        <i class="fa fa-upload"></i>
                                                        <span>Upload his picture</span>
                                                        <input type="file" name="testfile3" id="testfile3"
                                                               class="form-input-control"
                                                               data-multiple-caption="{count} files selected"
                                                               multiple="">
                                                    </label>
                                                    <button class="btn btn-success" type="button">Go!</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <p><strong>Checkboxes disguised as buttons:</strong></p>
                            <p>Add
                                <mark>data-toggle="buttons"</mark>
                                to a
                                <mark>.btn-group</mark>
                                containing checkbox or radio inputs to enable toggling in their respective
                                styles.
                            </p>
                            <div class="pad-sep-20">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <input type="checkbox" autocomplete="off" checked> Checkbox 1
                                                (pre-checked)
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="checkbox" autocomplete="off"> Checkbox 2
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="checkbox" autocomplete="off"> Checkbox 3
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <p><strong>Radio buttons disguised as regular buttons:</strong></p>
                            <div class="pad-sep-20">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <input type="radio" name="options" id="option1"
                                                       autocomplete="off" checked> Radio 1 (preselected)
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" id="option2"
                                                       autocomplete="off"> Radio 2
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="options" id="option3"
                                                       autocomplete="off"> Radio 3
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="js-block-ui" class="pad-top-20">
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>Block UI</strong></h4>

                            <div class="alert alert-info" role="alert">
                                <p>
                                    <i class="fa fa-info-circle"></i>
                                    Based on the Block UI plugin documented on: <a href="http://malsup.com/jquery/block/" class="alert-link">jQuery BlockUI Plugin</a>
                                </p>
                            </div>

                            <button type="button" id="block_page" class="btn btn-primary"><i class="fa fa-remove"></i><span>Block page</span></button>
                            <button type="button" id="block_section" class="btn btn-primary"><i class="fa fa-remove"></i><span>Block this section</span></button>
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
        <div id="popSpace" data-dependency-name="modal_in_page">
            <div class="modal fade" id="myDemoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                            <h4 class="modal-title" id="myModalLabel">Standard modal</h4>
                        </div>
                        <div class="modal-body">
                            <h2>Suspendisse rutrum</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="pad-sep-20">
                                <span class="caption">Nam scelerisque nunc</span>
                            </div>
                            <p>
                                Curabitur porta non est in consectetur. Aenean ut purus volutpat, sodales sem nec, fermentum massa. Pellentesque sed magna nisi.<br>
                                Suspendisse venenatis massa quis velit fringilla, ac consequat dolor tincidunt. Etiam nec fermentum lectus, quis dignissim nunc.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <div class="pull-right panel-controls">
                                <button class="btn btn-success" data-dismiss="modal"><span>Yeah, got it</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SCRIPTS:Start -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" data-dependency-name="jquery"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>

        <script src="../dist/plugins/tether/tether.min.js" data-dependency-name="tether"></script>

        <script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
        <script src="../dist/js/demo_helpers.js"></script>


        
        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <script src="../dist/plugins/prism/prism.min.js"></script>



        <!-- PLUGIN: jqGrid: Added in demo for boostrap tabs. Is not necessary for boostrap tabs.-->
        <script src="../dist/plugins/jqgrid/i18n/grid.locale-en.js"></script>
        <script src="../dist/plugins/jqgrid/jquery.jqGrid.min.js"></script>

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
        <script type="text/javascript" data-dependency-name="modals_different_size">
            function modalSizing() {
                $('#mySmallDemoModal').on('click', function () {
                    var mode = $(this).data('target');
                    $(mode).find('.modal-dialog').addClass('modal-sm');
                    $('#myModalLabel').html('Standard modal - Small');
                });

                $('#myLargeDemoModal').on('click', function () {
                    var mode = $(this).data('target');
                    $(mode).find('.modal-dialog').addClass('modal-lg');
                    $('#myModalLabel').html('Standard modal - Large');
                });

                $('#myDemoModal').on('hidden.bs.modal', function (e) {
                    $(this).find('.modal-dialog').attr('class', 'modal-dialog');
                    $('#myModalLabel').html('Standard modal');
                });
            }

            modalSizing();
        </script>


        <script type="text/javascript">               
            $(document).ready(function () {
                console.log('Ready, Captain!');

                demoHelpers();  // Require demo_helpers.js



                <!-- PLUGIN: jqGrid: Added in demo for boostrap tabs. Is not necessary for boostrap tabs.-->
                function getListingDummyData() {
                    var actions = '<div class="btn-group">' +
                        '<button type="button" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">' +
                        '<i class="fa fa-pencil"></i> ' +
                        '<span class="sr-only">Edit</span>' +
                        '</button> ' +
                        '<button type="button" class="btn btn-sm btn-default" data-toggle="tooltip" title="View history">' +
                        '<i class="fa fa-history"></i> ' +
                        '<span class="sr-only">View history</span>' +
                        '</button>' +
                        '</div>' +
                        '<div class="btn-group">' +
                        '<button type="button" class="btn btn-sm btn-default more-actions" title="More actions" data-content="'+
                        '<ul class=\'dropdown-menu dropdown-default\'>' +
                        '<li><a href=\'#\'><i class=\'ace-icon fa fa-plus bigger-130 green\'></i> <span>Add product</span></a></li>' +
                        '<li><a href=\'#\'><i class=\'ace-icon  fa fa-pencil bigger-130 blue\'></i> Edit product lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>' +
                        '<li><a href=\'#\'><i class=\'ace-icon  fa fa-eye bigger-130 blue\'></i> Preview product</a></li>' +
                        '<li><a href=\'#\'><i class=\'ace-icon  fa fa-trash bigger-130 red\'></i> Delete product</a></li>' +
                        '<li><a href=\'#\'>Button with no icon</a></li>' +
                        '<li class=\'divider\'></li>' +
                        '<li class=\'disabled\'>' +
                        '<a href=\'#\' class=\'disabled\' data-rel=\'tooltip\' title=\'Edit product\'>' +
                        '<i class=\'ace-icon fa fa-download disabled\'></i> Actionaaa name + entity name' +
                        '</a>' +
                        '</li>' +
                        '<li>' +
                        '<a href=\'#\'><i class=\'ace-icon fa fa-download\'></i> Action name + entity name</a>' +
                        '</li>' +
                        '</ul>' +
                        '"><i class="fa fa-ellipsis-h"></i> ' +
                        '<span class="sr-only">More actions</span> ' +
                        '</button>' +
                        '</div>';

                    var dataSet = [
                        {
                            "id": "1",
                            "firstname": "Tony",
                            "lastname": "Stark",
                            "username": "ironman",
                            "jobtype": "Philantropist",
                            "codename": "Iron Man",
                            "spirit_animal": "Tiger",
                            level:"0",
                            parent: null,
                            isLeaf: false,
                            expanded:true,
                            loaded:true,
                            actions:actions
                        },
                        {
                            "id": "2",
                            "firstname": "Bruce",
                            "lastname": "Banner",
                            "username": "hulk_smash",
                            "jobtype": "Doctor",
                            "codename": "The Hulk",
                            "spirit_animal": "Gorilla",
                            level: "1",
                            parent: "1",
                            isLeaf: true,
                            expanded: false,
                            loaded: true,
                            actions:actions
                        },
                        {
                            "id": "3",
                            "firstname": "Thor",
                            "lastname": "Odinson",
                            "username": "thehammer",
                            "jobtype": "God",
                            "codename": "Thor",
                            "spirit_animal": "Lion",
                            level:"1",
                            parent: "1",
                            isLeaf: true,
                            expanded:false,
                            loaded:true,
                            actions:actions
                        },
                        {
                            "id": "4",
                            "firstname": "Clinton",
                            "lastname": "Barton",
                            "username": "hawkyey",
                            "jobtype": "Archer",
                            "codename": "Hawkeye",
                            "spirit_animal": "Hawk",
                            level:"0",
                            parent: null,
                            isLeaf: false,
                            expanded:false,
                            loaded:true,
                            actions:actions
                        },
                        {
                            "id": "5",
                            "firstname": "Steven",
                            "lastname": "Rogers",
                            "username": "rogerthat",
                            "jobtype": "Captain",
                            "codename": "Captain America",
                            "spirit_animal": "Eagle",
                            level:"1",
                            parent: "4",
                            isLeaf: true,
                            expanded:false,
                            loaded:true,
                            actions:actions
                        },
                        {
                            "id": "6",
                            "firstname": "Natalia",
                            "lastname": "Romanova",
                            "username": "notawidow",
                            "jobtype": "Event planner",
                            "codename": "Black Widow",
                            "spirit_animal": "Spider",
                            level:"1",
                            parent: "4",
                            isLeaf: true,
                            expanded:false,
                            loaded:true,
                            actions:actions
                        },
                        {
                            "id": "7",
                            "firstname": "Henry",
                            "lastname": "Pym",
                            "username": "goliath",
                            "jobtype": "Unemployed",
                            "codename": "Ant-Man",
                            "spirit_animal": "Dog",
                            level:"0",
                            parent: null,
                            isLeaf: false,
                            expanded:false,
                            loaded:true,
                            actions:actions
                        },
                        {
                            "id": "8",
                            "firstname": "Luke",
                            "lastname": "Charles",
                            "username": "tchiao",
                            "jobtype": "Self-employed",
                            "codename": "Black Panther",
                            "spirit_animal": "Jaguar",
                            level:"1",
                            parent: "7",
                            isLeaf: false,
                            expanded:false,
                            loaded:true,
                            actions:actions
                        },
                        {
                            "id": "9",
                            "firstname": "Victor",
                            "lastname": "Shade",
                            "username": "imallseeing",
                            "jobtype": "Self-employed",
                            "codename": "The Vision",
                            "spirit_animal": "Dolphin",
                            level:"2",
                            parent: "8",
                            isLeaf: true,
                            expanded:false,
                            loaded:true,
                            actions:actions
                        },
                        {
                            "id": "10",
                            "firstname": "Monica",
                            "lastname": "Rambeau",
                            "username": "photon",
                            "jobtype": "Self-employed",
                            "codename": "Captain Marvel",
                            "spirit_animal": "Mustang",
                            level:"2",
                            parent: "8",
                            isLeaf: true,
                            expanded:false,
                            loaded:true,
                            actions:actions
                        }
                    ];

                    return dataSet;
                }

                var listingParameters = {
                    table: '#grid_table',
                    pager: '#grid_pager',
                    datatype: 'jsonstring',
                    caption: 'Listing caption',
                    datastr: getListingDummyData(),
                    styleUI : 'fontAwesome',
                    colModel: [
                        { label: 'First Name', name: 'firstname', key: true, width: "100" },
                        { label: 'Last Name', name: 'lastname' },
                        { label: 'Username', name: 'username' },
                        { label: 'Hobby', name: 'jobtype' },
                        { label: 'Nickname', name: 'codename' },
                        { label: 'Spiritual Animal', name: 'spirit_animal' }
                    ]
                };

                new PhotonJqGrid(listingParameters).init();

                var listingParameters = {
                    table: '#grid_table_with_inline_edit',
                    pager: '#grid_pager_with_inline_edit',
                    datatype: 'jsonstring',
                    caption: 'Listing caption',
                    datastr: getListingDummyData(),
                    styleUI : 'fontAwesome',
                    colModel: [
                        {
                            name: "actions",
                            width: 60,
                            formatter: "actions",
                            formatoptions: {
                                keys: true,
                                editOptions: {},
                                addOptions: {},
                                delOptions: {}
                            }
                        },
                        { name: 'id',           index: 'id', key: true, hidden: true, width: "20" },
                        { name: 'firstname',    index: 'firstname', width: "100", editable: true },
                        { name: 'lastname',     index: 'lastname', editable: true },
                        { name: 'username',     index: 'username', editable: true },
                        { name: 'jobtype',      index: 'jobtype', editable: true },
                        { name: 'codename',     index: 'codename', editable: true },
                        { name: 'spirit_animal',index: 'spirit_animal', editable: true }
                    ]
                };

                new PhotonJqGrid(listingParameters).init();

                $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                    $(window).resize();
                });






                var dummyModalContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris auctor, tortor sit amet vulputate rhoncus, elit justo feugiat nulla, mollis aliquet lacus sapien sed justo. Etiam neque libero, mattis et aliquet sit amet, volutpat id urna. Duis vel ipsum non velit aliquam aliquet a nec odio. Cras eget aliquet ipsum.';

                var infoModal = new PhotonModal({
                    id: 'info_modal',
                    title: 'Info modal',
                    content: dummyModalContent,
                    buttons: {},
                    size: 'medium',
                    type: 'info',
                    closeOnClickOutside: false,
                    showCloseButton: true
                });

                var warningModal = new PhotonModal({
                    id: 'warning_modal',
                    title: 'Warning modal',
                    content: dummyModalContent,
                    buttons: {
                        cancel: {
                            label: 'OK',
                            class: 'btn btn-default'
                        }
                    },
                    size: 'medium',
                    type: 'warning',
                    closeOnClickOutside: false,
                    showCloseButton: false
                });

                var errorModal = new PhotonModal({
                    id: 'danger_modal',
                    title: 'Error modal',
                    content: dummyModalContent,
                    buttons: {
                        cancel: {
                            label: 'OK',
                            class: 'btn btn-default'
                        }
                    },
                    size: 'medium',
                    type: 'error',
                    closeOnClickOutside: false,
                    showCloseButton: false
                });

                var successModal = new PhotonModal({
                    id: 'success_modal',
                    title: 'Success modal',
                    content: dummyModalContent,
                    buttons: {
                        cancel: {
                            label: 'OK',
                            class: 'btn btn-default'
                        }
                    },
                    size: 'medium',
                    type: 'success',
                    closeOnClickOutside: false,
                    showCloseButton: false
                });

                $(document.body).on('click', '.info-modal-button', function () {
                    infoModal.show();
                });

                $(document.body).on('click', '.warning-modal-button', function () {
                    warningModal.show();
                });

                $(document.body).on('click', '.error-modal-button', function () {
                    errorModal.show();
                });

                $(document.body).on('click', '.success-modal-button', function () {
                    successModal.show();
                });

                $('#show_info').on('click',function(){
                    addNotification('<i class="fa fa-info-circle"></i><span>Prepare yourself! This is an informational message: Information</span>', 'info');
                });
                $('#show_success').on('click',function(){
                    addNotification('<i class="fa fa-check-circle"></i><span>This is a success message.</span>', 'success');
                });
                $('#show_success_full_color').on('click',function(){
                    addNotification('<i class="fa fa-check-circle"></i><span>This is a success message.</span>', 'success-full-color');
                });
                $('#show_warning').on('click',function(){
                    addNotification('<i class="fa fa-warning"></i><span>Are you prepared? This is a warning message: Warning</span>', 'warning');
                });
                $('#show_error').on('click',function(){
                    addNotification('<i class="fa fa-minus-circle"></i><span>Oh SNAP! This is an error message: Run!</span>', 'danger');
                });
                $('#show_black').on('click',function(){
                    addNotification('<span>This is a black alert</span>', 'black');
                });

                $('#confirmation_alert').on('click', function () {
                    confirmationAlertModal('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque arcu, tempor vitae laoreet nec, hendrerit ut augue.', 'Confirmation alert modal');
                });
                $('#confirmation_alert_no_overlay').on('click', function () {
                    confirmationAlertModal('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque arcu, tempor vitae laoreet nec, hendrerit ut augue.', 'Confirmation alert modal', false);
                });
                $('#error_alert').on('click', function () {
                    errorAlertModal('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque arcu, tempor vitae laoreet nec, hendrerit ut augue.', 'Error alert modal');
                });
                $('#error_alert_no_overlay').on('click', function () {
                    errorAlertModal('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque arcu, tempor vitae laoreet nec, hendrerit ut augue.', 'Error alert modal', false);
                });

                $('#block_page').on('click', function() {
                    $('body').blockControl({
                        loadingIconType: "cubeGrid",
                        iconColorClass: "light",
                        overlayColor : "#000"
                    });
                    setTimeout(function(){$('body').unblockControl()}, 3000);
                });

                $('#block_section').on('click', function() {
                    var section = $(this).parents('.show-panel');
                    section.blockControl();
                    setTimeout(function(){section.unblockControl()}, 3000);
                });

                showPageCode();
            });
        </script>
        <!-- DOCUMENT-READY:End -->
        
</body>
</html>