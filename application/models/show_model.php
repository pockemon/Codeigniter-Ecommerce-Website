<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_model extends CI_Model {

	function show_data()
	{
		$this->load->database();
    $query = $this->db->get("products");
		return $query;
	}

  function show_data_color($answer)
	{
		$this->load->database();
		//echo ($answer);
    $query1 =$this->db->query("SELECT * FROM products WHERE color = '$answer' ");
		//print_r($query1);
		return $query1;
	}

	function show_data_size($answer)
	{
		$this->load->database();
		//echo ($answer);
    $query1 =$this->db->query("SELECT * FROM products WHERE size = '$answer' ");
		//print_r($query1);
		return $query1;
	}

	function show_data_category($answer)
	{
		$this->load->database();
		//echo ($answer);
    $query1 =$this->db->query("SELECT * FROM products WHERE category = '$answer' ");
		//print_r($query1);
		return $query1;
	}

	function show_data_price($answer)
	{
		$this->load->database();
		//echo ($answer);
    $query1 =$this->db->query("SELECT * FROM products WHERE price = '$answer' ");
		//print_r($query1);
		return $query1;
	}

}
?>
