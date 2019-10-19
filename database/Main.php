<?php 
	/* Database.php include Student.php */
	include 'Database.php';

	abstract class Main {
		protected $table;

		abstract public function insert();
		abstract public function update($id);
		
		/* Select Data to Database */
		public function select() {
			$sql ="SELECT * FROM $this->table";
			$stmt = Database::prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
		
		/* Update Data To Database */
		public function readById($id) {
			$sql = "SELECT * FROM $this->table WHERE id=:id";
			$stmt = Database::prepare($sql);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			return $stmt->fetch();
		}

		/* Delete Data to Database */
		public function delete($id) {
			$sql = "DELETE FROM $this->table WHERE id=:id";
			$stmt = Database::prepare($sql);
			$stmt->bindParam(':id', $id);
			return $stmt->execute();
		}
	}
?>