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
    <?php  include_once("navbar.php");?>

       <div    id="description-container">
                <div style="margin:20px 160px;height:90vh;display:flex;justify-content:space-around">
               <div id="description-image"><img src="./img/mouse1.png"></div>
               <div id="description-description">
                  <h3 style="font-size:150%">RAZZER GOLIATHUS</h3>
                  <br>
                  <p style="font-size:70%;font-weight:500">Référence: RD-M602-1 </p>
                  <br>
                  

                  <h2 style="font-size:150%;">39,000 TND</h2>
                  <br>
                  

                  <span style="border-bottom:2px solid #f0f0f0;width:30%;font-size:16px;font-weight:550; display: flex;
   flex-direction: row;
   justify-content: space-between;line-height:50px">800/1200/1600/2400 /
                       7200DPI Taux d'interrogation 
                       1000HZ Patins</span>
                       <br>


<div style="display:flex;justify-content:space-arround">
<div class="quantity" >
        <button class="btn minus1">-</button>
        <input class="quantity" id="id_form-0-quantity" min="0" name="form-0-quantity" value="1" type="number">
        <button class="btn add1">+</button>
      </div>
<button type="submit" style="background:#D10024;margin:0;margin-left:-100px;width:250px;height:50px"   class="button button3">Ajouter au panier</button>

</div>

               </div>



                </div>

       </div>
       <?php include("footer.php")?>



    </body>
</html>