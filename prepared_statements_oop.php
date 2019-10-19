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
	MySQLi - Basic Prepared Statements
	<span style="float: right;">
		<?php 
			date_default_timezone_set('Asia/Dhaka');
			echo "Time ".date("h:i:s a");
		?>
	</span>
	<hr>
	
<?php 

	/* Database Connection OOP Way */
	$conn = new mysqli("localhost", "root", "", "userdata");
	if (mysqli_connect_errno()) {
		echo "Connection fail...";
		exit();
	}else{
		echo "Connection successfully...";
	}
	
	/* Basic Prepared Statements */

	/* Database Select Query OOP Way */
	$sql = "SELECT name, skill FROM tbl_user order by id";
	/* Call to Prepared Statements */
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($name, $skill);
	while ($stmt->fetch()) {
		echo "$skill<br>";
	}

	

	
	

	
?>



<?php include 'styles/footer.php' ?>