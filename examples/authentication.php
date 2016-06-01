<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Components | Photon - The Superfast, Supersimple UI Kit</title>
        <meta name="description" content="Photon - The superfast, supersimple UI Kit" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="eMAG CORE UI Team">

        <!-- The favicon -->
        <?php include_once "modules/_mod_favicon.php"?>

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
        <?php include_once "modules/_mod_header_auth.php"?>
        <!-- HEADER:End -->
        <!-- PAGE:Start -->
            <div class="main-container" id="main-container">
                <div class="main-container-inner">
                    <!-- CONTENT:Start -->
                    <div class="main-content">
                        <div class="page-content">
                            <div id="login_box" class="auth-box">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h1 class="auth-title">Sign into your account</h1>
                                        <form id="user_auth">
                                            <div class="form-group">
                                                <label for="user_username" class="control-label">Username</label>
                                                <input type="text" id="user_username" name="user_username" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="user_password" class="control-label">Password</label>
                                                <input type="password" id="user_password" name="user_password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input id="user_reminder" name="user_reminder" type="checkbox"> Keep me signed in
                                                    </label>
                                                </div>
                                                <div class="form-control-static">
                                                    <small><a href="#recover_box" class="user-actions">Have you forgotten your password?</a></small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="pull-right panel-controls">
                                                        <a href="/examples/overview.php" id="special_submit" class="btn btn-primary"><i class="fa fa-check"></i><span>Sign in</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="form-control-static text-center">
                                    <a href="#register_box" class="user-actions">Sign up for a new account?</a>
                                </div>
                            </div>
                            <div id="recover_box" class="auth-box hidden">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h1 class="auth-title">Reset your password</h1>
                                        <form id="user_recover_password">
                                            <div class="form-group">
                                                <label for="user_email" class="control-label">Email address</label>
                                                <input type="email" id="user_email" name="user_email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-control-static">
                                                    <small><a href="#login_box" class="user-actions">Take me back to Sign in.</a></small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="pull-right panel-controls">
                                                        <a href="/examples/overview.php" id="special_submit" class="btn btn-primary"><i class="fa fa-check"></i><span>Confirm</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="register_box" class="auth-box hidden">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h1 class="auth-title">Sign up for an account</h1>
                                        <form id="user_register">
                                            <div class="form-group">
                                                <label for="user_reg_email" class="control-label">Email address</label>
                                                <input type="email" id="user_reg_email" name="user_reg_email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="user_reg_username" class="control-label">Username</label>
                                                <input type="text" id="user_reg_username" name="user_reg_username" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="user_reg_password" class="control-label">Password</label>
                                                <input type="password" id="user_reg_password" name="user_reg_password" class="form-control">
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label for="user_reg_dob" class="control-label">Date of birth</label>
                                                        <input type="text" id="user_reg_dob" name="user_reg_dob" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label for="user_reg_gender" class="control-label">Gender</label>
                                                        <select id="user_reg_gender" name="user_reg_gender" class="form-control">
                                                            <option value="none">Select</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-control-static">
                                                    <span>By signing up you agree with our Terms and Conditions</span>
                                                </div>
                                                <div class="form-control-static">
                                                    <small><a href="#login_box" class="user-actions">Take me back to Sign in.</a></small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="pull-right panel-controls">
                                                        <a href="/examples/overview.php" id="special_submit" class="btn btn-primary"><i class="fa fa-check"></i><span>Register</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->
        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">                

            $(document).ready(function () {
                console.log('Ready, Captain!');

                demoHelpers();  //Requires demo_helpers.js
               
                // This little old script is just for demo purposes. Chill!
                $('.user-actions').on('click', function (e) {
                    e.preventDefault();
                    $('.auth-box').addClass('hidden');
                    var link = $(this).attr('href');
                    $(link).toggleClass('hidden');
                });
            });
        </script>
        <!-- DOCUMENT-READY:End -->
    </body>
</html>