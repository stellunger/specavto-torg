<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function index()
	{
		$data['page_title'] = 'Спецтехника | Спецавто-торг.рф';

		$this->load->view('header', $data);
		$this->load->view('main_page');
		$this->load->view('footer');
	}

	public function show_page($category_id, $product_id)
	{
		$data['page_title'] = 'Спецтехника | Спецавто-торг.рф';

		$data['contact_us'] = $this->load->view('contact_us', '', true);

		$this->load->view('header', $data);

		if ($product_id != "")
		{
			$this->load->view($category_id.'/'.$product_id, $data);
		}
		else
		{
			$this->load->view($category_id.'/main_page', $data);
		}

		$this->load->view('footer');
	}
}
