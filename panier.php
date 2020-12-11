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
<div id="panier">
<div class="left-container">
    <table style="width:100%">
    <tr> 
    <th >Image</th>
    <th>Libelle</th>
    <th>Prix</th>
    <th>Qte</th>
    <th>Categorie</th>
    <th>Action</th>


  </tr>
  <?php foreach ($_SESSION['id'] as $id): 
  


  
  
  
  
  ?>

<tr>
  <td >  <img class="img-panier" src=<?php echo $_SESSION['image'][$id]?>></td>
  <td> <?php echo $_SESSION['libelle'][$id]?> </td>
  <td style="color:red"> $<?php echo $_SESSION['prix'][$id]?> </td>
  <td> <label for="tentacles"></label>

<input type="number" id="tentacles" name="tentacles"
       min="10" max="100"> </td>
  <td> <?php echo $_SESSION['categorie'][$id]?> </td>
<td>           <i style="cursor:pointer" class="fas fa-trash"><a href="panier.php?delete=<?php echo $id?>">lol</a></i>
</td>
  </tr>
<?php endforeach; ?>
    </table>

</div>

     <div class="right-container">
         <div class="right-container-items">
             <h1>ORDER SUMMARY</h1>
             <br>
             <hr>
             <br>
          <div style="display:flex;justify-content:space-between"><h4>ITEMS:</h4> <li style="list-style-type:none"><?php echo count($_SESSION["id"])?></li></div>   
             <br>
             <div style="display:flex;justify-content:space-between"><h4>TOTAL:</h4> <li style="list-style-type:none">$<?php echo count($_SESSION["id"])?></li></div>   
             
             <button class="button button5">Checkout</button>

         </div>
     </div>




</div>




















<?php include("footer.php")?>