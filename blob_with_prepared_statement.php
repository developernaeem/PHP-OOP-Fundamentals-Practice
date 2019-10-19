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
	BLOB With Prepared Statements
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
	}
	
	/* BLOB With Prepared Statements */

	/* Database Insert Query OOP Way */
	$sql = "SELECT image FROM images WHERE id=?";
	/* Call to Prepared Statements */
	$stmt = $conn->prepare($sql);
	$stmt->bind_param('i', $id);
	$id = 1;
	$stmt->execute();
	$stmt->bind_result($image);
	$stmt->fetch();
	header("content-type: jpg");
	echo '<img src="data:image/jpg;base64, '.base64_encode($image).'" alt="Blog Image">';



	/* Database Insert Query OOP Way */
	//$sql = "INSERT INTO images(image) VALUES(?)";
	/* Call to Prepared Statements */
	/*$stmt = $conn->prepare($sql);
	$stmt->bind_param("b", $image);
	$image = file_get_contents("blog.jpg");
	$stmt->send_long_data(0, $image);
	$stmt->execute();*/
	

	
	
?>



<?php include 'styles/footer.php' ?>