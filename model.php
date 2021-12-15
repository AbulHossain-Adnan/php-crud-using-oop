<?php 

class model{

	private $server_name = "localhost";
	private $db_name = "oop_crud";
	private $user_name = "root";
	private $password = '';
	private $conn;


	public function __construct(){

		$this->conn = new mysqli($this->server_name,$this->user_name,$this->password,$this->db_name);

		if($this->conn->connect_error){
			echo "connect failed";
		}
		else{
			$this->conn;
		}



	}// constract close

	public function insertdate($post){

		$name= $_POST['name'];
		$roll= $_POST['roll'];
		$age= $_POST['age'];
		$sql= "INSERT INTO student(name,roll,age)VALUES('$name','$roll','$age')"; 
		$result=$this->conn->query($sql);
		if($result){

			header('location:index.php?msg=ins');

		}
		else{
			echo "error".$sql."<br>".$this->conn->error;
		}


			
		}
	
}// class close



?>