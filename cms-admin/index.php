<!DOCTYPE html>
<html>
	<head>
		<title> Admin Page </title>

		<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" id="fontawesome-css"/>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type = "text/JavaScript" src="js/admin.js" id="admin-js"></script>
		<link href="css/admin.css" rel="stylesheet" id="portal-css"/>

	</head>
	<body>

        <div class="header-bar">
            <div class="header-wrapper">
                <div class="cms-brand">
                    <i class="fas fa-globe"> </i>
                    <span>
                        Web-Empire's CMS Portal   
                    </span>
                </div>
                <div class="user-data">
                    <span>
                        Howdy, Navanath <i class="fas fa-user-circle" style="margin-left: 5px;"> </i>
                    </span>
                </div>
            </div>
        </div>

        <div class="panels-wrapper">
            <section class="panel-left">
                <ul class="nav-main">
                    <li class="current active">
                        <a href="#" data-toggle="nav-sub-dashboard"> <i class="fas fa-home"> </i> Home </a>
                    </li>

                    <li class="menu-section-system">
                        <a href="#" data-toggle="nav-sub-posts"> <i class="fas fa-file-word"> </i> Posts </a>
                    </li>

                    <li class="menu-section-system">
                        <a href="#" data-toggle="nav-sub-users"> <i class="fas fa-users"> </i> Users </a>
                    </li>

                    <li class="menu-section-system">
                        <a href="#" data-toggle="nav-sub-settings"> <i class="fas fa-cogs"> </i> Settings </a>
                    </li>

                    <li class="menu-section-system">
                        <a href="#" data-toggle="nav-sub-tools"> <i class="fas fa-toolbox"> </i> Tools </a>
                    </li>

                    <li id="collapse-pannel" class="menu-section-system">
                        <span> <i class="fas fa-caret-square-right"> </i> Collapse </span>
                    </li>
                </ul>
            </section>

            <section class="panel-center">
                <ul id="nav-sub-dashboard" class="nav-sub active">
                    <li class="heading">
                        Quick Links
                    </li>

                    <li>
                        <a href="#"> Dashboard Item 1 </a>
                    </li>

                    <li>
                        <a href="#"> Dashboard Item 2 </a>
                    </li>

                    <li>
                        <a href="#"> Dashboard Item 3 </a>
                    </li>

                    <li>
                        <a href="#"> Dashboard Item 4 </a>
                    </li>
                </ul>

                <ul id="nav-sub-posts" class="nav-sub">
                    <li class="heading">
                        Posts Heading
                    </li>

                    <li>
                        <a href="#"> Posts Item 1 </a>
                    </li>

                    <li>
                        <a href="#"> Posts Item 2 </a>
                    </li>

                    <li>
                        <a href="#"> Posts Item 3 </a>
                    </li>

                    <li>
                        <a href="#"> Posts Item 4 </a>
                    </li>
                </ul>

                <ul id="nav-sub-users" class="nav-sub">
                    <li class="heading">
                        Users Heading
                    </li>

                    <li>
                        <a href="#"> Users Item 1 </a>
                    </li>

                    <li>
                        <a href="#"> Users Item 2 </a>
                    </li>

                    <li>
                        <a href="#"> Users Item 3 </a>
                    </li>

                    <li>
                        <a href="#"> Users Item 4 </a>
                    </li>
                </ul>

                <ul id="nav-sub-settings" class="nav-sub">
                    <li class="heading">
                        Settings Heading
                    </li>

                    <li>
                        <a href="#"> Settings Item 1 </a>
                    </li>

                    <li>
                        <a href="#"> Settings Item 2 </a>
                    </li>

                    <li>
                        <a href="#"> Settings Item 3 </a>
                    </li>

                    <li>
                        <a href="#"> Settings Item 4 </a>
                    </li>
                </ul>

                <ul id="nav-sub-tools" class="nav-sub">
                    <li class="heading">
                        Tools Heading
                    </li>

                    <li>
                        <a href="#"> Tools Item 2 </a>
                    </li>

                    <li>
                        <a href="#"> Tools Item 3 </a>
                    </li>

                    <li>
                        <a href="#"> Tools Item 4 </a>
                    </li>
                </ul>
            </section>

            <section class="panel-content">
                <div class="content-wrapper">
                    <div class="block">
                        <div class="block-heading">
                            <h3>Dashboard</h3>
                        </div>

                        <div class="block-content">
                            <div class="row animated-widgets">
                                <div class="col col-lg-6">
                                    <div class="widget-block">

                                        <div class="list-group">
                                            <a href="#" class="list-group-item active">First item</a>
                                            <a href="#" class="list-group-item">Second item</a>
                                            <a href="#" class="list-group-item">Third item</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="col col-lg-6">
                                    <div class="widget-block">

                                    <div class="media">
                                        <div class="media-left">
                                            <img style="width: 110px; margin-right: 20px;" src="img/avatar.png" alt="User"/>
                                        </div>
                                        
                                        <div class="media-body">
                                            <h4 class="media-heading"> Mr. Navanath </h4>
                                            <p> This is Biographical Info for Navanath. </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
    
	</body>
</html>
