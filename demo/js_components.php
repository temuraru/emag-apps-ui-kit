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
                <section class="pad-top-20">
                    <div class="show-panel ">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>Modals</strong></h4>
                            <p><strong>Default styling:</strong></p>

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

                            <p>Modals are streamlined, but flexible, dialog prompts with the minimum required
                                functionality and smart defaults.</p>
                            <div class="alert alert-info">
                                <i class="fa fa-warning fonts-up-140"></i>&nbsp;<strong>Multiple open modals not
                                    supported</strong> Be sure not to open a modal while another is still
                                visible. Showing more than one modal at a time requires custom code.
                            </div>
                            <div class="alert alert-info">
                                <i class="fa fa-warning fonts-up-140"></i>&nbsp;<strong>Modal markup
                                    placement</strong> Try to place a modal's HTML code inside the <code>&lt;div
                                    id="popSpace"&gt;&lt;div&gt;</code> in your document to avoid other
                                components affecting the modal's appearance and/or functionality.
                            </div>
                        </div>
                    </div>
                    <div class="show-panel ">
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
                    </div>
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

                            <button type="button" id="show_info" class="btn btn-primary btn-sm">
                                Show info message
                            </button>
                            <hr>
                            <button type="button" id="show_warning" class="btn btn-default btn-sm">
                                Show warning message
                            </button>
                            <hr>
                            <button type="button" id="show_error" class="btn btn-danger btn-sm">
                                Show error message
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
                                    <li role="presentation"><a href="#profile" aria-controls="profile1" role="tab" data-toggle="tab">jqGrid with inline editing</a></li>
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
                                    <div role="tabpanel" class="tab-pane" id="profile1">
                                        test
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
                    <h2>Suspendisse rutrum</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="pad-sep-20">
                        <span class="caption">Nam scelerisque nunc</span>
                    </div>
                    <p>
                        Curabitur porta non est in consectetur. Aenean ut purus volutpat, sodales sem nec, fermentum massa. Mauris tristique pellentesque ante ullamcorper aliquam. Maecenas dignissim porta turpis, interdum tempus velit aliquam ac. Morbi a risus a purus porttitor efficitur. Donec laoreet condimentum nisi nec bibendum. Sed non neque mollis, rutrum tellus ac, porttitor elit. Pellentesque sed magna nisi. Suspendisse venenatis massa quis velit fringilla, ac consequat dolor tincidunt. Etiam nec fermentum lectus, quis dignissim nunc. Quisque vel quam quis sapien ornare porta nec a purus. Nullam finibus convallis mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>
        
        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <script src="../dist/plugins/prism/prism.min.js"></script>

        <script src="../dist/plugins/tether/tether.min.js"></script>

        <script src="../dist/js/main_script.min.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>

        <!-- PLUGIN: jqGrid: Added in demo for boostrap tabs. Is not necessary for boostrap tabs.-->
        <script src="../dist/plugins/jqgrid/i18n/grid.locale-en.js"></script>
        <script src="../dist/plugins/jqgrid/jquery.jqGrid.min.js"></script>

        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
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




                //This function is just fo sho. You don't really have to include it in your app, man.
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
                    addNotification("<span>Prepare yourself! This is an informational message: Information</span>","info");
                });
                $('#show_warning').on('click',function(){
                    addNotification("<span>Are you prepared? This is a warning message: Warning</span>","warning");
                });
                $('#show_error').on('click',function(){
                    addNotification("<span>Oh SNAP! This is an error message: Run!</span>","danger");
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
            });
        </script>
        <!-- DOCUMENT-READY:End -->
        
</body>
</html>