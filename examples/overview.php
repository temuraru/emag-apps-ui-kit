<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Start | Photon - The Superfast, Supersimple UI Kit</title>
        <meta name="description" content="Photon - The superfast, supersimple UI Kit" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="eMAG CORE UI Team">

        <!-- The favicon -->
        <link rel="apple-touch-icon" href="../dist/css/icons/favicon.ico">
        <link rel="icon" type="image/png" href="../dist/css/icons/favicon.ico">

        <!-- PHOTON main styles -->
        <link rel="stylesheet" href="../dist/css/main_style.min.css">

        <!--[if lt IE 9]>
            <script src="../dist/js/lib/html5shiv.min.js"></script>
            <script src="../dist/js/lib/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
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
                                        <h1>PHOTON</h1>
                                        <p>The lightning-fast, modular, mobile-friendly admin template.</p>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <section id="getStarted" class="pad-top-40">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel">
                                        <div class="show-panel-body">
                                            <h2><strong>Getting started</strong></h2>
                                            <p><strong>There are a couple of ways to install PHOTON:</strong></p>
                                            <div class="pad-sep-20">                                                
                                                <ol>
                                                    <li>
                                                        <p>The easiest is to install the following css in the head of your webpage:</p>
                                                        <pre>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;examplepath/to/main_style.min.css&quot;&gt;</pre>
                                                        <p>And the following javascript files before the end <code>&lt;/body&gt;</code> tag:</p>
                                                        <pre>&lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js&quot;&gt;&lt;/script&gt;
&lt;script&gt;window.jQuery || document.write(&quot;&lt;script src=\&quot;../dist/js/lib/jquery-1.11.3.min.js\&quot;&gt;&quot;+&quot;&lt;&quot;+&quot;/script&gt;&quot;)&lt;/script&gt;
&lt;script src=&quot;../dist/js/main_script.min.js&quot;&gt;&lt;/script&gt;</pre>
                                                        <div class="alert alert-info" role="alert">
                                                            <i class="fa fa-info-circle"></i> You've guessed it! Much like Boostrap, PHOTON requires jQuery to run. 
                                                        </div>
                                                        <br>                                                        
                                                    </li>
                                                    <li>
                                                        <p>If you really want to get a hold of the source code, you can <a href="#">download the latest release</a> from GitHub.</p>   
                                                        <br>                                                     
                                                    </li>
                                                    <li>
                                                        <p>Or clone the <a href="#">Git repository</a> by running the following command:</p>
                                                        <pre>[sudo] git clone git@github.com:emag/photon.git</pre>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="overview" class="pad-top-40">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel">
                                        <div class="show-panel-body">
                                            <h2><strong>Overview</strong></h2>
                                            <p><strong>A short description about what's it like to work with PHOTON:</strong></p>
                                            <div class="pad-sep-20">
                                                <ol>
                                                    <li>
                                                        <h4 class="text-primary">Based on Bootstrap 3.3.5.</h4>
                                                            <p>PHOTON is based on the Twitter Bootstrap architecture <a href="http://getbootstrap.com/getting-started/"><u>GetBootstrap</u></a>. If you're not familiarized with Twitter Bootstrap, head on over to their website and check-out their stuff. It's great!</p>
                                                            <p>Aside from the elements provided by bootstrap, PHOTON comes with its own set of unique components, styling and useful plugins that you can use in your project.</p>
                                                            <p>The fun part about PHOTON is that you can configure it however you want. Wether if it's for speed, mobile devices, lots of features or a usability unicorn.</p>
                                                            <br>
                                                            <p><strong>Features:</strong></p>
                                                            <ol>
                                                                <li>
                                                                    <p>Keeping it light with an average page weight of 500Kb.</p>
                                                                </li>
                                                                <li>
                                                                    <p>W3C Compliant</p>
                                                                </li>
                                                                <li>
                                                                    <p>WCAG 2.0 Compliant</p>
                                                                </li>
                                                                <li>
                                                                    <p>Average page-load time of 1s</p>
                                                                </li>
                                                            </ol>
                                                        <br>
                                                    </li>
                                                    <li>
                                                        <h4 class="text-primary">Working with Grunt.js</h4>
                                                        <p><strong>Installing Grunt:</strong></p>
                                                        <p>To install Grunt, you must first download and install <a href="https://nodejs.org/en/" target="_blank"><u>node.js</u></a> (which includes npm). Believe it or not, npm stands for <b>node packaged modules</b> and is a way to manage development dependencies through node.js.</p>
                                                        <p>Once you've installed node.js, open up the command line in the root directory.</p>
                                                        <p>Install grunt-cli globally by running <code>npm install -g grunt-cli</code>.</p>
                                                        <p>Afterwards run <code>npm install</code> for npm to look  at the <b>package.json</b> file and automatically install the necessary local dependencies listed there.</p>
                                                        <p>When completed, you'll be able to run the various Grunt commands provided from the command line.</p>
                                                        <br>
                                                        <p><strong>Available Grunt commands:</strong></p>
                                                        <br>
                                                    </li>
                                                    <li>
                                                        <h4 class="text-primary">Working with Photon's folder structure:</h4>
                                                        <br>
                                                        <p>Once downloaded, unzip the compressed folder to find the three main folders:</p>
<pre>
<code class="language-bash" data-lang="bash">
photon/
|
├── data/
│   ├── scripts/
|   |   ├── base/
|   |   |   └── custom/
|   |   └── lib/
│   ├── styles/
|   |   ├── base/
|   |   |   └── custom/
|   |   └── lib/
|   └── plugins/
|
├── dist/
│   ├── css/
|   |   ├── flags/
|   |   ├── fonts/
|   |   ├── icons/
|   |   ├── img/
|   |   └── lib/
│   ├── js/
|   |   └── lib/
|   └── plugins/
|
└── examples/
    ├── modules/
    └── glyphicons-halflings-regular.woff2
</code>
</pre>
                                                        <ul>
                                                            <li></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <h4 class="text-primary">Precompiled files (dist)</h4>
                                                        <br>
                                                    </li>
                                                    <li>
                                                        <h4 class="text-primary">Photon source code (data)</h4>
                                                        <br>
                                                    </li>
                                                    <li>
                                                        <h4 class="text-primary">Become a contributor</h4>
                                                        <br>
                                                    </li>
                                                    <li>
                                                        <h4 class="text-primary">License</h4>
                                                        <br>
                                                    </li>
                                                </ol>
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
        
        <!-- POPUPS:End -->
        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>
        <script src="../dist/js/main_script.min.js"></script>
        <!-- SCRIPTS:End -->
        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">            
            $(document).ready(function () {
                console.log('Ready, Captain!');
                
                staticNavigation(); // Requires demo_helpers.js
            });
        </script>
        <!-- DOCUMENT-READY:End -->
    </body>
</html>
