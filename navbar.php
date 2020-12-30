<?php
include("config.php");

?>



<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->

	

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    </head>
<body>
<header>

<div id="top-header" >
				<div class="container">
					<ul >
                    <li  ><a href="#"><i  class="fa fa-phone"></i> +216-23-207-615</a></li>
						<li><a href="#"><i class="fa fa-envelope"></i> bakouchfakher@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> FAKHERTEK</a></li>
					</ul>
					<ul >
						<li><a href="login.php"><i class="fa fa-user-lock"></i>    Signin</a></li>
					</ul>
				</div>



</div>

 <div id='main-header'>
     <div class="container"> 
   
							
<div>
<a>  <img class="logo" src="./img/brand1.png" alt=""></a> 

</div>
						
                        <div>
								<div class="header-search">
									<form>
										<select class="input-select">
											<option value="0">All Categories</option>
											<option value="1">Category 01</option>
											<option value="1">Category 02</option>
										</select>
										<input class="input" placeholder="Search here">
										<button class="search-btn">Search</button>
									</form>
								</div>
                            </div>
                            
                            <div class="cart-icon">
                            <a href="panier.php" style="display:flex;padding:2px" class="cart-icon-link" >
										<img  style="width:35px"src="./img/shopping-bag.png"></img>	
                                        <div style="font-size:12px"class="qty">3</div>
                                       

									</a> 

                            </div>
                        
     </div>
    
 </div>

</header>
<div  style="position:sticky" id="bottom-header">
     <div class="container">
    
					<ul class="main-nav">
	  <li   class="nav-item">
	    <a style="font-size:20px" class=" <?php if ($CURRENT_PAGE == "laptop") {?>active<?php }?>" href="article_list.php?categorie=laptop">Laptop</a>
	  </li>
	  <li   class="nav-item">
	    <a style="font-size:20px" class=" <?php if ($CURRENT_PAGE == "tab") {?>active<?php }?>" href="article_list.php?categorie=tab">tablette</a>
	  </li>
	  <li   class="nav-item">
	    <a style="font-size:20px" class=" <?php if ($CURRENT_PAGE == "souris") {?>active<?php }?>" href="article_list.php?categorie=souris">Souris</a>
	  </li>
	</ul>
     </div>
   
     </div>
</body>
<html>























