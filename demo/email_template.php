<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <title>Plugins - eMAG Apps UI KIT</title>
    <?php include_once "modules/_mod_meta.php"?>
    <?php include_once "modules/_mod_top_include.php"?>
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
                        <p><b>Email template</b></p>
                    </div>
                </div>
                <section id="summernoteStandard" class="pad-top-40">
                    <div class="show-panel code-example">
                        <div class="show-panel-body code-example">
                            <h2><strong>Backorder email</strong></h2>
                            <div class="code-container">
                                <div class="row code-header no-border-top">
                                    <div class="col-xs-8 module-description">
                                        <h4><b>Demo</b></h4>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-default btn-sm pull-right btn-source collapsed"  data-toggle="collapse" href="#summernote" aria-expanded="false" aria-controls="summernote"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-right"></i><span>CODE</span></button>
                                    </div>
                                </div>
                                <div class="collapse code-example"  id="summernote">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs code-example" role="tablist">
                                        <li role="presentation" class="active"><a href="#summernote_html_source" aria-controls="summernote_html" role="tab" data-toggle="tab">HTML</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content code-example">
                                        <div role="tabpanel" class="tab-pane html-source active" id="summernote_html_source">
                                            <pre class="language-html"><code class="language-html" data-showcase="code">&#x3C;!DOCTYPE HTML PUBLIC &#x22;-//W3C//DTD HTML 4.01 Transitional//EN&#x22; &#x22;http://www.w3.org/TR/html4/loose.dtd&#x22;&#x3E;
&#x3C;html&#x3E;
&#x9;&#x3C;head&#x3E;
&#x9;&#x9;&#x3C;meta http-equiv=&#x22;Content-Type&#x22; content=&#x22;text/html; charset=utf-8&#x22;&#x3E;
&#x9;&#x9;&#x3C;title&#x3E;Email backorder&#x3C;/title&#x3E;
&#x9;&#x9;&#x3C;style type=&#x22;text/css&#x22;&#x3E;
&#x9;&#x9;&#x9;@import url(&#x27;https://fonts.googleapis.com/css?family=Open+Sans:400,700&#x27;);
&#x9;&#x9;&#x9;body{ margin:0; padding:0}
&#x9;&#x9;&#x3C;/style&#x3E;
&#x9;&#x3C;/head&#x3E;&#x9;
&#x9;&#x3C;body bgcolor=&#x22;#e4e6e9&#x22;&#x3E;
&#x9;&#x9;&#x3C;table width=&#x22;100%&#x22; border=&#x22;0&#x22; cellpadding=&#x22;0&#x22; cellspacing=&#x22;0&#x22; bgcolor=&#x22;#e4e6e9&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding-top:40px&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;table class=&#x22;container&#x22; width=&#x22;640&#x22; align=&#x22;center&#x22; border=&#x22;0&#x22; cellpadding=&#x22;0&#x22; cellspacing=&#x22;0&#x22; &#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td valign=&#x22;top&#x22; class=&#x22;logo&#x22; bgcolor=&#x22;#ffffff&#x22; style=&#x22;padding: 0px 20px 0px 20px;&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;h1 style=&#x22;font-size:30px; font-family:&#x27;Open Sans&#x27;, Arial, Helvetica, sans-serif; font-weight:normal&#x22;&#x3E;Cancelled backorder products&#x3C;/h1&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td valign=&#x22;top&#x22; class=&#x22;headline&#x22; bgcolor=&#x22;#ffffff&#x22; style=&#x22;padding: 0px 20px 0px 20px; font-family:&#x27;Open Sans&#x27;, Arial, Helvetica, sans-serif; font-size: 14px; line-height: 22px; &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Hello John,&#x3C;br&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;The following products has been automatically cancelled:
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#ffffff&#x22;  valign=&#x22;top&#x22; style=&#x22;padding: 0px 20px 0px 20px; &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;h1 style=&#x22;font-size:20px; font-family:&#x27;Open Sans&#x27;, Arial, Helvetica, sans-serif; font-weight:normal&#x22;&#x3E;Order #377403 sent to &#x201C;Company Name 1&#x201D;&#x3C;/h1&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td valign=&#x22;top&#x22; bgcolor=&#x22;#ffffff&#x22; style=&#x22;padding: 0px 20px 20px 20px; font-family:&#x27;Open Sans&#x27;, Arial, Helvetica, sans-serif; &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;table width=&#x22;100%&#x22; cellpadding=&#x22;0&#x22; cellspacing=&#x22;0&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#eeeeee&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; font-weight:bold; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Product&#x3C;br&#x3E;Number
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#eeeeee&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; font-weight:bold; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Requested&#x3C;br&#x3E;quantity
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#eeeeee&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; font-weight:bold; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Request&#x3C;br&#x3E;date
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#eeeeee&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; font-weight:bold; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Confirmed&#x3C;br&#x3E;quantity
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#eeeeee&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; font-weight:bold; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3 &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Confirmation&#x3C;br&#x3E;date
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#eeeeee&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; font-weight:bold; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Backorder&#x3C;br&#x3E;quantity
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#eeeeee&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; font-weight:bold; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Backorder&#x3C;br&#x3E;delivery date
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;CA017D9073HGJKHSW
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;85
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;20/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;80
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3 &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;20/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;70
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;23/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;ER017D9073HGJKHTY
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;75
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;11/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;70
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3 &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;11/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;60
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;12/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;OI017D9073HGJKHTR
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;65
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;09/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;60
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3 &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;09/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;50
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;11/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;YT017D9073HGJKHBV
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;55
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;08/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;50
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3 &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;08/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;40
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;10/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;AT018D9673HGJKHBA
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;45
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;03/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;40
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3 &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;03/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;30
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;04/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/table&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#ffffff&#x22;  valign=&#x22;top&#x22; style=&#x22;padding: 0px 20px 0px 20px; &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;h1 style=&#x22;font-size:20px; font-family:&#x27;Open Sans&#x27;, Arial, Helvetica, sans-serif; font-weight:normal&#x22;&#x3E;Order #377404 sent to &#x201C;Company Name 2&#x201D;&#x3C;/h1&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td valign=&#x22;top&#x22; bgcolor=&#x22;#ffffff&#x22; style=&#x22;padding: 0px 20px 20px 20px; font-family:&#x27;Open Sans&#x27;, Arial, Helvetica, sans-serif; &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;table width=&#x22;100%&#x22; cellpadding=&#x22;0&#x22; cellspacing=&#x22;0&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#eeeeee&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; font-weight:bold; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Product&#x3C;br&#x3E;Number
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#eeeeee&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; font-weight:bold; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Requested&#x3C;br&#x3E;quantity
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#eeeeee&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; font-weight:bold; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Request&#x3C;br&#x3E;date
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#eeeeee&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; font-weight:bold; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Confirmed&#x3C;br&#x3E;quantity
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#eeeeee&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; font-weight:bold; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3 &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Confirmation&#x3C;br&#x3E;date
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#eeeeee&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; font-weight:bold; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Backorder&#x3C;br&#x3E;quantity
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#eeeeee&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; font-weight:bold; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Backorder&#x3C;br&#x3E;delivery date
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;CA017D9073HGJKHSW
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;85
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;20/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;80
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3 &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;20/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;70
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;23/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;ER017D9073HGJKHTY
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;75
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;11/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;70
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3 &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;11/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;60
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;12/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;OI017D9073HGJKHTR
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;65
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;09/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;60
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3 &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;09/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;50
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;11/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;YT017D9073HGJKHBV
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;55
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;08/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;50
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3 &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;08/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;40
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td bgcolor=&#x22;#fafafa&#x22; style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;10/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;AT018D9673HGJKHBA
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;45
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;03/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;40
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3 &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;03/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-right:1px solid #c3c3c3; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;30
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td style=&#x22;padding: 8px 8px 8px 8px;font-size:10px; border-bottom:1px solid #c3c3c3&#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;04/02/2017
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/table&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;td valign=&#x22;top&#x22; align=&#x22;center&#x22; bgcolor=&#x22;#ffffff&#x22; style=&#x22;padding: 0px 20px 20px 20px; font-family:&#x27;Open Sans&#x27;, Arial, Helvetica, sans-serif; font-size:11px &#x22;&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;Copyright &#xA9; 2011 - 2017 eMAG. All rights reserved.
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x9;
&#x9;&#x9;&#x9;&#x9;&#x9;&#x3C;/table&#x3E;
&#x9;&#x9;&#x9;&#x9;
&#x9;&#x9;&#x9;&#x9;&#x3C;/td&#x3E;
&#x9;&#x9;&#x9;&#x3C;/tr&#x3E;
&#x9;&#x9;&#x3C;/table&#x3E;
&#x9;&#x3C;/body&#x3E;&#x9;
&#x3C;/html&#x3E;
</code></pre>
                                        </div>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pad-15" data-showcase="example" >
                                            <a class="btn btn-default" target="_blank" href="email_template_source.php" role="button">Show email</a>
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
<!-- DOCUMENT-READY:End -->

</body>
</html>