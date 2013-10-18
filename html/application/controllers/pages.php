<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function index()
	{
		$data['page_title'] = 'Спецтехника | Спецавто-торг.рф';

		$this->load->view('header', $data);
		$this->load->view('main_page');
		$this->load->view('footer');
	}

	public function show_page($page_id)
	{
		$data['page_title'] = 'Спецтехника | Спецавто-торг.рф';

		$this->load->view($page_id, $data);
	}
}
