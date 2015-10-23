<?php

class Status_model extends CI_Model
{
	public $tableName = 'Status';
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get($name = NULL)
	{
		if($name !== NULL)
		{
			$this->db->where('Name', $name);
		}

		return $this->db->get($this->tableName)->result_array();
	}
}