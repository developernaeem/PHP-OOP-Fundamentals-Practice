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
	PDO - PHP Data Object
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
	
	/* Database Select Query PDO Way */
	$sql = "SELECT * FROM tbl_user";
	$stmt = $pdo->query($sql);
	foreach ($stmt as $value) {
		echo $value["skill"]."<br>";
	}

	
	
?>



<?php include 'styles/footer.php' ?>