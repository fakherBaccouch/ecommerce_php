<?php session_start();


if(isset($_GET["case"])){
    if($_GET["case"]=== "1"){
        ?>
            <script>
                alert("you are not authorized to access this page")
            </script>
            <?php
        }
        if($_GET["case"]=== "2"){
            ?>
                <script>
                    alert("you have logged out ")
                </script>
                <?php
            }
            if($_GET["case"]=== "3"){
                ?>
                    <script>
                        alert("Wrong username and/or password")
                    </script>
                    <?php
                }
}




?>
<html>
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
		<link type="text/css" rel="stylesheet" href="css/style.scss"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    </head>
    <body>
	<div class="login">
    
	<form action="<?php $_SERVER["PHP_SELF"]?> " method="post">
<input placeholder="Nom d'utilisateur"  name="username" type="text">
<input placeholder="Mot de passe" name="password" type="password">
<button type="submit"  value="login" name="login" class="button button3">identifier</button>
</form>
</div>
<?php
if(isset($_POST["login"])){
	$username = htmlspecialchars($_POST["username"]);
    $password =  htmlspecialchars($_POST["password"]);
	if($username === "Admin" && $password === "Admin123"){
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		header("location:admin.php");
	}
	else{header("location:login.php?case=3"); 
}

}



?>
    </body>
</html>