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
        		<div class="headerCaption">
        			<div class="card">
        				<div class="card-body">
        					<span class="headTitle">Customization</span>
        				</div>
        			</div>
        		</div>

<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="#productDes"> <i class="mdi mdi-clipboard-text"></i> Description</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#productClass"> <i class="mdi mdi-clipboard-outline"></i> Classification</a>
    </li>
  </ul>


    <div class="tab-content">
    	<div id="productDes" class="container tab-pane active">
    		<div class="row">
    		<div class="col-lg-8 col-xlg-9 col-md-7 form">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Name</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" id="productname">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Brand</label>
                                        <div class="col-md-12">
                                            <select type="text" class="form-control form-control-line" id="brand"></select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Family</label>
                                        <div class="col-md-12">
                                            <select type="text" class="form-control form-control-line" id="family"></select>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-sm-6">
                                    		<div class="form-group">
                                        		<label class="col-md-12">Price</label>
                                        			<div class="col-md-12">
                                           			 <input type="number" class="form-control form-control-line" id="price">
                                        			</div>
                                    		</div>
                                		</div>
                                	<div class="col-sm-6">
                                		<div class="form-group">
                                        	<label class="col-md-12">Bar code</label>
                                        		<div class="col-md-12">
                                            		<input type="number" class="form-control form-control-line" id="barcode">
                                        		</div>
                                    	</div>
                                	</div>                                 	
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-12">Description</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line" id="description"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xlg-3 col-md-5 form">
                    	<div class="card">
                    		<div class="card-body">
                    			<center><div class="imagePreview">
                    				<img src="../assets/images/MyImages/imageUpload.png" width="50" width="50" id="dispimg">
                    			</div> </center>
                    			<br>
                    			<div class="custom-file">
                    				<input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                    			</div>
                    		</div>
                    	</div>
                    	<!-- <div class="col-lg-12 col-xlg-12 col-md-12 form"> -->
                    	<div class="card">
                    		<div class="card-body">
                                    <div class="form-group">
                                        <label class="col-md-12">Properties</label>
                                        <div class="col-md-12">
                                            <textarea rows="3" class="form-control form-control-line" id="properties"></textarea>
                                        </div>
                                    </div>
                    			<!-- <div class="form-group">
                                        <div class="col-sm-12 saveAction">
                                        	<div class="checkform">
                                        		<input type="checkbox" class="form-check-input" id="exampleCheck1">
    											<label class="form-check-label" for="exampleCheck1">Active</label>
    										</div>
                                        	
                                            <button class="btn btn-success">Save</button>
                                        </div>
                                </div> -->
                    		</div>
                    	</div>
                    <!-- </div> -->
                    </div>
                    
    	</div>
    	</div>
    	<div id="productClass" class="container tab-pane fade">
    		<div class="row">
    			<div class="col-7 form">    				
    				<div class="card">
    					<div class="card-body">
    						<div class="form-group">
    							<label class="col-md-12">Gender</label>
    							<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="male" value="option1">
								  <label class="form-check-label" for="male">Male</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="female" value="option2">
								  <label class="form-check-label" for="female">Female</label>
								</div>
    						</div>
    						<div class="form-group">
    							<label class="col-md-12">Age</label>
    							<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="age20" value="option1">
								  <label class="form-check-label" for="age20">20</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="age30" value="option2">
								  <label class="form-check-label" for="age30">30</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="age40" value="option1">
								  <label class="form-check-label" for="age40">40</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="age50" value="option2">
								  <label class="form-check-label" for="age50">50</label>
								</div><div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="age60" value="option1">
								  <label class="form-check-label" for="age60">60</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="age70" value="option2">
								  <label class="form-check-label" for="age70">70</label>
								</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-5 form">
    				<div class="card">
    					<div class="card-body">
    						<div class="form-group">
    							<label class="col-md-12">Diagnosis Result</label>
    							<div class="form-check ">
								  <input class="form-check-input" type="checkbox" id="male" value="option1">
								  <label class="form-check-label" for="male">Optimum</label>
								</div>
								<div class="form-check ">
								  <input class="form-check-input" type="checkbox" id="female" value="option2">
								  <label class="form-check-label" for="female">Care Needed</label>
								</div>
								<div class="form-check ">
								  <input class="form-check-input" type="checkbox" id="female" value="option2">
								  <label class="form-check-label" for="female">Intensive Care</label>
								</div>
    						</div>
    					</div>
    				</div>
    			</div>
    				<div class="col-12">
    					<div class="card">
    						<div class="card-body">
    							<div class="row">
    							<div class="col-6">
    								<div class="form-group">
    										<label class="col-md-12">Skin Type</label>
    										<div class="form-check ">
											  <input class="form-check-input" type="checkbox" id="male" value="option1">
											  <label class="form-check-label" for="male">Normal</label>
											</div>
											<div class="form-check ">
											  <input class="form-check-input" type="checkbox" id="male" value="option1">
											  <label class="form-check-label" for="male">Dry</label>
											</div>
											<div class="form-check ">
											  <input class="form-check-input" type="checkbox" id="male" value="option1">
											  <label class="form-check-label" for="male">Oily</label>
											</div>
											<div class="form-check ">
											  <input class="form-check-input" type="checkbox" id="male" value="option1">
											  <label class="form-check-label" for="male">Combination</label>
											</div>
    								</div>
    								<div class="checkform">
                                        		<input type="checkbox" class="form-check-input" id="exampleCheck1">
    											<label class="form-check-label" for="exampleCheck1">Recommended for sensitive skin</label>
    										</div>
    							</div>
    							<div class="col-6">
    								<div class="form--group">
    									<div class="row">
    										<div class="col-12">
    											<label class="col-md-12">Measurement</label>
    										</div>
    										<div class="col-6">
    										
    										<div class="form-check ">
											  <input class="form-check-input" type="checkbox" id="male" value="option1">
											  <label class="form-check-label" for="male">Moistures</label>
											</div>
											<div class="form-check ">
											  <input class="form-check-input" type="checkbox" id="male" value="option1">
											  <label class="form-check-label" for="male">Spots</label>
											</div>
											<div class="form-check ">
											  <input class="form-check-input" type="checkbox" id="male" value="option1">
											  <label class="form-check-label" for="male">Pores</label>
											</div>
											<div class="form-check ">
											  <input class="form-check-input" type="checkbox" id="male" value="option1">
											  <label class="form-check-label" for="male">Wrinkles</label>
											</div>
										</div>
										<div class="col-6">
											<div class="form-check ">
											  <input class="form-check-input" type="checkbox" id="male" value="option1">
											  <label class="form-check-label" for="male">Impurities</label>
											</div>
											<div class="form-check ">
											  <input class="form-check-input" type="checkbox" id="male" value="option1">
											  <label class="form-check-label" for="male">Keratin</label>
											</div>
										</div>
    									</div>

											
    								</div>
    							</div>
    							</div>
    							<div class="row justify-content-end">
    								<div class="col-sm-3 col-md-3">
    									<div class="form-group">
                                        <div class="col-sm-12 saveAction">
                                        	<div class="checkform">
                                        		<input type="checkbox" class="form-check-input" id="exampleCheck1">
    											<label class="form-check-label" for="exampleCheck1">Active</label>
    										</div>
                                        	
                                            <button class="btn btn-success" id="saveproduct">Save</button>
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

  getbrands();
  getfamily();

 function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#dispimg').attr('src', e.target.result);
      $('#dispimg').attr('width', '118px');
      $('#dispimg').attr('opacity', '1!important');
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#customFile").change(function() {
  readURL(this);
});

$("#saveproduct").click(function(){
    $.ajax({
        url: "../app/Queries/process.php",
        type: "POST",   
        data: {

        "savenewproduct": 1,
        "productname": $("#productname").val(),
        "brand": $("#brand").val(),
        "family": $("#family").val(),
        "price": $("#price").val(),
        "barcode": $("#barcode").val(),
        "description": $("#description").val(),
        "customFile": $("#customFile").val(),
        "properties": $("#properties").val()
        },
        success: function(data) {
           location.href="ProductList";
        }
    })
  });

function getbrands() {
    $.ajax({
        url: "../app/Queries/process.php",
        type: "POST",
        data: {
            "getbrandlist": 1
        },
        success: function(data){
            $("#brand").html(data);
        }
    });
  }

  function getfamily() {
    $.ajax({
        url: "../app/Queries/process.php",
        type: "POST",
        data: {
            "getfamilylist": 1
        },
        success: function(data){
            $("#family").html(data);
        }
    });
  }

});
</script>


</body>
</html>