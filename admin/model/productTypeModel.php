<?php

class productTypeModel extends Database{
	protected $db;

    // connect db
	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}
	public function getList($limit, $page)
	{
        $sql = "SELECT * FROM product_type ";
		$result = $this->db->conn->query($sql);
		return $result;
	}
	public function addCategory($name, $slug)
	{	
		$this->db->conn->real_escape_string($name);
		$sql = "INSERT INTO product_type (name, slug)
							VALUES ('$name', '$slug')";
		$this->db->conn->query($sql);
	}

	public function getCategory($categoryId)
	{
		$sql = "SELECT * FROM categories WHERE id = $categoryId";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_array();

		return $data;
	}
}