<?php

class User{
	private $db;
	public function __construct(){
		$this->db = new Database;
	}


	public function create($data){
			$this->db->query("INSERT INTO users (username, password)
			VALUES(:username,:password)");
			//Bind data
			$this ->db->bind(':username', $data['username']);
			$this->db->bind(':password',$data['password']);


			//Execute
			if($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

	public function getUsers(){
			$this -> db -> query("SELECT * FROM users");

			//Assign result set

			$results = $this-> db->resultSet();
			return $results;
	}


	public function validateCredentials($data){
		$this->db->query("SELECT * FROM users WHERE username = :username AND password = :password");
		$this->db->bind(':username',$data['username']);
		$this->db->bind(':password',$data['password']);
		$row = $this->db->single();
		return $row;
	}
}