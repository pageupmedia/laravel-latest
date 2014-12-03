<?php $value=Session::get('username');
if($value===''){ //return Redirect::to('logout');
}
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SideKYC</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo URL::to('/') ;?>/admin/sidekyc/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo URL::to('/') ;?>/admin/sidekyc/css/style.css" rel="stylesheet">
	    <!-- Custom CSS -->
    <link href="<?php echo URL::to('/') ;?>/admin/sidekyc/css/summernote.css" rel="stylesheet">
    <link href="<?php echo URL::to('/') ;?>/admin/sidekyc/css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.nav > li > a:link {
    display: block;
    height: 74px;
    margin-top: -15px;
    padding: 11px 0;
    position: relative;
}
.nav > li > a:hover{
background:#29c7ca !important;
color:#fff !important;
}
 #b_image{ float: right;
    height: 40px;
    margin-top: 8px;
    padding: 5px;
    width: 40px;
    z-index: 2147483647;
	cursor:pointer;} 
<?php if(@$sort1=='asc'){ ?>
.caret{border-bottom:0; border-top:4px solid;}
<?php } else { ?>
.caret{border-top:0; border-bottom:4px solid;}
<?php } ?>
</style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
      <nav role="navigation" class="navbar navbar-fixed-top">
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand"><img src="<?php echo URL::to('/') ;?>/admin/sidekyc/img/logo.png"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-center top-nav">
				<?php $page_name=basename(Request::url());
				$background_selected="#29c7ca"; $background="#353942"; $color="#aeafb1"; $color_selected="#fff"; ?>
                <li class="feed" style="<?php if($page_name=='feed'){ echo 'background:'.$background_selected.';color:'.$color_selected.';';}?>"><a href="feed" style="color:<?php if($page_name=='feed'){ echo $color_selected;}else{echo $color; }?>">
                    <img src="<?php echo URL::to('/') ;?>/admin/sidekyc/img/icon_feed.png">
                    <div class="nav-label">feed</div></a>
                </li>
				<li class="dashboard" style="<?php if($page_name=='dashboard'){ echo 'background:'.$background_selected.';';}?>"><a href="dashboard" style="color:<?php if($page_name=='dashboard'){ echo $color_selected;}else{echo $color; }?>" >
                    <img src="<?php echo URL::to('/') ;?>/admin/sidekyc/img/icon_dashboard.png">
                    <div class="nav-label">dashboard</div></a>
                </li>
                <li class="onboard" style="<?php if($page_name=='onboard'){ echo 'background:'.$background_selected.';color:'.$color_selected.';';}else{ echo 'background:'.$background.'!important;color:'.$color.'!important;'; }?>">
                    <a href="" style="color:<?php if($page_name=='onboard'){ echo $color_selected;}else{echo $color; }?>"><img src="<?php echo URL::to('/') ;?>/admin/sidekyc/img/icon_onboard.png">
                    <div class="nav-label">onboarding</div></a>
                </li>
				
            </ul>
            <ul class="nav navbar-right top-nav" style="margin-top:-75px;">
                <button class="navbar-btn" id="logout-btn">
                    <img src="<?php echo URL::to('/') ;?>/admin/sidekyc/img/icon_close.png" class="">
                </button>
            </ul>
            
        </nav>

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
			<div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#"><span class="sidebar-icon admin"></span><?php echo Session::get('username');?></a>
                </li>
                <li class="sidebar-section">
                    <span class="sidebar-icon posts"></span>Posts
                </li>
                <li>
                    <a href="#">New Entry</a>
                </li>
                <li>
                    <a href="#">View All Entries</a>
                </li>
                <li class="sidebar-section">
                    <span class="sidebar-icon pages"></span>Pages
                </li>
                <li>
                    <a href="#">New Page</a>
                </li>
                <li>
                    <a href="#">View All Pages</a>
                </li>
                <li class="sidebar-section">
                    <span class="sidebar-icon categories"></span>Categories
                </li>
                <li>
                    <a href="#">New Category</a>
                </li>
                <li>
                    <a href="#">New Tag</a>
                </li>
                <li>
                    <a href="#">Manage Categories</a>
                </li>
                <li>
                    <a href="#">Manage Tags</a>
                </li>
                <li class="sidebar-section">
                    <span class="sidebar-icon users"></span>Users
                </li>
                <li>
                    <a href="#">New User</a>
                </li>
                <li>
                    <a href="#">Manage Users</a>
                </li>
                <li>
                    <a href="#">Manage Roles</a>
                </li>
                <li class="sidebar-section">
                    <span class="sidebar-icon pages"></span>Settings
                </li>
                <li>
                    <a href="#">General Settings</a>
                </li>
                <li>
                    <a href="#">Theme Settings</a>
                </li>
            </ul>
        </div>
        </div>
        <!-- /#sidebar-wrapper -->
    