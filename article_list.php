<?php ?>
<style>
<?php include 'css/style.css'; ?>
</style>
<?php
include 'functions.php';
// Connect to MySQL database
$pdo = pdo_connect_mysql();
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page
$records_per_page = 5;
// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM Articles ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$Articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Get the total number of contacts, this is so we can determine whether there should be a next and previous c
$num_contacts = $pdo->query('SELECT COUNT(*) FROM Articles')->fetchColumn();
?>
<?php foreach ($Articles as $Article): ?>
            <div class="product-container">
              <img style="width:100%" src="./img/product06.png">
              <p> This pc is a good pc and a good graphic</p>
              <br>
              <h3>PC ASUS 1340</h3>
              <br>
              <h2>$1500</h2>
            </div>
            <?php endforeach; ?>   =
    
    <div class="pagination">
		<?php if ($page > 1): ?>
		<a href="read.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i>left</a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_contacts): ?>
		<a href="read.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i>right</a>
		<?php endif; ?>
	</div>
</div>