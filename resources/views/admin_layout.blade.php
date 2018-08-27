<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Shopping | Dashboard</title>
    <meta name="description" content="Metro Admin Template.">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="{{asset('admin/css/ie.css')}}" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="{{asset('admin/css/ie9.css')}}" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- end: Favicon -->

</head>

<body>
<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.html"><span>Shopping</span></a>

            <!-- start: Header Menu -->
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">
                    <li class="dropdown hidden-phone">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white warning-sign"></i>
                        </a>
                        <ul class="dropdown-menu notifications">
                            <li class="dropdown-menu-title">
                                <span>You have 11 notifications</span>
                                <a href="#refresh"><i class="icon-repeat"></i></a>
                            </li>

                            <li class="dropdown-menu-sub-footer">
                                <a>View all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- start: Notifications Dropdown -->
                    <li class="dropdown hidden-phone">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white tasks"></i>
                        </a>
                        <ul class="dropdown-menu tasks">
                            <li class="dropdown-menu-title">
                                <span>You have 17 tasks in progress</span>
                                <a href="#refresh"><i class="icon-repeat"></i></a>
                            </li>

                        </ul>
                    </li>
                    <!-- end: Notifications Dropdown -->
                    <!-- start: Message Dropdown -->
                    <li class="dropdown hidden-phone">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white envelope"></i>
                        </a>
                        <ul class="dropdown-menu messages">
                            <li class="dropdown-menu-title">
                                <span>You have 9 messages</span>
                                <a href="#refresh"><i class="icon-repeat"></i></a>
                            </li>

                            <li>
                                <a class="dropdown-menu-sub-footer">View all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- end: Message Dropdown -->
                    <li>
                        <a class="btn" href="#">
                            <i class="halflings-icon white wrench"></i>
                        </a>
                    </li>
                    <!-- start: User Dropdown -->
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i> {{Session::get('admin_name')}}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span>Account Settings</span>
                            </li>
                            <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                            <li><a href="{{URL::to('/logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->

        </div>
    </div>
</div>
<!-- start: Header -->

<div class="container-fluid-full">
    <div class="row-fluid">

        <!-- start: Main Menu -->
        <div id="sidebar-left" class="span2">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li><a href="{{URL::to('/dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                    <li><a href="{{URL::to('/all-category')}}"><i class="icon-edit"></i><span class="hidden-tablet"> All category</span></a></li>
                    <li><a href="{{URL::to('/add-category')}}"><i class="icon-list-alt"></i><span class="hidden-tablet"> Add Category</span></a></li>
                    <li><a href="{{URL::to('/all-manufacture')}}"><i class="icon-edit"></i><span class="hidden-tablet"> All Manufacture</span></a></li>
                    <li><a href="{{URL::to('/add-manufacture')}}"><i class="icon-barcode"></i><span class="hidden-tablet"> Add Manufacture</span></a></li>
                    <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Products</span><span class="label label-important"> New </span></a>
                        <ul>
                            <li><a class="submenu" href="{{URL::to('/add-product')}}"><i class="icon-circle"></i><span class="hidden-tablet"> Add Prodcuts</span></a></li>
                            <li><a class="submenu" href="{{URL::to('/all-product')}}"><i class="icon-circle"></i><span class="hidden-tablet"> All Prodcuts</span></a></li>
                        </ul>
                    </li>


                    <li>
                        <a class="dropmenu" href="#"><i class="icon-camera"></i><span class="hidden-tablet"> Slider</span></a>
                        <ul>
                            <li><a class="submenu" href="{{URL::to('/add-slider')}}"><i class="icon-circle"></i><span class="hidden-tablet">Add Slider</span></a></li>
                            <li><a class="submenu" href="{{URL::to('/all-slider')}}"><i class="icon-circle"></i><span class="hidden-tablet">All Slider</span></a></li>
                        </ul>
                    </li>
                    <li><a href="{{URL::to('/manage-order')}}"><i class="icon-list-alt"></i><span class="hidden-tablet"> Manage Order</span></a></li>
                    <li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Shop Name</span></a></li>
                    <li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Delivery Man</span></a></li>

                </ul>
            </div>
        </div>
        <!-- end: Main Menu -->

        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>

        <!-- start: Content -->
        <div id="content" class="span10">
            @yield('admin_content')
        </div><!--/.fluid-container-->

        <!-- end: Content -->
    </div><!--/#content.span10-->
</div><!--/fluid-row-->

<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>

<div class="clearfix"></div>

<footer>

    <p>
        <span style="text-align:left;float:left">&copy; 2018 Developed BY <a href="">Aminur Rashid</a></span>
        <span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="">Metro</a></span>
    </p>

</footer>

<!-- start: JavaScript-->

<script src="{{asset('admin/js/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('admin/js/jquery-migrate-1.0.0.min.js')}}"></script>

<script src="{{asset('admin/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.ui.touch-punch.js')}}"></script>

<script src="{{asset('admin/js/modernizr.js')}}"></script>

<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.cookie.js')}}"></script>

<script src='{{asset('admin/js/fullcalendar.min.js')}}'></script>

<script src='{{asset('admin/js/jquery.dataTables.min.js')}}'></script>

<script src="{{asset('admin/js/excanvas.js')}}"></script>
<script src="{{asset('admin/js/jquery.flot.js')}}"></script>
<script src="{{asset('admin/js/jquery.flot.pie.js')}}"></script>
<script src="{{asset('admin/js/jquery.flot.stack.js')}}"></script>
<script src="{{asset('admin/js/jquery.flot.resize.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.chosen.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.uniform.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.cleditor.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.noty.js')}}"></script>

<script src="{{asset('admin/js/jquery.elfinder.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.raty.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.iphone.toggle.js')}}"></script>

<script src="{{asset('admin/js/jquery.uploadify-3.1.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.gritter.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.imagesloaded.js')}}"></script>

<script src="{{asset('admin/js/jquery.masonry.min.js')}}"></script>

<script src="{{asset('admin/js/jquery.knob.modified.js')}}"></script>

<script src="{{asset('admin/js/jquery.sparkline.min.js')}}"></script>

<script src="{{asset('admin/js/counter.js')}}"></script>

<script src="{{asset('admin/js/retina.js')}}"></script>

<script src="{{asset('admin/js/custom.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js')}}"></script>
<script>
    $(document).on("click", "#delete", function (e) {
       e.preventDefault();
       var link = $(this).attr("href");
        bootbox.confirm("Are you sure?", function(confirmed){
           if (confirmed){
               window.location.href = link;
           }
        });
    });
</script>
<!-- end: JavaScript-->

</body>
</html>
