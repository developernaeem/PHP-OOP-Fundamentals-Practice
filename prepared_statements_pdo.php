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
	Prepared Statements With PDO
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
	$name 	= "Rabull Hasan";
	$email 	= "rabull@gmail.com";
	$skill 	= "Oracle";


	/* Database Select Query PDO Way */
	/* Placeholder Type Insert */
	// $sql = "INSERT INTO tbl_user(name, email, skill) VALUES (:name, :email, :skill)";
	// $stmt = $pdo->prepare($sql);
	/* bindParam with datatypes */
/*	$stmt->bindParam(':name', $name, 	PDO::PARAM_STR);
	$stmt->bindParam(':email', $email, 	PDO::PARAM_STR);
	$stmt->bindParam(':skill', $skill, 	PDO::PARAM_STR);
	$stmt->execute();*/
	
	/* Question Mark Type Insert */
	$sql = "INSERT INTO tbl_user(name, email, skill) VALUES (?, ?, ?)";
	$stmt = $pdo->prepare($sql);
	$arr = array($name, $email, $skill);
	$stmt->execute($arr);
	

	
	
?>



<?php include 'styles/footer.php' ?>