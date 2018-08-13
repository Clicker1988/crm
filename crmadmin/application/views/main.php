
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="shortcut icon" sizes="196x196" href="<?php echo base_url(); ?>assets/images/logo.png">
	<title>Geo Grout CRM</title>
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>libs/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css">
	<!-- build:css ../assets/css/app.min.css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>libs/bower/animate.css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>libs/bower/fullcalendar/dist/fullcalendar.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>libs/bower/perfect-scrollbar/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/core.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/crm.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/spinners.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.fancybox-1.3.4.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>libs/bower/summernote/dist/summernote.css">
	
	<!-- endbuild
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
	 -->
	<script src="<?php echo base_url(); ?>libs/bower/breakpoints.js/dist/breakpoints.min.js"></script>
	<!------ fancybox --->
	
	
	<script>
		Breakpoints();
	</script>
</head>
	
<body class="menubar-left menubar-unfold  theme-primary pace-done menubar-dark">
<!--============= start main area -->

<!-- APP NAVBAR ==========-->
<nav id="app-navbar" class="navbar navbar-inverse navbar-fixed-top primary in">
  
  <!-- navbar header -->
  <div class="navbar-header">
    <button type="button" id="menubar-toggle-btn" class="navbar-toggle visible-xs-inline-block navbar-toggle-left hamburger hamburger--collapse js-hamburger">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-box"><span class="hamburger-inner"></span></span>
    </button>

    <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="zmdi zmdi-hc-lg zmdi-more"></span>
    </button>

    <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="zmdi zmdi-hc-lg zmdi-search"></span>
    </button>

    <a href="#" class="navbar-brand">
      <span class="brand-icon"><i class="fa fa-gg"></i></span>
      <span class="brand-name">Geo Grout</span>
    </a>
  </div><!-- .navbar-header -->
  
  <div class="navbar-container container-fluid">
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <ul class="nav navbar-toolbar navbar-toolbar-left navbar-left">
        <li class="hidden-float hidden-menubar-top">
          <a href="javascript:void(0)" role="button" id="menubar-fold-btn" class="hamburger hamburger--arrowalt is-active js-hamburger">
            <span class="hamburger-box"><span class="hamburger-inner"></span></span>
          </a>
        </li>
        <li>
          <h5 class="page-title hidden-menubar-top hidden-float">Customer Relation Management Tool</h5>
        </li>
      </ul>

      <ul class="nav navbar-toolbar navbar-toolbar-right navbar-right">
        <li class="nav-item dropdown hidden-float">
          <a href="javascript:void(0)" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
            <i class="zmdi zmdi-hc-lg zmdi-search"></i>
          </a>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-settings"></i></a>
          <ul class="dropdown-menu animated flipInY">
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i><?php echo $this->session->userdata('crmuser'); ?></a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>Balance</a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-phone-msg"></i>Connection<span class="label label-primary">3</span></a></li>
            <li><a href="<?php echo base_url('crm/logout'); ?>"><i class="zmdi m-r-md zmdi-hc-lg zmdi-info"></i>Logout</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="side-panel-toggle" data-toggle="class" data-target="#side-panel" data-class="open" role="button"><i class="zmdi zmdi-hc-lg zmdi-apps"></i></a>
        </li>
      </ul>
    </div>
  </div><!-- navbar-container -->
</nav>
<!--========== END app navbar -->

<!-- APP ASIDE ==========-->
<aside id="menubar" class="menubar dark in">
 
  <div class="menubar-scroll">
    <div class="menubar-scroll-inner">
      <ul class="app-menu">
		
		<li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
            <span class="menu-text">Dashboard</span>
           <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
			<li><a href="<?php echo base_url(); ?>crm/dashboard"><span class="menu-text">CRM Dashboard</span></a></li>
          </ul>
        </li>

		<li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
           <i class="menu-icon fa fa-users" aria-hidden="true"></i>
            <span class="menu-text">Contact</span>
           <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
			<li><a href="<?php echo base_url(); ?>crm/addcontacts"><span class="menu-text">Add A Contact</span></a></li>
			<li><a href="<?php echo base_url(); ?>crm/showcontacttables"><span class="menu-text">Show Contact List</span></a></li>
          </ul>
        </li>
		
		<li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
           <i class="menu-icon fa fa-cubes" aria-hidden="true"></i>
            <span class="menu-text">Campaign</span>
			<i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
			<li><a href="<?php echo base_url(); ?>crm/campaign"><span class="menu-text">Add A Campaign</span></a></li>
			<li><a href="<?php echo base_url(); ?>crm/showcampaigntables"><span class="menu-text">Show Campaign Table</span></a></li>
          </ul>
        </li>
        
        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-layers zmdi-hc-lg"></i>
            <span class="menu-text">Leads</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
			<li><a href="<?php echo base_url(); ?>crm/addleads"><span class="menu-text">Add A Lead</span></a></li>
            <li><a href="<?php echo base_url(); ?>crm/showleadstables"><span class="menu-text">Show Leads Table</span></a></li>
			<li><a href="<?php echo base_url(); ?>crm/leadstatus"><span class="menu-text">Dispo Leads Status</span></a></li>
			<li><a href="<?php echo base_url(); ?>crm/leadsoption"><span class="menu-text">Leads Options Manager</span></a></li>
          </ul>
        </li>
		
		<li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon fa fa-laptop"></i>
            <span class="menu-text">Project Leads</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
			<li><a href="<?php echo base_url(); ?>crm/createprojleads"><span class="menu-text">Add A Lead</span></a></li>
			<li><a href="<?php echo base_url(); ?>crm/previewprojleads"><span class="menu-text">Preview Leads</span></a></li>
          </ul>
        </li>
		
		<li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon fa fa-cloud-upload" aria-hidden="true"></i>
            <span class="menu-text">Uploader</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
			<li><a href="<?php echo base_url(); ?>crm/upload"><span class="menu-text">Upload Leads</span></a></li>
			<li><a href="<?php echo base_url(); ?>crm/upload"><span class="menu-text">Upload Contacts</span></a></li>
          </ul>
        </li>

       
      </ul><!-- .app-menu -->
    </div><!-- .menubar-scroll-inner -->
  </div><!-- .menubar-scroll -->
</aside>
<!--========== END app aside -->

<!-- navbar search -->
<div id="navbar-search" class="navbar-search collapse">
  <div class="navbar-search-inner">
    <form action="#">
      <span class="search-icon"><i class="fa fa-search"></i></span>
      <input class="search-field" type="search" placeholder="search..."/>
    </form>
    <button type="button" class="search-close" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
      <i class="fa fa-close"></i>
    </button>
  </div>
  <div class="navbar-search-backdrop" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false"></div>
</div><!-- .navbar-search -->

<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">

<div class="preloader">
		<h6 style='text-align:center'>Please wait while we load your page...</h6>
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>

<div class="wrap">
	<section id="prevDiv" class="app-content">
			<?php 
				if(isset($otherdata)){
					$data['param'] = $otherdata;
					$this->load->view($url, $data); 
				}else{
					if($url != "none"){
						$this->load->view($url);
					}
				}
			?>

	</section>
</div>

<div class="wrap p-t-0">
    <footer class="app-footer">
      <div class="clearfix">
        <ul class="footer-menu pull-right">
          <li><a href="javascript:void(0)">Careers</a></li>
          <li><a href="javascript:void(0)">Privacy Policy</a></li>
          <li><a href="javascript:void(0)">Feedback <i class="fa fa-angle-up m-l-md"></i></a></li>
        </ul>
        <div class="copyright pull-left">Copyright Geo Grout 2018 &copy;</div>
      </div>
    </footer>
  </div>


</main>

	
	

	
	<!-- build:js ../assets/js/core.min.js -->
	<script src="<?php echo base_url(); ?>libs/bower/jquery/dist/jquery.js"></script>
	<script src="<?php echo base_url(); ?>libs/bower/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
	<script src="<?php echo base_url(); ?>libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
	
	<script src="<?php echo base_url(); ?>libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="<?php echo base_url(); ?>libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
	<script src="<?php echo base_url(); ?>libs/bower/PACE/pace.min.js"></script>
	<!-- endbuild -->
	
	<!-----Global JS ---->
	<script src="<?php echo base_url(); ?>assets/js/global.js"></script>
	
	<script src="<?php echo base_url(); ?>/libs/misc/datatables/datatables.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/libs/misc/datatables/datatables.min.css">

	<!-- build:js ../assets/js/app.min.js -->
	<script src="<?php echo base_url(); ?>assets/js/library.js"></script>
	
	<script src="<?php echo base_url(); ?>/libs/bower/summernote/dist/summernote.min.js"></script>
	
	<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/sweetalert2.js"></script>
	
	
	<!-- endbuild -->
	<script src="<?php echo base_url(); ?>libs/bower/moment/moment.js"></script>
	<script src="<?php echo base_url(); ?>libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/fullcalendar.js"></script>
	
	<script>
		document.addEventListener("DOMContentLoaded", function(){
			$('.preloader').hide();
		});
	</script>
	

	
</body>
</html>