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
		public $user;
		public $userId;
		
		/* Create Constructor */
		public function __construct($userName, $userId) {
			$this->user 	= $userName;
			$this->userId 	= $userId;

			echo "Username is {$this->user} and UserId is {$this->userId}";
		}

		/* Create Destructor */
		public function __destruct() {
			unset($this->user);
			unset($this->userId);
		}
	}

	$user = "Naeem";
	$id = "20";

	/* Create instance / object */
	$users = new UserData($user, $id);
	

	
 ?>



<?php include 'styles/footer.php' ?>