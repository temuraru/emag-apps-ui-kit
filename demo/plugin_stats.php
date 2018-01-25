<!DOCTYPE html>
<html lang="en" class="js">
    <head>

        <title>Plugins - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>

        <!-- PLUGIN: Chart -->
        <link rel="stylesheet" href="../dist/plugins/chart/chart.min.css" data-dependency-name="chart_css">

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
                                    <p><b>Stats</b></p>
                                </div>
                            </div>

                            <section id="value_box_standard" class="pad-top-40">
                                <div class="show-panel code-example">
                                    <div class="show-panel-body code-example">
                                        <h2><strong>Value box</strong></h2>

                                        <div class="code-container">
                                            <div class="row flex-container code-header no-border-top">
                                                <div class="col-xs-8 module-description">
                                                    <h4><b>Demo</b></h4>
                                                </div>
                                                <div class="col-xs-4">
                                                    <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#value_box" aria-expanded="false" aria-controls="value_box"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                                </div>
                                            </div>
                                            <div class="collapse code-example"  id="value_box">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs code-example" role="tablist">
                                                    <li role="presentation" class="active"><a href="#value-box-html-source" aria-controls="value-box-html" role="tab" data-toggle="tab">HTML</a></li>
                                                    <li role="presentation"><a href="#value-box-js-source" aria-controls="value-box-js" role="tab" data-toggle="tab">JS</a></li>
                                                    <li role="presentation"><a href="#value-box-css-source" aria-controls="value-box-css" role="tab" data-toggle="tab">CSS</a></li>
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content code-example">
                                                    <div role="tabpanel" class="tab-pane html-source active" id="value-box-html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane js-source" id="value-box-js-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane css-source" id="value-box-css-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-6">
                                                                <div class="row flex-container">
                                                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                                                        <div class="value-box">
                                                                            <div class="value">520</div>
                                                                            <div class="description">messages</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                                                        <div class="value-box value-box-inverse value-box-primary">
                                                                            <div class="value">123</div>
                                                                            <div class="description">new orders</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                                                        <div class="value-box value-box-inverse value-box-info">
                                                                            <div class="value">423</div>
                                                                            <div class="description">products added</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                                                        <div class="value-box value-box-inverse value-box-success">
                                                                            <div class="value">341</div>
                                                                            <div class="description">new users</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                                                        <div class="value-box value-box-inverse value-box-warning">
                                                                            <div class="value">84</div>
                                                                            <div class="description">warnings</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                                                        <div class="value-box value-box-inverse value-box-danger">
                                                                            <div class="value">88</div>
                                                                            <div class="description">cancelled orders</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                                                        <div class="value-box  value-box-inverse">
                                                                            <div class="value">123</div>
                                                                            <div class="description">accounts</div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                                                        <div class="value-box  value-box-inverse value-box-disabled">
                                                                            <div class="value">87</div>
                                                                            <div class="description">disabled accounts</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </section>

                            <section id="charts" class="pad-top-40">
                                <div class="show-panel code-example">
                                    <div class="show-panel-body code-example">
                                        <h2><strong>Charts</strong></h2>

                                        <div class="row">
                                            <div class="col-sm-12 mg-top-20">
                                                <div class="alert alert-info no-margin-bottom" role="alert">
                                                    <p><i class="fa fa-info-circle"></i>You can familiarize yourself with more options and settings by checking out <a href="http://www.chartjs.org/docs/#getting-started" class="alert-link" target="_blank">chartjs.org</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="code-container">
                                            <div class="row flex-container code-header no-border-top">
                                                <div class="col-xs-8 module-description">
                                                    <h4><b>Pie chart</b></h4>
                                                </div>
                                                <div class="col-xs-4">
                                                    <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#pie_chart" aria-expanded="false" aria-controls="pie_chart"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                                </div>
                                            </div>
                                            <div class="collapse code-example"  id="pie_chart">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs code-example" role="tablist">
                                                    <li role="presentation" class="active"><a href="#pie-chart-html-source" aria-controls="pie-chart-html" role="tab" data-toggle="tab">HTML</a></li>
                                                    <li role="presentation"><a href="#pie-chart-js-source" aria-controls="pie-chart-js" role="tab" data-toggle="tab">JS</a></li>
                                                    <li role="presentation"><a href="#pie-chart-css-source" aria-controls="pie-chart-css" role="tab" data-toggle="tab">CSS</a></li>
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content code-example">
                                                    <div role="tabpanel" class="tab-pane html-source active" id="pie-chart-html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane js-source" id="pie-chart-js-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane css-source" id="pie-chart-css-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,pie_chart_standard_init,chart_source,chart_css">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-md-6 col-lg-3">
                                                                <canvas id="my_pie_chart" width="400" height="400"></canvas>
                                                            </div>
                                                            <div class="col-sm-6 col-md-6 col-lg-3">
                                                                <div id="pie_chart_legend" class="chart-legend"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="code-container">
                                            <div class="row flex-container code-header no-border-top">
                                                <div class="col-xs-8 module-description">
                                                    <h4><b>Line chart</b></h4>
                                                </div>
                                                <div class="col-xs-4">
                                                    <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#line_chart" aria-expanded="false" aria-controls="line_chart"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                                </div>
                                            </div>
                                            <div class="collapse code-example"  id="line_chart">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs code-example" role="tablist">
                                                    <li role="presentation" class="active"><a href="#line-chart-html-source" aria-controls="line-chart-html" role="tab" data-toggle="tab">HTML</a></li>
                                                    <li role="presentation"><a href="#line-chart-js-source" aria-controls="line-chart-js" role="tab" data-toggle="tab">JS</a></li>
                                                    <li role="presentation"><a href="#line-chart-css-source" aria-controls="line-chart-css" role="tab" data-toggle="tab">CSS</a></li>
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content code-example">
                                                    <div role="tabpanel" class="tab-pane html-source active" id="line-chart-html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane js-source" id="line-chart-js-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane css-source" id="line-chart-css-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,line_chart_standard_init,chart_source,chart_css">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-md-6 col-lg-3">
                                                                <canvas id="my_line_chart" width="400" height="400"></canvas>
                                                            </div>
                                                            <div class="col-sm-6 col-md-6 col-lg-3">
                                                                <div id="line_chart_legend" class="chart-legend"></div>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" data-dependency-name="jquery"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-3.2.1.min.js\">"+"<"+"/script>")</script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>


        <script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
        <script src="../dist/js/demo_helpers.js"></script>

        <script src="../dist/plugins/chart/chart.min.js" data-dependency-name="chart_source"></script>


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

        <script type="text/javascript" data-dependency-name="pie_chart_standard_init">
            $(document).ready(function () {

                var data = {
                    labels: [
                        "Laptops",
                        "Smartphones",
                        "Speakers",
                        "Headphones"
                    ],

                    datasets: [
                        {
                            data: [25, 25, 25, 25],
                            backgroundColor: [
                                "#2790f3",
                                "#f4b350",
                                "#e1302b",
                                "#38833a"
                            ],

                            hoverBackgroundColor: [
                                "#2790f3",
                                "#f4b350",
                                "#e1302b",
                                "#38833a"
                            ]
                        }]
                };

                var ctx = document.getElementById("my_pie_chart");

                var myPieChart = new Chart(ctx, {
                    type: 'pie',
                    data: data,
                    options: {
                        legend: {
                            display: false
                        }
                    }
                });

                $("#pie_chart_legend").html(myPieChart.generateLegend());
            });
        </script>

    <script type="text/javascript" data-dependency-name="line_chart_standard_init">
        $(document).ready(function () {

            var data = {
                datasets: [{
                    label: 'Laptops',
                    backgroundColor: colorScheme.brand_info,
                    borderColor: colorScheme.brand_info,
                    fill: false,
                    pointBorderColor: colorScheme.brand_info,
                    pointBackgroundColor: colorScheme.white,
                    pointHoverBackgroundColor: colorScheme.brand_info,
                    pointHoverBorderColor: colorScheme.brand_info,
                    data: [{
                        x: -10,
                        y: 0
                    }, {
                        x: 0,
                        y: 10
                    }, {
                        x: 10,
                        y: 5
                    }]
                }, {
                    label: 'Smartphones',
                    backgroundColor: colorScheme.brand_warning,
                    borderColor: colorScheme.brand_warning,
                    fill: false,
                    pointBorderColor: colorScheme.brand_warning,
                    pointBackgroundColor: colorScheme.white,
                    pointHoverBackgroundColor: colorScheme.brand_warning,
                    pointHoverBorderColor: colorScheme.brand_warning,
                    data: [{
                        x: -10,
                        y: 3
                    }, {
                        x: -2,
                        y: 2
                    }, {
                        x: 1,
                        y: 6
                    }, {
                        x: 10,
                        y: 1
                    }]
                }, {
                    label: 'Speakers',
                    backgroundColor: colorScheme.brand_danger,
                    borderColor: colorScheme.brand_danger,
                    fill: false,
                    pointBorderColor: colorScheme.brand_danger,
                    pointBackgroundColor: colorScheme.white,
                    pointHoverBackgroundColor: colorScheme.brand_danger,
                    pointHoverBorderColor: colorScheme.brand_danger,
                    data: [{
                        x: -10,
                        y: 2
                    }, {
                        x: -6,
                        y: 2
                    }, {
                        x: 4,
                        y: 7
                    }, {
                        x: 10,
                        y: 8
                    }]
                }, {
                    label: 'Headphones',
                    backgroundColor: colorScheme.brand_success,
                    borderColor: colorScheme.brand_success,
                    fill: false,
                    pointBorderColor: colorScheme.brand_success,
                    pointBackgroundColor: colorScheme.white,
                    pointHoverBackgroundColor: colorScheme.brand_success,
                    pointHoverBorderColor: colorScheme.brand_success,
                    data: [{
                        x: -10,
                        y: 5
                    }, {
                        x: -6,
                        y: 2
                    }, {
                        x: -2,
                        y: 5
                    }, {
                        x: 3,
                        y: 1
                    }, {
                        x: 10,
                        y: 4
                    }]
                }]
            };

            var ctx = document.getElementById("my_line_chart");

            var lineChart = new Chart(ctx, {
                type: 'line',
                data: data,
                options: {
                    scales: {
                        xAxes: [{
                            type: 'linear',
                            position: 'bottom'
                        }]
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        mode: 'point'
                    }
                }
            });

            $("#line_chart_legend").html(lineChart.generateLegend());

        });
    </script>
            <!-- DOCUMENT-READY:End -->

    </body>
</html>
