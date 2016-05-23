<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Photon - The Superfast, Supersimple UI Kit</title>
    <meta name="description" content="Photon - The superfast, supersimple UI Kit" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="eMAG HX Team">

    <!-- The favicon -->
    <?php include_once "modules/_mod_favicon.php"?>


    <link rel="stylesheet" href="../dist/plugins/jqgrid/ui.jqgrid.min.css">

    <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
    <link rel="stylesheet" href="../dist/plugins/prism/prism.min.css">

    <!-- PHOTON main styles -->
    <link rel="stylesheet" href="../dist/css/main_style.min.css">

    <!--[if lt IE 9]>
    <script src="../dist/js/lib/html5shiv.min.js"></script>
    <script src="../dist/js/lib/respond.min.js"></script>
    <![endif]-->
</head>
<!--[if lt IE 9]><body class="lt-ie9"> <![endif]-->
<!--[if lt IE 9]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
<!-- HEADER:Start -->
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
                                <h1>PHOTON - JqGrid implementation</h1>
                                <p>The lightning-fast, modular, mobile-friendly admin template.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="summernoteStandard" class="pad-top-20">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel show-panel-example">
                                <div class="show-panel-body">
                                    <p><strong>Based on: </strong><a href="http://www.trirand.com/blog/" target="_blank" class="link">jQgrid Documentation</a></p>

                                    <table id="grid-table" class="table table-bordered"></table>
                                    <div id="grid-pager"></div>
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
&lt;script src="../data/scripts/base/custom/mod_photonTranslations.js">&lt;/script>
&lt;script src="../data/scripts/base/custom/mod_photonJqGrid.js">&lt;/script>
                                        </code>
                                    </pre>
                                    <b>HTML</b>
                                    <pre class="language-html">
                                        <code class="language-html">
&lt;table id="grid-table" class="table table-bordered"&gt;&lt;/table&gt;
&lt;div id="grid-pager"&gt;&lt;/div&gt;
                                        </code>
                                    </pre>

                                    <b>Javascript</b>
                                    <pre class="language-javascript">
                                        <code class="language-javascript" data-showcase="code">
$(document).ready(function() {

    var listingParameters = {
        table: '#grid-table',
        pager: '#grid-pager',
        datatype: "jsonstring",
        caption: "Listing caption",
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

    var actions =
    '&lt;div class="btn-group">' +
        '&lt;button type="button" class="btn btn-sm btn-default">' +
            '&lt;i class="fa fa-trash text-danger">&lt;/i>' +
            '&lt;span class="sr-only">Delete&lt;/span>' +
        '&lt;/button>' +
    '&lt;/div>';

    var data = {
        "page": "1",
        "records": "6",
        "rows": [
            { "name": 'Lorem ipsum dolor sit amet', "status": "&lt;span class='label label-success'>Live&lt;/span>", "platform": 'google.ro',"products": '0',"actions": actions},
            { "name": 'Name', "status": "&lt;span class='label label-success'>Live&lt;/span>", "platform": 'google.ro',"products": '23.232',"actions": actions},
            { "name": 'Name', "status": "&lt;span class='label label-success'>Live&lt;/span>", "platform": 'google.ro',"products": '560.032',"actions": actions},
            { "name": 'Name', "status": "&lt;span class='label label-default'>Inactive&lt;/span>", "platform": 'google.hu',"products": '88.932',"actions": actions},
            { "name": 'Name', "status": "&lt;span class='label label-default'>Inactive&lt;/span>", "platform": 'google.bg',"products": '76.999',"actions": actions},
            { "name": 'Name', "status": "&lt;span class='label label-default'>Inactive&lt;/span>", "platform": 'google.bg',"products": '76.999',"actions": actions}
        ]
    };

});
                                        </code>
                                    </pre>
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
<script src="../data/scripts/base/custom/mod_photonTranslations.js"></script>
<script src="../data/scripts/base/custom/mod_photonJqGrid.js"></script>

<script src="../dist/js/main_script.min.js"></script>

<!-- SCRIPTS:End -->

<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
    $(document).ready(function() {
        console.log('Ready, Captain!');

        staticNavigation(); // This little old script is just for demo purposes. Chill!

        showcasing(); //Requires demo_helpers.js, prism.min.js and prism.min.css

        function getListingDummyData() {

            var statusLive = "<span class='label label-success'>Live</span>";
            var statusInactive = "<span class='label label-default'>Inactive</span>";
            var actions =
                '<div class="btn-group">' +
                    '<button type="button" class="btn btn-sm btn-default">' +
                        '<i class="fa fa-trash text-danger"></i>' +
                        '<span class="sr-only">Delete</span>' +
                    '</button>' +
                '</div>';

            var data = {
                "page": "1",
                "records": "6",
                "rows": [
                    { "name": 'Lorem ipsum dolor sit amet', "status": statusLive, "platform": 'google.ro',"products": '0',"actions": actions},
                    { "name": 'Name', "status": statusInactive, "platform": 'google.ro',"products": '23.232',"actions": actions},
                    { "name": 'Name', "status": statusInactive, "platform": 'google.ro',"products": '560.032',"actions": actions},
                    { "name": 'Name', "status": statusLive, "platform": 'google.hu',"products": '88.932',"actions": actions},
                    { "name": 'Name', "status": statusLive, "platform": 'google.bg',"products": '76.999',"actions": actions},
                    { "name": 'Name', "status": statusLive, "platform": 'google.bg',"products": '76.999',"actions": actions}
                ]
            };
            return data;
        }

        var listingParameters = {
            table: '#grid-table',
            pager: '#grid-pager',
            datatype: "jsonstring",
            caption: "Listing caption",
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

    });
</script>
<!-- DOCUMENT-READY:End -->
</body>
</html>