<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <title>CSS Components - eMAG Apps UI KIT</title>
        <?php include_once "modules/_mod_meta.php"?>
        <?php include_once "modules/_mod_top_include.php"?>
        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <link rel="stylesheet" href="../dist/plugins/prism/prism.min.css">
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
                        <div class="jumbotron content-header">
                            <div class="container-fluid">
                                <p>eMAG Apps UI KIT</p>
                                <p><b>CSS Components</b></p>
                            </div>
                        </div>
                        <div id="examples"></div>
                        <section id="htmlcode" class="pad-top-40">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>HTML & CSS</strong></h2>
                                    <p><strong>These elements rely on the main stylesheet in order to be displayed.</strong></p>
                                </div>
                            </div>
                        </section>
                        <section id="type-styles" class="pad-top-30">
                            <div class="show-panel">
                                <div class="show-panel-body">
                                    <h2><strong>Typefaces variations</strong></h2>
                                    <p><strong>Headings and Paragraphs:</strong></p>
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
                            <div class="show-panel mg-top-30">
                                <div class="show-panel-body">
                                    <h2><strong>Utilities</strong></h2>
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
                            <div class="show-panel mg-top-30">
                                <div class="show-panel-body">
                                    <h2><strong>Alignment</strong></h2>
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
                            <div class="show-panel mg-top-30">
                                <div class="show-panel-body">
                                    <h2><strong>Address</strong></h2>
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
                            <div class="show-panel mg-top-30">
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
                            <div class="show-panel mg-top-30">
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
                            <div class="show-panel mg-top-30">
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
                            <div class="show-panel mg-top-30">
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
                            <div class="show-panel mg-top-30">
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
                            <div class="show-panel mg-top-30">
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
                            <div class="show-panel mg-top-30">
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
                            <div class="show-panel mg-top-30">
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
                            <div class="show-panel mg-top-30">
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
                            <div class="show-panel mg-top-30">
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
                        <section id="css-tables" class="pad-top-30">
                            <div class="show-panel code-example">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Tables</strong></h2>

                                    <div class="code-container">
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Basic example</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#basic-table" aria-expanded="false" aria-controls="basic-table"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="basic-table">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#basic-table-html-source" aria-controls="basic-table-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="basic-table-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Striped rows</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#striped-table" aria-expanded="false" aria-controls="striped-table"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="striped-table">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#striped-table-html-source" aria-controls="striped-table-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="striped-table-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Bordered table</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#bordered-table" aria-expanded="false" aria-controls="bordered-table"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="bordered-table">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#bordered-table-html-source" aria-controls="bordered-table-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="bordered-table-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Hover rows</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#hover-rows-table" aria-expanded="false" aria-controls="hover-rows-table"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="hover-rows-table">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#hover-rows-table-html-source" aria-controls="hover-rows-table-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="hover-rows-table-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Condensed table</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#condensed-table" aria-expanded="false" aria-controls="condensed-table"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="condensed-table">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#condensed-table-html-source" aria-controls="condensed-table-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="condensed-table-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Resposive table</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#resposive-table" aria-expanded="false" aria-controls="resposive-table"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="resposive-table">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#resposive-table-html-source" aria-controls="resposive-table-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="resposive-table-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Contextual classes</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#contextual-classes-table" aria-expanded="false" aria-controls="contextual-classes-table"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="contextual-classes-table">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#contextual-classes-table-html-source" aria-controls="contextual-classes-table-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="contextual-classes-table-html-source">
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



                                    <div class="code-container">
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Basic example</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#basic-form" aria-expanded="false" aria-controls="basic-form"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="basic-form">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#basic-form-html-source" aria-controls="basic-form-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="basic-form-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Inline form example</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#inline-form" aria-expanded="false" aria-controls="inline-form"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="inline-form">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#inline-form-html-source" aria-controls="inline-form-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="inline-form-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Horizontal form example</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#horizontal-form" aria-expanded="false" aria-controls="horizontal-form"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="horizontal-form">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#horizontal-form-html-source" aria-controls="horizontal-form-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="horizontal-form-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Form with column sizing example</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#column-sizing-form" aria-expanded="false" aria-controls="column-sizing-form"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="column-sizing-form">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#column-sizing-form-html-source" aria-controls="column-sizing-form-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="column-sizing-form-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Individual form controls</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#individual-form" aria-expanded="false" aria-controls="individual-form"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="individual-form">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#individual-form-html-source" aria-controls="individual-form-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="individual-form-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Form groups with labels and form controls. (only works with form-horizontal)</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#form-groups" aria-expanded="false" aria-controls="form-groups"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="form-groups">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#form-groups-html-source" aria-controls="form-groups-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="form-groups-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>States types</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#states-types" aria-expanded="false" aria-controls="states-types"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="states-types">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#states-types-html-source" aria-controls="states-types-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="states-types-html-source">
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
                                                                    <input type="checkbox" id="checkboxSuccess" value="option1" disabled>
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Validation types</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#validation-types" aria-expanded="false" aria-controls="validation-types"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="validation-types">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#validation-types-html-source" aria-controls="validation-types-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="validation-types-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Feedback types</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#feedback-types" aria-expanded="false" aria-controls="feedback-types"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="feedback-types">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#feedback-types-html-source" aria-controls="feedback-types-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="feedback-types-html-source">
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
                                                        <label class="control-label" for="inputError2">Input with error mark</label>
                                                        <input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status">
                                                        <span class="fa fa-remove form-control-feedback" aria-hidden="true"></span>
                                                        <span id="inputError2Status" class="sr-only">(error)</span>
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


                                    <div class="code-container">
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Default styles</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#default-check-radio" aria-expanded="false" aria-controls="default-check-radio"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="default-check-radio">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#default-check-radio-html-source" aria-controls="default-check-radio-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="default-check-radio-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Custom styles</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#custom-check-radio" aria-expanded="false" aria-controls="custom-check-radio"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="custom-check-radio">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#custom-check-radio-html-source" aria-controls="custom-check-radio-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="custom-check-radio-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Default range input</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#default-range-input" aria-expanded="false" aria-controls="default-range-input"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="default-range-input">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#default-range-input-html-source" aria-controls="default-range-input-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="default-range-input-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Disabled range input</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#disabled-range-input" aria-expanded="false" aria-controls="disabled-range-input"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="disabled-range-input">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#disabled-range-input-html-source" aria-controls="disabled-range-input-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="default-range-input-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Default</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#default-input-groups" aria-expanded="false" aria-controls="default-input-groups"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="default-input-groups">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#default-input-groups-html-source" aria-controls="default-input-groups-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="default-input-groups-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Input groups with checkboxes and radio buttons</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#input-groups-with-checkboxes" aria-expanded="false" aria-controls="input-groups-with-checkboxes"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="input-groups-with-checkboxes">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#input-groups-with-checkboxes-html-source" aria-controls="input-groups-with-checkboxes-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="default-range-input-html-source">
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

                                    <div class="code-container">
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Default styling</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#buttons-default-styling" aria-expanded="false" aria-controls="buttons-default-styling"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="buttons-default-styling">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#buttons-default-styling-html-source" aria-controls="buttons-default-styling-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="buttons-default-styling-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Contextual classes</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#buttons-contextual-classes" aria-expanded="false" aria-controls="buttons-contextual-classes"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="buttons-contextual-classes">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#buttons-contextual-classes-html-source" aria-controls="buttons-contextual-classes-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="buttons-contextual-classes-html-source">
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-container">
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Button sizing</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#button-sizing" aria-expanded="false" aria-controls="button-sizing"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="button-sizing">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#button-sizing-html-source" aria-controls="button-sizing-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="button-sizing-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Button states</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#button-states" aria-expanded="false" aria-controls="button-states"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="button-states">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#button-states-html-source" aria-controls="button-states-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="button-states-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Button groups</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#button-groups" aria-expanded="false" aria-controls="button-groups"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="button-groups">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#button-groups-html-source" aria-controls="button-groups-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="button-groups-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Justified button groups</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#justified-button-groups" aria-expanded="false" aria-controls="justified-button-groups"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="justified-button-groups">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#justified-button-groups-html-source" aria-controls="justified-button-groups-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="justified-button-groups-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Button toolbar</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#button-toolbar" aria-expanded="false" aria-controls="button-toolbar"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="button-toolbar">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#button-toolbar-html-source" aria-controls="button-toolbar-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="button-toolbar-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Button groups sizing</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#button-groups-sizing" aria-expanded="false" aria-controls="button-groups-sizing"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="button-groups-sizing">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#button-groups-sizing-html-source" aria-controls="button-groups-sizing-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="button-groups-sizing-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Button blocks</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#button-blocks" aria-expanded="false" aria-controls="button-blocks"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="button-blocks">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#button-blocks-html-source" aria-controls="button-blocks-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="button-blocks-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>CSS Flipswitch</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#flipswitch" aria-expanded="false" aria-controls="flipswitch"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="flipswitch">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#flipswitch-html-source" aria-controls="flipswitch-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="flipswitch-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Default label</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#default-label" aria-expanded="false" aria-controls="default-label"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="default-label">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#default-label-html-source" aria-controls="default-label-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="default-label-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Contextual alternatives</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#default-label-alternatives" aria-expanded="false" aria-controls="default-label-alternatives"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="default-label-alternatives">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#default-label-alternatives-html-source" aria-controls="default-label-alternatives-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="default-label-alternatives-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Default badge</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#default-badge" aria-expanded="false" aria-controls="default-badge"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="default-badge">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#default-badge-html-source" aria-controls="default-badge-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="default-badge-html-source">
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
                                    <div class="code-container">
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Basic alerts</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#basic-alerts" aria-expanded="false" aria-controls="basic-alerts"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="basic-alerts">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#basic-alerts-html-source" aria-controls="basic-alerts-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="basic-alerts-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Dismissible alerts</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#dismissible-alerts" aria-expanded="false" aria-controls="dismissible-alerts"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="dismissible-alerts">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#dismissible-alerts-html-source" aria-controls="dismissible-alerts-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="basic-alerts-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Links in alerts</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#links-in-alerts" aria-expanded="false" aria-controls="links-in-alerts"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="links-in-alerts">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#links-in-alerts-html-source" aria-controls="links-in-alerts-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="links-in-alerts-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Alerts with buttons</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#alerts-with-buttons" aria-expanded="false" aria-controls="alerts-with-buttons"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="alerts-with-buttons">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#alerts-with-buttons-html-source" aria-controls="alerts-with-buttons-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="alerts-with-buttons-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Basic progress bar</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#basic-progress-bar" aria-expanded="false" aria-controls="basic-progress-bar"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="basic-progress-bar">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#basic-progress-bar-html-source" aria-controls="basic-progress-bar-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="basic-progress-bar-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Basic progress bar with label</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#basic-progress-bar-with-label" aria-expanded="false" aria-controls="basic-progress-bar-with-label"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="basic-progress-bar-with-label">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#basic-progress-bar-with-label-html-source" aria-controls="basic-progress-bar-with-label-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="basic-progress-bar-with-label-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Contextual alternatives</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#contextual-alternatives" aria-expanded="false" aria-controls="contextual-alternatives"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="contextual-alternatives">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#contextual-alternatives-html-source" aria-controls="contextual-alternatives-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="contextual-alternatives-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Striped progress bars</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#striped-progress-bars" aria-expanded="false" aria-controls="striped-progress-bars"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="striped-progress-bars">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#striped-progress-bars-html-source" aria-controls="striped-progress-bars-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="striped-progress-bars-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Stacked progress bars</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#stacked-progress-bars" aria-expanded="false" aria-controls="stacked-progress-bars"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="stacked-progress-bars">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#stacked-progress-bars-html-source" aria-controls="stacked-progress-bars-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="stacked-progress-bars-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Basic panel</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#basic-panel" aria-expanded="false" aria-controls="basic-panel"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="basic-panel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#basic-panel-html-source" aria-controls="basic-panel-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="basic-panel-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Contextual alternatives</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#basic-panel-contextual-alternatives" aria-expanded="false" aria-controls="basic-panel-contextual-alternatives"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="basic-panel-contextual-alternatives">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#basic-panel-contextual-alternatives-html-source" aria-controls="basic-panel-contextual-alternatives-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="basic-panel-contextual-alternatives-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Panel with table</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#panel-with-table" aria-expanded="false" aria-controls="panel-with-table"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="panel-with-table">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#panel-with-table-html-source" aria-controls="panel-with-table-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="panel-with-table-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Panel with standard list group</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#panel-with-list" aria-expanded="false" aria-controls="panel-with-list"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="panel-with-list">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#panel-with-list-html-source" aria-controls="panel-with-list-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="panel-with-list-html-source">
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
                        <section id="css-page-header" class="pad-top-30">
                            <div class="show-panel code-example">
                                <div class="show-panel-body code-example">
                                    <h2><strong>Page header</strong></h2>


                                    <div class="code-container">
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Default styling</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#page-header-default" aria-expanded="false" aria-controls="page-header-default"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="page-header-default">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#page-header-default-html-source" aria-controls="page-header-default-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="page-header-default-html-source">
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
                                        <div class="row code-header">
                                            <div class="col-xs-8 module-description">
                                                <h4><strong>Default styling</strong></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#responsive-embeds" aria-expanded="false" aria-controls="responsive-embeds"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                            </div>
                                        </div>
                                        <div class="collapse code-example"  id="responsive-embeds">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs code-example" role="tablist">
                                                <li role="presentation" class="active"><a href="#responsive-embeds-html-source" aria-controls="responsive-embeds-html" role="tab" data-toggle="tab">HTML</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content code-example">
                                                <div role="tabpanel" class="tab-pane html-source active" id="responsive-embeds-html-source">
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
                <?php include_once "modules/_mod_footer.php"?>
                <!-- FOOTER:End -->
            </div>
        </div>
        <!-- PAGE:End -->

        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>
        <script src="../dist/js/main_script.min.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>


        <!-- PLUGIN: PRISM: This plugin helps display demo code. Don't add it everywhere -->
        <script src="../dist/plugins/prism/prism.min.js"></script>
        <!-- SCRIPTS:End -->

        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">               
            $(document).ready(function () {
                console.log('Ready, Captain!');

                demoHelpers();  // Require demo_helpers.js

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
            });
        </script>
        <!-- DOCUMENT-READY:End --> 
        
    </body>
</html>