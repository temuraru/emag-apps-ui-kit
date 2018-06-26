<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <title>JS Components - eMAG Apps UI KIT</title>

    <link rel="stylesheet" href="../dist/plugins/css3spinners/css3-spinners.1.2.2.min.css">

    <!-- PLUGIN: jqGrid: Added in demo for boostrap tabs. Is not necessary for boostrap tabs.-->
    <link rel="stylesheet" href="../dist/plugins/jqgrid/ui.jqgrid.min.css" data-dependency-name="jqgrid_css">

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
                            <h2><strong>Modals</strong></h2>
                            <div class="row">
                                <div class="col-sm-12 mg-top-20">
                                    <p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
                                    <ul>
                                        <li>A modal is a secondary page component that is displayed in front of the page;</li>
                                        <li>This component can be used for both displaying and for entering data whose structure does not require a new page development;</li>
                                        <li>Always use the same style for all applications you develop.</li>
                                    </ul>
                                    <div class="alert alert-info">
                                        <i class="fa fa-info-circle"></i><strong> Multiple open modals not
                                            supported</strong> Be sure not to open a modal while another is still
                                        visible. Showing more than one modal at a time requires custom code.
                                    </div>
                                    <div class="alert alert-info no-margin-bottom">
                                        <i class="fa fa-info-circle"></i><strong> Modal markup
                                            placement</strong> Try to place a modal's HTML code inside the <code>&lt;div
                                            id="pop_space"&gt;&lt;div&gt;</code> in your document to avoid other
                                        components affecting the modal's appearance and/or functionality.
                                    </div>
                                </div>

                            </div>
                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Default styling</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed hide" data-toggle="collapse" href="#default_modal_style" aria-expanded="false" aria-controls="default_modal_style"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="default_modal_style">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#default_modal_style_html_source" aria-controls="default_modal_style_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#default_modal_style_js_source" aria-controls="default_modal_style_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#default_modal_style_css_source" aria-controls="default_modal_style_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="default_modal_style_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="default_modal_style_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="default_modal_style_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
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
                                                                <span class="required">Required field</span>
                                                            </div>
                                                        </div>
                                                        <div class="pull-right panel-controls">
                                                            <button type="button" id="special_submit" class="btn btn-success"><span>Save</span></button>
                                                            <button type="reset" id="special_reset" class="btn btn-default" data-dismiss="modal"><span>Cancel</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Ajax modal</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#ajax_modal" aria-expanded="false" aria-controls="ajax_modal"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="ajax_modal">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#ajax_modal_html_source" aria-controls="ajax_modal_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#ajax_modal_js_source" aria-controls="ajax_modal_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#ajax_modal_css_source" aria-controls="ajax_modal_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="ajax_modal_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="ajax_modal_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="ajax_modal_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,ajax_modal_init,jquery,pop_space_empty">
                                    <button id="ajax_modal_start" type="button" class="btn btn-primary">Show me an ajax modal</button>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Modals with different sizing</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#modals_different_size" aria-expanded="false" aria-controls="modals_different_size"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="modals_different_size">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#modals_different_size_html_source" aria-controls="modals_different_size_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#modals_different_size_js_source" aria-controls="modals_different_size_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#modals_different_size_css_source" aria-controls="modals_different_size_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="modals_different_size_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="modals_different_size_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="modals_different_size_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,modals_different_size_init,modal_in_page,pop_space">
                                            <button type="button" id="mySmallDemoModal" class="btn btn-default" data-toggle="modal" data-target="#myDemoModal">Small</button>
                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myDemoModal">Normal</button>
                                            <button type="button" id="myLargeDemoModal" class="btn btn-default" data-toggle="modal" data-target="#myDemoModal">Large</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Alert modals</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#alerts_modals" aria-expanded="false" aria-controls="alerts_modals"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="alerts_modals">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#alerts_modals_html_source" aria-controls="alerts_modals_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#alerts_modals_js_source" aria-controls="alerts_modals_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#alerts_modals_css_source" aria-controls="alerts_modals_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="alerts_modals_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="alerts_modals_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="alerts_modals_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">

                                        <p class="pad-15">The alert modal displays a specific message and at least one action button. It should be used if you want to make sure information comes through to the user. <br />We suggest to use an alert modal when you need to ask the user for permission or to confirm an action.</p>

                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,alerts_modals_init,pop_space_empty">
                                            <button type="button" id="confirmation_alert" class="btn btn-default">Confirmation</button>
                                            <button type="button" id="confirmation_alert_no_overlay" class="btn btn-default">Confirmation - No overlay</button>
                                            <button type="button" id="error_alert" class="btn btn-default">Error</button>
                                            <button type="button" id="error_alert_no_overlay" class="btn btn-default">Error - No overlay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section id="js-custom-notifications" class="pad-top-30">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>Custom notifications (Growl)</strong></h2>

                            <strong>The alert box should be used to indicate:</strong>
                            <ul>
                                <li>A neutral informative change or action (Info alert - blue)</li>
                                <li>A successful or positive action (Success alert - green)</li>
                                <li>A warning that might need attention (Warning alert - orange)</li>
                                <li>A dangerous or potentially negative action (Danger alert - red)</li>
                            </ul>

                            <div class="row">
                                <div class="col-sm-12 mg-top-20">
                                    <div class="alert alert-info no-margin-bottom" role="alert">
                                        <p><i class="fa fa-info-circle"></i>Based on the bootstrap-notify plugin with documentation on <a href="http://bootstrap-notify.remabledesigns.com/" class="alert-link">http://bootstrap-notify.remabledesigns.com/</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Notification types</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#messages_types" aria-expanded="false" aria-controls="messages_types"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="messages_types">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#messages_types_html_source" aria-controls="messages_types_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#messages_types_js_source" aria-controls="messages_types_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#messages_types_css_source" aria-controls="messages_types_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="messages_types_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="messages_types_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="messages_types_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,messages_types_init">
                                            <button type="button" id="show_info" class="btn btn-default">
                                                Show info message
                                            </button>
                                            <button type="button" id="show_info_full_color" class="btn btn-default">
                                                Show info (full color) message
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
                                            <button type="button" id="show_warning_full_color" class="btn btn-default">
                                                Show warning (full color) message
                                            </button>
                                            <button type="button" id="show_error" class="btn btn-default">
                                                Show error message
                                            </button>
                                            <button type="button" id="show_error_full_color" class="btn btn-default">
                                                Show error (full color) message
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section id="js-tooltips" class="pad-top-30">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>Tooltips</strong></h2>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Types of tooltips</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#tooltips" aria-expanded="false" aria-controls="tooltips"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="tooltips">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#tooltips_html_source" aria-controls="tooltips_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#tooltips_js_source" aria-controls="tooltips_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#tooltips_css_source" aria-controls="tooltips_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="tooltips_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="tooltips_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="tooltips_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,tether_source">
                                            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip type danger" data-type="danger">Type danger</button>
                                            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip type warning" data-type="warning">Type warning</button>
                                            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip type default" data-type="default">Type default</button>
                                            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip without type">Without type</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15">
                                            <div class="alert alert-warning no-margin-bottom"><p><i class="fa fa-warning fonts-up-140"></i>
                                                    In case you use tooltip, take care that it can be seen when is open. Bellow you have a <strong>wrong</strong> example. It can not be seen beacause of sidebar. The right way in this case is to align to the <strong>top</strong>, <strong>right</strong> or <strong>bottom</strong>.
                                                </p></div>

                                            <div class="row mg-top-30">
                                                <div class="col-sm-6">
                                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Wrong position" data-type="default">Wrong way</button>
                                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Right position" data-type="default">Right way</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section id="js-popovers" class="pad-top-30">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>Popovers</strong></h2>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Types of popovers</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#popovers" aria-expanded="false" aria-controls="popovers"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="popovers">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#popovers_html_source" aria-controls="popovers_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#popovers_js_source" aria-controls="popovers_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#popovers_css_source" aria-controls="popovers_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="popovers_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="popovers_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="popovers_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,tether_source">
                                            <button type="button" class="btn btn-default" data-type="danger" data-toggle="popover" title="Popover title" data-placement="top" data-content="Popover type danger">Type danger</button>
                                            <button type="button" class="btn btn-default" data-type="warning" data-toggle="popover" title="Popover title" data-placement="bottom" data-content="Popover type warning">Type warning</button>
                                            <button type="button" class="btn btn-default" data-type="default" data-toggle="popover" title="Popover title" data-placement="left" data-content="Popover type default">Type default</button>
                                            <button type="button" class="btn btn-default" data-toggle="popover" title="Popover title" data-placement="right" data-content="Popover without type">Without type</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15">
                                            <div class="alert alert-warning no-margin-bottom"><p><i class="fa fa-warning fonts-up-140"></i>
                                                    In case you use popover, take care that it can be seen when is open. Bellow you have a <strong>wrong</strong> example. It can not be seen beacause of sidebar. The right way in this case is to align to the <strong>top</strong>, <strong>right</strong> or <strong>bottom</strong>.
                                                </p></div>

                                            <div class="row mg-top-30">
                                                <div class="col-sm-6">
                                                    <button type="button" class="btn btn-default" data-type="default" data-toggle="popover" title="Popover title" data-placement="left" data-content="Wrong position">Wrong way</button>
                                                    <button type="button" class="btn btn-default" data-type="default" data-toggle="popover" title="Popover title" data-placement="top" data-content="Right position">Right way</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>

                <section id="js-tabs" class="pad-top-30">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>Tabs</strong></h2>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Basic example</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#tabs" aria-expanded="false" aria-controls="tabs"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="tabs">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#tabs_html_source" aria-controls="tabs_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#tabs_js_source" aria-controls="tabs_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#tabs_css_source" aria-controls="tabs_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="tabs_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="tabs_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="tabs_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,tabs_init,grid_locale_en_source,jqgrid_source,jqgrid_css">
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
                            </div>


                            <div>

                            </div>
                        </div>
                    </div>
                </section>

                <section id="js-utilities" class="pad-top-30">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>Utilities</strong></h2>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Checkboxes disguised as buttons</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#checkboxes_as_buttons" aria-expanded="false" aria-controls="checkboxes_as_buttons"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="checkboxes_as_buttons">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#checkboxes_as_buttons_html_source" aria-controls="checkboxes_as_buttons_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#checkboxes_as_buttons_js_source" aria-controls="checkboxes_as_buttons_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#checkboxes_as_buttons_css_source" aria-controls="checkboxes_as_buttons_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="checkboxes_as_buttons_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="checkboxes_as_buttons_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="checkboxes_as_buttons_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15">
                                            <p>Add <mark>data-toggle="buttons"</mark> to a  <mark>.btn-group</mark> containing checkbox or radio inputs to enable toggling in their respective styles.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary active">
                                                    <input type="checkbox" autocomplete="off" checked> Checkbox 1 (pre-checked)
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

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>Radio buttons disguised as regular buttons</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#radio_as_regular_buttons" aria-expanded="false" aria-controls="radio_as_regular_buttons"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="radio_as_regular_buttons">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#radio_as_regular_buttons_html_source" aria-controls="radio_as_regular_buttons_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#radio_as_regular_buttons_js_source" aria-controls="radio_as_regular_buttons_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#radio_as_regular_buttons_css_source" aria-controls="radio_as_regular_buttons_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="radio_as_regular_buttons_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="radio_as_regular_buttons_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="radio_as_regular_buttons_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary active">
                                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Radio 1 (preselected)
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" id="option2" autocomplete="off"> Radio 2
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" id="option3" autocomplete="off"> Radio 3
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </section>


                <section id="js-block-ui" class="pad-top-30">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>Block UI</strong></h2>

                            <div class="row">
                                <div class="col-sm-12 mg-top-20">
                                    <div class="alert alert-info no-margin-bottom" role="alert">
                                        <p><i class="fa fa-info-circle"></i>Based on the Block UI plugin documented on: <a href="http://malsup.com/jquery/block/" class="alert-link">jQuery BlockUI Plugin</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Demo</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#block_ui" aria-expanded="false" aria-controls="block_ui"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="block_ui">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#block_ui_html_source" aria-controls="block_ui_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#block_ui_js_source" aria-controls="block_ui_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#block_ui_css_source" aria-controls="block_ui_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="block_ui_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="block_ui_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="block_ui_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,block_ui_init">
                                            <section id="block_ui_demo">
                                                <button type="button" id="block_page" class="btn btn-primary"><i class="fa fa-remove"></i><span>Block page</span></button>
                                                <button type="button" id="block_section" class="btn btn-primary"><i class="fa fa-remove"></i><span>Block this section</span></button>
                                            </section>
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
<div data-dependency-name="pop_space_empty">
    <!-- Div with id 'pop_space' must be inserted before the end of the body tag -->
    <div id="pop_space"></div>
</div>
        <!-- POPUPS:Start -->
<div data-dependency-name="pop_space">
    <!-- Div with id 'pop_space' must be inserted before the end of the body tag -->
    <div id="pop_space">
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
</div>

<div id="pop_space">
    <div class="modal fade" id="ajaxModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel">This is an AJAX modal</h4>
                </div>
                <div class="modal-body">
                    <div class="pad-btm-20 text-center">
                        This modal can contain any kind of info.<br>
                        Check out the code documentation on the main page.
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/9cNpKRXwaj4" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="pull-right panel-controls">
                        <button class="btn btn-success" data-dismiss="modal"><span>Save</span></button>
                        <button class="btn btn-default" data-dismiss="modal"><span>Cancel</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" data-dependency-name="jquery"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-3.2.1.min.js\">"+"<"+"/script>")</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>

        <script src="../dist/plugins/tether/tether.min.js" data-dependency-name="tether_source"></script>

        <script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
        <script src="../dist/js/demo_helpers.js"></script>

        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <script src="../dist/plugins/prism/prism.min.js"></script>

        <!-- PLUGIN: jqGrid: Added in demo for boostrap tabs. Is not necessary for boostrap tabs.-->
        <script src="../dist/plugins/jqgrid/i18n/grid.locale-en.js" data-dependency-name="grid_locale_en_source"></script>
        <script src="../dist/plugins/jqgrid/jquery.jqGrid.min.js" data-dependency-name="jqgrid_source"></script>

        <!-- BOTTOM SCRIPTS:Start -->
        <?php include_once "modules/_mod_bottom_scripts.php"; ?>
        <!-- BOTTOM SCRIPTS:End -->
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript" data-dependency-name="ajax_modal_init">
            $(document).ready(function () {
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
            })
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#ajax_modal_start').off('click').on('click', function() {
                    $('#ajaxModal').modal('show');
                });
            })
        </script>
        <script type="text/javascript" data-dependency-name="modals_different_size_init">
            $(document).ready(function () {
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
            })
        </script>
        <script type="text/javascript" data-dependency-name="alerts_modals_init">
            $(document).ready(function () {
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
            })
        </script>
        <script type="text/javascript" data-dependency-name="messages_types_init">
            $(document).ready(function () {
                $('#show_info').on('click',function(){
                    addNotification('<span>Prepare yourself! This is an informational message: Information</span>', 'info');
                });
                $('#show_info_full_color').on('click',function(){
                    addNotification('<span>Prepare yourself! This is an informational message: Information</span>', 'info-full-color');
                });
                $('#show_success').on('click',function(){
                    addNotification('<span>This is a success message.</span>', 'success');
                });
                $('#show_success_full_color').on('click',function(){
                    addNotification('<span>This is a success message.</span>', 'success-full-color');
                });
                $('#show_warning').on('click',function(){
                    addNotification('<span>Are you prepared? This is a warning message: Warning</span>', 'warning');
                });
                $('#show_warning_full_color').on('click',function(){
                    addNotification('<span>Are you prepared? This is a warning message: Warning</span>', 'warning-full-color');
                });
                $('#show_error').on('click',function(){
                    addNotification('<span>Oh SNAP! This is an error message: Run!</span>', 'danger');
                });
                $('#show_error_full_color').on('click',function(){
                    addNotification('<span>Oh SNAP! This is an error message: Run!</span>', 'danger-full-color');
                });
            })
        </script>
        <script type="text/javascript" data-dependency-name="block_ui_init">
            $(document).ready(function () {
                $('#block_page').on('click', function (e) {
                    var $self = $(e.currentTarget);
                    $('body').blockControl({
                        loadingIconType: "cubeGrid",
                        iconColorClass: "light",
                        overlayColor: "#000",
                        blurElement: $self
                    });
                    setTimeout(function () {
                        $('body').unblockControl({focusElement: $self});
                    }, 3000);
                });

                $('#block_section').on('click', function (e) {
                    var section = $('#block_ui_demo');
                    var $self = $(e.currentTarget);
                    section.blockControl({
                        blurElement: $self
                    });
                    setTimeout(function () {
                        section.unblockControl({focusElement: $self})
                    }, 3000);
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                demoHelpers();  // Require demo_helpers.js
                showPageCode();
            });
        </script>

        <script type="text/javascript" data-dependency-name="tabs_init">
            $(document).ready(function () {
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
                        { label: 'id', name: 'id',           index: 'id', key: true, hidden: true, width: "20" },
                        { label: 'First Name', name: 'firstname',    index: 'firstname', width: "100", editable: true },
                        { label: 'Last Name', name: 'lastname',     index: 'lastname', editable: true },
                        { label: 'Username', name: 'username',     index: 'username', editable: true },
                        { label: 'Job type', name: 'jobtype',      index: 'jobtype', editable: true },
                        { label: 'Code name', name: 'codename',     index: 'codename', editable: true },
                        { label: 'Spirit animal', name: 'spirit_animal',index: 'spirit_animal', editable: true },
                        {
                            name: "Actions",
                            width: 60,
                            formatter: "actions",
                            formatoptions: {
                                keys: true,
                                editOptions: {},
                                addOptions: {},
                                delOptions: {}
                            }
                        }
                    ]
                };

                new PhotonJqGrid(listingParameters).init();

                $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                    $(window).resize();
                });
            })
        </script>
        <!-- DOCUMENT-READY:End -->

</body>
</html>
