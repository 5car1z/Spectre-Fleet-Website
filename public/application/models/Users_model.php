<?php

class Users_model extends CI_Model
{
	public $tableName = 'Users';
	
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
		$query = $this->db->get($this->tableName, ($limit?:$this->config->item('UserListDefaultLength')), ($offset?:0));
		
		return $query->result_array();
	}
	
	public function auth($username, $password)
	{
		$this->db->select('ID, Username, DisplayName, EmailAddress, TSUID, GroupMembership');
		
		$this->db->where('Password', $password);
		
		$this->db->where('Username', $username);
		$this->db->or_where('EmailAddress', $username);
		
		//SELECT ID, Username, DisplayName, EmailAddress, TSUID, GroupMembership FROM Users WHERE Password = $password
		//	AND Username = $username OR EmailAddress = $username
		
		return $this->db->get($this->tableName)->result_array();
	}
	
	public function create($password)
	{
		//URL helper to cleanup the displayname/slug
		$this->load->helper('url');
		//GUID Helper to generate GUID
		$this->load->library('GUID');
		//Load UserGroups Model, so we can get the "Member" group ID
		$this->load->model('Usergroups_model');
		//Load Status Model, so we can get the "pending" group ID
		$this->load->model('Status_model');
		
		
		//Strip spaces/specials replacings spaces with - and set to lowercase
		//i.e. Ibn Khatab becomes ibn-khatab
		$slug = url_title($this->input->post('username'), 'dash', TRUE);
		
		$data = array(
			'Username' => $this->input->post('username'),
			'DisplayName' => $this->input->post('character'),
			'Password' => $password,
			'EmailAddress' => $this->input->post('email'),
			//Default user group
			'GroupMembership' => $this->Usergroups_model->get('Member')[0]['ID'],
			//User is pending email verification
			'StatusID' => $this->Status_model->get('pending')[0]['ID'],
			'Notes' => 'VERIFICATION_CODE=' . $this->guid->NewGUID()
		);
		
		//Insert to database
		return $this->db->insert('Users', $data);
	}
	
	public function delete($id)
	{
		//Load Status Model, so we can get the "deleted" group ID
		$this->load->model('Status_model');
		
		//Set the new status ID to "DELETED"
		$this->db->set('StatusID', $this->Status_model->get('deleted'));
		$this->db->where('ID', $id);
		//Only permit 1 record to be 'deleted' in this query
		$this->db->limit(1);
		$this->db->update($this->tableName);
	}
	
}

?>