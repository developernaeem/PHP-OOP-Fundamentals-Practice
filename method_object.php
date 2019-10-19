<?php 
	include 'styles/header.php'; 
	include 'function.php';
?>

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
	

<form action="" method="post">
	<table>
		<tr>
			<td>Enter the first number</td>
			<td><input type="number" name="num1"></td>
		</tr>
		<tr>
			<td>Enter the second number</td>
			<td><input type="number" name="num2"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="calculation" value="calculate"></td>
		</tr>
	</table>
</form>

<?php 
	if (isset($_POST['calculation'])) {
		$numOne = $_POST['num1'];
		$numTow = $_POST['num2'];

		if (empty($numOne) or empty($numTow)) {
			echo "<span style='color: red;'>Field must not be empty</span><br>";
		}else{
			echo "First Number is: ".$numOne." Second Number: ".$numTow."<br>";

			/* instance / object Create */
			$cal = new Calculation;
			$cal->add($numOne, $numTow);
			$cal->sub($numOne, $numTow);
			$cal->mul($numOne, $numTow);
			$cal->div($numOne, $numTow);
		}
	}
?>




<?php include 'styles/footer.php' ?>