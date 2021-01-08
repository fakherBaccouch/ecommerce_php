<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">


		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    </head>

    <body>
    <?php  include_once("navbar.php");
    include 'functions.php';

    if(isset($_GET["id"]) ){
        $pdo = pdo_connect_mysql();
      
      $stmt = $pdo->prepare('SELECT * FROM Articles where id='.$_GET["id"].'');
      
      $stmt->execute();
      $Article = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>
  <div    id="description-container">
                <div style="margin:20px 160px;height:90vh;display:flex;justify-content:space-around">
               <div id="description-image"><img src="<?php echo $Article[0]["image"]?>"></div>
               <div id="description-description">
                  <h3 style="font-size:150%"><?php echo $Article[0]["libelle"]?></h3>
                  <br>
                  <p style="font-size:70%;font-weight:500">Référence: <?php echo $Article[0]["referance"]?> </p>
                  <br>
                  

                  <h2 style="font-size:150%;"><?php echo $Article[0]["prix"]?> TND</h2>
                  <br>
                  

                  <span style="border-bottom:2px solid #f0f0f0;width:30%;font-size:16px;font-weight:550; display: flex;
   flex-direction: row;
   justify-content: space-between;line-height:50px"><?php echo $Article[0]["description"]?></span>
                       <br>


<div style="display:flex;justify-content:space-arround">

<button type="submit" style="background:#D10024;margin:0;margin-left:;width:250px;height:50px"   class="button button3"><a href='panier.php?id=<?=$Article[0]['id']?>&libelle="<?=$Article[0]['libelle']?>"&image="<?=$Article[0]['image']?>"&prix=<?=$Article[0]['prix']?>&categorie="<?=$Article[0]['categorie']?>"&promo=<?=$Article[0]['promo']?>&description=<?=$Article[0]['description']?>'>Ajouter au panier</a></button>

</div>

               </div>



                </div>

       </div>










      <?php
    }
    ?>
    

    
       <?php include("footer.php")?>



    </body>
</html>