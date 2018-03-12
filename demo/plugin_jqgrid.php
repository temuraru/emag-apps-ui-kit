<!DOCTYPE html>
<html lang="en" class="js">
<head>
        <title>jQGrid - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php" ?>
        <link rel="stylesheet" href="../dist/plugins/jqgrid/ui.jqgrid.min.css" data-dependency-name="jqgrid_css">
        <link rel="stylesheet" href="../dist/plugins/drop/drop.min.css" data-dependency-name="drop_css">
        <?php include_once "modules/_mod_top_include.php" ?>
</head>
<?php include_once "modules/_mod_browser_upgrade.php" ?>
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
                        <p><b>jQGrid</b></p>
                    </div>
                </div>

                <section  class="pad-top-40">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>jqGrid</strong></h2>

                            <div class="row">
                                <div class="col-sm-12 mg-top-20">
                                    <div class="alert alert-info no-margin-bottom" role="alert">
                                        <p><i class="fa fa-info-circle"></i>Based on: <a href="http://www.trirand.com/blog/" target="_blank" class="alert-link">jQGrid Documentation</a></p>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-basic" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid basic</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jqgrid_basic" aria-expanded="false" aria-controls="jqgrid_basic"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jqgrid_basic">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jqgrid_basic_html_source" aria-controls="jqgrid_basic_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jqgrid_basic_js_source" aria-controls="jqgrid_basic_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jqgrid_basic_css_source" aria-controls="jqgrid_basic_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jqgrid_basic_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jqgrid_basic_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jqgrid_basic_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15">
                                            <ul>
                                                <li>A list can be used to display information that can be grouped on rows and columns so the user can easily read it;</li>
                                                <li>A list is part of a panel that can be vertically expanded or collapsed, from the top-right corner;</li>
                                                <li>The columns' width can be resized by pulling the line that separates them. The columns' width should not be smaller than the text's width from the column's header;</li>
                                                <li>On top of a list, the buttons with actions that are changing the list's content will be the following: the left side should contain the action buttons that are changing the content that is already in the list (e.g. Export, Delete), the right side should contain the action buttons that are not changing the content that is already in the list (e.g. Add Product, Import Product);</li>
                                                <li>The content from a column can be sorted ascending or descending, using the sorting arrows, according to what kind of content is in there (e.g. a column showing numerical values, a column showing the item's status);</li>
                                                <li>The buttons from the "Actions" column should be displayed as groups of maximum 3. If there will be more than 3, a menu button should be displayed. This one will open a drop-down menu displaying the rest of the actions;</li>
                                                <li>If there's no self-explanatory icon for the action button you need to display, you can use a button with a short descriptive label instead or you can group the actions in a drop-down menu;</li>
                                                <li>To avoid the horizontal scroll, it's recommended to use the "Select Columns" functionality. This can help you to find and display only the columns you need in your list.</li>
                                            </ul>
                                        </div>
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,listing_dummy_data,jqgrid_basic_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <table id="grid_table" class="table table-bordered word-break"></table>
                                            <div id="grid_pager"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-add-new-row-programatically" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid add new row programatically</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jqgrid_add_new_row_programatically" aria-expanded="false" aria-controls="jqgrid_add_new_row_programatically"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jqgrid_add_new_row_programatically">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jqgrid_add_new_row_programatically_html_source" aria-controls="jqgrid_add_new_row_programatically_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jqgrid_add_new_row_programatically_js_source" aria-controls="jqgrid_add_new_row_programatically_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jqgrid_add_new_row_programatically_css_source" aria-controls="jqgrid_add_new_row_programatically_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jqgrid_add_new_row_programatically_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jqgrid_add_new_row_programatically_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jqgrid_add_new_row_programatically_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,listing_dummy_data,jqgrid_add_new_row_programatically_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <div class="pad-top-20 pad-btm-20">
                                                <button type="button" class="btn btn-primary btn-sm add-new-row">Add new row</button>
                                            </div>

                                            <table id="grid_table_add_new_row_programatically" class="table table-bordered word-break"></table>
                                            <div id="grid_pager_add_new_row_programatically"></div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-with-sticky-panels" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid with sticky panels</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_sticky" aria-expanded="false" aria-controls="jq_with_sticky"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_sticky">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_sticky_html_source" aria-controls="jq_with_sticky_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_sticky_js_source" aria-controls="jq-basic_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_sticky_css_source" aria-controls="jq-basic_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_sticky_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_sticky_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_sticky_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,listing_dummy_data,jqgrid_with_sticky_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <table id="grid_table_sticky" class="table table-bordered word-break"></table>
                                            <div id="grid_pager_sticky"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-with-column-chooser" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid with column chooser</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_column_chooser" aria-expanded="false" aria-controls="jq_with_column_chooser"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_column_chooser">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_column_chooser_html_source" aria-controls="jq_with_column_chooser_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_column_chooser_js_source" aria-controls="jq_with_column_chooser_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_column_chooser_css_source" aria-controls="jq_with_column_chooser_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_column_chooser_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_column_chooser_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_column_chooser_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,listing_dummy_data,jqgrid_with_column_chooser_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <div class="pad-top-20 pad-btm-20 clearfix">
                                                <button type="button" id="grid_table_column_chooser_button" class="btn btn-primary pull-right">
                                                    Select columns <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                </button>
                                            </div>

                                            <table id="grid_table_column_chooser" class="table table-bordered word-break"></table>
                                            <div id="grid_pager_column_chooser"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-with-selectable-rows" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jgGrid with selectable rows</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_selectable_rows" aria-expanded="false" aria-controls="jq_with_selectable_rows"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_selectable_rows">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_selectable_rows_html_source" aria-controls="jq_with_selectable_rows_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_selectable_rows_js_source" aria-controls="jq_with_selectable_rows_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_selectable_rows_css_source" aria-controls="jq_with_selectable_rows_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_selectable_rows_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_selectable_rows_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_selectable_rows_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,listing_dummy_data,jqGrid_with_selectable_rows_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <div class="pad-top-20 pad-btm-20">
                                                <button type="button" class="btn btn-primary btn-sm check_rows" >Get rows</button>
                                            </div>

                                            <table id="grid_table_with_selectable_rows" class="table table-bordered word-break"></table>
                                            <div id="grid_pager_with_selectable_rows"></div>

                                            <div class="pad-top-20">
                                                <button type="button" class="btn btn-primary btn-sm check_rows" >Get rows</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-ierarchical-elements-tree" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid with ierarchical elements (Tree)</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_ierarchical_elements" aria-expanded="false" aria-controls="jq_with_ierarchical_elements"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_ierarchical_elements">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_ierarchical_elements_html_source" aria-controls="jq_with_ierarchical_elements_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_ierarchical_elements_js_source" aria-controls="jq_with_ierarchical_elements_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_ierarchical_elements_css_source" aria-controls="jq_with_ierarchical_elements_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_ierarchical_elements_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_ierarchical_elements_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_ierarchical_elements_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,jqGrid_with_ierarchical_elements_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <table id="grid_table_with_hierarchy" class="table table-bordered word-break"></table>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-with-subgrid" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid with subgrid</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_subgrid" aria-expanded="false" aria-controls="jq_with_subgrid"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_subgrid">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_subgrid_html_source" aria-controls="jq_with_subgrid_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_subgrid_js_source" aria-controls="jq_with_subgrid_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_subgrid_css_source" aria-controls="jq_with_subgrid_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_subgrid_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_subgrid_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_subgrid_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,listing_dummy_data,jqGrid_with_subgrid_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <table id="grid_table_with_subgrid" class="table table-bordered word-break"></table>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-with-inline-editing" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid with inline editing</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_inline_editing" aria-expanded="false" aria-controls="jq_with_inline_editing"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_inline_editing">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_inline_editing_html_source" aria-controls="jq_with_inline_editing_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_inline_editing_js_source" aria-controls="jq_with_inline_editing_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_inline_editing_css_source" aria-controls="jq_with_inline_editing_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_inline_editing_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_inline_editing_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_inline_editing_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,listing_dummy_data,jqGrid_with_inline_editing_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <table id="grid_table_with_inline_edit" class="table table-bordered word-break"></table>
                                            <div id="grid_pager_with_inline_edit"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-with-actions" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid with actions</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_actions" aria-expanded="false" aria-controls="jq_with_actions"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_actions">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_actions_html_source" aria-controls="jq_with_actions_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_actions_js_source" aria-controls="jq_with_actions_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_actions_css_source" aria-controls="jq_with_actions_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_actions_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_actions_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_actions_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,listing_dummy_data,jqGrid_with_actions_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <table id="grid_table_with_actions" class="table table-bordered word-break"></table>
                                            <div id="grid_pager_with_actions"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-with-no-data" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid with no data</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_no_data" aria-expanded="false" aria-controls="jq_with_no_data"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_no_data">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_no_data_html_source" aria-controls="jq_with_no_data_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_no_data_js_source" aria-controls="jq_with_no_data_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_no_data_css_source" aria-controls="jq_with_no_data_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_no_data_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_no_data_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_no_data_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,jqGrid_with_no_data_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <table id="grid_table_with_no_data" class="table table-bordered word-break"></table>
                                            <div id="grid_pager_with_no_data"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-with-data-formatters" class="title-anchor">&nbsp;</a>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid with data formatters</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_data_formatters" aria-expanded="false" aria-controls="jq_with_data_formatters"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_data_formatters">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_data_formatters_html_source" aria-controls="jq_with_data_formatters_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_data_formatters_js_source" aria-controls="jq_with_data_formatters_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_data_formatters_css_source" aria-controls="jq_with_data_formatters_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_data_formatters_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_data_formatters_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_data_formatters_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,jqGrid_with_data_formatters_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <div class="pad-top-20">
                                                <table id="grid_with_formatter_table" class="table table-bordered word-break"></table>
                                                <div id="grid_with_formatter_pager"></div>
                                            </div>
                                            <div class="pad-top-20">
                                                <table id="grid_with_formatter_2_table" class="table table-bordered word-break"></table>
                                                <div id="grid_with_formatter_2_pager"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" name="jqGrid-with-lot-of-columns-and-data-formatters" class="title-anchor">&nbsp;</a>


                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><strong>jqGrid with lot of columns and data formatters</strong></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#jq_with_lot_of_columns_and_data_formatters" aria-expanded="false" aria-controls="jq_with_data_formatters"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="jq_with_lot_of_columns_and_data_formatters">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#jq_with_lot_of_columns_and_data_formatters_html_source" aria-controls="jq_with_lot_of_columns_and_data_formatters_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#jq_with_lot_of_columns_and_data_formatters_js_source" aria-controls="jq_with_lot_of_columns_and_data_formatters_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#jq_with_lot_of_columns_and_data_formatters_css_source" aria-controls="jq_with_lot_of_columns_and_data_formatters_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="jq_with_lot_of_columns_and_data_formatters_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="jq_with_lot_of_columns_and_data_formatters_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="jq_with_lot_of_columns_and_data_formatters_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="alert alert-info mg-15 no-margin-bottom " role="alert">
                                                    <p><i class="fa fa-info-circle"></i>
                                                        When having pages <strong>with heavy visual load</strong> it is not recommended to use additional graphical elements like icons, especially if the meaning of each displayed value is clear and self-explanatory. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jqgrid_css,jqgrid_source,jqgrid_locale_en_source,jq_with_lot_of_columns_and_data_formatters_init,jquery_ui_source,stickykit_source,tether_source,drop_source,drop_css">
                                            <div class="pad-top-20">
                                                <h5 class="no-margin-top text-danger"><strong>Not recommended</strong></h5>
                                                <table id="grid_with_lot_of_columns_and_data_formatters_table_1" class="table table-bordered word-break"></table>
                                                <div id="grid_with_lot_of_columns_and_data_formatters_pager_1"></div>
                                            </div>
                                            <div class="pad-top-20">
                                                <h5 class="no-margin-top text-success"><strong>Recommended</strong></h5>
                                                <table id="grid_with_lot_of_columns_and_data_formatters_table_2" class="table table-bordered word-break"></table>
                                                <div id="grid_with_lot_of_columns_and_data_formatters_pager_2"></div>
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

<!-- POPUPS:Start -->
<div data-dependency-name="pop_space">
    <div id="pop_space"></div>
</div>
<!-- POPUPS:End -->

<!-- SCRIPTS:Start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" data-dependency-name="jquery"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-3.2.1.min.js\">"+"<"+"/script>")</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>

<!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
<script src="../dist/plugins/prism/prism.min.js"></script>

<script src="../dist/js/lib/jquery-ui.1.11.4.min.js" data-dependency-name="jquery_ui_source"></script>
<script src="../dist/plugins/jqgrid/i18n/grid.locale-en.js" data-dependency-name="jqgrid_locale_en_source"></script>
<script src="../dist/plugins/jqgrid/jquery.jqGrid.min.js" data-dependency-name="jqgrid_source"></script>

<script src="../dist/plugins/stickyKit/stickyKit.min.js" data-dependency-name="stickykit_source"></script>
<script src="../dist/plugins/tether/tether.min.js" data-dependency-name="tether_source"></script>
<script src="../dist/plugins/drop/drop.min.js" data-dependency-name="drop_source"></script>
<script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
<script src="../dist/js/demo_helpers.js"></script>
<!-- SCRIPTS:End -->

<!-- DOCUMENT-READY:Start -->
<script type="text/javascript">
    $(document).ready(function () {
        demoHelpers();  // Require demo_helpers.js
        showPageCode();
    });
</script>

<script type="text/javascript" data-dependency-name="listing_dummy_data">
        function getListingDummyData() {

            var dataSet = [
                {
                    "id": "1",
                    "firstname": "Tony",
                    "lastname": "Stark",
                    "username": "ironman",
                    "jobtype": "Philantropist",
                    "codename": "Iron Man",
                    "spirit_animal": "Tiger"
                },
                {
                    "id": "2",
                    "firstname": "Bruce",
                    "lastname": "Banner",
                    "username": "hulk_smash",
                    "jobtype": "Doctor",
                    "codename": "The Hulk",
                    "spirit_animal": "Gorilla"
                },
                {
                    "id": "3",
                    "firstname": "Thor",
                    "lastname": "Odinson",
                    "username": "thehammer",
                    "jobtype": "God",
                    "codename": "Thor",
                    "spirit_animal": "Lion"
                },
                {
                    "id": "4",
                    "firstname": "Clinton",
                    "lastname": "Barton",
                    "username": "hawkyey",
                    "jobtype": "Archer",
                    "codename": "Hawkeye",
                    "spirit_animal": "Hawk"
                },
                {
                    "id": "5",
                    "firstname": "Steven",
                    "lastname": "Rogers",
                    "username": "rogerthat",
                    "jobtype": "Captain",
                    "codename": "Captain America",
                    "spirit_animal": "Eagle"
                },
                {
                    "id": "6",
                    "firstname": "Natalia",
                    "lastname": "Romanova",
                    "username": "notawidow",
                    "jobtype": "Event planner",
                    "codename": "Black Widow",
                    "spirit_animal": "Spider"
                },
                {
                    "id": "7",
                    "firstname": "Henry",
                    "lastname": "Pym",
                    "username": "goliath",
                    "jobtype": "Unemployed",
                    "codename": "Ant-Man",
                    "spirit_animal": "Dog"
                },
                {
                    "id": "8",
                    "firstname": "Luke",
                    "lastname": "Charles",
                    "username": "tchiao",
                    "jobtype": "Self-employed",
                    "codename": "Black Panther",
                    "spirit_animal": "Jaguar"
                },
                {
                    "id": "9",
                    "firstname": "Victor",
                    "lastname": "Shade",
                    "username": "imallseeing",
                    "jobtype": "Self-employed",
                    "codename": "The Vision",
                    "spirit_animal": "Dolphin"
                },
                {
                    "id": "10",
                    "firstname": "Monica",
                    "lastname": "Rambeau",
                    "username": "photon",
                    "jobtype": "Self-employed",
                    "codename": "Captain Marvel",
                    "spirit_animal": "Mustang"

                }
            ];

            return dataSet;
        }
</script>

<script type="text/javascript" data-dependency-name="jqgrid_basic_init">
    $(document).ready(function () {
        var listingParameters = {
            table: '#grid_table',
            pager: '#grid_pager',
            datatype: 'jsonstring',
            caption: 'Listing caption',
            datastr: getListingDummyData(),
            colModel: [
                { label: 'First Name', name: 'firstname', key: true, width: "100" },
                { label: 'Last Name', name: 'lastname' },
                { label: 'Username', name: 'username' },
                { label: 'Hobby', name: 'jobtype', classes: 'word-break' },
                { label: 'Nickname', name: 'codename' },
                { label: 'Spiritual Animal', name: 'spirit_animal' }
            ]
        };

        new PhotonJqGrid(listingParameters).init();
    });
</script>

<script type="text/javascript" data-dependency-name="jqgrid_add_new_row_programatically_init">
    $(document).ready(function () {
        var listingParameters = {
            table: '#grid_table_add_new_row_programatically',
            pager: '#grid_pager_add_new_row_programatically',
            datatype: 'jsonstring',
            caption: 'jqGrid add new row programatically',
            datastr: getListingDummyData(),
            colModel: [
                {label: 'First Name', name: 'firstname', key: true, width: "100"},
                {label: 'Last Name', name: 'lastname'},
                {label: 'Username', name: 'username'}
            ]
        };

        new PhotonJqGrid(listingParameters).init();
        var rowCount = 0;
        $('.add-new-row').on('click', function () {
            var $grid_table_add_new_row_programatically = $("#grid_table_add_new_row_programatically");
            rowCount = $grid_table_add_new_row_programatically.getDataIDs().length + 2
            $grid_table_add_new_row_programatically.jqGrid(
                'addRowData',
                rowCount,
                {"id": rowCount, "firstname": "Lucian", "lastname": "Edmund", "username": "lucianus"},
                "last"
            );

            $grid_table_add_new_row_programatically.trigger("reloadGrid");

            var gridLastPage = $grid_table_add_new_row_programatically.getGridParam('lastpage');

            $grid_table_add_new_row_programatically.jqGrid('setGridParam', {"page": gridLastPage}).trigger("reloadGrid");

        })
    });
</script>

<script type="text/javascript" data-dependency-name="jqgrid_with_sticky_init">
    $(document).ready(function () {
        var listingParametersSticky = {
            table: '#grid_table_sticky',
            pager: '#grid_pager_sticky',
            datatype: 'jsonstring',
            caption: 'Listing caption',
            datastr: getListingDummyData(),
            stickyButtons: true,
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
    });
</script>

<script type="text/javascript" data-dependency-name="jqgrid_with_column_chooser_init">
    $(document).ready(function () {
        var listingParametersWithColumnChooser = {
            table: '#grid_table_column_chooser',
            pager: '#grid_pager_column_chooser',
            datatype: 'jsonstring',
            caption: 'Listing caption',
            datastr: getListingDummyData(),
            useCustomColumnChooser: true,
            columnChooserOptions: {
                selectAllCheckboxLabel: 'Select all',
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
            ],
            multiselect: true
        };

        var photonGrid = new PhotonJqGrid(listingParametersWithColumnChooser);
        photonGrid.init();
        $(photonGrid.grid).jqGrid('columnChooser');
    });
</script>

<script type="text/javascript" data-dependency-name="jqGrid_with_selectable_rows_init">
    $(document).ready(function () {
        var listingParametersWithSelectableRows = {
            table: '#grid_table_with_selectable_rows',
            pager: '#grid_pager_with_selectable_rows',
            datatype: 'jsonstring',
            caption: 'Listing caption',
            datastr: getListingDummyData(),
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
    });
</script>

<script type="text/javascript" data-dependency-name="jqGrid_with_ierarchical_elements_init">
    function getListingDummyDataForIerarchicalElements() {

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
                loaded:true
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
                loaded: true
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
                loaded:true
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
                loaded:true
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
                loaded:true
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
                loaded:true
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
                loaded:true
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
                loaded:true
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
                loaded:true
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
                loaded:true
            }
        ];

        return dataSet;
    }
    $(document).ready(function () {
        $("#grid_table_with_hierarchy").jqGrid({
            autoResizing: { compact: true },
            data: getListingDummyDataForIerarchicalElements(),
            datatype: "local",
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
            ExpandColClick : true,
            styleUI : 'fontAwesome'
        });
    });
</script>

<script type="text/javascript" data-dependency-name="jqGrid_with_subgrid_init">
    $(document).ready(function () {
        $("#grid_table_with_subgrid").jqGrid({
            autoResizing: { compact: true },
            datatype: "jsonstring",
            datastr: getListingDummyData(),
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
            styleUI : 'fontAwesome',
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
                    styleUI : 'fontAwesome',
                    colModel: [
                        { name: 'id',           index: 'id', hidden: true, width: "20" },
                        { label: 'First Name', name: 'firstname',    index: 'firstname', key: true, width: "100" },
                        { label: 'Last Name', name: 'lastname',     index: 'lastname' },
                        { label: 'Username', name: 'username',     index: 'username' },
                        { label: 'Hobby', name: 'jobtype',      index: 'jobtype' },
                        { label: 'Nickname', name: 'codename',     index: 'codename' },
                        { label: 'Spiritual Animal', name: 'spirit_animal',index: 'spirit_animal' }
                    ],
                    height: '100%',
                    rowNum:5,
                    sortname: 'num',
                    sortorder: "asc"
                });
            }
        });
    });
</script>

<script type="text/javascript" data-dependency-name="jqGrid_with_inline_editing_init">
    $(document).ready(function () {
        var listingParameters = {
            table: '#grid_table_with_inline_edit',
            pager: '#grid_pager_with_inline_edit',
            datatype: 'jsonstring',
            caption: 'Listing caption',
            datastr: getListingDummyData(),
            colModel: [
                { name: 'id',           index: 'id', key: true, hidden: true, width: "20" },
                { label: 'First Name', name: 'firstname',    index: 'firstname', width: "100", editable: true },
                { label: 'Last Name', name: 'lastname',     index: 'lastname', editable: true },
                { label: 'Username', name: 'username',     index: 'username', editable: true },
                { label: 'Hobby', name: 'jobtype',      index: 'jobtype', editable: true },
                { label: 'Nickname', name: 'codename',     index: 'codename', editable: true },
                { label: 'Spiritual Animal', name: 'spirit_animal',index: 'spirit_animal', editable: true },
                {
                    label: 'Actions',
                    name: 'actions',
                    width: 60,
                    formatter: 'actions',
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
    });
</script>

<script type="text/javascript" data-dependency-name="jqGrid_with_actions_init">
    $(document).ready(function () {

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
                {name: 'status', index: 'status', width: 1, sorttype: "text", formatter: PhotonDataFormatter.labelAndTooltip },
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
    });
</script>

<script type="text/javascript" data-dependency-name="jqGrid_with_no_data_init">
    $(document).ready(function () {

        function getListingWithNoDataData() {
            var data = {
                'page': '1',
                'records': '6',
                'rows': [ ]
            };
            return data;
        }

        var listingWithNoDataParameters = {
            table: '#grid_table_with_no_data',
            pager: '#grid_pager_with_no_data',
            datatype: 'jsonstring',
            caption: 'Listing caption',
            datastr: getListingWithNoDataData(),
            colNames: [
                'Name',
                'Status',
                'Platform',
                'Available products',
                'Actions'
            ],
            colModel: [
                {name: 'name', index: 'name', width: 2, sortable: false},
                {name: 'status', index: 'status', width: 1, sorttype: "text" },
                {name: 'platform', index: 'platform', width: 1, sorttype: "text"},
                {name: 'products', index: 'products', width: 2, sorttype: "text"},
                {name: 'actions', index: 'actions', width: 2, sortable: false}
            ]
        };

        new PhotonJqGrid(listingWithNoDataParameters).init();
    });
</script>

<script type="text/javascript" data-dependency-name="jqGrid_with_data_formatters_init">
    $(document).ready(function () {

        //grid_with_formatter_table
        var listingWithFormatterParameters = {
            table: '#grid_with_formatter_table',
            pager: '#grid_with_formatter_pager',
            datatype: 'jsonstring',
            caption: 'jqGrid with data formatters',
            datastr: getListingWithFormatterDummyData(),
            colNames: [
                'ID',
                'Not available',
                'Date & time',
                'Date',
                'Time',
                'User email',
                'Country'
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

        function getListingWithFormatterDummyData() {
            var data = {
                'page': '1',
                'records': '6',
                'rows': [
                    {
                        'id': '0',
                        'notAvailable': 'String value',
                        'dateTime': '2016-07-29 11:53:59.000000',
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
                        'notAvailable': ['1', '2', '3', '4'],
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

        new PhotonJqGrid(listingWithFormatterParameters).init();


        //grid_with_formatter_2_table
        var listingWithFormatter2Parameters = {
            table: '#grid_with_formatter_2_table',
            pager: '#grid_with_formatter_2_pager',
            datatype: 'jsonstring',
            caption: 'jqGrid with data formatters',
            datastr: getListingWithFormatter2DummyData(),
            colNames: [
                'Product',
                'Badge',
                'Price',
                'Date & time',
                'Status'
            ],
            colModel: [
                {name: 'product', index: 'product', sortable: false, width: 2, formatter: PhotonDataFormatter.product },
                {name: 'badge', index: 'badge', sortable: false, width: 1, formatter: PhotonDataFormatter.badge },
                {name: 'price', index: 'price', sortable: false, width: 1, formatter: PhotonDataFormatter.price },
                {name: 'dateTime', index: 'dateTime', sortable: false, width: 1, formatter: PhotonDataFormatter.dateTime },
                {name: 'status', index: 'status', sortable: false, width: 1, formatter: PhotonDataFormatter.labelAndTooltip }
            ]
        };

        function getListingWithFormatter2DummyData() {
            var status1 = '{"label": "Live", "labelClass": "label-success"}';
            var status2 = '{"label": "Deleted", "labelClass": "label-danger"}';
            var status3 = '{"label": "Warning", "labelClass": "label-warning"}';
            var status4 = 'Inactive';
            var status5 = '{"label": "Active", "labelClass": "label-primary"}';

            var data = {
                'page': '1',
                'records': '6',
                'rows': [
                    {
                        'id': '0',
                        'product': 'iPhone 5S',
                        'badge': 123,
                        'price': 1234.56,
                        'dateTime': '2016-07-29 11:53:59.000000',
                        'status': status1
                    },
                    {
                        'id': 1,
                        'product': '{"name":"iPhone SE", "link":""}',
                        'badge': '123',
                        'price': '1234.56',
                        'dateTime': ['2016-07-29', '11:53:59'],
                        'status': status2
                    },
                    {
                        'id': null,
                        'product': '{"name":"iPhone 6S", "link":"#"}',
                        'badge': '{"text":"RO", "number":"123"}',
                        'price': '{"value":"1234567.89","currency":"RON"}',
                        'dateTime': '{"date": "2016-07-29", "time": "11:53:59"}',
                        'status': status3
                    },
                    {
                        /** 'id': 3, */
                        /** 'product': 'iPhone 6 Plus', */
                        /** 'badge': 123, */
                        /** 'price': 123.45, */
                        /** 'dateTime': '2016-07-29 11:53:59', */
                        /** 'status': status4 */
                    },
                    {
                        'id': 4,
                        'product': {name: 'Samsung S8', link: '#'},
                        'badge': {text: 'RO', number: '123'},
                        'price': {value: 123.45, currency: 'RON'},
                        'dateTime': {date: '2016-07-29', time: '11:53:59'},
                        'status': status4
                    },
                    {
                        'id': 5,
                        'product': {name: 'Samsung S8'},
                        'badge': {number: '123'},
                        'price': {value: 12345.67},
                        'dateTime': 1024,
                        'status': status5
                    }
                ]
            };

            return data;
        }

        new PhotonJqGrid(listingWithFormatter2Parameters).init();
    });
</script>

<script type="text/javascript" data-dependency-name="jq_with_lot_of_columns_and_data_formatters_init">
    $(document).ready(function () {

        var listingWithNotRecommendedFormatter = {
            table: '#grid_with_lot_of_columns_and_data_formatters_table_1',
            pager: '#grid_with_lot_of_columns_and_data_formatters_pager_1',
            datatype: 'jsonstring',
            caption: 'jqGrid with data formatters',
            datastr: getListingWithNotRecommendedFormatter(),
            colNames: [
                'Product ID',
                'Product description',
                'Added date',
                'Active until',
                'Status',
                'Added by',
                'Actions'
            ],
            colModel: [
                {name: 'id', index: 'id', sortable: false, width: 1, formatter: PhotonDataFormatter.id },
                {name: 'productDescription', index: 'notAvailable', sortable: false, width: 3, formatter: PhotonDataFormatter.notAvailable },
                {name: 'addedDate', index: 'dateTime', sortable: false, width: 3, formatter: PhotonDataFormatter.dateTime },
                {name: 'activeUntil', index: 'activeUntil', sortable: false, width: 3, formatter: PhotonDataFormatter.dateTime },
                {name: 'status', index: 'date', sortable: false, width: 2, formatter: PhotonDataFormatter.labelAndTooltip },
                {name: 'addedBy', index: 'time', sortable: false, width: 2, formatter: PhotonDataFormatter.userEmail },
                {name: 'actions', index: 'actions', width: 2, sortable: false, formatter: PhotonDataFormatter.actionsButtons }
            ]
        };

        function getListingWithNotRecommendedFormatter() {
            var actions = '[' +
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

            var statusActive = '{"label": "Active", "labelClass": "label-primary"}';
            var statusDeleted = '{"label": "Deleted", "labelClass": "label-danger"}';
            var statusAdded = '{"label": "Added", "labelClass": "label-success"}';

            var data = {
                'page': '1',
                'records': '6',
                'rows': [
                    {
                        'id': '459788',
                        'productDescription': 'Samsung Galaxy S 7 32GB',
                        'addedDate': '2016-07-29 11:53:59.000000',
                        'status': statusActive,
                        'addedBy': {displayname: 'Marius Georgescu', email: 'marius.georgescu@emag.ro'},
                        'activeUntil': '2016-08-29 11:53:59.000000',
                        'actions': actions
                    },
                    {
                        'id': '587476',
                        'productDescription': 'Laptop 2 in 1 ASUS Transformer Book T100HA-FU006T',
                        'addedDate': '2016-07-26 10:49:13.000000',
                        'status': statusActive,
                        'addedBy': {displayname: 'Remus Vladescu', email: 'remus.vladescu@emag.ro'},
                        'activeUntil': '2016-08-26 10:49:13.000000',
                        'actions': actions
                    },
                    {
                        'id': '117471',
                        'productDescription': 'Laptop Lenovo V110-15IAP',
                        'addedDate': '2016-07-26 10:41:18.000000',
                        'status': statusAdded,
                        'addedBy': {displayname: 'Vlad Emilian', email: 'vlad.emilian@emag.ro'},
                        'activeUntil': '',
                        'actions': actions
                    },
                    {
                        'id': '237476',
                        'productDescription': 'Samsung Galaxy S 7 16GB',
                        'addedDate': '2016-06-16 11:37:11.000000',
                        'status': statusDeleted,
                        'addedBy': {displayname: 'Ionut Vulpescu', email: 'ionut.popescu@emag.ro'},
                        'activeUntil': '2016-07-16 11:53:59.000000',
                        'actions': actions
                    }
                ]
            };

            return data;
        }

        new PhotonJqGrid(listingWithNotRecommendedFormatter).init();



        var listingWithRecommendedFormatter = {
            table: '#grid_with_lot_of_columns_and_data_formatters_table_2',
            pager: '#grid_with_lot_of_columns_and_data_formatters_pager_2',
            datatype: 'jsonstring',
            caption: 'jqGrid with data formatters',
            datastr: getListingWithRecommendedFormatter(),
            colNames: [
                'Product ID',
                'Product description',
                'Added date',
                'Active until',
                'Status',
                'Added by',
                'Actions'
            ],
            colModel: [
                {name: 'id', index: 'id', sortable: false, width: 1, formatter: PhotonDataFormatter.id },
                {name: 'productDescription', index: 'notAvailable', sortable: false, width: 3, formatter: PhotonDataFormatter.notAvailable },
                {name: 'addedDate', index: 'dateTime', sortable: false, width: 3, formatter: PhotonDataFormatter.dateTimeNoIcon },
                {name: 'activeUntil', index: 'activeUntil', sortable: false, width: 3, formatter: PhotonDataFormatter.dateTimeNoIcon },
                {name: 'status', index: 'date', sortable: false, width: 2, formatter: PhotonDataFormatter.labelAndTooltip },
                {name: 'addedBy', index: 'time', sortable: false, width: 2, formatter: PhotonDataFormatter.userEmailNoIcon },
                {name: 'actions', index: 'actions', width: 2, sortable: false, formatter: PhotonDataFormatter.actionsButtons }
            ]
        };

        function getListingWithRecommendedFormatter() {
            var actions = '[' +
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

            var statusActive = '{"label": "Active", "labelClass": "label-primary"}';
            var statusDeleted = '{"label": "Deleted", "labelClass": "label-danger"}';
            var statusAdded = '{"label": "Added", "labelClass": "label-success"}';

            var data = {
                'page': '1',
                'records': '6',
                'rows': [
                    {
                        'id': '459788',
                        'productDescription': 'Samsung Galaxy S 7 32GB',
                        'addedDate': '2016-07-29 11:53:59.000000',
                        'status': statusActive,
                        'addedBy': {displayname: 'Marius Georgescu', email: 'marius.georgescu@emag.ro'},
                        'activeUntil': '2016-08-29 11:53:59.000000',
                        'actions': actions
                    },
                    {
                        'id': '587476',
                        'productDescription': 'Laptop 2 in 1 ASUS Transformer Book T100HA-FU006T',
                        'addedDate': '2016-07-26 10:49:13.000000',
                        'status': statusActive,
                        'addedBy': {displayname: 'Remus Vladescu', email: 'remus.vladescu@emag.ro'},
                        'activeUntil': '2016-08-26 10:49:13.000000',
                        'actions': actions
                    },
                    {
                        'id': '117471',
                        'productDescription': 'Laptop Lenovo V110-15IAP',
                        'addedDate': '2016-07-26 10:41:18.000000',
                        'status': statusAdded,
                        'addedBy': {displayname: 'Vlad Emilian', email: 'vlad.emilian@emag.ro'},
                        'activeUntil': '',
                        'actions': actions
                    },
                    {
                        'id': '237476',
                        'productDescription': 'Samsung Galaxy S 7 16GB',
                        'addedDate': '2016-06-16 11:37:11.000000',
                        'status': statusDeleted,
                        'addedBy': {displayname: 'Ionut Vulpescu', email: 'ionut.popescu@emag.ro'},
                        'activeUntil': '2016-07-16 11:53:59.000000',
                        'actions': actions
                    }
                ]
            };

            return data;
        }

        new PhotonJqGrid(listingWithRecommendedFormatter).init();


    });
</script>
<!-- DOCUMENT-READY:End -->
</body>
</html>
