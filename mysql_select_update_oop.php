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
	MySQLi - Select / Update Data in OOP Way
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

	/* Database Select Query OOP Way */
	$sql = "SELECT * FROM tbl_user";
	$result = $conn->query($sql);
	while ($data = $result->fetch_object()) {
		echo "<pre>";
		echo $data->skill;
		echo "</pre>";
	}

	/* Database Update Query OOP Way */
	$sql = "UPDATE tbl_user SET skill='PHP JavaScript' WHERE id='1'";
	$result = $conn->query($sql);
	
	

	
?>



<?php include 'styles/footer.php' ?>