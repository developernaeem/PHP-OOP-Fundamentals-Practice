<?php include 'styles/header.php' ?>

<!-- Header Area -->
<section class="header_area">
	<h2><?php echo "PHP OOP Fundamentals"; ?></h2>
</section>
<!-- Main Content Area -->
<section class="main_content">
	<hr>
	Class, Property, Method and Object
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
		
		/* Create Method 1 */
		public function personName() {
			echo "Person Name is: ".$this->name."<br>";
		}
		
		/* Create Method 2 */
		public function personAge($value) {
			echo "Person Age is: ".$this->age=$value;
		}
	}
	
	/* Create instance / object */
	$personOne = new Person;
	/* "->" is mostly used to access instance / object members and its official name is "object operator" */
	$personOne->name="Naeem Islam";
	$personOne->personName();

	$personOne->personAge("19");

	
 ?>


<?php include 'styles/footer.php' ?>