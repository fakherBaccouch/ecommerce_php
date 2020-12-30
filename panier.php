<?php 

session_start();

include_once("navbar.php")?>

<?php



include 'functions.php';

$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (isset($_GET["promo"])) {
 
 $_SESSION['id'][$_GET["id"]]=$_GET["id"];
 $_SESSION['libelle'][$_GET["id"]]=$_GET["libelle"];
 $_SESSION['prix'][$_GET["id"]]=$_GET["prix"];
 $_SESSION['promo'][$_GET["id"]]=$_GET["promo"];
 $_SESSION['image'][$_GET["id"]]=$_GET["image"];
 $_SESSION['categorie'][$_GET["id"]]=$_GET["categorie"];





}
if(isset($_GET["delete"])){
  unset($_SESSION["id"][$_GET["delete"]]);

}



foreach ($_SESSION['id'] as $id): 
 
   
   endforeach; ?>
<div style="margin:0 125px" id="panier">
<div class="left-container">

    


  <ul style="display:flex;flex-direction:column;width:98%">
  <li>  <div id="item-price" style="font-size:20px;margin:5px">PANIER</div>
</li>
<hr class="style-one">
<?php   
if(isset($_SESSION["id"]) && count($_SESSION["id"])> 0){
 foreach ($_SESSION['id'] as $id): 
  
    ?>
    <li  >
      <div  style="margin-top:20px;height:150px ; display:flex;display:flex;justify-content:space-between"> 
      <div style="width:25%">
      <img src=<?php echo $_SESSION['image'][$id]?>>  
    
      </div>
      <div style="width:30%;margin:10px;display:flex;flex-direction:column">
      <div id="item-description">PC PORTABLE MSI GF75-THIN10SCXR i7 10é Gén 16Go 512Go SSD</div>
      <div id="item-price"><?php echo $_SESSION['prix'][$id]?>TND</div>
      </div>
      <div style="margin:10px;display:flex">
      <div class="quantity" >
        <button class="btn minus1">-</button>
        <input class="quantity" id="id_form-0-quantity" min="0" name="form-0-quantity" value="1" type="number">
        <button class="btn add1">+</button>
      </div>
      <div id="item-price" style="font-size:11px;width:70%"><?php echo $_SESSION['prix'][$id]?>,000 TND</div>
    
      </div>
      <div style="margin:10px">
      <a href="panier.php?delete=<?php echo $id?>"><i style="cursor:pointer;color:black" class="fas fa-trash"></i></a>  </div>
      </div>
    </li>
    
    <?php endforeach; 
} else{
?>
<h5 class="no-items">Il n'y a plus d'articles dans votre panier</h5>

<?php
}



?>
</ul>  

</div>

     <div style="padding:0" class="right-container">
     <div style="width:100%">

     <div  style="padding:10px" class="panier_text"> 
           <span>2 Articles</span>
           <span>6870,00DT</span>
         </div>
     </div>

     <div style="width:100%">

<div  style="padding:10px" class="panier_text"> 
      <span>Total TTC</span>
      <span>6870,00DT</span>
    </div>
</div>
<div style="width:100%">

<button type="submit" style="background:#D10024"   class="button button3">Checkout</button>

</div>

        
        
     </div>




</div>




















<?php  include("footer.php")?>
