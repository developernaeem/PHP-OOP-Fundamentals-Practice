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
	Destructor
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
		public $id;

		/* Create Constructor */
		public function __construct($n, $a) {
			$this->name = $n;
			$this->age = $a;
		}
		
		/* Create Method 1 */
		public function setId($id) {
			$this->id = $id;
		}
		
		/* Create Destruct */
		public function __destruct() {
			if (!empty($this->id)) {
				echo "Saving Person";
			}
		}
		
	}
	
	/* Create instance / object */
	$personOne = new Person("AB Naeem", "19");
	$personOne->setId(12);
	unset($personOne);
	
	

	
 ?>



<?php include 'styles/footer.php' ?>