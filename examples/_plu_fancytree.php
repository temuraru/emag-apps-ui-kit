<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <!-- PLUGIN: Fancytree -->
    <link rel="stylesheet" href="../dist/plugins/fancytree/fancytree.min.css">
    <title>JS Components - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php"?>
</head>
<body>

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
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="container-fluid pad-sep-20">
                                <h1>eMAG Apps UI KIT - Fancytree</h1>
                                <p>The lightning-fast, modular, mobile-friendly admin template.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="fancytreeStandardId" class="pad-top-20">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h4 class="text-primary"><strong>Fancytree.js</strong></h4>
                                    <p><strong>Used for displaying categories, subcategories and products</strong></p>
                                    <p>You can familiarize yourself with more options and settings by checking out <a href="https://github.com/mar10/fancytree" target="_blank">https://github.com/mar10/fancytree</a></p>
                                </div>
                                <hr/>
                                <div class="show-panel-body">
                                    <p><strong>Fancytree inpage example</strong></p>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div id="tree">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="show-panel-example">
                                    <div class="show-panel-footer">
                                        <pre class="language-javascript">
                                                        <code class="language-javascript">
                                                            $("#tree").fancytree({
                                                                icon: false,
                                                                checkbox: true,
                                                                source: source.json
                                                            });
                                                        </code>
                                        </pre>
                                    </div>
                                </div>
                                <div class="show-panel-body">
                                    <p>
                                        <strong>Fancytree in modal</strong>
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button class="btn btn-primary" id="show-fancytree-modal">Show fancytree modal</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="show-panel-example">
                                    <div class="show-panel-footer">
                                        To be completed...
                                    </div>
                                </div>
                                <div class="show-panel-body">
                                    <label for="category_treeDefault">Category tree</label>
                                    <div class="hide-with-opacity">
                                        <select id="category_tree_default" multiple="multiple">
                                            <option value=""></option>
                                            <option value="31">Software</option>
                                            <option value="175">Antivirus</option>
                                            <option value="221">Sisteme de operare</option>
                                            <option value="225">Aplicatii desktop OEM</option>
                                            <option value="226" selected="selected">Medii de dezvoltare OEM</option>
                                            <option value="227" selected="selected">Sisteme de operare server OEM</option>
                                            <option value="228">Aplicatii server OEM</option>
                                            <option value="340">Clienti server OEM</option>
                                            <option value="222">Office & Aplicatii Desktop</option>
                                            <option value="229">Sisteme de operare Retail</option>
                                            <option value="230">Aplicatii desktop Retail</option>
                                            <option value="231">Medii de dezvoltare Retail</option>
                                            <option value="232">Sisteme de operare server Retail</option>
                                            <option value="233">Aplicatii server Retail</option>
                                            <option value="274">Documentatii Retail</option>
                                            <option value="344">Clienti server retail</option>
                                            <option value="361">Editare foto-video</option>
                                            <option value="1512">AC</option>
                                            <option value="1513">Photo DSLR</option>
                                            <option value="378">Aparate foto D-SLR</option>
                                            <option value="407">Accesorii aparate foto DSLR si Mirrorless</option>
                                            <option value="443">Kit curatare DSLR</option>
                                            <option value="1117">Aparate foto Mirrorless</option>
                                            <option value="1514">Photo Compact</option>
                                            <option value="54">Aparate foto compacte</option>
                                            <option value="1517">AV & HiFi</option>
                                            <option value="80">Videoproiectoare</option>
                                            <option value="117">DVD & Blu-Ray Playere</option>
                                            <option value="408">Audio HI-FI</option>
                                            <option value="204">Playere & Receivere</option>
                                            <option value="539">Amplificatoare</option>
                                            <option value="540">Playere</option>
                                            <option value="542">Boxe</option>
                                            <option value="635">Sisteme audio wireless</option>
                                            <option value="1061">Pick-Up</option>
                                            <option value="1150">Accesorii Audio Hi-Fi</option>
                                            <option value="467">Mediaplayere</option>
                                            <option value="1133">Home Audio</option>
                                            <option value="113">Sisteme Home Cinema</option>
                                            <option value="124">Sisteme audio</option>
                                            <option value="162">Radiocasetofoane</option>
                                            <option value="1140">Docking</option>
                                            <option value="1534">Other Products</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <div class="form-control" id="id_category_tree_default"></div>
                                        <span class="input-group-addon">
                                            <i class="ace-icon fa fa-sitemap"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="show-panel-body">
                                    <form>
                                        <fieldset>
                                            <legend class="sr-only">TreeType example form</legend>
                                            <div class="form-group">
                                                <label for="test_input" class="control-label">Test input</label>
                                                <input type="text" id="test_input" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label for="category_treeDefault">Category tree</label>
                                                <div class="hide-with-opacity">
                                                    <select id="category_tree_onlyleafs" multiple="multiple">
                                                        <option value=""></option>
                                                        <option value="31">Software</option>
                                                        <option value="175">Antivirus</option>
                                                        <option value="221">Sisteme de operare</option>
                                                        <option value="225">Aplicatii desktop OEM</option>
                                                        <option value="226" selected="selected">Medii de dezvoltare OEM</option>
                                                        <option value="227" selected="selected">Sisteme de operare server OEM</option>
                                                        <option value="228">Aplicatii server OEM</option>
                                                        <option value="340">Clienti server OEM</option>
                                                        <option value="222">Office & Aplicatii Desktop</option>
                                                        <option value="229">Sisteme de operare Retail</option>
                                                        <option value="230">Aplicatii desktop Retail</option>
                                                        <option value="231">Medii de dezvoltare Retail</option>
                                                        <option value="232">Sisteme de operare server Retail</option>
                                                        <option value="233">Aplicatii server Retail</option>
                                                        <option value="274">Documentatii Retail</option>
                                                        <option value="344">Clienti server retail</option>
                                                        <option value="361">Editare foto-video</option>
                                                        <option value="1512">AC</option>
                                                        <option value="1513">Photo DSLR</option>
                                                        <option value="378">Aparate foto D-SLR</option>
                                                        <option value="407">Accesorii aparate foto DSLR si Mirrorless</option>
                                                        <option value="443">Kit curatare DSLR</option>
                                                        <option value="1117">Aparate foto Mirrorless</option>
                                                        <option value="1514">Photo Compact</option>
                                                        <option value="54">Aparate foto compacte</option>
                                                        <option value="1517">AV & HiFi</option>
                                                        <option value="80">Videoproiectoare</option>
                                                        <option value="117">DVD & Blu-Ray Playere</option>
                                                        <option value="408">Audio HI-FI</option>
                                                        <option value="204">Playere & Receivere</option>
                                                        <option value="539">Amplificatoare</option>
                                                        <option value="540">Playere</option>
                                                        <option value="542">Boxe</option>
                                                        <option value="635">Sisteme audio wireless</option>
                                                        <option value="1061">Pick-Up</option>
                                                        <option value="1150">Accesorii Audio Hi-Fi</option>
                                                        <option value="467">Mediaplayere</option>
                                                        <option value="1133">Home Audio</option>
                                                        <option value="113">Sisteme Home Cinema</option>
                                                        <option value="124">Sisteme audio</option>
                                                        <option value="162">Radiocasetofoane</option>
                                                        <option value="1140">Docking</option>
                                                        <option value="1534">Other Products</option>
                                                    </select>
                                                </div>
                                                <div class="input-group">
                                                    <div class="form-control" id="id_category_tree_onlyleafs"></div>
                                                    <span class="input-group-addon">
                                                        <i class="ace-icon fa fa-sitemap"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="reset" class="btn btn-primary pull-right" />
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="show-panel-example">
                                    <div class="show-panel-footer">
                                        To be completed...
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

        <!-- POPUPS:Start -->
        <div id="popSpace"></div>
        <!-- POPUPS:End -->

    </div>
</div>
    
    <?php include_once "modules/_mod_js_footer.php"?>

</body>
</html>