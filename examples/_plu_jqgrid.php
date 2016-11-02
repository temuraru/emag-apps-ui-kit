<!DOCTYPE html>
<html lang="en" class="js">
<head>

        <title>JqGrid - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
        <link rel="stylesheet" href="../dist/plugins/jqgrid/ui.jqgrid.min.css">
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
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="container-fluid pad-sep-60">
                                <h1>eMAG Apps UI KIT - JqGrid implementation</h1>
                                <p>The lightning-fast, modular, mobile-friendly admin template.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="jqgridStandard" class="pad-top-20">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel show-panel-example">
                                <div class="show-panel-body">
                                    <p><strong>Based on: </strong><a href="http://www.trirand.com/blog/" target="_blank" class="link">jQgrid Documentation</a></p>

                                    <table id="grid_table" class="table table-bordered"></table>
                                    <div id="grid_pager"></div>
                                </div>
                                <div class="show-panel-footer">
                                    <!-- @TODO make a function to remove space and reuse the code from examples. -->
                                    <b>Include CSS</b>
                                    <pre class="language-html">
                                        <code class="language-html">
&lt;link rel="stylesheet" href="../dist/plugins/jqgrid/ui.jqgrid.min.css">
                                        </code>
                                    </pre>
                                    <b>Include JS</b>
                                    <pre class="language-html">
                                        <code class="language-html">
&lt;script src="../dist/plugins/jqgrid/i18n/grid.locale-en.js">&lt;/script>
&lt;script src="../dist/plugins/jqgrid/jquery.jqGrid.min.js">&lt;/script>
                                        </code>
                                    </pre>
                                    <b>HTML</b>
                                    <pre class="language-html">
                                        <code class="language-html">
&lt;table id="grid_table" class="table table-bordered"&gt;&lt;/table&gt;
&lt;div id="grid_pager"&gt;&lt;/div&gt;
                                        </code>
                                    </pre>

                                    <b>Javascript</b>
                                    <pre class="language-javascript">
                                        <code class="language-javascript" data-showcase="code">
$(document).ready(function() {

    var actions =
        '&lt;div class="btn-group">' +
            '&lt;button type="button" class="btn btn-sm btn-default">' +
                '&lt;i class="fa fa-trash text-danger">&lt;/i>' +
                '&lt;span class="sr-only">Delete&lt;/span>' +
            '&lt;/button>' +
        '&lt;/div>';

    var data = {
        'page': '1',
        'records': '6',
        'rows': [
            { 'name': 'Lorem ipsum dolor sit amet', 'status': "&lt;span class='label label-success'>Live&lt;/span>", 'platform': 'google.ro', 'products': '0', 'actions': actions },
            { 'name': 'Name', 'status': "&lt;span class='label label-success'>Live&lt;/span>", 'platform': 'google.ro', 'products': '23.232', 'actions': actions },
            { 'name': 'Name', 'status': "&lt;span class='label label-success'>Live&lt;/span>", 'platform': 'google.ro', 'products': '560.032', 'actions': actions },
            { 'name': 'Name', 'status': "&lt;span class='label label-default'>Inactive&lt;/span>", 'platform': 'google.hu', 'products': '88.932', 'actions': actions },
            { 'name': 'Name', 'status': "&lt;span class='label label-default'>Inactive&lt;/span>", 'platform': 'google.bg', 'products': '76.999', 'actions': actions },
            { 'name': 'Name', 'status': "&lt;span class='label label-default'>Inactive&lt;/span>", 'platform': 'google.bg', 'products': '76.999', 'actions': actions }
        ]
    };

    var listingParameters = {
        table: '#grid_table',
        pager: '#grid_pager',
        datatype: 'jsonstring',
        caption: 'Listing caption',
        datastr: data,
        colNames: [
        'Name',
        'Status',
        'Platform',
        'Available products',
        'Actions'
        ],
        colModel: [
            {name: 'name', index: 'name', width: 2, sortable: false},
            {name: 'status', index: 'status', width: 1, sorttype: "text"},
            {name: 'platform', index: 'platform', width: 1, sorttype: "text"},
            {name: 'products', index: 'products', width: 2, sorttype: "text"},
            {name: 'actions', index: 'actions', width: 1, sortable: false, align:"center" }
        ]
    };

    new PhotonJqGrid(listingParameters).init();

});
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> <!-- #jqgridStandard -->

                <section id="jqgridWithFormmaters" class="pad-top-20">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel show-panel-example">
                                <div class="show-panel-body">
                                    <p><strong>Based on: </strong><a href="http://www.trirand.com/blog/" target="_blank" class="link">jQgrid Documentation</a></p>

                                    <table id="grid_with_formatter_table" class="table table-bordered"></table>
                                    <div id="grid_with_formatter_pager"></div>
                                </div>
                                <div class="show-panel-footer">
                                    <b>Include CSS</b>
                                    <pre class="language-html">
                                        <code class="language-html">
&lt;link rel="stylesheet" href="../dist/plugins/jqgrid/ui.jqgrid.min.css">
                                        </code>
                                    </pre>
                                    <b>Include JS</b>
                                    <pre class="language-html">
                                        <code class="language-html">
&lt;script src="../dist/plugins/jqgrid/i18n/grid.locale-en.js">&lt;/script>
&lt;script src="../dist/plugins/jqgrid/jquery.jqGrid.min.js">&lt;/script>
                                        </code>
                                    </pre>
                                    <b>HTML</b>
                                    <pre class="language-html">
                                        <code class="language-html">
&lt;table id="grid_with_formatter_table" class="table table-bordered"&gt;&lt;/table&gt;
&lt;div id="grid_with_formatter_pager"&gt;&lt;/div&gt;
                                        </code>
                                    </pre>
                                    <b>Javascript</b>
                                    <pre class="language-javascript">
                                        <code class="language-javascript" data-showcase="code">
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
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> <!-- #jqgridWithFormmaters -->
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

<!-- PLUGIN: This script file helps display demo code. Don't add it everywhere -->
<script src="../dist/js/demo_helpers.js"></script>

<!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
<script src="../dist/plugins/prism/prism.min.js"></script>


<script src="../dist/plugins/jqgrid/i18n/grid.locale-en.js"></script>
<script src="../dist/plugins/jqgrid/jquery.jqGrid.min.js"></script>

<script src="../dist/js/main_script.min.js"></script>

<script src="../dist/js/demo_helpers.js"></script>
<!-- SCRIPTS:End -->

<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
    $(document).ready(function() {
        console.log('Ready, Captain!');

        showcasing(); //Requires demo_helpers.js, prism.min.js and prism.min.css

        function getListingDummyData() {

            var statusLive = '<span class="label label-success">Live</span>';
            var statusInactive = '<span class="label label-default">Inactive</span>';
            var actions =
                '<div class="btn-group">' +
                    '<button type="button" class="btn btn-sm btn-default">' +
                        '<i class="fa fa-trash text-danger"></i>' +
                        '<span class="sr-only">Delete</span>' +
                    '</button>' +
                '</div>';

            var data = {
                'page': '1',
                'records': '6',
                'rows': [
                    { 'name': 'Lorem ipsum dolor sit amet', 'status': statusLive, 'platform': 'google.ro', 'products': '0', 'actions': actions },
                    { 'name': 'Name', 'status': statusInactive, 'platform': 'google.ro', 'products': '23.232', 'actions': actions },
                    { 'name': 'Name', 'status': statusInactive, 'platform': 'google.ro', 'products': '560.032', 'actions': actions },
                    { 'name': 'Name', 'status': statusLive, 'platform': 'google.hu', 'products': '88.932', 'actions': actions },
                    { 'name': 'Name', 'status': statusLive, 'platform': 'google.bg', 'products': '76.999', 'actions': actions },
                    { 'name': 'Name', 'status': statusLive, 'platform': 'google.bg', 'products': '76.999', 'actions': actions }
                ]
            };
            return data;
        }

        var listingParameters = {
            table: '#grid_table',
            pager: '#grid_pager',
            datatype: 'jsonstring',
            caption: 'Listing caption',
            datastr: getListingDummyData(),
            colNames: [
                'Name',
                'Status',
                'Platform',
                'Available products',
                'Actions'
            ],
            colModel: [
                {name: 'name', index: 'name', width: 2, sortable: false},
                {name: 'status', index: 'status', width: 1, sorttype: "text"},
                {name: 'platform', index: 'platform', width: 1, sorttype: "text"},
                {name: 'products', index: 'products', width: 2, sorttype: "text"},
                {name: 'actions', index: 'actions', width: 1, sortable: false, align:"center" }
            ]
        };

        new PhotonJqGrid(listingParameters).init();

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

    });
</script>
<!-- DOCUMENT-READY:End -->
</body>
</html>