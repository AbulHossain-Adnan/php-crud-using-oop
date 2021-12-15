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
			echo "connected";
		}

	}// constract close
	
}// class close

$obj = new model();


?>