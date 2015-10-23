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
		$data['user'] = $this->users_model->get();
		
		$this->load->view('templates/header');
		$this->load->view('users/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function view($slug = NULL)
	{
		$data['user'] = $this->users_model->get($slug);
	}
}