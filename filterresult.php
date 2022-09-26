<?php
include('incl/header2.php');
?>
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div  class="container-well"><div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="#">
						<span class="logo-icon material-icons fa-rotate-45"></span>
						<span class="logo-default">VACCINE</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group container">
						<input type="text" class="form-control" placeholder="Search..." name="query">
						<span class="input-group-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
			</div>
		</div>
		<!-- end header -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="true"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
						
									<div class="pull-left info">
										<h2> vaccine booking</h2>
									</div>
								</div>	
							</li>
								<li class="nav-item">
								<a href="dashboard.php" class="nav-link nav-toggle"> <!-- <i class="material-icons">#</i> -->
								<span class="title">Dashboard</span> <span class="arrow"></span>
								</a>
								</li>
								<li class="nav-item">
								<a href="addmembers.php" class="nav-link nav-toggle"> <!-- <i class="material-icons">#</i> -->
									<span class="title">Add members</span> <span class="arrow"></span>
								</a>
								</li>
								<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <!-- <i class="material-icons">#</i> -->
									<span class="title">Download Certificate</span> <span class="arrow"></span>
								</a>
								</li>	
								<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <!-- <i class="material-icons">#</i> -->
									<span class="title">Contact</span> <span class="arrow"></span>
								</a>
								</li>
								<li class="nav-item">
								<a href="logout.php" class="nav-link nav-toggle"> <!-- <i class="material-icons">#</i> -->
									<span class="title">Logout</span> <span class="arrow"></span>
								</a>
								</li>
						</div>
				</div>
			</div>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
<section>
        <div class="page-bar">
						<div class="page-title-breadcrumb">
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										<a href="dashboard.php">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Filter results</li>
							</ol>
					</div>
					 </div>
					 <div class="page-title">Filter result</div>
	   
<!-- start filter -->
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="row clearfix">
								<div class="col-md-6 col-sm-6 col-12">
								<form  action="#" method="POST">
								<div class="card">
										<div class="panel-body">
											<h3>Age</h3>
									<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height select-width">
											<input class="mdl-textfield__input" type="text" id="sample1" value=""
												readonly tabIndex="-1">
											<label for="sample1" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label for="sample1" class="mdl-textfield__label">Select age</label>
											<ul data-mdl-for="sample1"
												class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<li class="mdl-menu__item" data-val="">18 & Above</li>
												<li class="mdl-menu__item" data-val="">18-44Only</li>
												<li class="mdl-menu__item" data-val="">45 & Above</li>
											</ul>
										</div>
										</div>
									</div>
								</div>
							
									
							<div class="col-md-6 col-sm-6 col-12">
									<div class="card">
										<div class="panel-body">
											<h3>Cost</h3>
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height select-width">
											<input class="mdl-textfield__input" type="text" id="sample2" value=""
												readonly tabIndex="-1">
											<label for="sample2" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label for="sample2" class="mdl-textfield__label">Paid (or) Free ?</label>
											<ul data-mdl-for="sample2"
												class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<li class="mdl-menu__item" data-val="">Free</li>
												<li class="mdl-menu__item" data-val="">Paid</li>
											
											</ul>
										</div>
										</div>
									</div>
								</div>
		<div class="col-md-6 col-sm-6 col-12">
									<div class="card">
										<div class="panel-body">
											<h3>Vaccine</h3>
													<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height select-width">
											<input class="mdl-textfield__input" type="text" id="sample3" value=""
												readonly tabIndex="-1">
											<label for="sample3" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label for="sample3" class="mdl-textfield__label">Select Vaccine</label>
											<ul data-mdl-for="sample3"
												class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<li class="mdl-menu__item" data-val="">Covishield</li>
												<li class="mdl-menu__item" data-val="">Covaxin</li>
												<li class="mdl-menu__item" data-val="">Sputnik V</li>
											</ul>
										</div>
										</div>

</div>	
<br>

<button type="submit" name="search" >search</button> 	</form>							
                    </div></div></div>	
					
</section>
</div>
</div>
<?php
include('incl/footer.php');
?>