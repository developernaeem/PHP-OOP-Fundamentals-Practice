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
	Inheritance
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
			
		}

		/* Create Class Constants */
		public function display() {
			echo "Username is {$this->user} and UserId is {$this->userId}";
		}
	}

	class Admin extends UserData{
		public $level;

		/* Create Class Constants */
		public function display() {
			echo "Username is {$this->user} and UserId is {$this->userId} and user level is {$this->level}";
		}
	}

	$user = "Naeem";
	$id = "20";

	/* Create instance / object */
	$users = new UserData($user, $id);
	echo "<br>";
	$users->display(); // Property Static Access
	echo "<br>";

	$user = "Admin";
	$id = "1";
	/* Admin Instance / Object */
	$ad = new Admin($user, $id);
	$ad->level = "Administrator";
	$ad->display();
	

	
?>



<?php include 'styles/footer.php' ?>