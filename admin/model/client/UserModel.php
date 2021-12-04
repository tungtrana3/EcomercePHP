<?php

class UserModel extends Database{
	protected $db;

    // connect db
	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}
	public function login($username, $password)
	{
		$sql = "SELECT * FROM account WHERE email = '$username' AND password = '$password'";
		$result = $this->db->conn->query($sql);
		
		return $result;
	}
	public function signup($username, $password, $fullName)
	{	
		$sql = "INSERT INTO account (email, password, full_name)
							VALUES ('$username', '$password', '$fullName')";
		$this->db->conn->query($sql);
	}

	public function checkExists($username) {
		$sql = "SELECT * FROM account WHERE username = '$username'";
		$result = $this->db->conn->query($sql);
		
		return $result;
	}
}