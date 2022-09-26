<?php
include('incl/header2.php');
include('database.php');
$db = DB();
?>
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div  class="container-well">
	<div class="page-wrapper">
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
								<span class="title">Home Page</span> <span class="arrow"></span>
								</a>
								</li>
								<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <!-- <i class="material-icons">#</i> -->
								<span class="title">Search Centers</span> <span class="arrow"></span>
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
								<a href="contact.php" class="nav-link nav-toggle"> <!-- <i class="material-icons">#</i> -->
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
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Search vaccine centers</div>
							</div>
			
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="#">Login</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
								</ol>
<br><br><br>
<div class="row container">
	<div class="col-sm-12">
		<div class="card-box">
		<div class="card-head">
			<center><header>Member details</header> </div></center>
	<div class="table-responsive">
<table class="table table-striped table-bordered table-hover table-responsive">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Photo ID Proof</th>
	  <th scope="col">Photo ID Number</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
	  <th scope="col">Year of Birth </th> 

    </tr>
  </thead>
   <?php
         $query = $class->Form_Read();
		 if($query == true){
			 while($row=$query->fetch(PDO::FETCH_OBJ)){
		 ?>
 <tr>
        <td><?php echo $row->r_id;?></td>
        <td><?php echo $row->id_proof;?></td>
	    <td><?php echo $row->id_number;?></td>
		<td><?php echo $row->name;?></td>
		<td><?php echo $row->gender;?></td>
		<td><?php echo $row->year;?></td>
</tr>
		 	 <?php
			 }
		 }else{
			 echo '<tr>No Records</tr>';
	
		 }
		 ?>

</table>	</div>	 <br>
<div class="card-head">
<center><header>Search your nearest vaccination centre</header></center>
</div>
<form>
	<div class="card-body row">
		<div class="col-lg-6 p-t-20">	
		<label>Enter PIN CODE</label>
		  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
		   <input class="mdl-textfield__input" type="text" id="txtTitle" maxlength="6" >
		   <label class="mdl-textfield__label">PINCODE</label>
		  </div>
		</div>
	<div class="col-lg-6 p-t-20">
 	<label>SEARCH BY AREA</label>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
	<input class="mdl-textfield__input" type="text" id="list2" value="" readonly tabIndex="-1">
		<label for="list2" class="pull-right margin-0">
			<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
		</label>
		<label for="list2" class="mdl-textfield__label">SELECT AREA</label>
            <ul data-mdl-for="list2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<li class="mdl-menu__item" value="">Select any one</li>
												<li class="mdl-menu__item" value="">Coimbatore-South</li>
												<li class="mdl-menu__item" value="">Coimbatore-North</li>
												<li class="mdl-menu__item" value="">Annur</li>
												<li class="mdl-menu__item" value="">Mettupalayam</li>
												<li class="mdl-menu__item" value="">Madukkarai</li>
												<li class="mdl-menu__item" value="">Perur</li>
												<li class="mdl-menu__item" value="">Sulur</li>
												<li class="mdl-menu__item" value="">Pollachi</li>
												<li class="mdl-menu__item" value="">Kinathukadavu</li>
												<li class="mdl-menu__item" value="">Anaimalai</li>
												<li class="mdl-menu__item" value="">Valparai</li>
												
											</ul>
										</div>
										<div class="">
					                    <button type="" name="" class="login100-form-btn"> search</button>
			        </div>	</div>
									</div>
								</div>	
								
			</div></div>
		
  </form>	
  					 <div class="page-title">Filter result</div>
	   
 <div class="page-content-wrapper">
				
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card-box">
								<div class="card-head">
									<header>Select Item </header>
								</div>
								<div class="card-body row">
							
									<div class="col-lg-6 p-t-20">
										<!-- Select with arrow-->
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height select-width">
											<input class="mdl-textfield__input" type="text" id="sample1" value="Age?"
												readonly tabIndex="-1">
											<label for="sample1" class="pull-right margin-0">
												<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
											</label>
											<label for="sample1" class="mdl-textfield__label">Select Age</label>
											<ul data-mdl-for="sample1"
												class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<li class="mdl-menu__item" data-val="">18 & Above</li>
												<li class="mdl-menu__item" data-val="">18-44Only</li>
												<li class="mdl-menu__item" data-val="">45 & Above</li>
											</ul>
										</div>
										
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height select-width">
											<input class="mdl-textfield__input" type="text" id="sample2" value="Paid (OR) Free"
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
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height select-width">
											<input class="mdl-textfield__input" type="text" id="sample3" value="Select Vaccine"
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
										<button type="submit" name="search" >search</button> 
												
				</div>
					
									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
 <div class="page-content-wrapper">
				
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="card-box">
								<div class="card-head">
									<header>Slot Search Results</header>
								</div>
								<div class="card-body row">
							
									<div class="col-lg-6 p-t-20">
<div class="col-md-12"><h4>Age</h4>
											<div class="btn-group btn-group-circle" >
												<label class="btn btn-primary wh-bgcolor">
													<input type="checkbox"> 18 & Above
												</label>
												<label class="btn btn-primary deepPink-bgcolor">
													<input type="checkbox">  18-44Only
												</label>
												<label class="btn btn-primary deepPink-bgcolor">
													<input type="checkbox">  45 & Above
												</label>
											</div>
											<br> 
	
									
	</div>
<div class="col-md-12"><h4>Cost</h4>
											<div class="btn-group btn-group-circle" >
												<label class="btn btn-primary wh-bgcolor">
													<input type="checkbox"> Free
												</label>
												<label class="btn btn-primary deepPink-bgcolor">
													<input type="checkbox"> Paid
												</label>
											
											</div>
											<br> 
	
									
	</div>
<div class="col-md-12"><h4>Vaccine Name</h4>
											<div class="btn-group btn-group-circle" >
												<label class="btn btn-primary wh-bgcolor">
													<input type="checkbox"> Covishield
												</label>
												<label class="btn btn-primary deepPink-bgcolor">
													<input type="checkbox"> Covaxin
												</label>
												<label class="btn btn-primary deepPink-bgcolor">
													<input type="checkbox">  Sputnik V
												</label>
											</div>	<br> <br>
											<!-- <button type="button" class="btn btn-circle btn-default"></button> --> 
										 
	
									
	</div>	
	
	
	</div></div></div></div></div>
			</div>	

		
							
		    </div>
		</div>
	</div>
</div> </div>

		
<!-- end page content -->
<?php 
include('incl/footer.php');
?>	