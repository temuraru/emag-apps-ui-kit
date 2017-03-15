<!DOCTYPE html>
<html lang="en" class="js">
<head>

    <title>JS Components - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php"?>

    <link rel="stylesheet" href="../dist/plugins/drop/drop.min.css" data-dependency-name="drop_css">
    <?php include_once "modules/_mod_top_include.php"?>

</head>
<?php include_once "modules/_mod_browser_upgrade.php"?>

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
                <div class="jumbotron content-header">
                    <div class="container-fluid">
                        <p>eMAG Apps UI KIT</p>
                        <p><b>Data formatters</b></p>
                    </div>
                </div>

                <section class="pad-top-40">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>Data formatters</strong></h2>

                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Demo</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#dataformatters_code" aria-expanded="false" aria-controls="dataformatters_code"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="dataformatters_code">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#dataformatters_html_source" aria-controls="dataformatters_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#dataformatters_js_source" aria-controls="dataformatters_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#dataformatters_css_source" aria-controls="dataformatters_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="dataformatters_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="dataformatters_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="dataformatters_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,tether_source,drop_source,drop_css,dataformatters_init">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Description</th>
                                                        <th>Example</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ID formatter</td>
                                                        <td><span id="id_formatter"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Not available formatter</td>
                                                        <td><span id="na_formatter"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>DateTime formatter</td>
                                                        <td><span id="datetime_formatter"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date formatter</td>
                                                        <td><span id="date_formatter"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Time formatter</td>
                                                        <td><span id="time_formatter"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>User formatter</td>
                                                        <td><span id="user_formatter"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Country formatter</td>
                                                        <td><span id="country_formatter"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Badge formatter</td>
                                                        <td><span id="badge_formatter"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status formatter</td>
                                                        <td><span id="status_formatter"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Product formatter</td>
                                                        <td><span id="product_formatter"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Price formatter</td>
                                                        <td><span id="price_formatter"></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
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

<!-- POPUPS:Start -->
<div id="popSpace"></div>
<!-- POPUPS:End -->

<!-- SCRIPTS:Start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" data-dependency-name="jquery"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>

<script src="../dist/plugins/tether/tether.min.js" data-dependency-name="tether_source"></script>
<script src="../dist/plugins/drop/drop.min.js" data-dependency-name="drop_source"></script>

<script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
<script src="../dist/js/demo_helpers.js"></script>
<!-- SCRIPTS:End -->

<!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
<script src="../dist/plugins/prism/prism.min.js"></script>

<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
    $(document).ready(function () {
        console.log('Ready, Captain!');

        demoHelpers();  // Require demo_helpers.js
        showPageCode();
    });
</script>

<script type="text/javascript" data-dependency-name="dataformatters_init">
    $(document).ready(function () {
        $('#id_formatter').html(PhotonDataFormatter.id(12));

        $('#na_formatter').html(PhotonDataFormatter.notAvailable());

        $('#datetime_formatter').html(PhotonDataFormatter.dateTime('15/03/2017 08:38'));

        $('#date_formatter').html(PhotonDataFormatter.date('15/03/2017'));

        $('#time_formatter').html(PhotonDataFormatter.time('08:38:00'));

        $('#user_formatter').html(PhotonDataFormatter.userEmail({user: 'John Doe', email: 'john.doe@emag.ro'}));

        $('#country_formatter').html(PhotonDataFormatter.country({country: 'RO', countryCode: 'ro'}));

        $('#badge_formatter').html(PhotonDataFormatter.badge({text: 'RO', number: '123'}));

        $('#status_formatter').html(PhotonDataFormatter.labelAndTooltip({label: 'Live', labelClass: 'label-success', tooltip: 'Default tooltip'}));
        $('#status_formatter .label-with-tooltip').tooltip();

        $('#product_formatter').html(PhotonDataFormatter.product({name: 'Samsung S7', link: '#'}));

        $('#price_formatter').html(PhotonDataFormatter.price({value: 1234567.89, currency: 'RON'}));
    });
</script>
<!-- DOCUMENT-READY:End -->

</body>
</html>