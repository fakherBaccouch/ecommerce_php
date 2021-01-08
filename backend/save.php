<?php
session_start();
include 'database.php';
if(count($_POST)>0){
	if($_POST['type']==1){
		$libelle=$_POST['libelle'];
		$categorie=$_POST['categorie'];
		$prix=$_POST['prix'];
		$ref=$_POST['ref'];
		$description=$_POST['description'];
		$image=$_POST['image'];
		$promo=$_POST['promo'];
		$dispo=$_POST['dispo'];
        
		$sql = "INSERT INTO `articles`( `libelle`,`categorie`,`description`,prix,`referance`,`image`,promo,dispo) 
		VALUES ('$libelle','$categorie','$description',$prix,'$ref','$image',$promo,$dispo)";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
	
}
  
if(isset($_POST)){
	if($_POST['type']==2){
		$id=$_POST['id'];
		
		$sql = "UPDATE `articles` SET 'libelle'='hiii' where id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
		return;

	}
}

 if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `articles` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}

}
 if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM articles WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}

}

?>
