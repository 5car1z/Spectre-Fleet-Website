<?php

class Users_model extends CI_Model
{
	public var $tableName = 'Users';
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get($slug = NULL, $limit = NULL, $offset = NULL)
	{
				//SELECT 
		$this->db->select('ID, Username, DisplayName, EmailAddress, TSUID, GroupMembership');
		
		if($slug !== NULL)
		{
				//WHERE ID = $slug OR Username = $slug
			$this->db->where('ID =', $slug);
			$this->db->or_where('Username =', $slug);
			
			//This is a query for a single user, explicitly limit it.
			$limit = 1;
			$offset = 0;
		}
		
				//FROM Users LIMIT ($limit||10) OFFSET ($offset||0)
		$query = $this->db->get($this->tableName, ($limit?:10), ($offset?:0));
		
		return $query->result_array();
	}
	
	public function create($password)
	{
		//URL helper to cleanup the displayname/slug
		$this->load->helper('url');
		//Load UserGroups Model, so we can get the "Member" group ID
		$this->load->model('UserGroups_model');
		//Load Status Model, so we can get the "pending" group ID
		$this->load->model('Status_model');
		
		
		//Strip spaces/specials replacings spaces with - and set to lowercase
		//i.e. Ibn Khatab becomes ibn-khatab
		$slug = url_title($this->input->post('username'), 'dash', TRUE);
		
		$data = array(
			'Username' => $this->input->post('username'),
			'DisplayName' => $slug,
			'Password' => $password,
			'EmailAddress' => $this->input-post('email'),
			//Default user group
			'GroupMembership' => $this->UserGroups_model->get('Member'),
			//User is pending email verification
			'Status' => $this->Status_model->get('pending'),
			'Notes' => 'VERIFICATION_CODE=' . 
		);
		
		//Insert to database
		return $this->db->insert('Users', $data);
	}
	
}

?>