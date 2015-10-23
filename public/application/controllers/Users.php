<?php

class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
	}
	
	public function index()
	{
		$this->load->helper('url');
		$data['user'] = $this->Users_model->get();
		
		$this->load->view('templates/header');
		$this->load->view('users/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function view($slug = NULL)
	{
		$data['user'] = $this->Users_model->get($slug);
	}
	
	public function create()
	{
		$this->load->helper('form');
		
		$status = $this->Users_model->create($this->HashPassword($this->input-post('password')));
		
		var_dump($status);
	}
	
	
	public function HashPassword($password, $username)
	{
		return sha1($this->config->item('User_PasswordSalt') . $password . $username);
	}
}