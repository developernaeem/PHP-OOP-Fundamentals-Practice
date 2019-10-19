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
	MySQL Connect OOP Way
	<span style="float: right;">
		<?php 
			date_default_timezone_set('Asia/Dhaka');
			echo "Time ".date("h:i:s a");
		?>
	</span>
	<hr>
	
<?php 
	/* Database Connection With OOP Way */
	$conn = new mysqli("localhost", "root", "", "userdata");
	if (mysqli_connect_errno()) {
		echo "Connection fail...";
		exit();
	}else{
		echo "Connected...";
	}
	

	
?>



<?php include 'styles/footer.php' ?>