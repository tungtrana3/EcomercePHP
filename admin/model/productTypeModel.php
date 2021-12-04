<?php

class productType extends Database{
	protected $db;

    // connect db
	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}
	public function getList($limit, $page)
	{
        $sql = "SELECT * FROM ProductType LIMIT '$limit' OFFSET '$page'";
		$result = $this->db->conn->query($sql);
		return $result;
	}
	public function signup($username, $password, $fullName)
	{	
		$sql = "INSERT INTO users (username, password, full_name)
							VALUES ('$username', '$password', '$fullName')";
		$this->db->conn->query($sql);
	}
}