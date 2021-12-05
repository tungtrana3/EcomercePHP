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
	public function addType($name, $img, $info)
	{	
		$this->db->conn->real_escape_string($name);
		$sql = "NSERT INTO `product_type` 
		(`id`, `typeName`, `createAt`, `deleteAt`, `status`, `infor`, `img`)
		 VALUES (current_timestamp(), '$name', current_timestamp(), NULL, '1', '$info','$img')";
		$this->db->conn->query($sql);
	}

	public function getType($categoryId)
	{
		$sql = "SELECT * FROM categories WHERE id = $categoryId";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_array();

		return $data;
	}
}