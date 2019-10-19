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
	Select Data with PDO + Prepared Statements
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
	$name 	= "Rasel Miha";
	$email 	= "rasel@gmail.com";
	$skill 	= "Blogger";


	/* Database Select Query PDO Way */
	/* Placeholder Type Insert */
	$sql = "INSERT INTO tbl_user(name, email, skill) VALUES (:name, :email, :skill)";
	$stmt = $pdo->prepare($sql);
	/* bindParam onley works in variable */
	/*$stmt->bindParam(':name', $name);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':skill', $skill);
	$stmt->execute();*/



	/* bindValue works with value and variable */
	$stmt->bindValue(':name', $name);
	$stmt->bindValue(':email', $email);
	$stmt->bindValue(':skill', "Programmer");
	$stmt->execute();
	
	
	

	
	
?>



<?php include 'styles/footer.php' ?>