<?php 
	include 'styles/header.php'; 
	
?>

<!-- Header Area -->
<section class="header_area">
	<h2><?php echo "PHP OOP Fundamentals"; ?></h2>
</section>
<!-- Main Content Area -->
<section class="main_content">
	<hr>
	Update Delete Data with PDO + Prepared Statements
	<span style="float: right;">
		<?php 
			date_default_timezone_set('Asia/Dhaka');
			echo "Time ".date("h:i:s a");
		?>
	</span>
	<hr>
	
<?php 

	// PDO -- PHP Data Object.
	// DNS -- Data Source Name.

	/* Database Connect With PDO */
	$dns 	= "mysql:dbname=userdata;host=localhost;";
	$user 	= "root";
	$pass 	= "";

	try {
		$pdo = new PDO($dns, $user, $pass);
	} catch (PDOException $e) {
		echo "Connection fail....".$e->getMessage();
	}
	
	/* Input to Database */
	$id 	= 13;


	/* Database Update Query PDO Way */
	/* Array Index Update */
/*	$sql = "UPDATE tbl_user SET skill=? WHERE id=?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array($skill, $id));*/

/*	$sql = "UPDATE tbl_user SET skill=:skill WHERE id=:id";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':skill', $skill);
	$stmt->bindParam(':id', $id);
	$stmt->execute();*/

	/* Database Delete Query PDO Way */
	/* Array Index Delete */
/*	$sql = "DELETE FROM tbl_user WHERE id=?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array($id));*/
	
	/* Array Index Placeholder Delete */
	/*$sql = "DELETE FROM tbl_user WHERE id=:id";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':id', $id);
	$stmt->execute();*/

	/* Array Index Numbering Delete */
	$sql = "DELETE FROM tbl_user WHERE id=?";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(1, $id);
	$stmt->execute();
	
?>



<?php include 'styles/footer.php' ?>