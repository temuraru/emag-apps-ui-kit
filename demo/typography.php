<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <title>Typography - eMAG Apps UI KIT</title>
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
                                <p><b>Typography</b></p>
                            </div>
                        </div>

                        <section id="typefaces" class="pad-top-40">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Typefaces</strong></h2>

                                    <h4><strong>Preview</strong></h4>
                                    <div id="font-usage-preview" class="zoom-gallery zg-grid">
                                        <a href="img/eMAG_Apps_UI_KIT_fonts_usage_preview.png" data-source="img/eMAG_Apps_UI_KIT_fonts_usage_preview.png" title="Typography">
                                            <img src="img/eMAG_Apps_UI_KIT_fonts_usage_preview.png" alt="gallery-image">
                                        </a>
                                    </div>

                                    <p><strong>The fonts used in UI KIT are Open Sans (Light, Regular, Semibold, Bold) and Menlo (Regular, Bold). These should be used like this:</strong></p>
                                    <ul>
                                    <li><strong>"Open Sans" is the main UI KIT font and should be used in all components with text.</strong></li>
                                    <li>
                                        <strong>Usage suggestions:</strong>
                                        <ul>
                                            <li>Open Sans Light: for a modal's title</li>
                                            <li>Open Sans Regular: for a jQgrid row text, for text inside a modal, inside an input or drop-down, for buttons labels;</li>
                                            <li>Open Sans Semibold: for the language selector text in the top navigation;</li>
                                            <li>Open Sans Bold: for a jQgrid column header title, for an input or drop-down label.</li>
                                        </ul>
                                    </li>
                                    <li><strong>"Consolas" and "Menlo" are the secondary fonts and are used to display code lines.</strong></li>
                                    </ul>
                                    <p><strong>See the font families you can use, below.</strong></p>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fonts-up-140"></i>
                                                    The current primary font-family is <code><span class="wba-font-primary"></span></code>.This font-family is inherited by all the elements from the start, however, to use it on a specific element, use the <mark>.formatted-sans-serif</mark> class on the element or its parent or, in Less, use the <mark>@font-family-sans-serif</mark> You can view the font glyphs in the example below.
                                                </div>
                                                <div class="pad-btm-20">
                                                    <h1>ABCDEFGHIÎJKLMNOPQRSȘTȚUVWXYZ<br>abcdefghiîjklmnopqrsștțuvwxyz<br>1234567890!@#$%^&amp;*()`~[{]}\|;:'",&lt;.&gt;/?</h1>
                                                </div>
                                                <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fonts-up-140"></i>
                                                    The current monospace font-family is <code><span class="wba-font-monospace"></span></code>. To use this font-family, use the <mark>.formatted-monospace</mark> class on the element or its parent or, in LESS, use the <mark>@font-family-monospace</mark>. You can view the font glyphs in the example below.
                                                </div>
                                                <div class="pad-btm-20">
                                                    <h3 class="formatted-monospace">ABCDEFGHIÎJKLMNOPQRSȘTȚUVWXYZ<br>abcdefghiîjklmnopqrsștțuvwxyz<br>1234567890!@#$%^&amp;*()`~[{]}\|;:'",&lt;.&gt;/?</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="headings-and-paragraphs" class="pad-top-30">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Headings and Paragraphs</strong></h2>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h1>h1,.h1 - Heading 1</h1>
                                            <p class="lead">This is a sample of lead paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin neque odio, quis fringilla tortor eleifend in. Proin suscipit nunc quam, sed consequat est pulvinar eget. Donec vel hendrerit tortor, et rhoncus lectus. Donec non tellus vel diam aliquam egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                            <h2>h2,.h2 - Heading 2</h2>
                                            <p>This is a sample of paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin neque odio, quis fringilla tortor eleifend in. Proin suscipit nunc quam, sed consequat est pulvinar eget. Donec vel hendrerit tortor, et rhoncus lectus. Donec non tellus vel diam aliquam egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                            <h3>h3,.h3 - Heading 3</h3>
                                            <h4>h4,.h4 - Heading 4</h4>
                                            <h5>h5,.h5 - Heading 5</h5>
                                            <h6>h6,.h6 - Heading 6</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="utility-tags" class="pad-top-30">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Utility tags</strong></h2>
                                    <div class="mg-sep-30">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">

                                                <div>
                                                    <p data-showcase="example">
                                                        <mark>Highlighted text</mark>
                                                    </p>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p data-showcase="example">
                                                        <del>This line of text is meant to be treated as deleted text.</del>
                                                    </p>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p data-showcase="example">
                                                        <s>This line of text is meant to be treated as no longer accurate.</s>
                                                    </p>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p data-showcase="example">
                                                        <ins>This line of text is meant to be treated as an addition to the document.</ins>
                                                    </p>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p data-showcase="example">
                                                        <u>This line of text will render as underlined</u>
                                                    </p>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div>
                                                    <p data-showcase="example">
                                                        <small>This line of text is meant to be treated as fine print.</small>
                                                    </p>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p data-showcase="example">
                                                        <strong>This line of text is rendered as bold text</strong>
                                                    </p>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p data-showcase="example">
                                                        <em>This line of text is rendered as italicized text</em>
                                                    </p>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p data-showcase="example">
                                                        An abreviation of the word "attribute" is <abbr title="attribute">attr</abbr>
                                                    </p>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="mg-sep-30">
                                        <div class="alert alert-info" role="alert"><p><i class="fa fa-info-circle"></i> For showing and hiding content you can use either <code>.show</code> or <code>.hide</code> classes. The <code>.invisible</code> class can be used to toggle only the visibility of an element, meaning its display is not modified and the element can still affect the content of the document. You can hide an element to <b>all devices except screen readers</b> by using the <code>.sr-only</code> class. To show the element when it's focused upon (via keyboard "tab") you can combine <code>.sr-only</code> with <code>.sr-only-focusable</code>.</p></div>
                                        <div class="alert alert-info" role="alert"><i class="fa fa-info-circle"></i> You can <strong>enlarge the font-sizing</strong> of any element by adding one of the classes from the following range:<code>.fonts-up-120</code> to <code>.fonts-up-200</code>. Please take into consideration that these classes have a step of <code><strong>20</strong></code>.</div>
                                    </div>
                                   </div>
                            </div>
                        </section>
                        <section id="alignment-classes" class="pad-top-30">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Alignment classes</strong></h2>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div>
                                                    <div data-showcase="example">
                                                        <p class="text-left">This text is aligned to the left.</p>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div data-showcase="example">
                                                        <p class="text-center">This text is centered.</p>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div data-showcase="example">
                                                        <p class="text-right">This text is aligned to the right.</p>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>




                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div>
                                                    <div data-showcase="example">
                                                        <p class="text-justify">This text is supposed to be justified. Check it out on a smaller resolution.</p>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div data-showcase="example">
                                                        <p class="text-nowrap">No wrap text. </p>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="address-example" class="pad-top-30">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Address example</strong></h2>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">

                                                <div>
                                                    <div data-showcase="example">
                                                        <address>
                                                            <strong>Dante International S.A.</strong><br>
                                                            Swan Office Park, Windsor Building <br>
                                                            Sos. Bucureşti Nord nr. 15-23, Voluntari, Ilfov<br>
                                                            <abbr title="Phone">P:</abbr> +40 21 200 52 00/25
                                                        </address>
                                                        <address>
                                                            <strong>Eric Norton</strong><br>
                                                            <a href="mailto:#">eric.norton@emag.ro</a>
                                                        </address>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="contextual-classes" class="pad-top-30">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Contextual classes</strong></h2>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div>
                                                    <div data-showcase="example">
                                                        <p class="bg-primary">This text has the brand-primary contextual background-color</p>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div data-showcase="example">
                                                        <p class="bg-success">This text has the brand-success contextual background-color</p>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div data-showcase="example">
                                                        <p class="bg-info">This text has the brand-info contextual background-color</p>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div>
                                                    <div data-showcase="example">
                                                        <p class="bg-warning">This text has the brand-warning contextual background-color</p>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div data-showcase="example">
                                                        <p class="bg-danger">This text has the brand-danger contextual background-color</p>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="text-case-and-capitalization" class="pad-top-30">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Text case and capitalization</strong></h2>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div>
                                                    <div data-showcase="example">
                                                        <p class="text-lowercase">Lowercased text.</p>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div data-showcase="example">
                                                        <p class="text-uppercase">Uppercased text.</p>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre><br>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div data-showcase="example">
                                                        <p class="text-capitalize">Capitalized text.</p>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="block-quotes" class="pad-top-30">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Block quotes</strong></h2>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <p><strong>Blockquote with subtext:</strong></p>
                                                <div>
                                                    <div data-showcase="example">
                                                        <blockquote>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                                        </blockquote>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <p><strong>Alternate alignment blockquote:</strong></p>
                                                <div>
                                                    <div data-showcase="example">
                                                        <blockquote>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                                        </blockquote>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="print" class="pad-top-30">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Print</strong></h2>
                                    <div class="mg-top-20">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>Classes</th>
                                                            <th>Browser</th>
                                                            <th>Print</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">
                                                                <code>.visible-print-block</code><br>
                                                                <code>.visible-print-inline</code><br>
                                                                <code>.visible-print-inline-block</code>
                                                            </th>
                                                            <td><p class="text-danger"><strong>Hidden</strong></p></td>
                                                            <td><p class="text-success"><strong>Visible</strong></p></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><code>.hidden-print</code></th>
                                                            <td><p class="text-success"><strong>Visible</strong></p></td>
                                                            <td><p class="text-danger"><strong>Hidden</strong></p></td>
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
                        <section id="simple-preformatted-block" class="pad-top-30">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Simple preformatted block</strong></h2>
                                    <div class="pad-sep-20">
                                        <p>Use <code>&lt;pre&gt;&lt;code&gt;...&lt;/code&gt;&lt;/pre&gt;</code> for multiple lines of code. Be sure to escape any angle brackets in the code for proper rendering.</p>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <pre><code>&lt;p&gt;This is a sample text...&lt;/p&gt;</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fonts-up-140"></i>
                                                    You may add the <mark>.pre-scrollable</mark> class, which will set a max-height of 350px and provide a y-axis scrollbar.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="variables" class="pad-top-30">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Variables</strong></h2>
                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fonts-up-140"></i>
                                                    For indicating variables use the <code>&lt;var&gt;</code> tag.
                                                </div>
                                                <div>
                                                    <div data-showcase="example">
                                                        <p><var>y</var> = <var>m</var><var>x</var> + <var>b</var></p>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="sample-output" class="pad-top-30">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Sample output</strong></h2>
                                    <div class="pad-sep-20">

                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fonts-up-140"></i>
                                                    For indicating blocks sample output from a program use the  <code>&lt;samp&gt;</code> tag.
                                                </div>
                                                <div>
                                                    <div data-showcase="example">
                                                        <p><samp>This text is meant to be treated as sample output from a computer program.</samp></p>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="descriptions" class="pad-top-30">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Descriptions</strong></h2>

                                    <div class="pad-sep-20">

                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fonts-up-140"></i>
                                                    You can display a list of terms with their associated descriptions.
                                                </div>
                                                <div>
                                                    <div data-showcase="example">
                                                        <dl>
                                                            <dt>Description lists</dt>
                                                            <dd>A description list is perfect for defining terms.</dd>
                                                            <dt>Euismod</dt>
                                                            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                                            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                                            <dt>Malesuada porta</dt>
                                                            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                                        </dl>
                                                    </div>
                                                    <div class="html-source">
                                                        <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="horizontal-descriptions" class="pad-top-30">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Horizontal descriptions</strong></h2>
                                    <div class="pad-sep-20">

                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fonts-up-140"></i>
                                                    Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side. Starts off stacked like default <code>&lt;dl&gt;</code>s, but when the navbar expands, so do these.
                                                </div>
                                                <div data-showcase="example">
                                                    <dl class="dl-horizontal">
                                                        <dt>Description lists</dt>
                                                        <dd>A description list is perfect for defining terms.</dd>
                                                        <dt>Euismod</dt>
                                                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                                        <dt>Malesuada porta</dt>
                                                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                                        <dt>Felis euismod semper eget lacinia</dt>
                                                        <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                                                    </dl>
                                                </div>
                                                <div class="html-source">
                                                    <pre class="language-html"><code class="language-html" data-showcase="code"></code></pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="unordered-list" class="pad-top-30">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Unordered list</strong></h2>

                                    <div class="pad-sep-20">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-4">
                                                <p><strong>Unordered list</strong></p>
                                                <ul>
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                    <li>Nulla volutpat aliquam velit
                                                        <ul>
                                                            <li>Phasellus iaculis neque</li>
                                                            <li>Purus sodales ultricies</li>
                                                        </ul>
                                                    </li>
                                                    <li>Eget porttitor lorem</li>
                                                </ul>
                                            </div>

                                            <div class="col-sm-12 col-md-4">
                                                <p><strong>Ordered list</strong></p>
                                                <ol>
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                    <li>Consectetur adipiscing elit</li>
                                                    <li>Integer molestie lorem at massa</li>
                                                    <li>Facilisis in pretium nisl aliquet</li>
                                                    <li>Nulla volutpat aliquam velit</li>
                                                </ol>
                                            </div>


                                            <div class="col-sm-12 col-md-4">
                                                <p><strong>Unstyled list</strong></p>
                                                <ul class="list-unstyled">
                                                    <li>Lorem ipsum dolor sit amet</li>
                                                    <li>Nulla volutpat aliquam velit
                                                        <ul>
                                                            <li>Phasellus iaculis neque</li>
                                                            <li>Purus sodales ultricies</li>
                                                        </ul>
                                                    </li>
                                                    <li>Faucibus porta lacus fringilla vel</li>
                                                </ul>
                                            </div>

                                            <div class="col-sm-12"><br><br>
                                                <p><strong>Inline list</strong></p>
                                                <ul class="list-inline">
                                                    <li>First element</li>
                                                    <li>Second element</li>
                                                    <li>Third element</li>
                                                    <li>Fourth element</li>
                                                    <li>Fifth element</li>
                                                </ul>
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

                $('#font-usage-preview').magnificPopup({
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
