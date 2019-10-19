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
	Static Methods and Properties
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
		const NAME = "AB Naeem";
		public static $age ="20";
		
		/* Create Constructor */
		public function __construct($userName, $userId) {
			$this->user 	= $userName;
			$this->userId 	= $userId;

			echo "Username is {$this->user} and UserId is {$this->userId}";
		}

		/* Create Class Constants */
		public static function display() {
			echo "Full Name is: ".UserData::NAME."<br>";
			echo "Age is : ".self::$age;
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
	echo "<br>";
	// $users->display(); // Property Static Access
	UserData::display();  // Method Static Access

	

	
 ?>



<?php include 'styles/footer.php' ?>