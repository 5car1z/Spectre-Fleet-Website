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
		$this->load->helper('url');
		
		$status = $this->Users_model->create($this->HashPassword($this->input->post('password'), $this->input->post('username')));
		if($status)
		{
			redirect('/thankyou/registration');
		}
		else
		{
			$_SESSION['registrationFailed'] = TRUE;
			redirect('/register/');
		}
	}
	
	
	public function HashPassword($password, $username)
	{
		return sha1($this->config->item('User_PasswordSalt') . $password . $username);
	}
}