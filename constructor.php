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
	Constructor
	<span style="float: right;">
		<?php 
			date_default_timezone_set('Asia/Dhaka');
			echo "Time ".date("h:i:s a");
		?>
	</span>
	<hr>
	
<?php 
	
	/* Create Class */
	class Person {

		/* Create Property */
		public $name;
		public $age;

		/* Create Constructor */
		public function __construct($n, $a) {
			$this->name = $n;
			$this->age = $a;
		}
		
		/* Create Method 1 */
		public function personDetails() {
			echo "Person Name is {$this->name} and person age is {$this->age}";
		}
		
	}
	
	/* Create instance / object */
	$personOne = new Person("AB Naeem", "19");
	$personOne->personDetails();
	
	

	
 ?>



<?php include 'styles/footer.php' ?>