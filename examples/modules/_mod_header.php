<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid"><!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <div class="nav-controls visible-xs-inline-block pull-left">
                <button id="toggle-sidebar-btn" type="button" class="btn btn-default navbar-btn" aria-expanded="false">
                    <span class="sr-only">Toggle sidepanel</span><i class="fa fa-bars"></i>
                </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)"><img src="../dist/css/img/logo-eMAG.png" alt="EIS App">
                <span class="hidden-xs">| PHOTON</span>
            </a>
            <div class="nav-controls visible-xs-inline-block pull-right">
                <button id="toggle-nav-btn" type="button" class="btn btn-default navbar-btn" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-chevron-down"></i>
                </button>
            </div>
        </div><!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav navbar-right">                
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="visible-xs-inline">Language</span>                        
                        <span><strong><i class="flag-icon flag-icon-gb"></i> GB </strong></span>
                        <i class="fa fa-caret-down hidden-xs"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-caret">
                        <li class="dm-header hidden-xs"><span>Language</span></li>
                        <li><a href="#"><i class="flag-icon flag-icon-ro"></i><span> română (română)</span></a></li>
                        <li><a href="#"><i class="flag-icon flag-icon-gb"></i><span> english (engleză)</span></a></li>
                        <li><a href="#"><i class="flag-icon flag-icon-bg"></i><span> български (bulgară)</span></a></li>
                        <li><a href="#"><i class="flag-icon flag-icon-hu"></i><span> magyar (maghiară)</span></a></li>
                        <li><a href="#"><i class="flag-icon flag-icon-pl"></i><span> polski (poloneză)</span></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell nav-icon-lg hidden-xs"></i>
                        <span class="visible-xs-inline">Notificări</span>
                        <span class="jewel">3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-caret">
                        <li class="dm-header hidden-xs"><span>Notificări</span></li>
                        <li><a href="#"><span>You have an invalidated offer</span></a></li>
                        <li><a href="#"><span>Your account is not up to date</span></a></li>
                        <li><a href="#"><span>You have a new order</span></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0)" class="text-center"><span>Vizualizează totul</span></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="profile-thumb hidden-xs">
                            <img class="nav-user-photo" src="../dist/css/img/jon_snow.jpg"  alt="" height="36">
                        </div>
                        Jon Snow
                        <i class="fa fa-caret-down hidden-xs"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-caret">
                        <li><a href="/app_dev.php/ro_RO/profile"><i class="fa fa-cog nav-icon-md"></i><span>Setările contului</span></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/app_dev.php/logout"><i class="fa fa-power-off nav-icon-md"></i><span>Deconectare</span></a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>