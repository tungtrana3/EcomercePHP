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
        echo("<script>console.log('PHP1: addType " . $name . "');</script>");
		$sql = "INSERT INTO product_type
		(`id`, `typeName`, `createAt`, `deleteAt`, `status`, `infor`, `img`)
		 VALUES (current_timestamp(), '$name', current_timestamp(), NULL, '1', '$info','$img')";
		 $result = $this->db->conn->query($sql);
		return $result;
	}

	public function getType($categoryId)
	{
		$sql = "SELECT * FROM categories WHERE id = $categoryId";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_array();

		return $data;
	}
}