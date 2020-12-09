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
  echo "New record created successfully";
  $stmt = $conn->prepare("SELECT * FROM panier ");
  $stmt->execute();

  // set the resulting array to associative
  $Articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo $Articles[3]["id"];
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

}












?>
