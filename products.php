<?php
	class Products{
		public $db;
		function __construct($db) {
			$this->db = $db;
		}
		
		//Check if product exists
		function isExists($id){
			$q = $this->db->query("SELECT * FROM `product` WHERE `id` = ".esc($id));
			return $q->num_rows > 0;
		}
		
		//Delete product
		function del($id){
			$this->db->query("DELETE FROM `product` WHERE `id` = ".esc($id));
		}
		
		//Get products list
		function all(){
			$list = [];
			$q = $this->db->query("SELECT `id`, `name`, `description`, `price`, `picture` FROM `product`");
			while($r = $q->fetch_assoc()){
				$list[] = $r;
			}
			return $list;
		}
		
		//Create new product
		function create($name,$description,$price,$image){
			$this->db->query("INSERT INTO `product` (`name`,`description`,`price`,`picture`) VALUES ('".esc($name)."','".esc($description)."','".esc($price)."','".esc($image)."')");
		}
		
		//Update existing product
		function update($id,$name,$description,$price,$image){
			$this->db->query("UPDATE `product` SET `name` = '".esc($name)."', `description` = '".esc($description)."', `price` = '".esc($price)."', `picture` = '".esc($image)."' WHERE `id` = ".esc($id));
		}
	};