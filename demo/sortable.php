<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <title>JS Components - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php"?>

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
                        <p><b>Sortable | jQuery UI</b></p>
                    </div>
                </div>
                <section id="sortableStandardId" class="pad-top-40">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">

                            <h2><strong>Sortable</strong></h2>

                            <div class="code-container">
                                <div class="row flex-container code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b></b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#sortable" aria-expanded="false" aria-controls="sortable"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></a>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="sortable">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#sortable_html_source" aria-controls="sortable_html" role="tab" data-toggle="tab">HTML</a></li>
                                        <li role="presentation"><a href="#sortable_js_source" aria-controls="sortable_js" role="tab" data-toggle="tab">JS</a></li>
                                        <li role="presentation"><a href="#sortable_css_source" aria-controls="sortable_css" role="tab" data-toggle="tab">CSS</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="sortable_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane js-source" id="sortable_js_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                        <div role="tabpanel" class="tab-pane css-source" id="sortable_css_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="pad-15" data-showcase="example" data-dependencies="main_style,main_script,jquery,jquery_ui_source,sortable-content,sortable_css">
                                            <div class="row">
                                                <div class="col-sm-12">

                                                    <div id="sortable_container" class="panel-body makeSortable no-margin-left-right no-padding-bottom">
                                                        <div class="panel panel-default custom-panel-list-item">
                                                            <div class="panel-body">
                                                                <div class="content">
                                                                    <h3 class="no-margin-top"><strong>Donec quis feugiat est</strong></h3>
                                                                    <p>Aenean ultricies, odio sit amet posuere venenatis, nulla felis tincidunt nisi, ac dapibus ex libero non augue.</p>
                                                                </div>
                                                                <div class="drag">
                                                                    <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default custom-panel-list-item">
                                                            <div class="panel-body">
                                                                <div class="content">
                                                                    <h3 class="no-margin-top"><strong>Proin hendrerit arcu</strong></h3>
                                                                    <p>Donec et pretium odio. Integer pellentesque aliquet enim a dapibus.</p>
                                                                </div>
                                                                <div class="drag">
                                                                    <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="panel panel-default custom-panel-list-item">
                                                            <div class="panel-body">
                                                                <div class="content">
                                                                    <h3 class="no-margin-top"><strong>Donec finibus blandit</strong></h3>
                                                                    <p>Integer sollicitudin fringilla lorem, non consequat risus fermentum ut.</p>
                                                                </div>
                                                                <div class="drag">
                                                                    <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
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
<!-- POPUPS:Start -->
<div data-dependency-name="pop_space">
    <!-- Div with id 'pop_space' must be inserted before the end of the body tag -->
    <div id="pop_space"></div>
</div>
<!-- POPUPS:End -->

<!-- SCRIPTS:Start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" data-dependency-name="jquery"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>

<script src="../dist/js/lib/jquery-ui.1.11.4.min.js" data-dependency-name="jquery_ui_source"></script>

<script src="../dist/js/main_script.min.js" data-dependency-name="main_script"></script>
<script src="../dist/js/demo_helpers.js"></script>
<!-- SCRIPTS:End -->

<!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
<script src="../dist/plugins/prism/prism.min.js"></script>

<!-- DOCUMENT-READY:Start -->

<script type="text/javascript">
    $(document).ready(function () {
        demoHelpers();  // Require demo_helpers.js
        showPageCode();
    });
</script>

<script type="text/javascript" data-dependency-name="sortable-content">
    $(document).ready(function () {
        $(".makeSortable").sortable({
            placeholder: "ui-state-highlight",
            axis: "y",
            cursor: "ns-resize",
            sort: function (event, ui) {
                var $sortableObj = $(ui.item);
                var $sortableObjParent = $(ui.item).parent();
                var calcY = event.pageY - $sortableObjParent.offset().top - $sortableObj.height() / 2;
                var max = $sortableObjParent.height() - $sortableObj.height() / 2;

                if (calcY < 0) {
                    $sortableObj.css({'top': 0});
                } else {
                    $sortableObj.css({'top': Math.min(calcY, max)});
                }
            },
            update: function (event, ui) {
                
            },
            stop: function (event, ui) {
                var $sortableObj = $(ui.item);
                $sortableObj.removeClass('panel-primary').addClass('panel-default');
                $sortableObj.find('.drag .fa').removeClass('fa-hand-rock-o').addClass('fa-hand-paper-o');
            },
            start: function (event, ui) { // custom algorythm to fix placeholder size
                ui.placeholder.height(ui.item.innerHeight());
            }

        });

        $(document.body).on('mousedown', '.custom-panel-list-item', function (e) {
            $eCurrentTarget = $(e.currentTarget);
            $eCurrentTarget.removeClass('panel-default').addClass('panel-primary');
            $eCurrentTarget.find('.drag .fa').removeClass('fa-hand-paper-o').addClass('fa-hand-rock-o');

        });

        $(document.body).on('mouseup', '.custom-panel-list-item', function (e) {
            $eCurrentTarget = $(e.currentTarget);
            $eCurrentTarget.removeClass('panel-primary').addClass('panel-default');
            $eCurrentTarget.find('.drag .fa').removeClass('fa-hand-rock-o').addClass('fa-hand-paper-o');
        })
});
</script>

<style data-dependency-name="sortable_css">
    /* DRAGGABLE ITEMS */
    #sortable_container {
        position: relative;
    }

    .custom-panel-list-item .fa-hand-rock-o {
        color: #005eb7;
    }

    .custom-panel-list-item .panel-body {
        display: flex;
    }

    .custom-panel-list-item .panel-body p {
        margin: 0;
    }

    .custom-panel-list-item .panel-body .drag {
        margin-left: auto;
        align-items: center;
        justify-content: center;
        display: flex;
        padding-left: 20px;
    }

    /* END DRAGGABLE ITEMS */

    .ui-state-highlight{
        margin-bottom: 20px;
        background: #005eb7;
        border:1px solid #005eb7;
    }
</style>

</body>
</html>