<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.9.2
*
-->

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>INSPINIA | Dashboard</title>

    <link href="{{asset('libs/inspinia')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('libs/inspinia')}}/fa/css/all.min.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('libs/inspinia')}}/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{asset('libs/inspinia')}}/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="{{asset('libs/inspinia')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('libs/inspinia')}}/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="{{asset('libs/inspinia')}}/img/profile_small.jpg" />
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">Nombre de Usuario</span>
                                <span class="text-muted text-xs block">Rol de Usuario <b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="profile.html">Perfil</a></li>
                                <li><a class="dropdown-item" href="contacts.html">Contactos</a></li>
                                <li><a class="dropdown-item" href="mailbox.html">Correo</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="login.html">Cerrar Sesión</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>


                    <li class="active">
                        <a href="layouts.html"><i class="fas fa-home"></i> <span class="nav-label">Inicio</span></a>
                    </li>
                    <!-- MENU CON SUBMENU -->
                    <!-- <li>
                        <a href="#"><i class="fas fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="graph_flot.html">Flot Charts</a></li>
                            <li><a href="graph_morris.html">Morris.js Charts</a></li>
                            <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
                            <li><a href="graph_chartjs.html">Chart.js</a></li>
                            <li><a href="graph_chartist.html">Chartist</a></li>
                            <li><a href="c3.html">c3 charts</a></li>
                            <li><a href="graph_peity.html">Peity Charts</a></li>
                            <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
                        </ul>
                    </li> -->

                    <!-- <li>
                        <a href="#"><i class="fas fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#" id="damian">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Second Level Item</a></li>
                        </ul>
                    </li> -->

                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fas fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li style="padding: 20px">
                            <span class="m-r-sm text-muted welcome-message">Bienvenido a INSPINIA</span>
                        </li>
                        <li>
                        <a data-toggle="dropdown" class="fas fa-user dropdown-toggle" href="#">
                        Nombre de usuario
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="profile.html">Perfil</a></li>
                                <li><a class="dropdown-item" href="contacts.html">Contactos</a></li>
                                <li><a class="dropdown-item" href="mailbox.html">Correo</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="login.html">Cerrar Sesión</a></li>
                            </ul>
   
                        </li>
                    </ul>

                </nav>
            </div>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>This is main title</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">This is</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Breadcrumb</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-sm-8">
                    <div class="title-action">
                        <a href="" class="btn btn-primary">This is action area</a>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
                <div class="middle-box text-center animated fadeInRightBig">
                    <h3 class="font-bold">This is page content</h3>
                    <div class="error-desc">
                        You can create here any grid layout you want. And any variation layout you imagine:) Check out
                        main dashboard and other site. It use many different layout.
                        <br/><a href="index.html" class="btn btn-primary m-t">Dashboard</a>
                    </div>
                </div>
            </div>

    
            <div class="footer">
                <div class="float-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2018
                </div>
            </div>
        </div>
        <div class="small-chat-box fadeInRight animated">

            <div class="heading" draggable="true">
                <small class="chat-date float-right">
                    02.19.2015
                </small>
                Small chat
            </div>

            <div class="content">

                <div class="left">
                    <div class="author-name">
                        Monica Jackson <small class="chat-date">
                            10:02 am
                        </small>
                    </div>
                    <div class="chat-message active">
                        Lorem Ipsum is simply dummy text input.
                    </div>

                </div>
                <div class="right">
                    <div class="author-name">
                        Mick Smith
                        <small class="chat-date">
                            11:24 am
                        </small>
                    </div>
                    <div class="chat-message">
                        Lorem Ipsum is simpl.
                    </div>
                </div>
                <div class="left">
                    <div class="author-name">
                        Alice Novak
                        <small class="chat-date">
                            08:45 pm
                        </small>
                    </div>
                    <div class="chat-message active">
                        Check this stock char.
                    </div>
                </div>
                <div class="right">
                    <div class="author-name">
                        Anna Lamson
                        <small class="chat-date">
                            11:24 am
                        </small>
                    </div>
                    <div class="chat-message">
                        The standard chunk of Lorem Ipsum
                    </div>
                </div>
                <div class="left">
                    <div class="author-name">
                        Mick Lane
                        <small class="chat-date">
                            08:45 pm
                        </small>
                    </div>
                    <div class="chat-message active">
                        I belive that. Lorem Ipsum is simply dummy text.
                    </div>
                </div>


            </div>
            <div class="form-chat">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control">
                    <span class="input-group-btn"> <button class="btn btn-primary" type="button">Send
                        </button> </span>
                </div>
            </div>

        </div>
        <div id="small-chat">

            <span class="badge badge-warning float-right">5</span>
            <a class="open-small-chat" href="">
                <i class="fas fa-comments"></i>

            </a>
        </div>

    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('libs/inspinia')}}/js/jquery-3.1.1.min.js"></script>
    <script src="{{asset('libs/inspinia')}}/js/popper.min.js"></script>
    <script src="{{asset('libs/inspinia')}}/js/bootstrap.js"></script>
    <script src="{{asset('libs/inspinia')}}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="{{asset('libs/inspinia')}}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="{{asset('libs/inspinia')}}/js/plugins/flot/jquery.flot.js"></script>
    <script src="{{asset('libs/inspinia')}}/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="{{asset('libs/inspinia')}}/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="{{asset('libs/inspinia')}}/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="{{asset('libs/inspinia')}}/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="{{asset('libs/inspinia')}}/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="{{asset('libs/inspinia')}}/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('libs/inspinia')}}/js/inspinia.js"></script>
    <script src="{{asset('libs/inspinia')}}/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="{{asset('libs/inspinia')}}/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="{{asset('libs/inspinia')}}/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="{{asset('libs/inspinia')}}/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="{{asset('libs/inspinia')}}/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="{{asset('libs/inspinia')}}/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="{{asset('libs/inspinia')}}/js/plugins/toastr/toastr.min.js"></script>



</body>

</html>