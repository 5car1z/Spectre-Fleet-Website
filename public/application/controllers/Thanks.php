<?php

class Thanks extends CI_Controller
{
	public function view($page = "index")
	{
		if ( ! file_exists(APPPATH.'/views/thanks/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('thanks/'.$page, $data);
        $this->load->view('templates/footer', $data);
	}
}