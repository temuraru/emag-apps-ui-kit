<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <title>CSS Components - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php" ?>
        <?php include_once "modules/_mod_top_include.php" ?>
        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <link rel="stylesheet" href="../dist/plugins/prism/prism.min.css">
        <link rel="stylesheet" href="../dist/plugins/magnific/magnific.min.css">
    </head>

        <?php include_once "modules/_mod_browser_upgrade.php" ?>

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
                    <div class="page-content">
                        <div class="jumbotron content-header">
                            <div class="container-fluid">
                                <p>eMAG Apps UI KIT</p>
                                <p><b>CSS Components</b></p>
                            </div>
                        </div>
                        <section id="css-tables" class="pad-top-40">
                            <div class="show-panel code-example">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Tables</strong></h2>

                                    <p>A simple list can be used to display information that can be grouped on rows and columns so the user can easily read it. This component can be used for displaying not more than 10 elements, so the pagination is not needed. If you have more than 10 elements that needs to be displayed, you can use the jQgrid list.</p>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Basic example</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#basic_table" aria-expanded="false" aria-controls="basic_table"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="basic_table">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#basic_table_html_source" aria-controls="basic_table_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="basic_table_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Brand</th>
                                                    <th>Product</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>Mark</td>
                                                    <td>Jacobs</td>
                                                    <td>Mark Jacobs</td>
                                                    <td>Shoes</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>Tom</td>
                                                    <td>Ford</td>
                                                    <td>Tom Ford</td>
                                                    <td>Clothing, Suits</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>Jimmy</td>
                                                    <td>Choo</td>
                                                    <td>Jimmy Choo</td>
                                                    <td>Shoes</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Striped rows</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#striped_table" aria-expanded="false" aria-controls="striped_table"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="striped_table">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#striped_table_html_source" aria-controls="striped_table_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="striped_table_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Brand</th>
                                                    <th>Product</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>Mark</td>
                                                    <td>Jacobs</td>
                                                    <td>Mark Jacobs</td>
                                                    <td>Shoes</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>Tom</td>
                                                    <td>Ford</td>
                                                    <td>Tom Ford</td>
                                                    <td>Clothing, Suits</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>Jimmy</td>
                                                    <td>Choo</td>
                                                    <td>Jimmy Choo</td>
                                                    <td>Shoes</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Bordered table</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#bordered_table" aria-expanded="false" aria-controls="bordered_table"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="bordered_table">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#bordered_table_html_source" aria-controls="bordered_table_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="bordered_table_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Brand</th>
                                                    <th>Product</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>Mark</td>
                                                    <td>Jacobs</td>
                                                    <td>Mark Jacobs</td>
                                                    <td>Shoes</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>Tom</td>
                                                    <td>Ford</td>
                                                    <td>Tom Ford</td>
                                                    <td>Clothing, Suits</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>Jimmy</td>
                                                    <td>Choo</td>
                                                    <td>Jimmy Choo</td>
                                                    <td>Shoes</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Hover rows</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#hover_rows_table" aria-expanded="false" aria-controls="hover_rows_table"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="hover_rows_table">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#hover_rows_table_html_source" aria-controls="hover_rows_table_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="hover_rows_table_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Brand</th>
                                                    <th>Product</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>Mark</td>
                                                    <td>Jacobs</td>
                                                    <td>Mark Jacobs</td>
                                                    <td>Shoes</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>Tom</td>
                                                    <td>Ford</td>
                                                    <td>Tom Ford</td>
                                                    <td>Clothing, Suits</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>Jimmy</td>
                                                    <td>Choo</td>
                                                    <td>Jimmy Choo</td>
                                                    <td>Shoes</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Condensed table</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#condensed_table" aria-expanded="false" aria-controls="condensed_table"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="condensed_table">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#condensed_table_html_source" aria-controls="condensed_table_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="condensed_table_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                            <table class="table table-condensed">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Brand</th>
                                                    <th>Product</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>Mark</td>
                                                    <td>Jacobs</td>
                                                    <td>Mark Jacobs</td>
                                                    <td>Shoes</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>Tom</td>
                                                    <td>Ford</td>
                                                    <td>Tom Ford</td>
                                                    <td>Clothing, Suits</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td>Jimmy</td>
                                                    <td>Choo</td>
                                                    <td>Jimmy Choo</td>
                                                    <td>Shoes</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>



                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Resposive table</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#resposive_table" aria-expanded="false" aria-controls="resposive_table"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="resposive_table">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#resposive_table_html_source" aria-controls="resposive_table_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="resposive_table_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Table heading</th>
                                                        <th>Table heading</th>
                                                        <th>Table heading</th>
                                                        <th>Table heading</th>
                                                        <th>Table heading</th>
                                                        <th>Table heading</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                    </tr>
                                                    <tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Contextual classes</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#contextual_classes_table" aria-expanded="false" aria-controls="contextual_classes_table"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="contextual_classes_table">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#contextual_classes_table_html_source" aria-controls="contextual_classes_table_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="contextual_classes_table_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Table heading</th>
                                                    <th>Table heading</th>
                                                    <th>Table heading</th>
                                                    <th>Table heading</th>
                                                    <th>Table heading</th>
                                                    <th>Table heading</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="active">
                                                    <td>Active row</td>
                                                    <td>Active row</td>
                                                    <td>Active row</td>
                                                    <td>Active row</td>
                                                    <td>Active row</td>
                                                    <td>Active row</td>
                                                </tr>
                                                <tr>
                                                    <td class="active">Active cell</td>
                                                    <td class="success">Success cell</td>
                                                    <td class="warning">Warning cell</td>
                                                    <td class="danger">Danger cell</td>
                                                    <td class="info">Info cell</td>
                                                    <td class="info">Info cell</td>
                                                </tr>
                                                <tr>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                    <td>Table cell</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </section>
                        <section id="basic-forms" class="pad-top-30">
                            <div class="show-panel code-example">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Forms</strong></h2>

                                    <ul>
                                        <li>These components can be used individually or to build complex forms that allows a user to enter data that is sent to a server for processing;</li>
                                        <li>Can be used in all the main components where users will enter data. Usage suggestions: inside and above panels or inside modals;</li>
                                        <li>Always use the same style for all applications you develop.</li>
                                    </ul>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Basic example</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#basic_form" aria-expanded="false" aria-controls="basic_form"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="basic_form">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#basic_form_html_source" aria-controls="basic_form_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="basic_form_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-4">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <form id="exampleForm1" action="" method="post">
                                                        <fieldset>
                                                            <legend class="sr-only">Simple form</legend>
                                                            <div class="form-group has-error">
                                                                <label class="control-label" for="exampleInputEmail1">Email address</label>
                                                                <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" placeholder="example@example.com" required>
                                                                <div class="help-block">This is an example error message.</div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label" for="exampleInputPassword1">Password</label>
                                                                <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="password" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label" for="exampleSelect1">Select</label>
                                                                <select class="form-control">
                                                                    <option value="">Select option</option>
                                                                    <option value="1">First option</option>
                                                                    <option value="2">Second option</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" id="exampleCheckbox1" name="exampleCheckbox1" required> Remember me?
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="panel-controls pull-right">
                                                                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i><span>Sign in</span></button>
                                                                    <button type="reset" class="btn btn-default"><i class="fa fa-remove"></i><span>Cancel</span></button>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Inline form example</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#inline_form" aria-expanded="false" aria-controls="inline_form"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="inline_form">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#inline_form_html_source" aria-controls="inline_form_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="inline_form_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15">
                                                    <p>Add <mark>.form-inline</mark> to your form (which doesn't have to be a <code>&lt;form&gt;</code>) for left-aligned and inline-block controls. This only applies to forms within viewports that are at least <b>768px</b> wide.</p>
                                                    <div class="alert alert-info">
                                                        <i class="fa fa-info-circle fonts-up-140"></i>
                                                        <b> Don't forget about screen readers!</b> Users might end up having trouble with your forms if you don't include a label for every input. You can hide the labels using the <mark>.sr-only</mark> class. There are further alternative methods of providing a label for assistive technologies, such as the <mark>aria-label</mark>, <mark>aria-labelledby</mark> or <mark>title</mark> attribute. If none of these is present, screen readers may resort to using the placeholder attribute, if present, but note that use of placeholder as a replacement for other labelling methods <b>is not advised</b>.</div>
                                                </div>
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <form class="form-inline" id="exampleForm2" action="" method="post">
                                                        <fieldset>
                                                            <legend class="sr-only">Simple Inline Form</legend>
                                                            <div class="form-group">
                                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                                <input type="email" class="form-control" id="exampleInputEmail2" name="exampleInputEmail2" placeholder="example@example.com" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                                <input type="password" class="form-control" id="exampleInputPassword2" name="exampleInputPassword2" placeholder="password" required>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" id="exampleCheckbox2" name="exampleCheckbox2" required> Remember me?
                                                                </label>
                                                            </div>
                                                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i><span>Sign in</span></button>
                                                            <button type="reset" class="btn btn-default"><i class="fa fa-remove"></i><span>Cancel</span></button>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Horizontal form example</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#horizontal_form" aria-expanded="false" aria-controls="horizontal_form"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="horizontal_form">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#horizontal_form_html_source" aria-controls="horizontal_form_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="horizontal_form_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">

                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <form class="form-horizontal">
                                                        <fieldset>
                                                            <legend class="sr-only">Simple horizontal form</legend>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail3" class="col-sm-3 control-label">Email address</label>
                                                                <div class="col-sm-9">
                                                                    <input type="email" class="form-control" id="exampleInputEmail3" name="exampleInputEmail3" placeholder="example@example.com" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword3" class="col-sm-3 control-label">Password</label>
                                                                <div class="col-sm-9">
                                                                    <input type="password" class="form-control" id="exampleInputPassword3" name="exampleInputPassword3" placeholder="password" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-offset-3 col-sm-9">
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox" id="exampleCheckbox3" name="exampleCheckbox3" required> Remember me?
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-offset-3 col-sm-9">
                                                                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i><span>Sign in</span></button>
                                                                    <button type="reset" class="btn btn-default"><i class="fa fa-remove"></i><span>Cancel</span></button>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Form with column sizing example</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#column_sizing_form" aria-expanded="false" aria-controls="column_sizing_form"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="column_sizing_form">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#column_sizing_form_html_source" aria-controls="column_sizing_form_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="column_sizing_form_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15">
                                                    <p>You can also benefit from a mix between the inline form and the regular form display, by using the <b>grid system</b> to your advantage. This is especially helpful whenever forms fields need to be displayed in a certain way, depending on the device width.</p>
                                                    <div class="alert alert-info">
                                                        <i class="fa fa-info-circle fonts-up-140"></i>
                                                        <b> Don't forget about that the grid system can make inline elements break-row!</b> Use the <mark>.truncate</mark> class on text elements like labels, links, buttons, etc. to hide the content that exceeds the grid size.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-6">

                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-2 col-md-1">
                                                                <label for="exampleCheckbox4" class="truncate control-label">Nr.</label>
                                                                <div class="form-sep">
                                                                <span>
                                                                    <input type="checkbox" id="exampleCheckbox4" name="exampleCheckbox4" required>
                                                                </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-10 col-md-5">
                                                                <label for="exampleInputName4" class="control-label truncate">First name</label>
                                                                <input type="text" class="form-control" id="exampleInputName4" name="exampleInputName4" required>
                                                            </div>
                                                            <div class="col-xs-12 pad-top-20 visible-xs-block visible-sm-block"></div>
                                                            <div class="col-xs-12 col-md-6">
                                                                <label for="exampleInputLastName4" class="control-label truncate">Last name</label>
                                                                <div class="row">
                                                                    <div class="col-xs-12 col-md-9">
                                                                        <input type="text" class="form-control" id="exampleInputLastName4" name="exampleInputLastName4" required>
                                                                    </div>
                                                                    <div class="col-xs-12 pad-top-40 visible-xs-block visible-sm-block"></div>
                                                                    <div class="col-xs-12 col-md-3">
                                                                        <button type="button" class="btn btn-primary btn-block truncate" title="Check this name out">
                                                                            <i class="fa fa-check"></i>
                                                                            <span class="visible-xs visible-sm">Check</span>
                                                                        </button>
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

                            <div class="show-panel code-example mg-top-30">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Input types sizing</strong></h2>




                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Individual form controls</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#individual_form" aria-expanded="false" aria-controls="individual_form"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="individual_form">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#individual_form_html_source" aria-controls="individual_form_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="individual_form_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <div class="pad-15" data-showcase="example">
                                                    <form>
                                                        <div class="form-group">
                                                            <input class="form-control input-lg" type="text" placeholder=".input-lg">
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" placeholder=" default input">
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control input-sm" type="text" placeholder=" .input-sm">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Form groups with labels and form controls. (only works with form-horizontal)</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#form_groups" aria-expanded="false" aria-controls="form_groups"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="form_groups">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#form_groups_html_source" aria-controls="form_groups_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="form_groups_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12  col-lg-8">
                                                <div class="pad-15" data-showcase="example">
                                                    <form class="form-horizontal">
                                                        <div class="form-group form-group-lg">
                                                            <label class="col-sm-2 control-label" for="formGroupInputLarge"><span class="truncate">Large label</span></label>
                                                            <div class="col-sm-8">
                                                                <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label" for="formGroupInputNormal"><span class="truncate">Default label</span></label>
                                                            <div class="col-sm-8">
                                                                <input class="form-control" type="text" id="formGroupInputNormal" placeholder="Default input">
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-group-sm">
                                                            <label class="col-sm-2 control-label" for="formGroupInputSmall"><span class="truncate">Small label</span></label>
                                                            <div class="col-sm-8">
                                                                <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Small input">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="show-panel code-example mg-top-30">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Input</strong></h2>
                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>States types</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#states_types" aria-expanded="false" aria-controls="states_types"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="states_types">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#states_types_html_source" aria-controls="states_types_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="states_types_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <div class="pad-15" data-showcase="example">
                                                    <form>
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" placeholder="Disabled input" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" placeholder="Readonly input" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control" disabled>
                                                                <option value="1">First option</option>
                                                                <option value="2">Second option</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" id="checkboxSuccessDisabled" value="option1" disabled>
                                                                    Disabled checkbox
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-success" disabled><i class="fa fa-check"></i><span>Disabled button</span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>







                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Validation types</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#validation_types" aria-expanded="false" aria-controls="validation_types"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="validation_types">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#validation_types_html_source" aria-controls="validation_types_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="validation_types_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <div class="pad-15" data-showcase="example">
                                                    <form>
                                                        <div class="form-group has-success">
                                                            <label class="control-label" for="inputSuccess1">Input with success</label>
                                                            <input type="text" class="form-control" id="inputSuccess1">
                                                            <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                                        </div>
                                                        <div class="form-group has-success">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" id="checkboxSuccess" value="option1">
                                                                    Checkbox with success
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group has-warning">
                                                            <label class="control-label" for="inputWarning1">Input with warning</label>
                                                            <input type="text" class="form-control" id="inputWarning1">
                                                        </div>
                                                        <div class="form-group has-warning">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" id="checkboxWarning">
                                                                    Checkbox with warning
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group has-error">
                                                            <label class="control-label" for="inputError1">Input with error</label>
                                                            <input type="text" class="form-control" id="inputError1">
                                                            <div class="help-block">This is an example error message.</div>
                                                        </div>
                                                        <div class="form-group has-error">
                                                            <label class="control-label" for="inputError2">Input with error</label>
                                                            <div class="info-tooltip tt-block tt-danger" data-content="This is an example error message.">
                                                                <input type="text" class="form-control" id="inputError2">
                                                            </div>
                                                        </div>
                                                        <div class="form-group has-error">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" id="checkboxError">
                                                                    Checkbox with error
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Feedback types</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#feedback_types" aria-expanded="false" aria-controls="feedback_types"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="feedback_types">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#feedback-types_html_source" aria-controls="feedback_types_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="feedback_types_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <div class="pad-15" data-showcase="example">
                                                    <div class="form-group has-success has-feedback">
                                                        <label class="control-label" for="inputSuccess2">Input with success mark</label>
                                                        <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status">
                                                        <span class="fa fa-check form-control-feedback" aria-hidden="true"></span>
                                                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                                    </div>
                                                    <div class="form-group has-warning has-feedback">
                                                        <label class="control-label" for="inputWarning2">Input with warning mark</label>
                                                        <input type="text" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status">
                                                        <span class="fa fa-warning form-control-feedback" aria-hidden="true"></span>
                                                        <span id="inputWarning2Status" class="sr-only">(warning)</span>
                                                    </div>
                                                    <div class="form-group has-error has-feedback">
                                                        <label class="control-label" for="inputError2Mark">Input with error mark</label>
                                                        <input type="text" class="form-control" id="inputError2Mark" aria-describedby="inputError2MarkStatus">
                                                        <span class="fa fa-remove form-control-feedback" aria-hidden="true"></span>
                                                        <span id="inputError2MarkStatus" class="sr-only">(error)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="show-panel code-example mg-top-30">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Checkboxes and radio buttons</strong></h2>

                                    <ul class="no-margin-bottom">
                                        <li>These secondary elements can be used in all UI KIT components containing text. Usage suggestion: in a panel or modal with text and input fields.</li>
                                        <li>Always use the same components’ style for all applications you develop.</li>
                                    </ul>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Default styles</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#default_check_radio" aria-expanded="false" aria-controls="default_check_radio"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="default_check_radio">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#default_check_radio_html_source" aria-controls="default_check_radio_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="default_check_radio_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="pad-15" data-showcase="example">
                                                    <p>Standard checkbox:</p>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="">
                                                            This is option one.
                                                        </label>
                                                    </div>
                                                    <div class="checkbox disabled">
                                                        <label>
                                                            <input type="checkbox" value="" disabled>
                                                            Option two is disabled
                                                        </label>
                                                    </div>
                                                    <br>
                                                    <p>Inline checkboxes:</p>
                                                    <div class="form-group">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                                                        </label>
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                                                        </label>
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                                                        </label>
                                                    </div>
                                                    <br>
                                                    <p>Standard radio button:</p>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                            This is option one.
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                            Option two can be something else and selecting it will deselect option one.
                                                        </label>
                                                    </div>
                                                    <div class="radio disabled">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                                                            Option three is disabled
                                                        </label>
                                                    </div>
                                                    <br>
                                                    <p>Inline radio buttons:</p>
                                                    <div class="form-group">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Custom styles</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#custom_check_radio" aria-expanded="false" aria-controls="custom_check_radio"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="custom_check_radio">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#custom_check_radio_html_source" aria-controls="custom_check_radio_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="custom_check_radio_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15 no-padding-bottom">
                                                    <div class="alert alert-info no-margin-bottom">
                                                        <p><i class="fa fa fa-info-circle fonts-up-140"></i> The custom checkboxes and radio buttons don't work on firefox. They just fallback to their standard styling. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-4">
                                                <div class="pad-15" data-showcase="example">
                                                    <p>Standard checkbox:</p>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="form-checkbox-control" value="" checked>
                                                            This is option one.
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="form-checkbox-control" value="">
                                                            This is option two.
                                                        </label>
                                                    </div>
                                                    <div class="checkbox disabled">
                                                        <label>
                                                            <input type="checkbox" class="form-checkbox-control" value="" disabled checked>
                                                            Option three is disabled
                                                        </label>
                                                    </div>
                                                    <br>
                                                    <p>Standard radio button:</p>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios11" class="form-radio-control" value="option11" checked>
                                                            This is option one.
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios21" class="form-radio-control" value="option21">
                                                            Option two can be something else and selecting it will deselect option one.
                                                        </label>
                                                    </div>
                                                    <div class="radio disabled">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios31" class="form-radio-control" value="option31" disabled checked>
                                                            Option three is disabled
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>





                                </div>
                            </div>

                            <div class="show-panel code-example mg-top-30">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Range input types</strong></h2>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Default range input</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#default_range_input" aria-expanded="false" aria-controls="default_range_input"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="default_range_input">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#default_range_input_html_source" aria-controls="default_range_input_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="default_range_input_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <div class="pad-15" data-showcase="example">
                                                    <div class="form-group">
                                                        <input type="range" name="points" min="0" max="100" step="5" value="5">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Disabled range input</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#disabled_range_input" aria-expanded="false" aria-controls="disabled_range_input"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="disabled_range_input">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#disabled_range_input_html_source" aria-controls="disabled_range_input_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="default_range_input_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <div class="pad-15" data-showcase="example">
                                                    <div class="form-group">
                                                        <input type="range" name="points" min="0" max="100" step="5" value="5" disabled>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="show-panel code-example mg-top-30">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Input groups</strong></h2>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Default</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#default_input_groups" aria-expanded="false" aria-controls="default_input_groups"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="default_input_groups">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#default_input_groups_html_source" aria-controls="default_input_groups_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="default_input_groups_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15 no-padding-bottom">
                                                    <p>Extend form controls by adding text or buttons before, after, or on both sides of any text-based <code>&lt;input&gt;</code>. Use <mark>.input-group</mark> with an <mark>.input-group-addon</mark> or <mark>.input-group-btn</mark> to prepend or append elements to a single <mark>.form-control</mark>.</p>
                                                    <div class="alert alert-info">
                                                        <p><i class="fa fa-info-circle fonts-up-140"></i> Avoid using <code>&lt;select&gt;</code> elements here as they cannot be fully styled in WebKit browsers. Avoid using <code>&lt;textarea&gt;</code> elements here as their rows attribute will not be respected in some cases.</p>
                                                    </div>
                                                    <div class="alert alert-warning">
                                                        <p><i class="fa fa-warning fonts-up-140"></i> Do not mix form groups or grid column classes directly with input groups. Instead, nest the input group inside of the form group or grid-related element.</p>
                                                    </div>
                                                    <div class="alert alert-danger  no-margin-bottom">
                                                        <p><i class="fa fa-remove fonts-up-140"></i> eMAG Apps UI KIT does not support multiple add-ons (<mark>.input-group-addon</mark> or <mark>.input-group-btn</mark>) on a single side. It also does not support multiple form-controls in a single input group.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <div class="pad-15" data-showcase="example">
                                                    <div class="form-group">
                                                        <label class="control-label" for="inputGroupStandard">Input group</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="inputGroupStandard" placeholder="Recipient's email" aria-describedby="basic-addon2">
                                                            <span class="input-group-addon" id="basic-addon2">@example.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-success has-feedback">
                                                        <label class="control-label" for="inputGroupSuccess1">Input group with success</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" value="jon_snow">
                                                            <span class="input-group-addon">@example.com</span>
                                                        </div>
                                                        <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">$</span>
                                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                            <span class="input-group-addon">.00</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>


                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Input groups with checkboxes and radio buttons</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#input_groups_with_checkboxes" aria-expanded="false" aria-controls="input_groups_with_checkboxes"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="input_groups_with_checkboxes">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#input_groups_with_checkboxes_html_source" aria-controls="input_groups_with_checkboxes_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="default_range_input_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <div class="pad-15" data-showcase="example">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <input type="checkbox" aria-label="...">
                                                                </span>
                                                                    <input type="text" class="form-control" aria-label="...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <input type="radio" aria-label="...">
                                                                </span>
                                                                    <input type="text" class="form-control" aria-label="...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <input type="checkbox" class="form-checkbox-control" aria-label="...">
                                                                </span>
                                                                    <input type="text" class="form-control" aria-label="...">
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
                        <section id="buttons" class="pad-top-30">
                            <div class="show-panel code-example">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Buttons</strong></h2>

                                    <h4><strong>Preview</strong></h4>
                                    <div id="button_previews" class="zoom-gallery zg-grid">
                                        <a href="img/eMAG_Apps_UI_KIT_buttons_usage_1.png" data-source="img/eMAG_Apps_UI_KIT_buttons_usage_1.png" title="Buttons usage in a modal and in a jQGrid list">
                                            <img src="img/eMAG_Apps_UI_KIT_buttons_usage_1.png" alt="gallery-image">
                                        </a>
                                        <a href="img/eMAG_Apps_UI_KIT_buttons_usage_2.png" data-source="img/eMAG_Apps_UI_KIT_buttons_usage_2.png" title="Buttons usage in a modal and in a filters panel">
                                            <img src="img/eMAG_Apps_UI_KIT_buttons_usage_2.png" alt="gallery-image">
                                        </a>
                                    </div>

                                    <strong>The buttons used in the UI KIT have 3 sizes:</strong>
                                    <ul>
                                        <li>small (height: 30px)</li>
                                        <li>default (height: 34px)</li>
                                        <li>large (height: 46px)</li>
                                    </ul>
                                    <p>The most used are the small and the default button sizes.</p>
                                    <strong>The "Small button" should be used in:</strong>
                                    <ul>
                                        <li>the "Actions" column from a jQgrid list;</li>
                                        <li>other locations where the "Default button" doesn't fit.</li>
                                    </ul>
                                    <div class="alert alert-info">
                                        <i class="fa fa-info-circle fonts-up-140"></i>
                                        Check the "<a href="#buttons">Preview</a>" section to see how and where it fits
                                    </div>
                                    <strong>The "Default button" should be used:</strong>
                                    <ul>
                                        <li>inside panels, above or below a jQgrid list from a panel, close to inputs or drop-down list, in a panel's footer.</li>
                                    </ul>
                                    <div class="alert alert-info">
                                        <i class="fa fa-info-circle fonts-up-140"></i>
                                        Check the "<a href="#buttons">Preview</a>" section to see how and where it fits
                                    </div>
                                    <strong>The buttons colors are:</strong>
                                    <ul>
                                        <li>White with icon (should be used in the "Actions" column from a jQgrid list);</li>
                                        <li>White with label (should be used in the "Actions" column from a jQgrid list when you can't find a relevant icon for an action or to cancel an action);</li>
                                        <li>Blue with label/label + icon (should be used in modals, inside or outside the panels);</li>
                                        <li>Green with label/label + icon (should be used only for Save/Submit actions);</li>
                                        <li>Red with label/label + icon (should be used only for Delete/Remove actions).</li>
                                    </ul>
                                    <strong>Buttons placement</strong>
                                    <ul>
                                        <li>If you need to display multiple buttons in a line, these should be arranged properly.</li>
                                        <li>Example A: If you build a form you should always add the buttons on the bottom right corner. The "Save/Submit" button should be in green and should always be placed before the "Cancel" button. The "Cancel" button should be in white and should always be placed after the "Save/Submit" button.</li>
                                        <li>Example B: If you build a list and you need to add some buttons on top or on the bottom, you should place each button based on the action behind it. For instance, if you want to add the "Add new item" and "Import item" buttons, you can place both in the top right corner. These should be in blue with the "default" size. If you also want to add a "Delete" button you can place it on the top left corner. This one should be in red with the "default" size.</li>
                                        <li>The arrangement rule here is simple: use the top left corner to place the buttons with actions that change the existing list content and the top right corner to place the buttons with actions that doesn't change the existing list content.</li>
                                        <li>Example C: When you build a form with filters, always arrange the buttons properly on the bottom right corner. The "Reset" button should be in white with the default size and should be placed after the "Search" button. The "Search" button should be in blue with the "default" size and should be placed in front of the "Reset" button.</li>
                                    </ul>
                                    <div class="alert alert-info">
                                        <i class="fa fa-info-circle fonts-up-140"></i>
                                        Check the "<a href="#buttons">Preview</a>" section to see how it looks
                                    </div>
                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Default styling</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#buttons_default_styling" aria-expanded="false" aria-controls="buttons_default_styling"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="buttons_default_styling">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#buttons_default_styling_html_source" aria-controls="buttons_default_styling_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="buttons_default_styling_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="pad-15 no-padding-bottom">Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <a class="btn btn-default" href="#" role="button">Link</a>
                                                    <button type="button" class="btn btn-default">Button</button>
                                                    <input type="button" class="btn btn-default" value="Input">
                                                    <input type="submit" class="btn btn-default" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Contextual classes</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#buttons_contextual_classes" aria-expanded="false" aria-controls="buttons_contextual_classes"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="buttons_contextual_classes">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#buttons_contextual_classes_html_source" aria-controls="buttons_contextual_classes_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="buttons_contextual_classes_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15">
                                                    <p>Use any of the available button classes to quickly create a styled button. ex: <mark>.btn-primary</mark>, <mark>.btn-success</mark>, <mark>.btn-danger</mark>...etc.</p>

                                                    <div class="alert alert-info  no-margin-bottom">
                                                        <i class="fa fa-info-circle fonts-up-140"></i> Using color to add meaning to a button only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the visible text of the button), or is included through alternative means, such as additional text hidden with the <mark>.sr-only</mark> class.
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <button type="button" class="btn btn-default">Default</button>
                                                    <button type="button" class="btn btn-primary">Primary</button>
                                                    <button type="button" class="btn btn-success">Success</button>
                                                    <button type="button" class="btn btn-danger">Danger</button>
                                                    <button type="button" class="btn btn-link">Link</button>
                                                    <br><br>
                                                    <button type="button" class="btn btn-default btn-no-border">Default</button>
                                                    <button type="button" class="btn btn-primary btn-no-border">Primary</button>
                                                    <button type="button" class="btn btn-success btn-no-border">Success</button>
                                                    <button type="button" class="btn btn-danger btn-no-border">Danger</button>
                                                    <button type="button" class="btn btn-link btn-no-border">Link</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Button sizing</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#button_sizing" aria-expanded="false" aria-controls="button_sizing"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="button_sizing">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#button_sizing_html_source" aria-controls="button_sizing_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="button_sizing_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <button type="button" class="btn btn-primary btn-lg"><i class="fa fa-cog"></i><span>Large button</span></button>
                                                    <button type="button" class="btn btn-primary"><i class="fa fa-cog"></i><span>Default button</span></button>
                                                    <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-cog"></i><span>Small button</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Button states</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#button_states" aria-expanded="false" aria-controls="button_states"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="button_states">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#button_states_html_source" aria-controls="button_states_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="button_states_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <p>
                                                        <a class="btn btn-default" href="#" role="button">Default</a>
                                                        <button class="btn btn-primary" type="submit">Default</button>
                                                    </p>
                                                    <p>
                                                        <a class="btn btn-default active" href="#" role="button">Active</a>
                                                        <button class="btn btn-primary active" type="submit">Active</button>
                                                    </p>
                                                    <p>
                                                        <a class="btn btn-default disabled" href="#" role="button">Disabled</a>
                                                        <button class="btn btn-primary" type="submit" disabled="">Disabled</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Button groups</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#button_groups" aria-expanded="false" aria-controls="button_groups"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="button_groups">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#button_groups_html_source" aria-controls="button_groups_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="button_groups_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="btn-group" role="group" aria-label="...">
                                                        <button type="button" class="btn btn-primary">Left</button>
                                                        <button type="button" class="btn btn-success">Middle</button>
                                                        <button type="button" class="btn btn-danger">Right</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Justified button groups</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#justified_button_groups" aria-expanded="false" aria-controls="justified_button_groups"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="justified_button_groups">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#justified_button_groups_html_source" aria-controls="justified_button_groups_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="justified_button_groups_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                        <div class="btn-group btn-group-lg" role="group">
                                                            <button type="button" class="btn btn-default"><i class="fa fa-bars"></i></button>
                                                        </div>
                                                        <div class="btn-group btn-group-lg" role="group">
                                                            <button type="button" class="btn btn-danger"><i class="fa fa-heart"></i></button>
                                                        </div>
                                                        <div class="btn-group btn-group-lg" role="group">
                                                            <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i></button>
                                                        </div>
                                                        <div class="btn-group btn-group-lg" role="group">
                                                            <button type="button" class="btn btn-default"><i class="fa fa-camera"></i></button>
                                                        </div>
                                                        <div class="btn-group btn-group-lg" role="group">
                                                            <button type="button" class="btn btn-default"><i class="fa fa-bell"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Button toolbar</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#button_toolbar" aria-expanded="false" aria-controls="button_toolbar"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="button_toolbar">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#button_toolbar_html_source" aria-controls="button_toolbar_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="button_toolbar_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="btn-toolbar" role="toolbar" aria-label="...">
                                                        <div class="btn-group" role="group" aria-label="...">
                                                            <button type="button" class="btn btn-default"><i class="fa fa-magic"></i></button>
                                                        </div>
                                                        <div class="btn-group" role="group" aria-label="...">
                                                            <button type="button" class="btn btn-default"><i class="fa fa-bold"></i></button>
                                                            <button type="button" class="btn btn-default"><i class="fa fa-italic"></i></button>
                                                            <button type="button" class="btn btn-default"><i class="fa fa-underline"></i></button>
                                                        </div>
                                                        <div class="btn-group" role="group" aria-label="...">
                                                            <button type="button" class="btn btn-default">Helvetica</button>
                                                        </div>
                                                        <div class="btn-group" role="group" aria-label="...">
                                                            <button type="button" class="btn btn-default"><i class="fa fa-font"></i></button>
                                                            <button type="button" class="btn btn-default"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                        <div class="btn-group" role="group" aria-label="...">
                                                            <button type="button" class="btn btn-primary">X</button>
                                                            <button type="button" class="btn btn-success">Y</button>
                                                            <button type="button" class="btn btn-danger">X</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Button groups sizing</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#button_groups_sizing" aria-expanded="false" aria-controls="button_groups_sizing"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="button_groups_sizing">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#button_groups_sizing_html_source" aria-controls="button_groups_sizing_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="button_groups_sizing_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="btn-group btn-group-lg" role="group" aria-label="...">
                                                        <button type="button" class="btn btn-default">LG</button>
                                                        <button type="button" class="btn btn-default">LG</button>
                                                    </div>
                                                    <div class="btn-group" role="group" aria-label="...">
                                                        <button type="button" class="btn btn-default">DF</button>
                                                        <button type="button" class="btn btn-default">DF</button>
                                                    </div>
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                                        <button type="button" class="btn btn-default">SM</button>
                                                        <button type="button" class="btn btn-default">SM</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Button blocks</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#button_blocks" aria-expanded="false" aria-controls="button_blocks"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="button_blocks">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#button_blocks_html_source" aria-controls="button_blocks_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="button_blocks_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <button type="button" class="btn btn-block btn-default">Default</button>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="button" class="btn btn-block btn-primary">Primary</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <button type="button" class="btn btn-block btn-success">Success</button>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="button" class="btn btn-block btn-danger">Danger</button>
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
                        <section id="css-flipswitch" class="pad-top-30">
                            <div class="show-panel code-example">
                                <div class="show-panel-body code-example">
                                    <h2><strong>CSS Flipswitch</strong></h2>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>CSS Flipswitch</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#flipswitch" aria-expanded="false" aria-controls="flipswitch"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="flipswitch">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#flipswitch_html_source" aria-controls="flipswitch_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="flipswitch_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15">

                                                    <div class="alert alert-info no-margin-bottom" role="alert"><p><i class="fa fa-info-circle fonts-up-140"></i>
                                                            The flip-switch items are based on a checkbox form-element. In order to display the flip-switch in the "on" or "off" state, make sure to add or remove the "checked" attribute from the "checkbox" input type.
                                                        </p></div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <p>
                                                        <label class="switch">
                                                            <input type="checkbox" class="switch-input" name="card_status_0" >
                                                            <span class="switch-label"></span>
                                                            <span class="switch-handle"></span>
                                                        </label>
                                                        <label class="switch">
                                                            <input type="checkbox" class="switch-input" name="card_status_0" checked>
                                                            <span class="switch-label"></span>
                                                            <span class="switch-handle"></span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="css-labels-and-badges" class="pad-top-30">
                            <div class="show-panel code-example">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Labels and badges</strong></h2>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Default label</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#default_label" aria-expanded="false" aria-controls="default_label"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="default_label">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#default_label_html_source" aria-controls="default_label_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="default_label_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <h1>Heading with label <span class="label label-default">New</span></h1>
                                                    <h2>Heading with label <span class="label label-default">New</span></h2>
                                                    <h3>Heading with label <span class="label label-default">New</span></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Contextual alternatives</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#default_label_alternatives" aria-expanded="false" aria-controls="default_label_alternatives"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="default_label_alternatives">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#default_label_alternatives_html_source" aria-controls="default_label_alternatives_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="default_label_alternatives_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <span class="label label-default">Default</span>
                                                    <span class="label label-primary">Primary</span>
                                                    <span class="label label-info">Info</span>
                                                    <span class="label label-success">Success</span>
                                                    <span class="label label-danger">Danger</span>
                                                    <span class="label label-warning">Warning</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Default badge</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#default_badge" aria-expanded="false" aria-controls="default_badge"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="default_badge">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#default_badge_html_source" aria-controls="default_badge_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="default_badge_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15">
                                                    <div class="alert alert-info"><p><i class="fa fa-info-circle fonts-up-140"></i>
                                                            <strong>Feature not a bug alert:</strong> When there are no new or unread items, badges will simply collapse (via CSS's <mark>:empty</mark> selector) provided no content exists within.</p>
                                                    </div>
                                                    <div class="alert alert-warning no-margin-bottom"><p><i class="fa fa-warning fonts-up-140"></i>
                                                            Badges do not have contextual alternatives because they are badges. <strong>Use labels instead.</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <button type="button" id="blow_my_world" class="btn btn-danger">Destroy <span class="badge">0</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="css-alerts-and-notifications" class="pad-top-30">
                            <div class="show-panel code-example">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Alerts and notifications</strong></h2>

                                    <strong>The alert box should be used to indicate:</strong>
                                    <ul>
                                        <li>A neutral informative change or action (Info alert - blue)</li>
                                        <li>A successful or positive action (Success alert - green)</li>
                                        <li>A warning that might need attention (Warning alert - orange)</li>
                                        <li>A dangerous or potentially negative action (Danger alert - red)</li>
                                    </ul>

                                    <div class="alert alert-info">
                                        <i class="fa fa-info-circle"></i>
                                        <span>We suggest to use the basic style when you need to display an alert inside the page, on white background and the full-color style when you need to display an alert over the page (check the preview here: JS Components - Custom notifications Growl).</span>
                                    </div>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Basic alerts</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#basic_alerts" aria-expanded="false" aria-controls="basic_alerts"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="basic_alerts">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#basic_alerts_html_source" aria-controls="basic_alerts_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="basic_alerts_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="alert alert-info" role="alert"><p><i class="fa fa-info-circle"></i>
                                                            <strong> We've received your application.</strong> We'll let you know what we think in a while.</p>
                                                    </div>
                                                    <div class="alert alert-success" role="alert"><p><i class="fa fa-check-circle"></i>
                                                            <strong> Congratulations!</strong> We think you're cool.</p>
                                                    </div>
                                                    <div class="alert alert-warning" role="alert"><p><i class="fa fa-warning"></i>
                                                            <strong> Pending.</strong> Your submission is currently under analysis.</p>
                                                    </div>
                                                    <div class="alert alert-danger" role="alert"><p><i class="fa fa-minus-circle"></i>
                                                            <strong> Yeah, unfortunatelly...</strong> We think that you should come in on Saturday and Sunday.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Dismissible alerts</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#dismissible_alerts" aria-expanded="false" aria-controls="dismissible_alerts"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="dismissible_alerts">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#dismissible_alerts_html_source" aria-controls="dismissible_alerts_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="basic_alerts_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="alert alert-warning alert-dismissible" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-remove"></i></button>
                                                        <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Links in alerts</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#links_in_alerts" aria-expanded="false" aria-controls="links_in_alerts"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="links_in_alerts">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#links_in_alerts_html_source" aria-controls="links_in_alerts_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="links_in_alerts_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="alert alert-info alert-dismissible fade in" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-remove"></i></button>
                                                        This is a simple dismissable notification. <a href="javascript:void(0)" class="alert-link">This one also has a clickable link</a>. Nothing else.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Alerts with buttons</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#alerts_with_buttons" aria-expanded="false" aria-controls="alerts_with_buttons"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="alerts_with_buttons">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#alerts_with_buttons_html_source" aria-controls="alerts_with_buttons_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="alerts_with_buttons_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-remove"></i></button>
                                                        <h4><strong>Oh snap! You got an error!</strong></h4>
                                                        <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                                                        <div class="pad-top-20">
                                                            <button type="button" class="btn btn-danger">There's nowhere you can hide</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </section>
                        <section id="css-progressbars" class="pad-top-30">
                            <div class="show-panel code-example">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Progress Bars</strong></h2>
                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Basic progress bar</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#basic_progress_bar" aria-expanded="false" aria-controls="basic_progress_bar"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="basic_progress_bar">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#basic_progress_bar_html_source" aria-controls="basic_progress_bar_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="basic_progress_bar_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Basic progress bar with label</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#basic_progress_bar_with_label" aria-expanded="false" aria-controls="basic_progress_bar_with_label"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="basic_progress_bar_with_label">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#basic_progress_bar_with_label_html_source" aria-controls="basic_progress_bar_with_label_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="basic_progress_bar_with_label_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                                            50%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Contextual alternatives</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#contextual_alternatives" aria-expanded="false" aria-controls="contextual_alternatives"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="contextual_alternatives">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#contextual_alternatives_html_source" aria-controls="contextual_alternatives_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="contextual_alternatives_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                            <span class="sr-only">40% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                            <span class="sr-only">80% Complete (danger)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Striped progress bars</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#striped_progress_bars" aria-expanded="false" aria-controls="striped_progress_bars"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="striped_progress_bars">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#striped_progress_bars_html_source" aria-controls="striped_progress_bars_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="striped_progress_bars_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                            <span class="sr-only">40% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                            <span class="sr-only">45% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Stacked progress bars</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#stacked_progress_bars" aria-expanded="false" aria-controls="stacked_progress_bars"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="stacked_progress_bars">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#stacked_progress_bars_html_source" aria-controls="stacked_progress_bars_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="stacked_progress_bars_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" style="width: 35%">
                                                            <span class="sr-only">35% Complete (success)</span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-warning" style="width: 20%">
                                                            <span class="sr-only">20% Complete (warning)</span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-danger" style="width: 10%">
                                                            <span class="sr-only">10% Complete (danger)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>
                        </section>
                        <section id="css-panels" class="pad-top-30">
                            <div class="show-panel code-example">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Panels</strong></h2>

                                    <div class="row">
                                        <div class="col-sm-12">

                                                <p class="mg-top-15">Easily add a heading container to your panel with <mark>.panel-heading</mark>. You may also include any <code>&lt;h1&gt; - &lt;h6&gt;</code> with a <mark>.panel-title</mark> class to add a pre-styled heading. However, the font sizes of <code>&lt;h1&gt; - &lt;h6&gt;</code> are overridden by <mark>.panel-heading</mark>.For proper link coloring, be sure to place links in headings within <mark>.panel-title</mark>.</p>


                                        </div>
                                    </div>


                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Basic panel</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#basic_panel" aria-expanded="false" aria-controls="basic_panel"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="basic_panel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#basic_panel_html_source" aria-controls="basic_panel_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="basic_panel_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            Basic panel-body example
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Contextual alternatives</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#basic_panel_contextual_alternatives" aria-expanded="false" aria-controls="basic_panel_contextual_alternatives"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="basic_panel_contextual_alternatives">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#basic_panel_contextual_alternatives_html_source" aria-controls="basic_panel_contextual_alternatives_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="basic_panel_contextual_alternatives_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15">
                                                    <div class="alert alert-info" role="alert">
                                                        <i class="fa fa-info-circle"></i> You can basically change the appearance of the panel ussing one of the following classes: <code>panel-primary</code>, <code>panel-info</code>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="panel panel-primary">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">Panel title</h4>
                                                        </div>
                                                        <div class="panel-body">
                                                            Panel content
                                                        </div><div class="panel-footer">
                                                            Panel footer
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">Panel title</h4>
                                                        </div>
                                                        <div class="panel-body">
                                                            Panel content
                                                        </div>
                                                        <div class="panel-footer">
                                                            Panel footer
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Panel with table</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#panel_with_table" aria-expanded="false" aria-controls="panel_with_table"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="panel_with_table">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#panel_with_table_html_source" aria-controls="panel_with_table_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="panel_with_table_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15">
                                                    <div class="alert alert-info" role="alert">
                                                        <i class="fa fa-info-circle"></i> You can also use the standard bootstrap alternatives for styling a table: <a href="http://getbootstrap.com/css/#tables">Show me how Bootstrap does table stuff.</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="panel panel-primary">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">Panel with table example</h4>
                                                        </div>
                                                        <div class="panel-body">
                                                            <p>Some text or a couple of buttons can be placed here</p>
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>First Name</th>
                                                                        <th>Last Name</th>
                                                                        <th>Username</th>
                                                                        <th>Hobby</th>
                                                                    </tr></thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Otto</td>
                                                                        <td>@mdo</td>
                                                                        <td>Fishing</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>Jacob</td>
                                                                        <td>Thornton</td>
                                                                        <td>@fat</td>
                                                                        <td>Racing</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Larry</td>
                                                                        <td>the Bird</td>
                                                                        <td>@twitter</td>
                                                                        <td>eMAG</td>
                                                                    </tr></tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="panel-body">
                                                            <span>More text or a couple of buttons can be placed here</span>
                                                        </div>
                                                        <div class="panel-footer">
                                                            <span>Footer controls or text can be placed here</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Panel with standard list group</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#panel_with_list" aria-expanded="false" aria-controls="panel_with_list"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="panel_with_list">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#panel_with_list_html_source" aria-controls="panel_with_list_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="panel_with_list_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15">
                                                    <div class="alert alert-info" role="alert">
                                                        <i class="fa fa-info-circle"></i> You can also use the standard bootstrap alternatives for styling a list group: <a href="http://getbootstrap.com/components/#list-group">Show me how Bootstrap does list group stuff.</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="panel panel-primary">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">Panel with list group example</h4>
                                                        </div>
                                                        <div class="panel-body">
                                                            <span>Some text or a couple of buttons can be placed here</span>
                                                        </div>
                                                        <div class="list-group">
                                                            <a href="#" class="list-group-item">
                                                                <h4 class="list-group-item-heading">List group item heading</h4>
                                                                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                            </a>
                                                            <a href="#" class="list-group-item">
                                                                <h4 class="list-group-item-heading">List group item heading</h4>
                                                                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                            </a>
                                                            <a href="#" class="list-group-item">
                                                                <h4 class="list-group-item-heading">List group item heading</h4>
                                                                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </section>
                        
                        <section id="flexbox-cards" class="pad-top-30">
                            <div class="show-panel code-example">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Flexbox cards</strong></h2>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="mg-top-15">Using flexbox, the cards will resize themselves to match the max height of their siblings. By adding <code>.bt-primary</code>, <code>.bt-info</code>, <code>.bt-success</code>, <code>.bt-warning</code> or <code>.bt-danger</code>, you can add a state to that card.</p>
                                        </div>
                                    </div>
                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Flexbox cards</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#flexbox_cards" aria-expanded="false" aria-controls="flexbox_cards"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="flexbox_cards">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#flexbox_cards_html_source" aria-controls="flexbox_cards_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="flexbox_cards_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="row flex-container">
                                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                                            <div class="card bt-primary">
                                                                <h4>Primary</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                                            <div class="card bt-info">
                                                                <h4>Info</h4>
                                                                <p>Aliquam cursus mauris vel felis posuere, a dapibus mauris imperdiet. Nullam consectetur lorem ut orci elementum.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                                            <div class="card bt-success">
                                                                <h4>Success</h4>
                                                                <p>Morbi eu ex non mi ultrices dapibus vitae ut ex.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                                            <div class="card bt-warning">
                                                                <h4>Warning</h4>
                                                                <p>Nulla fermentum nulla et justo ultrices dapibus.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                                            <div class="card bt-danger">
                                                                <h4>Danger</h4>
                                                                <p>Nam rutrum nibh nec ligula pulvinar tempus. Mauris dapibus in quam nec tincidunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                                            <div class="card">
                                                                <h4>No state</h4>
                                                                <p>Nam efficitur tempus ultricies. Nam vulputate at dolor nec laoreet.</p>
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

                        <section id="css-page-header" class="pad-top-30">
                            <div class="show-panel code-example">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Page header</strong></h2>


                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Default styling</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#page_header_default" aria-expanded="false" aria-controls="page_header_default"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="page_header_default">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#page_header_default_html_source" aria-controls="page_header_default_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="page_header_default_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15">
                                                    <div class="alert alert-info" role="alert">
                                                        <i class="fa fa-info-circle"></i> A simple shell for an h1 to appropriately space out and segment sections of content on a page. It can utilize the h1's default small element, as well as most other components (with additional styles).</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="page-header">
                                                        <h1>Example page header <small>Subtext for header</small></h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                        <section id="css-embeds" class="pad-top-30">
                            <div class="show-panel code-example">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Embeds</strong></h2>

                                    <div class="code-container">
                                        <div class="row flex-container code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Default styling</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#responsive_embeds" aria-expanded="false" aria-controls="responsive_embeds"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="responsive_embeds">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#responsive_embeds_html_source" aria-controls="responsive_embeds_html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="responsive_embeds_html_source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pad-15">
                                                    Allow browsers to determine video or slideshow dimensions based on the width of their containing block by creating an intrinsic ratio that will properly scale on any device. Rules are directly applied to <code>&lt;iframe&gt;</code>, <code>&lt;embed&gt;</code>, <code>&lt;video&gt;</code>, and <code>&lt;object&gt;</code> elements; optionally use an explicit descendant class <mark>.embed-responsive-item</mark> when you want to match the styling for other attributes.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="pad-15" data-showcase="example" data-dependencies="main_style">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/LeiFF0gvqcc" allowfullscreen></iframe>
                                                    </div>
                                                    <br>
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.127878354968!2d26.045893219230344!3d44.45104898408151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b20191a19c63f5%3A0x6dc43342346d8bc2!2seMAG+Bucuresti+Showroom!5e0!3m2!1sen!2sro!4v1454078315442" width="600" height="450" allowfullscreen></iframe>
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
                <?php include_once "modules/_mod_footer.php" ?>
                <!-- FOOTER:End -->
            </div>
        </div>
        <!-- PAGE:End -->

        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-3.2.1.min.js\">"+"<"+"/script>")</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
        <script src="../dist/js/main_script.min.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>
        <script src="../dist/plugins/magnific/magnific.min.js"></script>


        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <script src="../dist/plugins/prism/prism.min.js"></script>

        <!-- BOTTOM SCRIPTS:Start -->
        <?php include_once "modules/_mod_bottom_scripts.php"; ?>
        <!-- BOTTOM SCRIPTS:End -->
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">
            $(document).ready(function () {
                demoHelpers();

                var i = 1;
                function blowWorld(selector, no) {
                    var thing = document.getElementById(selector);
                    thing.getElementsByClassName("badge")[0].innerHTML = no;
                };
                $('#blow_my_world').on('click', function () {
                    var no = i++;
                    if (no >= 100) {
                        alert("Yeah, alright, we get it buddy... It's cool, chill!");
                    } else {
                        blowWorld(this.id, no);
                    }
                });

                showPageCode();


                $('#button_previews').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    closeOnContentClick: false,
                    closeBtnInside: false,
                    mainClass: 'mfp-with-zoom mfp-img-mobile',
                    image: {
                        verticalFit: true,
                        titleSrc: function (item) {
                            return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank">image source</a>';
                        }
                    },
                    gallery: {
                        enabled: true
                    },
                    zoom: {
                        enabled: true,
                        duration: 300, // don't foget to change the duration also in CSS
                        opener: function (element) {
                            return element.find('img');
                        }
                    }
                });

            });
        </script>
        <!-- DOCUMENT-READY:End -->

    </body>
</html>
