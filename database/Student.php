<?php 
	/* Database.php include Student.php */
	include 'Main.php';
	
	class Student extends Main {
		protected $table = 'tbl_student';

		/* Seter Create */
		private $name;
		private $dept;
		private $age;
		
		/* Name Seter Create */
		public function setName($name) {
			$this->name = $name;
		}
		
		/* Department Seter Create */
		public function setDept($dept) {
			$this->dept = $dept;
		}
		
		/* Age Seter Create */
		public function setAge($age) {
			$this->age = $age;
		}

		/* Insert Data to Database */
		public function insert() {
			$sql = "INSERT INTO $this->table(name, dept, age) VALUES (:name, :dept, :age)";
			$stmt = Database::prepare($sql);
			$stmt->bindParam(':name', $this->name);
			$stmt->bindParam(':dept', $this->dept);
			$stmt->bindParam(':age', $this->age);
			return $stmt->execute();
		}

		/* Updated Data to Database */
		public function update($id) {
			$sql = "UPDATE $this->table SET name=:name, dept=:dept, age=:age WHERE id=:id";
			$stmt = Database::prepare($sql);
			$stmt->bindParam(':name', $this->name);
			$stmt->bindParam(':dept', $this->dept);
			$stmt->bindParam(':age', $this->age);
			$stmt->bindParam(':id', $id);
			return $stmt->execute();
		}


		
	}
 ?>