<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>

	<link rel="stylesheet" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


	
		<!-- Side Navbar -->
			<!-- <ul id="nav-mobile" class="sidenav sidenav-fixed nav" style="transform: translateX(0%);">
		       <li ><img class="logo" src="img/logo.png"></li>
		        <ul class="collapsible">
				    <li>
				      <div class="collapsible-header menu-option">Crud</div>
					    <div class="collapsible-body"> 
					      	<ul class="menu-content">
			                  <li><a href="auto-init.html">Add</a></li>
			                  <li><a href="auto-init.html">Delete</a></li>
			                  <li><a href="auto-init.html">Modify</a></li>
			                </ul>
		            	</div>
				    </li>
				     <li>
				      <div class="collapsible-header menu-option">Other</div>
					    <div class="collapsible-body"> 
					      	<ul class="menu-content">
			                  <li><a href="auto-init.html">option1</a></li>
			                  <li><a href="auto-init.html">option2</a></li>
			                  <li><a href="auto-init.html">option3</a></li>
			                </ul>
		            	</div>
				    </li>
				</ul>
		    </ul> -->


<!-- Content -->

<div class="cont-principal">
	<div class="cont-side-bar">
		<!-- Side Navbar -->
			<ul id="nav-mobile" class="sidenav sidenav-fixed nav" style="transform: translateX(0%);">
		       <li ><img class="logo" src="img/logo.png"></li>
		        <ul class="collapsible">
		        	<li>
				      <div class="collapsible-header menu-option">Admin</div>
					    <div class="collapsible-body"> 
					      	<ul class="menu-content">
			                  <li><a href="auto-init.html">Users</a></li>
			                </ul>
		            	</div>
				    </li>
				    <li>
				      <div class="collapsible-header menu-option">Crud</div>
					    <div class="collapsible-body"> 
					      	<ul class="menu-content">
			                  <li><a href="auto-init.html">Add</a></li>
			                  <li><a href="auto-init.html">Delete</a></li>
			                  <li><a href="auto-init.html">Modify</a></li>
			                </ul>
		            	</div>
				    </li>
				     <li>
				      <div class="collapsible-header menu-option">Other</div>
					    <div class="collapsible-body"> 
					      	<ul class="menu-content">
			                  <li><a href="auto-init.html">option1</a></li>
			                  <li><a href="auto-init.html">option2</a></li>
			                  <li><a href="auto-init.html">option3</a></li>
			                </ul>
		            	</div>
				    </li>
				</ul>
		    </ul>
	</div>
	<div class="cont-container">
		<div class="container cont">
			<div class="row">
				<div class="col s12">
					<!-- Top Bar -->
					<nav class=" top-nav">
						<div class="nav-wrapper">
							<div class="container">
								<div class="row flex">
								    <div class="col s12 top-title"><p>TITULO</p></div>
								</div>
							</div>
						</div>
					</nav>	     
				</div>
			</div>
			
		</div>
	</div>
	
</div>



</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"></script>
<script src="js/materialize.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    $('.collapsible').collapsible();
  });
	
</script>
</html>