<?php  include_once("navbar.php")?>

<?php



include 'functions.php';

$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (isset($_GET["promo"])) {
   
$servername = "localhost";
$username = "root";
$password = "Snapo123";
$dbname = "mydb";
$id=$_GET["id"];
$libelle=$_GET["libelle"];
$image=$_GET["image"];
$prix=$_GET["prix"];
$categorie=$_GET["categorie"];
$promo=$_GET["promo"];


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO panier (id, libelle, image,prix,categorie,promo)
  VALUES ($id, $libelle, $image,$prix,$categorie,$promo)";
  $conn->exec($sql);
  $stmt = $conn->prepare("SELECT * FROM panier ");
  $stmt->execute();

  // set the resulting array to associative
  $Articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>



<div id="panier">
<div class="left-container">
    <table style="width:100%">
    <tr>
    <th >Image</th>
    <th>Libelle</th>
    <th>Prix</th>
    <th>Qte</th>
    <th>Categorie</th>



  </tr>
  <?php foreach ($Articles as $Article): ?>
<tr>
  <td >  <img class="img-panier" src="<?php echo $Article['image']?>"></td>
  <td> <?php echo $Article["libelle"]?> </td>
  <td> <?php echo $Article["prix"]?> </td>
  <td> <label for="tentacles"></label>

<input type="number" id="tentacles" name="tentacles"
       min="10" max="100"> </td>
  <td> <?php echo $Article["categorie"]?> </td>

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
          <div style="display:flex;justify-content:space-between"><h4>ITEMS:</h4> <li style="list-style-type:none">50</li></div>   
             <br>
             <div style="display:flex;justify-content:space-between"><h4>TOTAL:</h4> <li style="list-style-type:none">$550</li></div>   
             
             <button class="button button5">Checkout</button>

         </div>
     </div>




</div>





















<?php
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

}












?>
