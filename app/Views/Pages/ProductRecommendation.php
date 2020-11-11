<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<title>Welcome to Chowis Product</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="../assets/images/favicon.png"/>
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
	<link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/libs/bootstrap/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
   <link href="../dist/css/style.min.css" rel="stylesheet">
   <link href="../assets/MyStyles/styles.css" rel="stylesheet">

	<title>Chowis</title>
</head>
<body>
	<div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

<!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                             <!-- Light Logo text -->    
                             <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-pic"><img src="../assets/images/users/1.jpg" alt="users" class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="m-b-0 user-name font-medium">John Doe <i class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email">varun@gmail.com</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <li class="p-15 m-t-10"><a href="home" class="btn btn-block create-btn text-white no-block d-flex align-items-center"><i class="fa fa-plus-square"></i> <span class="hide-menu m-l-5">Product Recommendation</span> </a></li>
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="ProductRecommendation" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Treatment Recommendation</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-network"></i><span class="hide-menu">Send Images</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-all"></i><span class="hide-menu">Back-up Copies</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Personalized Programs</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Share/ E-mail</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert-outline"></i><span class="hide-menu">Change Language</span></a></li>
                    </ul>
                    
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="container-fluid">

                <!-- HEADER -->
                <!-- <div class="headerCaption">
                    <div class="card">
                        <div class="card-body">
                            <span class="headTitle">Customization</span>
                        </div>
                    </div>
                </div> -->
                <!-- END HEADER -->

                <div class="row">
                    <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="productreclist">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                                        <div class="divTitle">Treatment recommended for Wrinkles</div>
                                        </div>
                                    </div><br/>
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- bbb_deals -->
                                    <div class="bbb_deals">
                                        <!-- <div class="ribbon ribbon-top-right"><span>1 Month</span></div> -->
                                        <div class="bbb_deals_title">Anti-wrinkle mask</div>
                                        <div class="bbb_deals_title_freq"><b>Every morning</b></div>
                                        <div class="bbb_deals_title_dur">1 month</div>
                                        <div class="bbb_deals_slider_container">
                                            <div class=" bbb_deals_item">
                                                <div class="bbb_deals_image"><img src="../assets/images/MyImages/bio.png" alt=""></div>
                                                <div class="bbb_deals_content">
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <div class="bbb_deals_item_category"><span><b>Name:</b> Product name</span></div>
                                                        <!-- <div class="bbb_deals_item_price_a ml-auto">Test product</div> -->
                                                    </div>
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <!-- <div class="bbb_deals_item_name">HP Envy</div> -->
                                                        <!-- <div class="bbb_deals_item_price ml-auto">₹35,550</div> -->
                                                        <div class="bbb_deals_item_category"><span><b>Brand:</b> Product brand</span></div>
                                                    </div>
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <div class="bbb_deals_item_category"><span><b>Description:</b></span></div>
                                                        <!-- <div class="bbb_deals_item_price_a ml-auto">Test product</div> -->
                                                    </div>
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <div class="bbb_deals_item_category"><span>This is where I put my description.</span></div>
                                                    </div>
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <div class="bbb_deals_item_category"><span><b>Properties:</b></span></div>
                                                    </div>
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <div class="bbb_deals_item_category"><span>This is where I put my properties.</span></div>
                                                    </div>
                                                    <div class="available">
                                                        <div class="available_line d-flex flex-row justify-content-start">
                                                            <div class="available_title"><i>Recommended for sensitive skins</i></div>
                                                            <!-- <div class="sold_title ml-auto">Already sold: <span>28</span></div> -->
                                                        </div>
                                                        <div class="available_bar"><span style="width:17%"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- bbb_deals -->
                                    <div class="bbb_deals">
                                        <!-- <div class="ribbon ribbon-top-right"><span>2 Months</span></div> -->
                                        <div class="bbb_deals_title">Anti-wrinkle mask</div>
                                        <div class="bbb_deals_title_freq"><b>Morning and evening</b></div>
                                        <div class="bbb_deals_title_dur">1 month</div>
                                        <div class="bbb_deals_slider_container">
                                            <div class=" bbb_deals_item">
                                                <div class="bbb_deals_image"><img src="../assets/images/MyImages/bio.png" alt=""></div>
                                                <div class="bbb_deals_content">
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <div class="bbb_deals_item_category"><span><b>Name:</b> Product name</span></div>
                                                        <!-- <div class="bbb_deals_item_price_a ml-auto">Test product</div> -->
                                                    </div>
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <!-- <div class="bbb_deals_item_name">HP Envy</div> -->
                                                        <!-- <div class="bbb_deals_item_price ml-auto">₹35,550</div> -->
                                                        <div class="bbb_deals_item_category"><span><b>Brand:</b> Product brand</span></div>
                                                    </div>
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <div class="bbb_deals_item_category"><span><b>Description:</b></span></div>
                                                        <!-- <div class="bbb_deals_item_price_a ml-auto">Test product</div> -->
                                                    </div>
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <div class="bbb_deals_item_category"><span>This is where I put my description.</span></div>
                                                    </div>
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <div class="bbb_deals_item_category"><span><b>Properties:</b></span></div>
                                                    </div>
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <div class="bbb_deals_item_category"><span>This is where I put my properties.</span></div>
                                                    </div>
                                                    <div class="available">
                                                        <div class="available_line d-flex flex-row justify-content-start">
                                                            <div class="available_title"><i>Recommended for sensitive skins</i></div>
                                                            <!-- <div class="sold_title ml-auto">Already sold: <span>28</span></div> -->
                                                        </div>
                                                        <div class="available_bar"><span style="width:17%"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- bbb_deals -->
                                    <div class="bbb_deals">
                                        <!-- <div class="ribbon ribbon-top-right"><span>More than 6 months</span></div> -->
                                        <div class="bbb_deals_title">Anti-imperfection product</div>
                                        <div class="bbb_deals_title_freq"><b>Once a month</b></div>
                                        <div class="bbb_deals_title_dur">More than 6 months</div>
                                        <div class="bbb_deals_slider_container">
                                            <div class=" bbb_deals_item">
                                                <div class="bbb_deals_image"><img src="../assets/images/MyImages/bio.png" alt=""></div>
                                                <div class="bbb_deals_content">
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <div class="bbb_deals_item_category"><span><b>Name:</b> Product name</span></div>
                                                        <!-- <div class="bbb_deals_item_price_a ml-auto">Test product</div> -->
                                                    </div>
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <!-- <div class="bbb_deals_item_name">HP Envy</div> -->
                                                        <!-- <div class="bbb_deals_item_price ml-auto">₹35,550</div> -->
                                                        <div class="bbb_deals_item_category"><span><b>Brand:</b> Product brand</span></div>
                                                    </div>
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <div class="bbb_deals_item_category"><span><b>Description:</b></span></div>
                                                        <!-- <div class="bbb_deals_item_price_a ml-auto">Test product</div> -->
                                                    </div>
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <div class="bbb_deals_item_category"><span>This is where I put my description.</span></div>
                                                    </div>
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <div class="bbb_deals_item_category"><span><b>Properties:</b></span></div>
                                                    </div>
                                                    <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <div class="bbb_deals_item_category"><span>This is where I put my properties.</span></div>
                                                    </div>
                                                    <div class="available">
                                                        <div class="available_line d-flex flex-row justify-content-start">
                                                            <div class="available_title"><i>Recommended for sensitive skins</i></div>
                                                            <!-- <div class="sold_title ml-auto">Already sold: <span>28</span></div> -->
                                                        </div>
                                                        <div class="available_bar"><span style="width:17%"></span></div>
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
                </div>

            </div>
        </div>
</div>
        
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.js"></script>

    <script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});
</script>


</body>
</html>