<!DOCTYPE html>
<html lang="en" class="js">
<head>

        <title>jQGrid - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
        
        <link rel="stylesheet" href="../dist/plugins/jqgrid/ui.jqgrid.min.css">
        <link rel="stylesheet" href="../dist/plugins/drop/drop.min.css">

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
                        <p><b>jQGrid</b></p>
                    </div>
                </div>
                <section class="pad-top-40">
                    <div class="show-panel">
                        <div class="show-panel-body">
                            <div class="alert alert-info" role="alert">
                                <p>
                                    <i class="fa fa-info-circle"></i>
                                    Based on: <a href="http://www.trirand.com/blog/" target="_blank" class="link">jQGrid Documentation</a></p>
                                </p>
                            </div>

                            <h3>Table of contents</h3>
                            <hr>
                            <ul>
                                <li><a href="#jqGrid-basic">jqGrid basic</a></li>
                                <li><a href="#jqGrid-with-sticky-panels">jqGrid with sticky panels</a></li>
                                <li><a href="#jqGrid-with-column-chooser">jqGrid with column chooser</a></li>
                                <li><a href="#jqGrid-with-selectable-rows">jqGrid with selectable rows</a></li>
                                <li><a href="#jqGrid-ierarchical-elements-tree">jqGrid with ierarchical elements (Tree)</a></li>
                                <li><a href="#jqGrid-with-subgrid">jqGrid with subgrid</a></li>
                                <li><a href="#jqGrid-with-inline-editing">jqGrid with inline editing</a></li>
                                <li><a href="#jqGrid-with-actions">jqGrid with actions</a></li>
                                <li><a href="#jqGrid-with-data-formatters">jqGrid with data formatters</a></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="jqGrid-basic" class="pad-top-40">
                    <div class="show-panel">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>jqGrid basic</strong></h4>

                            <div class="pad-top-20">
                                <table id="grid_table" class="table table-bordered"></table>
                                <div id="grid_pager"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="jqGrid-with-sticky-panels" class="pad-top-40">
                    <div class="show-panel">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>jqGrid with sticky panels</strong></h4>

                            <div class="pad-top-20">
                                <table id="grid_table_sticky" class="table table-bordered"></table>
                                <div id="grid_pager_sticky"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="jqGrid-with-column-chooser" class="pad-top-40">
                    <div class="show-panel">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>jqGrid with column chooser</strong></h4>

                            <div class="pad-top-20 pad-btm-20 clearfix">
                                <button type="button" id="grid_table_column_chooser_button" class="btn btn-primary pull-right">
                                    Select columns <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </button>
                            </div>

                            <table id="grid_table_column_chooser" class="table table-bordered"></table>
                            <div id="grid_pager_column_chooser"></div>
                        </div>
                    </div>
                </section>

                <section id="jqGrid-with-selectable-rows" class="pad-top-40">
                    <div class="show-panel">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>jgGrid with selectable rows</strong></h4>

                            <div class="pad-top-20 pad-btm-20">
                                <button type="button" class="btn btn-primary btn-sm check_rows" >Get rows</button>
                            </div>

                            <table id="grid_table_with_selectable_rows" class="table table-bordered"></table>
                            <div id="grid_pager_with_selectable_rows"></div>

                            <div class="pad-top-20">
                                <button type="button" class="btn btn-primary btn-sm check_rows" >Get rows</button>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="jqGrid-ierarchical-elements-tree" class="pad-top-40">
                    <div class="show-panel">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>jqGrid with ierarchical elements (Tree)</strong></h4>

                            <div class="pad-top-20">
                                <table id="grid_table_with_hierarchy" class="table table-bordered"></table>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="jqGrid-with-subgrid" class="pad-top-40">
                    <div class="show-panel">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>jqGrid with subgrid</strong></h4>

                            <div class="pad-top-20">
                                <table id="grid_table_with_subgrid" class="table table-bordered"></table>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="jqGrid-with-inline-editing" class="pad-top-40">
                    <div class="show-panel">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>jqGrid with inline editing</strong></h4>

                            <div class="pad-top-20">
                                <table id="grid_table_with_inline_edit" class="table table-bordered"></table>
                                <div id="grid_pager_with_inline_edit"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="jqGrid-with-actions" class="pad-top-40">
                    <div class="show-panel">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>jqGrid with actions</strong></h4>

                            <div class="pad-top-20">
                                <table id="grid_table_with_actions" class="table table-bordered"></table>
                                <div id="grid_pager_with_actions"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="jqGrid-with-data-formatters" class="pad-top-20">
                    <div class="show-panel">
                        <div class="show-panel-body">
                            <h4 class="text-primary"><strong>jqGrid with data formatters</strong></h4>

                            <div class="pad-top-20">
                                <table id="grid_with_formatter_table" class="table table-bordered"></table>
                                <div id="grid_with_formatter_pager"></div>
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
<div id="popSpace"></div>
<!-- POPUPS:End -->

<!-- SCRIPTS:Start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>

<!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
<script src="../dist/plugins/prism/prism.min.js"></script>

<script src="../dist/js/lib/jquery-ui.1.11.4.min.js"></script>

<script src="../dist/plugins/jqgrid/i18n/grid.locale-en.js"></script>
<script src="../dist/plugins/jqgrid/jquery.jqGrid.min.js"></script>
<script src="../dist/plugins/stickyKit/stickyKit.min.js"></script>
<script src="../dist/plugins/tether/tether.min.js"></script>
<script src="../dist/plugins/drop/drop.min.js"></script>

<script src="../dist/js/main_script.min.js"></script>

<script src="../dist/js/demo_helpers.js"></script>
<!-- SCRIPTS:End -->

<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
    $(document).ready(function() {
        console.log('Ready, Captain!');

        demoHelpers();  // Require demo_helpers.js

        showcasing(); //Requires demo_helpers.js, prism.min.js and prism.min.css

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

        var listingParametersSticky = {
            table: '#grid_table_sticky',
            pager: '#grid_pager_sticky',
            datatype: 'jsonstring',
            caption: 'Listing caption',
            datastr: getListingDummyData(),
            stickyButtons: true,
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

        new PhotonJqGrid(listingParametersSticky).init();

        initPhotonStick();

        var listingParametersWithColumnChooser = {
            table: '#grid_table_column_chooser',
            pager: '#grid_pager_column_chooser',
            datatype: 'jsonstring',
            caption: 'Listing caption',
            datastr: getListingDummyData(),
            styleUI : 'fontAwesome',
            useCustomColumnChooser: true,
            columnChooserOptions: {
                saveBtnLabel: 'Done',
                cancelBtnLabel: 'Cancel',
                actionButton: '#grid_table_column_chooser_button'
            },
            colModel: [
                { label: 'First Name', name: 'firstname', key: true, width: "100" },
                { label: 'Last Name', name: 'lastname' },
                { label: 'Username', name: 'username' },
                { label: 'Hobby', name: 'jobtype' },
                { label: 'Nickname', name: 'codename' },
                { label: 'Spiritual Animal', name: 'spirit_animal' }
            ]
        };

        var photonGrid = new PhotonJqGrid(listingParametersWithColumnChooser);
        photonGrid.init();
        $(photonGrid.grid).jqGrid('columnChooser');

        var listingParametersWithSelectableRows = {
            table: '#grid_table_with_selectable_rows',
            pager: '#grid_pager_with_selectable_rows',
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
            ],
            multiselect: true
        };

        new PhotonJqGrid(listingParametersWithSelectableRows).init();

        $("#grid_table_with_hierarchy").jqGrid({
            autoResizing: { compact: true },
            data: getListingDummyData(),
            datatype: "local",
            styleUI : 'fontAwesome',
            sortable: true,
            colNames: ['Id', 'First Name', 'Last Name', 'Username', 'Hobby', 'Nickname', 'Spiritual Animal'],
            colModel: [
                { name: 'id',           index: 'id',       key: true, hidden: true,   width: "20" },
                { name: 'firstname',    index: 'firstname',       width: "100" },
                { name: 'lastname',     index: 'lastname' },
                { name: 'username',     index: 'username' },
                { name: 'jobtype',      index: 'jobtype' },
                { name: 'codename',     index: 'codename' },
                { name: 'spirit_animal',index: 'spirit_animal' }
            ],
            loadComplete: function(){
                //remove border---
                $this = $(this);
                $this.find('tr').find('td:visible:last').css({'border-right': '0'});
                $this.closest('.ui-jqgrid-view').find('tr').find('th:visible:last').css({'border-right': '0'});
                $this.find('.treeclick').on('click', function () {
                    $this.find('tr').find('td:visible:last').css({'border-right': '0'});
                })
            },
            autowidth: true,
            viewrecords: false,
            shrinkToFit: true,
            width: 'auto',
            height: 'auto',
            scrollrows :true,
            rowNum: 10,
            gridview: true,
            sortname: 'firstname',
            treeGrid: true,
            loadonce: true,
            treeGridModel: 'adjacency',
            treedatatype: 'json',
            ExpandColumn: 'firstname',
            ExpandColClick : true
        });

        $("#grid_table_with_subgrid").jqGrid({
            iconSet: "fontAwesome",
            autoResizing: { compact: true },
            datatype: "jsonstring",
            datastr: getListingDummyData(),
            styleUI : 'fontAwesome',
            sortable: true,
            colNames: ['Id', 'First Name', 'Last Name', 'Username', 'Hobby', 'Nickname', 'Spiritual Animal'],
            colModel: [
                { name: 'id',           index: 'id', hidden: true, width: "20" },
                { name: 'firstname',    index: 'firstname', key: true, width: "100" },
                { name: 'lastname',     index: 'lastname' },
                { name: 'username',     index: 'username' },
                { name: 'jobtype',      index: 'jobtype' },
                { name: 'codename',     index: 'codename' },
                { name: 'spirit_animal',index: 'spirit_animal' }
            ],
            altRows: false,
            autowidth: true,
            viewrecords: true,
            shrinkToFit: true,
            width: 'auto',
            height: 'auto',
            rowNum: 10,
            subGrid: true,
            subGridRowExpanded: function(subgrid_id, row_id) {
                // we pass two parameters
                // subgrid_id is a id of the div tag created within a table
                // the row_id is the id of the row
                // If we want to pass additional parameters to the url we can use
                // the method getRowData(row_id) - which returns associative array in type name-value
                // here we can easy construct the following
                var subgrid_table_id;
                subgrid_table_id = subgrid_id+"_t";
                jQuery("#"+subgrid_id).html("<table id='"+subgrid_table_id+"' class='table'></table>");
                jQuery("#"+subgrid_table_id).jqGrid({
                    datatype: "jsonstring",
                    datastr: getListingDummyData(),
                    colModel: [
                        { name: 'id',           index: 'id', hidden: true, width: "20" },
                        { name: 'firstname',    index: 'firstname', key: true, width: "100" },
                        { name: 'lastname',     index: 'lastname' },
                        { name: 'username',     index: 'username' },
                        { name: 'jobtype',      index: 'jobtype' },
                        { name: 'codename',     index: 'codename' },
                        { name: 'spirit_animal',index: 'spirit_animal' }
                    ],
                    height: '100%',
                    rowNum:5,
                    sortname: 'num',
                    sortorder: "asc"
                });
            }
        });

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

        var listingWithActionsParameters = {
            table: '#grid_table_with_actions',
            pager: '#grid_pager_with_actions',
            datatype: 'jsonstring',
            caption: 'Listing caption',
            datastr: getListingWithActionsDummyData(),
            colNames: [
                'Name',
                'Status',
                'Platform',
                'Available products',
                'Actions'
            ],
            colModel: [
                {name: 'name', index: 'name', width: 2, sortable: false},
                {name: 'status', index: 'status', width: 1, sorttype: "text", formatter: PhotonDataFormatter.badgeAndTooltip },
                {name: 'platform', index: 'platform', width: 1, sorttype: "text"},
                {name: 'products', index: 'products', width: 2, sorttype: "text"},
                {name: 'actions', index: 'actions', width: 2, sortable: false, formatter: PhotonDataFormatter.actionsButtons }
            ],
            gridComplete: function() {
                addMoreActions('#grid_table_with_actions');
                $('#grid_table_with_actions .label-with-tooltip').tooltip();
            }
        };

        new PhotonJqGrid(listingWithActionsParameters).init();

        var listingWithFormatterParameters = {
            table: '#grid_with_formatter_table',
            pager: '#grid_with_formatter_pager',
            datatype: 'jsonstring',
            caption: 'jqGrid with data formatters',
            datastr: getListingWithFormatterDummyData(),
            colNames: [
                'id',
                'notAvailable',
                'dateTime',
                'date',
                'time',
                'userEmail',
                'country'
            ],
            colModel: [
                {name: 'id', index: 'id', sortable: false, width: 1, formatter: PhotonDataFormatter.id },
                {name: 'notAvailable', index: 'notAvailable', sortable: false, width: 3, formatter: PhotonDataFormatter.notAvailable },
                {name: 'dateTime', index: 'dateTime', sortable: false, width: 3, formatter: PhotonDataFormatter.dateTime },
                {name: 'date', index: 'date', sortable: false, width: 2, formatter: PhotonDataFormatter.date },
                {name: 'time', index: 'time', sortable: false, width: 2, formatter: PhotonDataFormatter.time },
                {name: 'userEmail', index: 'userEmail', sortable: false, width: 3, formatter: PhotonDataFormatter.userEmail },
                {name: 'country', index: 'country', sortable: false, width: 1, formatter: PhotonDataFormatter.country }
            ]
        };

        new PhotonJqGrid(listingWithFormatterParameters).init();

        function getSelectedRows() {
            var grid = $("#grid_table_with_selectable_rows");
            var rowKey = grid.getGridParam("selrow");

            if (!rowKey)
                alert("No rows are selected");
            else {
                var selectedIDs = grid.getGridParam("selarrrow");
                var result = "";
                for (var i = 0; i < selectedIDs.length; i++) {
                    result += selectedIDs[i] + ",";
                }
                alert(result);
            }
        }

        $('button.check_rows').on('click', function(){
            getSelectedRows();
        });

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

        function getListingWithActionsDummyData() {

            var status1 = '{"label": "Live", "labelClass": "label-success", "tooltip": "Default tooltip"}';
            var status2 = '{"label": "Deleted", "labelClass": "label-danger", "tooltip": "Danger tooltip", "tooltipType": "danger"}';
            var status3 = '{"label": "Warning", "labelClass": "label-warning", "tooltip": "Warning tooltip", "tooltipType": "warning"}';
            var status4 = 'Inactive';

            var actions1 = [
                {
                    icon: 'fa-pencil',
                    attr: {
                        title: 'Edit'
                    },
                    group: 0
                },
                {
                    icon: 'fa-trash',
                    attr: {
                        title: 'Delete'
                    },
                    group: 0
                },
                {
                    icon: 'fa-ellipsis-h',
                    attr: {
                        title: 'More actions'
                    },
                    group: 0,
                    dropdown: [
                        {
                            icon: 'fa-square',
                            label: 'Action 1',
                            attr: {
                                title: 'Action 1'
                            }
                        },
                        {
                            icon: 'fa-square',
                            label: 'Action 2',
                            attr: {
                                title: 'Action 2'
                            }
                        },
                        {
                            icon: 'fa-square',
                            label: 'Action 3',
                            attr: {
                                title: 'Action 3'
                            }
                        },
                        {
                            icon: 'fa-square',
                            label: 'Action 4',
                            attr: {
                                title: 'Action 4'
                            }
                        },
                        {
                            icon: 'fa-square',
                            label: 'Action 5',
                            attr: {
                                title: 'Action 5'
                            }
                        }
                    ]
                },
            ];
            var actions2 = [
                {
                    icon: 'fa-pencil',
                    attr: {
                        title: 'Edit'
                    },
                    group: 0
                },
                {
                    icon: 'fa-trash',
                    attr: {
                        title: 'Delete'
                    },
                    group: 0
                },
                {
                    label: 'Special action',
                    attr: {
                        title: 'Special action'
                    }
                }
            ];
            var actions3 = [
                {
                    icon: 'fa-pencil',
                    attr: {
                        title: 'Edit'
                    },
                    group: 0
                },
                {
                    icon: 'fa-trash',
                    attr: {
                        title: 'Delete'
                    },
                    group: 1
                },
                {
                    label: 'Action',
                    attr: {
                        title: 'Action'
                    },
                    group: 1
                }
            ];
            var actions4 = '[' +
                '{' +
                '"icon": "fa-pencil",' +
                '"attr": {' +
                '"title": "Edit"' +
                '}' +
                '},' +
                '{' +
                '"icon": "fa-trash",' +
                '"attr": {' +
                '"title": "Delete"' +
                '}' +
                '}' +
                ']';

            var data = {
                'page': '1',
                'records': '6',
                'rows': [
                    { 'name': 'Lorem ipsum dolor sit amet', 'status': status1, 'platform': 'google.ro', 'products': '0', 'actions': actions1 },
                    { 'name': 'Name', 'status': status1, 'platform': 'google.ro', 'products': '23.232', 'actions': actions1 },
                    { 'name': 'Name', 'status': status2, 'platform': 'google.ro', 'products': '560.032', 'actions': actions2 },
                    { 'name': 'Name', 'status': status3, 'platform': 'google.hu', 'products': '88.932', 'actions': actions2 },
                    { 'name': 'Name', 'status': status4, 'platform': 'google.bg', 'products': '76.999', 'actions': actions3 },
                    { 'name': 'Name', 'status': status4, 'platform': 'google.bg', 'products': '76.999', 'actions': actions4 }
                ]
            };
            return data;
        }

        function getListingWithFormatterDummyData() {
            var data = {
                'page': '1',
                'records': '6',
                'rows': [
                    {
                        'id': '0',
                        'notAvailable': 'String value',
                        'dateTime': '2016-07-29 11:53:59',
                        'date': '2016-07-29',
                        'time': '11:53:59',
                        'userEmail': 'john.doe@emag.ro',
                        'country': 'RO',
                        'countryCode': 'ro'
                    },
                    {
                        'id': 1,
                        'notAvailable': '',
                        'dateTime': ['2016-07-29', '11:53:59'],
                        'date': ['2016-07-29'],
                        'time': ['11:53:59'],
                        'userEmail': '{"email": "john.doe@emag.ro"}',
                        'country': '{"country": "RO", "countryCode": "ro"}'
                    },
                    {
                        'id': null,
                        'notAvailable': null,
                        'dateTime': '{"date": "2016-07-29", "time": "11:53:59"}',
                        'date': '{"date": "2016-07-29"}',
                        'time': '{"time": "11:53:59"}',
                        'userEmail': '{"user": "John Doe","email": "john.doe@emag.ro"}',
                        'country': '{"country": "GB", "countryCode": "gb"}'
                    },
                    {
                        /** 'id': 3, */
                        /** 'notAvailable': 'String value', */
                        /** 'dateTime': '2016-07-29 11:53:59', */
                        /** 'date': '2016-07-29', */
                        /** 'time': '11:53:59', */
                        /** 'userEmail': 'john.doe@emag.ro', */
                        /** 'country': 'RO' */
                    },
                    {
                        'id': 4,
                        'notAvailable': ['array val 1', 'array val 2'],
                        'dateTime': {date: '2016-07-29', time: '11:53:59'},
                        'date': {date: '2016-07-29'},
                        'time': {time: '11:53:59'},
                        'userEmail': {displayname: 'John Doe', email: 'john.doe@emag.ro'},
                        'country': {country: 'RO', countryCode: 'ro'}
                    },
                    {
                        'id': 5,
                        'notAvailable': 1024,
                        'dateTime': 1024,
                        'date': 1024,
                        'time': 1024,
                        'userEmail': 1024,
                        'country': 1024
                    }
                ]
            };

            return data;
        }
    });
</script>
<!-- DOCUMENT-READY:End -->
</body>
</html>