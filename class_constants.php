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
	Work with __construct and __destruct()
	<span style="float: right;">
		<?php 
			date_default_timezone_set('Asia/Dhaka');
			echo "Time ".date("h:i:s a");
		?>
	</span>
	<hr>
	
<?php 
	
	/* Create Class */
	class UserData {

		/* Create Property*/

		const NAME = "AB Naeem";
		
		/* Create Class Constants */
		public function display() {
			echo "Full Name is: ".UserData::NAME;
		}

		
	}


	/* Create instance / object */
	$users = new UserData();
	$users->display();
	

	
 ?>



<?php include 'styles/footer.php' ?>