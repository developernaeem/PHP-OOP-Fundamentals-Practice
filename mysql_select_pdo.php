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
	Select Data with PDO-Prepared Statements
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
	$id 	= 5;


	/* Database Select Query PDO Way */
	/* Placeholder Type Data reactive */
/*	$sql = "SELECT * FROM tbl_user WHERE id=:id";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array(':id' => $id));
	while ($data = $stmt->fetch()) {
		echo "Name : ".$data['name']."<br>";
		echo "Skill : ".$data['skill']."<br>";
	}*/
	
	/* Qustion Mark Type Data reactive */
/*	$sql = "SELECT * FROM tbl_user WHERE id=?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array($id));
	while ($data = $stmt->fetch()) {
		echo "Name : ".$data['name']."<br>";
		echo "Skill : ".$data['skill']."<br>";
	}*/
	

	/* bindParam Data reactive */
	$sql = "SELECT * FROM tbl_user WHERE id=?";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(1, $id);
	$stmt->execute();
	while ($data = $stmt->fetch()) {
		echo "Name : ".$data['name']."<br>";
		echo "Skill : ".$data['skill']."<br>";
	}

	
	
	

	
	
?>



<?php include 'styles/footer.php' ?>