<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin panel</title>
    <link href="{{assets ('bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{assets ('icon.css')}}" rel="stylesheet">
    <link href="{{assets ('style.css')}}" rel="stylesheet">
    <link href="{{assets ('en.css')}}" rel="stylesheet" class="lang_css arabic">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid">
    <!--Start header-->
    <div class="row header_section">
        <div class="col-sm-3 col-xs-12 logo_area bring_right">
            <h1 class="inline-block"><img src="img/logo.png" alt="">Florasyria admin panel</h1>
            <span class="glyphicon glyphicon-align-justify bring_left open_close_menu" data-toggle="tooltip"
                  data-placement="right" title="Tooltip on left"></span>
        </div>

        <div class=" col-sm-4 col-xs-12 user_header_area bring_left left_text">
            <div class="user_info inline-block">
                <img src="img/user.jpg" alt="" class="img-circle">
                <span class="h4 nomargin user_name">Admin</span>
                <span class="glyphicon glyphicon-cog"></span>
            </div>
        </div>
    </div>
    <!--/End header-->

    <!--Start body container section-->
    <div class="row container_section">

        <!--Start Side bar main menu-->
        <div class="main_sidebar bring_right">
            <div class="main_sidebar_wrapper">

                <ul>
                    <li><span class="glyphicon glyphicon-home"></span><a href="index.html">Home Page</a></li>
                    <li><span class="glyphicon glyphicon-cog"></span><a href="options.html">Site Information</a></li>
                    <li><span class="glyphicon glyphicon-user"></span><a href="">Mange Users</a>
                        <ul class="drop_main_menu">
                            <li><a href="add_new_user.html">Add new user</a></li>
                            <li><a href="view_all_users.html">View all users</a></li>
                        </ul>
                    </li>
                    <li><span class="glyphicon glyphicon-edit"></span><a href="">Mange Topics</a>
                        <ul class="drop_main_menu">
                            <li><a href="add_new_topic.html">Add new topic</a></li>
                            <li><a href="view_all_topics.html">View all topics</a></li>
                        </ul>
                    </li>
                    <li><span class="glyphicon glyphicon-picture"></span><a href="">Photo Album</a>
                        <ul class="drop_main_menu">
                            <li><a href="add_new_photo.html">Add new photo</a></li>
                            <li><a href="view_all_photos.html">View all photos</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--/End side bar main menu-->

        <!--Start Main content container-->
        <div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="">Admin panel home page</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">
                    <div class="page_content">
                        <div class="quick_links text-center">
                            <h1 class="heading_title">Quick links</h1>
                            <a href="#" style="background-color: #c0392b">
                                <h4>Website Home</h4>
                            </a>
                            <a href="options.html" style="background-color: #2980b9">
                                <h4>Site Information</h4>
                            </a>
                            <a href="view_all_users.html" style="background-color: #8e44ad">
                                <h4>View Users</h4>
                            </a>
                            <a href="add_new_topic.html" style="background-color: #d35400">
                                <h4>Add Topic</h4>
                            </a>
                            <a href="add_new_photo.html" style="background-color: #2c3e50">
                                <h4>Add photo</h4>
                            </a>
                        </div>
                        <div class="home_statics text-center">
                            <h1 class="heading_title">Website Statics</h1>

                            <div style="background-color: #9b59b6">
                                <span class="bring_right glyphicon glyphicon-home"></span>

                                <h3>Site Visits</h3>

                                <p class="h4">55</p>
                            </div>

                            <div style="background-color: #34495e">
                                <span class="bring_right glyphicon glyphicon-phone-alt"></span>

                                <h3>Users Online</h3>

                                <p class="h4">55</p>
                            </div>
                            <div style="background-color: #00adbc">
                                <span class="bring_right glyphicon glyphicon-user"></span>

                                <h3>All Users</h3>

                                <p class="h4">55</p>
                            </div>
                            <div style="background-color: #f39c12">
                                <span class="bring_right glyphicon glyphicon-pencil"></span>

                                <h3>All Topics</h3>

                                <p class="h4">55</p>
                            </div>
                            <div style="background-color: #2ecc71">
                                <span class="bring_right glyphicon glyphicon-calendar"></span>

                                <h3>Site Old</h3>

                                <p class="h4">55</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/End Main content container-->


        </div>
        <!--/End body container section-->
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{assets ('jquery-2.1.4.min.js')}}"></script>
<script src="{{assets ('bootstrap.min.js')}}"></script>
<script src="{{assets ('js.js')}}"></script>
</body>

</html>