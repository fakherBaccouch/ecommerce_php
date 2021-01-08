<?php
session_start();
include 'backend/database.php';

if($_SESSION["username"]=="Admin"){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax/ajax.js"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<style>
	
		tr td{
			vertical-align: middle !important;
		}
	</style>
</head>
<body>

    <div >
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>gestion <b>des produits</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Ajouter un nouveau produit</span></a>
						<a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons"></i> <span>supprimer</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>num</th>
						<th>id</th>
                        <th>libelle</th>
                        <th>description</th>
						<th>image</th>
                        <th>prix</th>
                        <th>promo</th>
						<th>dispo</th>

                    </tr>
                </thead>
				<tbody id="admin_table">
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM articles");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
				<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
								<label for="checkbox2"></label>
							</span>
						</td>
					<td><?php echo $i; ?></td>
					<td><?php echo $row["id"]; ?></td>
					<td><?php echo $row["libelle"]; ?></td>
					<td><?php echo $row["description"]; ?></td>
					<td ><img style="width:100px	" src="<?php echo $row["image"]; ?>"></td>
					<td><?php echo $row["prix"]; ?></td>
					<td><?php echo $row["promo"]; ?></td>
					<td><?php echo $row["dispo"]; ?></td>


					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal">
							<i class="fab fa-accusoft" style="color:green" data-toggle="tooltip" 
							data-id="<?php echo $row['id']; ?>"
							data-prix="<?php echo $row['prix']; ?>"
							data-categorie="<?php echo $row['categorie']; ?>"
							data-image="<?php echo $row['image']; ?>"
							data-promo="<?php echo $row['promo']; ?>"
							data-dispo="<?php echo $row['dispo']; ?>"
							data-referance="<?php echo $row['referance']; ?>"
							data-description="<?php echo $row['description']; ?>"

							title="Edit"></i>
						</a>
						<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i  style="color:red" class="fas fa-trash" data-toggle="tooltip"  title="Delete"></i></a>
                    </td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			
        </div>
    </div>
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter un produit</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>libelle</label>
							<input type="text" id="libelle" name="libelle" class="form-control" >
						</div>
						<div class="form-group">
							<label>categorie</label>
							<input type="text" id="categorie" name="categorie" class="form-control" >
						</div>
						<div class="form-group">
							<label>Description</label>
							<input type="test" id="description" name="description" class="form-control" >
						</div>
						<div class="form-group">
							<label>prix</label>
							<input type="text" id="prix" name="prix" class="form-control" >
						</div>
						<div class="form-group">
							<label>ref</label>
							<input type="text" id="ref" name="ref" class="form-control" >
						</div>	
						<div class="form-group">
							<label>image</label>
							<input type="city" id="image" name="image" class="form-control" >
						</div>
						<div class="form-group">
							<label>promo</label>
							<input type="city" id="promo" name="promo" class="form-control" >
						</div>
						<div class="form-group">
							<label>dispo</label>
							<input type="city" id="dispo" name="dispo" class="form-control" >
						</div>				
					</div>
					<div class="modal-footer">
					    <input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-add">Ajouter</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="update_form">
					<div class="modal-header">						
						<h4 class="modal-title">modifier un produit</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_p" name="id" class="form-control" >					
						<div class="form-group">
							<label>libelle</label>
							<input type="text" id="libelle_p" name="libelle" class="form-control" >
						</div>
						<div class="form-group">
							<label>image</label>
							<input type="text" id="image_p" name="image" class="form-control" >
						</div>
						<div class="form-group">
							<label>description</label>
							<input type="text" id="description_p" name="description" class="form-control" >
						</div>
						<div class="form-group">
							<label>dispo</label>
							<input  id="dispo_p" name="dispo" class="form-control" >
						</div>	
						<div class="form-group">
							<label>referance</label>
							<input type="text" id="referance_p" name="referance" class="form-control" >
						</div>	
						<div class="form-group">
							<label>prix</label>
							<input type="text" id="prix_p" name="prix" class="form-control" >
						</div>					
					</div>
					<div class="modal-footer">
					<input type="hidden" value="2" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-info" id="update">modifier</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
						
					<div class="modal-header">						
						<h4 class="modal-title">Supprimer un produit</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="id" class="form-control">					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-danger" id="delete">supprimer</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>    
<?php 
}else {header("location:login.php?case=1");}
?>