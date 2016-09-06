<!--house.php-->
<html>
<head>
	<meta charset="UTF-8">
	<title>HouseInfro</title>
	<link rel="stylesheet" href="asset/css/bootstrap.css">
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/css/plugins/bootstrap.css" />
	<link rel="stylesheet" href="asset/css/main.css" />
	<link rel="stylesheet" href="asset/css/theme.css" />
	<link rel="stylesheet" href="asset/css/MoneAdmin.css" />
	<link rel="stylesheet" href="asset/css/plugins/font-awesome.css" />
</head>
<body style="padding-top:75px;">
	<div id="wrap">
		<div id="top">
			<nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 20px; padding-bottom: 10px;">
				<header class="navbar-header">
					<a href="index.php?c=index&m=getindex">
						<img src="asset/images/logo1.png" alt="Logo" />
					</a>
				</header>
				<ul class="nav navbar-top-links navbar-right navbar-fixed">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#"><i class="icon-user"></i> User Profile </a>
							</li>
							<li><a href="#"><i class="icon-gear"></i> Settings </a>
							</li>
							<li class="divider"></li>
							<li><a href="login.html"><i class="icon-signout"></i> Logout </a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<div id="left">
			<div class="media user-media well-small">
				<a class="user-link" href="#">
					<img class="media-object img-thumbnail user-img" style="width:90px;height:90px;" alt="User Picture" src="assets/img/admin.jpg" />
				</a>
				<div class="media-body">
					<h5 class="media-heading"></h5>
					<ul class="list-unstyled user-info">
						<li><a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online</li>
					</ul>
				</div>
			</div>
			<ul id="menu" class="collapse" style="font-size:12px;">
				<!-- <li class="panel">
					<a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav">
						<i class="icon-th-list"> 视频类别管理 </i>
						<span class="pull-right"><i class="icon-angle-down"></i></span>
					</a>
					<ul class="collapse" id="blank-nav">
						<li><a href="typeAdd.php"><i class="icon-plus"> 添加视频类别 </i></a></li>
						<li><a href="typeList.php"><i class="icon-search"> 查询视频类别 </i></a></li>
					</ul>
				</li> -->
				<!-- <li class="panel">
					<a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav1">
						<i class="icon-list"> 视频信息管理 </i>
						<span class="pull-right"><i class="icon-angle-down"></i></span>
					</a>
					<ul class="collapse" id="blank-nav1">
						<li><a href="videoAdd.php"><i class="icon-plus"> 视频信息添加 </i></a></li>
						<li><a href="videoList.php"><i class="icon-search"> 视频信息查询 </i></a></li>
					</ul>
				</li> -->
				<li class="panel">
					<a href="admin.php?c=user&m=listuser" data-parent="#menu" data-target="#blank-nav3">
						<i class="icon-user"> 用户管理 </i>
						<span class="pull-right">
							<i class="icon-angle-right"></i>
						</span>
					</a>
				</li>
				<li class="panel">
					<a href="admin.php?c=house&m=gethouse" data-parent="#menu" data-target="#blank-nav3">
						<i class="icon-comments"> 房屋管理 </i>
						<span class="pull-right">
							<i class="icon-angle-right"></i>
						</span>
					</a>
				</li>
				<ul class="inline">
				<li><a href="index.php?c=index&m=getindex"><i class="icon-signout"> 返回首页 </i></a></li>
					<li><a href="admin.php?c=user&m=logout"><i class="icon-signout"> 退出 </i></a></li>
					<!-- <li><a href="changePassword.php"><i class="icon-edit"> 修改密码 </i></a></li> -->
				</ul>
			</ul>
		</div>
		<div id="content">
