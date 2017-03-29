<!DOCTYPE html>
<html lang="en" class="js">
    <head>

        <title>Plugins - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>

        <link rel="stylesheet" href="../dist/plugins/jqgrid/ui.jqgrid.min.css" data-dependency-name="jqgrid_css">
        <link rel="stylesheet" href="../dist/plugins/drop/drop.min.css" data-dependency-name="drop_css">

        <link rel="stylesheet" href="../dist/plugins/css3spinners/css3-spinners.1.2.2.min.css" data-dependency-name="css3spinners_css">

        <!-- PLUGIN: Wizard -->
        <link rel="stylesheet" href="../dist/plugins/wizard/wizard.min.css" data-dependency-name="wizard_css">
        
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
                                    <p><b>Fuelux</b></p>
                                </div>
                            </div>

                            <section id="wizard_standard" class="pad-top-40">
                                <div class="show-panel code-example">
                                    <div class="show-panel-body code-example">
                                        <h2><strong>Wizard</strong></h2>

                                        <div class="row">
                                            <div class="col-sm-12 mg-top-20">
                                                <div class="alert alert-info no-margin-bottom" role="alert">
                                                    <p><i class="fa fa-info-circle"></i>You can familiarize yourself with more options and settings by checking out <a href="http://getfuelux.com/javascript.html#wizard" class="alert-link" target="_blank">getfuelux.com</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="code-container">
                                            <div class="row code-header no-border-top">
                                                <div class="col-xs-8 module-description">
                                                    <h4><b>Demo</b></h4>
                                                </div>
                                                <div class="col-xs-4">
                                                    <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#wizard" aria-expanded="false" aria-controls="wizard"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                                </div>
                                            </div>
                                            <div class="collapse code-example"  id="wizard">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs code-example" role="tablist">
                                                    <li role="presentation" class="active"><a href="#wizard-html-source" aria-controls="wizard-html" role="tab" data-toggle="tab">HTML</a></li>
                                                    <li role="presentation"><a href="#wizard-js-source" aria-controls="wizard-js" role="tab" data-toggle="tab">JS</a></li>
                                                    <li role="presentation"><a href="#wizard-css-source" aria-controls="wizard-css" role="tab" data-toggle="tab">CSS</a></li>
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content code-example">
                                                    <div role="tabpanel" class="tab-pane html-source active" id="wizard-html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane js-source" id="wizard-js-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane css-source" id="wizard-css-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,wizard_standard_init,jqgrid_css,drop_css,css3spinners_css,wizard_css,jquery_ui_source,jqgrid_locale_en_source,jqgrid_source,stickykit_source,tether_source,drop_source,wizard_source">
                                                        <div class="fuelux">
                                                            <div class="wizard" data-initialize="wizard"  id="my_wizard">
                                                                <div class="steps-container">
                                                                    <ul class="steps">
                                                                        <li data-step="1" data-name="campaign" class="active">
                                                                            <span class="step">1</span>
                                                                            <span class="title">Select items(s)</span>
                                                                        </li>
                                                                        <li data-step="2">
                                                                            <span class="step">2</span>
                                                                            <span class="title">File settings</span>
                                                                        </li>
                                                                        <li data-step="3" data-name="template">
                                                                            <span class="step">3</span>
                                                                            <span class="title">Download</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <hr>
                                                                <form>
                                                                    <fieldset>
                                                                        <div class="panel-body no-margin-left-right">
                                                                            <div class="step-content">
                                                                                <div class="step-pane" data-step="1">
                                                                                    <table id="grid_table_with_selectable_rows" class="table table-bordered"></table>
                                                                                </div>
                                                                                <div class="step-pane" data-step="2">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-2">
                                                                                            <div class="form-group">
                                                                                                <label class="control-label" for="type">File type</label>
                                                                                                <select class="form-control" name="type" id="file_type">
                                                                                                    <option value="0"></option>
                                                                                                    <option value="1">XLS</option>
                                                                                                    <option value="2">PDF</option>
                                                                                                    <option value="3">TXT</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-3">
                                                                                            <p><strong>Invoice details</strong></p>
                                                                                            <div class="form-group">
                                                                                                <div class="checkbox-inline">
                                                                                                    <label>
                                                                                                        <input type="checkbox" class="form-checkbox-control" value="" checked="">
                                                                                                        Include invoice details
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="step-pane text-center" data-step="3">
                                                                                    <div class="zipping">
                                                                                        <div class='center-block loader-fading-circle mg-btm-10'>
                                                                                            <div class="sk-circle1 sk-circle"></div>
                                                                                            <div class="sk-circle2 sk-circle"></div>
                                                                                            <div class="sk-circle3 sk-circle"></div>
                                                                                            <div class="sk-circle4 sk-circle"></div>
                                                                                            <div class="sk-circle5 sk-circle"></div>
                                                                                            <div class="sk-circle6 sk-circle"></div>
                                                                                            <div class="sk-circle7 sk-circle"></div>
                                                                                            <div class="sk-circle8 sk-circle"></div>
                                                                                            <div class="sk-circle9 sk-circle"></div>
                                                                                            <div class="sk-circle10 sk-circle"></div>
                                                                                            <div class="sk-circle11 sk-circle"></div>
                                                                                            <div class="sk-circle12 sk-circle"></div>
                                                                                        </div>
                                                                                        <strong>Zipping your file(s)</strong>
                                                                                    </div>
                                                                                    <div class="file-ready">
                                                                                        <p><i class="fa fa-check text-success fa-3x" aria-hidden="true"></i></p>
                                                                                        <p><strong class="text-success">Your file is ready for download.</strong></p>
                                                                                        Click <a href="#"><u>here</u></a> if the download doesn't start automatically.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="panel-footer no-margin-left-right">
                                                                            <div class="actions pull-right panel-controls">
                                                                                <button type="button" class="btn btn-default btn-prev">
                                                                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Prev</button>
                                                                                <button type="button" class="btn btn-primary btn-next">
                                                                                    Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
        
        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" data-dependency-name="jquery"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>

        <script src="../dist/js/lib/jquery-ui.1.11.4.min.js" data-dependency-name="jquery_ui_source"></script>
        <script src="../dist/plugins/jqgrid/i18n/grid.locale-en.js" data-dependency-name="jqgrid_locale_en_source"></script>
        <script src="../dist/plugins/jqgrid/jquery.jqGrid.min.js" data-dependency-name="jqgrid_source"></script>
        <script src="../dist/plugins/stickyKit/stickyKit.min.js" data-dependency-name="stickykit_source"></script>
        <script src="../dist/plugins/tether/tether.min.js" data-dependency-name="tether_source"></script>
        <script src="../dist/plugins/drop/drop.min.js" data-dependency-name="drop_source"></script>

        <script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
        <script src="../dist/js/demo_helpers.js"></script>

        <script src="../dist/plugins/wizard/wizard.min.js" data-dependency-name="wizard_source"></script>


        <!-- SCRIPTS:End -->

        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <script src="../dist/plugins/prism/prism.min.js"></script>

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">               
            $(document).ready(function () {
                demoHelpers();
                showPageCode();
            });
        </script>

        <script type="text/javascript" data-dependency-name="wizard_standard_init">
            $(document).ready(function () {
                $('#my_wizard').wizard();
                function getListingDummyData() {

                    var dataSet = [
                        {
                            "id": "1",
                            "productName": "Macbook Retina",
                            "seller": "eMAG",
                            "price": {value: 3230.45, currency: 'RON'},
                            "addingDate": "2017-02-09",
                            "invoiceNo": "ABC12345"
                        }, {
                            "id": "2",
                            "productName": "Macbook Air",
                            "seller": "eMAG",
                            "price": {value: 2323.45, currency: 'RON'},
                            "addingDate": "2017-05-01",
                            "invoiceNo": "DEF12345"
                        }, {
                            "id": "3",
                            "productName": "Macbook Pro",
                            "seller": "eMAG",
                            "price": {value: 2063.45, currency: 'RON'},
                            "addingDate": "2017-07-07",
                            "invoiceNo": "MNO12345"
                        }, {
                            "id": "4",
                            "productName": "iPhone 6s",
                            "seller": "eMAG",
                            "price": {value: 1523.45, currency: 'RON'},
                            "addingDate": "2017-04-05",
                            "invoiceNo": "SFW12345"
                        }, {
                            "id": "5",
                            "productName": "iPad Pro",
                            "seller": "eMAG",
                            "price": {value: 1773.45, currency: 'RON'},
                            "addingDate": "2017-03-07",
                            "invoiceNo": "JAC12345"
                        }
                    ];

                    return dataSet;
                }

                var listingParametersWithSelectableRows = {
                    table: '#grid_table_with_selectable_rows',

                    datatype: 'jsonstring',
                    caption: 'Listing caption',
                    datastr: getListingDummyData(),
                    styleUI: 'fontAwesome',
                    colModel: [
                        {label: 'Product name', name: 'productName', key: true, width: "100"},
                        {label: 'Seller', name: 'seller'},
                        {label: 'Price(RON)', name: 'price', formatter: PhotonDataFormatter.price},
                        {label: 'Adding date', name: 'addingDate', formatter: PhotonDataFormatter.date},
                        {label: 'Invoice no.', name: 'invoiceNo'}
                    ],
                    multiselect: true
                };

                new PhotonJqGrid(listingParametersWithSelectableRows).init();

                function getSelectedRows() {
                    var grid = $("#grid_table_with_selectable_rows");
                    var rowKey = grid.getGridParam("selrow");

                    if (rowKey) {
                        return rowKey;
                    }
                }

                function downloadFile() {
                    $('.file-ready').hide();
                    $('.zipping').show();
                    clearTimeout(window.zipping);
                    window.zipping = setTimeout(function () {
                        $('.zipping').hide();
                        $('.file-ready').show();
                    }, 3000);
                }

                $('#my_wizard').on('actionclicked.fu.wizard', function (e, data) {
                    $('#file_type').parent().removeClass('has-error');
                    if (data.step === 1) {
                        if (!getSelectedRows()) {
                            addNotification('<i class="fa fa-exclamation-circle"></i><span>Please select a product</span>', 'danger');
                            e.preventDefault();
                        }
                    }
                    if (data.step === 2) {
                        var fileType = $('#file_type').val();

                        if (fileType == 0) {
                            $('#file_type').parent().addClass('has-error');
                            addNotification('<i class="fa fa-exclamation-circle"></i><span>Please select a file type</span>', 'danger');
                            e.preventDefault();
                        } else {
                            downloadFile();

                        }
                    }
                });

                $('#my_wizard').on('changed.fu.wizard', function (e, data) {
                    $('.btn-next').removeClass('btn-default').addClass('btn-primary').removeAttr('disabled');
                    if (data.step === 3) {
                        $('.steps li').eq(2).addClass('complete');
                        $('.btn-next').attr('disabled', 'disabled').removeClass('btn-primary').addClass('btn-default');
                    }
                })
            });
        </script>
            <!-- DOCUMENT-READY:End -->

    </body>
</html>