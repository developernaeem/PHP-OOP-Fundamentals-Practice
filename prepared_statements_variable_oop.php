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
	MySQLi - Basic Prepared Statements With Variables
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
	
	/* Basic Prepared Statements With Variables */

	/* Database Insert Query OOP Way */
	$sql = "INSERT INTO tbl_user(name, email, skill) VALUES(?,?,?)";
	/* Call to Prepared Statements */
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("sss", $name, $email, $skill);
	/* bind varible use */
	$name 	= "AB Naeem";
	$email 	= "naeemislam.pa@gmail.com";
	$skill 	= "PHP";
	$stmt->execute();
	$stmt->close();
	$conn->close();

	

	
	

	
?>



<?php include 'styles/footer.php' ?>