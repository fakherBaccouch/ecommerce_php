<?php session_start();
 ?>
<style>
<?php include 'css/style.css'; ?>
</style>
<?php  include_once("navbar.php");
include 'functions.php';
if(isset($_GET["categorie"]) ){
  $pdo = pdo_connect_mysql();
 
$stmt = $pdo->prepare('SELECT * FROM Articles where categorie="'.$_GET["categorie"].'" ORDER BY id ');

$stmt->execute();
$Articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
  <div class="articles-list">
    <?php foreach ($Articles as $Article): ?>
 
<div class="product-container">
<img style="width:100%" src="<?php echo $Article['image']?>">

  <div class="product-container-content">
  <p> <?php echo $Article['categorie']?></p>
  
  <h3><?php echo $Article['libelle']?></h3>
  
  <h2> <?php echo $Article['prix']?>  TND</h2>
  </div>
  <div style="    border-top: 1px solid #e8e8e1;">
  <a href='description.php?id=<?=$Article['id']?>'><i style="position:relative;font-size:15px;top:100%;color:black"class="far fa-eye"></i></a>


  </div>
  <div class="middle">
<div class="text"> <a href='panier.php?id=<?=$Article['id']?>&libelle="<?=$Article['libelle']?>"&image="<?=$Article['image']?>"&prix=<?=$Article['prix']?>&categorie="<?=$Article['categorie']?>"&promo=<?=$Article['promo']?>&description=<?=$Article['description']?>'>Ajouter au panier</a></div>
</div>
</div>
<?php endforeach; ?>   


</div>
</div>
</div>
</div>;
<?php
}
 include("footer.php")?>

