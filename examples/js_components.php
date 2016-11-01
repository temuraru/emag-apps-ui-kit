<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <title>JS Components - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php"?>
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
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="container-fluid pad-sep-60">
                                <h1>eMAG Apps UI KIT - JS Components</h1>
                                <p>The lightning-fast, modular, mobile-friendly admin template.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="javascriptEnhancements" class="pad-top-40">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Javascript Components</strong></h2>
                                    <p><strong>These elements need both the main stylesheet and the main javascript file
                                            in order to be displayed and function properly.</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="cssListGroups" class="pad-top-20">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel show-panel-example">
                                <div class="show-panel-body">
                                    <h4 class="text-primary"><strong>Modals</strong></h4>
                                    <p><strong>Default styling:</strong></p>
                                    <p>Modals are streamlined, but flexible, dialog prompts with the minimum required
                                        functionality and smart defaults.</p>
                                    <div class="alert alert-warning">
                                        <i class="fa fa-warning fonts-up-140"></i>&nbsp;<strong>Multiple open modals not
                                            supported</strong> Be sure not to open a modal while another is still
                                        visible. Showing more than one modal at a time requires custom code.
                                    </div>
                                    <div class="alert alert-warning">
                                        <i class="fa fa-warning fonts-up-140"></i>&nbsp;<strong>Modal markup
                                            placement</strong> Try to place a modal's HTML code inside the <code>&lt;div
                                            id="popSpace"&gt;&lt;div&gt;</code> in your document to avoid other
                                        components affecting the modal's appearance and/or functionality.
                                    </div>
                                    <div class="pad-sep-40">
                                        <div class="show-example-modal" data-example-id="static-modal">
                                            <div class="modal" tabindex="-1" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close"><i class="fa fa-close"
                                                                                          aria-hidden="true"></i>
                                                            </button>
                                                            <h4 class="modal-title">Modal title</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>This is </p>
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
                                <div class="show-panel-footer">
                                </div>
                                <div class="show-panel-body">
                                    <p><strong>Demo modals with different sizing:</strong></p>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-lg-8 col-lg-offset-2">
                                                <div class="btn-group btn-group-justified" role="group"
                                                     aria-label="...">
                                                    <div class="btn-group" role="group">
                                                        <button type="button" id="mySmallDemoModal"
                                                                class="btn btn-default" data-toggle="modal"
                                                                data-target="#myDemoModal">Small
                                                        </button>
                                                    </div>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-default"
                                                                data-toggle="modal" data-target="#myDemoModal">Normal
                                                        </button>
                                                    </div>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" id="myLargeDemoModal"
                                                                class="btn btn-default" data-toggle="modal"
                                                                data-target="#myDemoModal">Large
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="show-panel-footer">
                                </div>
                                <div class="show-panel-body">
                                    <p><strong>Informational modals:</strong></p>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-lg-8 col-lg-offset-2">
                                                <div class="btn-group btn-group-justified" role="group"
                                                     aria-label="...">
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-default">Info modal
                                                        </button>
                                                    </div>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-default">Warning modal
                                                        </button>
                                                    </div>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-default">Danger modal
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="show-panel-footer">
                                </div>
                                <div class="show-panel-body">
                                    <p><strong>Varying modal content based on trigger button:</strong></p>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-lg-8 col-lg-offset-2">
                                                <div class="btn-group btn-group-justified" role="group"
                                                     aria-label="...">
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-default">@Rob Stark
                                                        </button>
                                                    </div>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-default">@Daenerys
                                                            Targaryen
                                                        </button>
                                                    </div>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-default">@Tyrion
                                                            Lannister
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="show-panel-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="cssListGroups" class="pad-top-20">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel show-panel-example">
                                <div class="show-panel-body">
                                    <h4 class="text-primary" data-toggle="tooltip" data-placement="top"
                                        title="Tooltip on top"><strong>Tooltips</strong></h4>
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
                                <div class="show-panel-footer">
                                    <pre class="language-markup"><code class="language-markup" data-showcase="code"></code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="cssListGroups" class="pad-top-20">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel show-panel-example">
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
                                <div class="show-panel-footer">
                                </div>
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
                                <div class="show-panel-footer">
                                </div>
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
                                <div class="show-panel-footer">
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
<div id="popSpace">
    <div class="modal fade" id="myDemoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel">Standard modal</h4>
                </div>
                <div class="modal-body">
                    <h2>This is bacon ipsum</h2>
                    <p class="lead">Bacon ipsum dolor amet pork fatback elit dolor, short loin t-bone drumstick fugiat
                        ribeye. </p>
                    <div class="pad-sep-20">
                        <span class="caption">MODAL, 8hrs ago</span>
                    </div>
                    <p>Ribeye tempor jerky cupidatat ea tongue. Ribeye strip steak meatloaf nostrud, alcatra ullamco
                        doner ad magna beef ribs excepteur qui duis leberkas. Sirloin spare ribs dolore aliquip, jowl
                        prosciutto nulla ribeye beef ribs. Tenderloin proident tail exercitation spare ribs tempor.
                        Short loin turkey ad, ut cupim pig jowl landjaeger frankfurter picanha strip steak. Labore esse
                        cillum minim ea, turducken leberkas alcatra cupidatat doner pig occaecat non ground round pork
                        loin.</p>
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

<?php include_once "modules/_mod_js_footer.php"?>

</body>
</html>