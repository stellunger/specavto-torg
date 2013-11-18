<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function index()
	{
		$data['page_title'] = 'Автовышки, АГП, краны-манипуляторы, эвакуаторы | Поставка спецтехники | Спецавто-торг.рф';

		$this->load->view('header', $data);
		$this->load->view('main_page');
		$this->load->view('footer');
	}

	public function show_page($category_id, $product_id)
	{
		if ($product_id != '')
		{
			switch ($product_id)
			{
				case 'gaz-33098-t319-19-22-m':
					$data['page_title'] = 'Автовышка ГАЗ-33098 от 19 до 22 м';
					break;

				case 'agp-hyundai-78-19-22-m':
					$data['page_title'] = 'Автовышка HYUNDAI-78 от 19 до 22 м';
					break;								

				case 'gaz-33106-15-20-m':
					$data['page_title'] = 'Автовышка ГАЗ-33106 от 15 до 20 м';
					break;

				case 'gaz-3302-15-20-m':
					$data['page_title'] = 'Автовышка ГАЗ-3302 от 15 до 20 м';
					break;

				case 'gaz-33098-15-20-m':
					$data['page_title'] = 'Автовышка ГАЗ-33098 от 15 до 20 м';
					break;

				case 'isuzu-npr75l-15-20-m':
					$data['page_title'] = 'Автовышка ISUZU NPR75L от 15 до 20 м';
					break;

				case 'kamaz-4308-15-20-m':
					$data['page_title'] = 'Автовышка КАМАЗ-4308 от 15 до 20 м';
					break;

				case 'kamaz-4326-15-20-m':
					$data['page_title'] = 'Автовышка КАМАЗ-4326 от 15 до 20 м';
					break;

				case 'ural-4320-15-20-m':
					$data['page_title'] = 'Автовышка УРАЛ-4320 от 15 до 20 м';
					break;

				case 'hyundai-78-15-20-m':
					$data['page_title'] = 'Автовышка HYUNDAI HD-78 от 15 до 20 м';
					break;

				case 'isuzu-npr75l-20-28-m':
					$data['page_title'] = 'Автовышка ISUZU NPR75L от 20 до 28 м';
					break;

				case 'gaz-203107-14-m':
					$data['page_title'] = 'Автовышка ГАЗ-203107 14 м';
					break;

				case 'gaz-33106-20-28-m':
					$data['page_title'] = 'Автовышка ГАЗ-33106 от 20 до 28 м';
					break;

				case 'gaz-33098-20-28-m':
					$data['page_title'] = 'Автовышка ГАЗ-33098 от 20 до 28 м';
					break;

				case 'kamaz-4308-20-28-m':
					$data['page_title'] = 'Автовышка КАМАЗ-4308 от 20 до 28 м';
					break;

				case 'kamaz-4326-20-28-m':
					$data['page_title'] = 'Автовышка КАМАЗ-4326 от 20 до 28 м';
					break;

				case 'kamaz-4326-15-32-m':
					$data['page_title'] = 'Автовышка КАМАЗ-4326 от 15 до 32 м';
					break;

				case 'ural-4320-28-m':
					$data['page_title'] = 'Автовышка УРАЛ-4320 28 м';
					break;

				case 'hyundai-78-20-28-m':
					$data['page_title'] = 'Автовышка HYUNDAI-78 от 20 до 28 м';
					break;

				case 'hyundai-120-20-28-m':
					$data['page_title'] = 'Автовышка HYUNDAI-120 от 20 до 28 м';
					break;

				case 'gaz-33106-900-kg':
					$data['page_title'] = 'Кран-манипулятор ГАЗ-33106 от 450 до 900 кг';
					break;

				case 'gaz-33098-900-kg':
					$data['page_title'] = 'Кран-манипулятор ГАЗ-33098 от 450 до 900 кг';
					break;

				case 'gaz-33088-900-kg':
					$data['page_title'] = 'Кран-манипулятор ГАЗ-33088 от 450 до 900 кг';
					break;

				case 'kamaz-43118-1400-kg':
					$data['page_title'] = 'Кран-манипулятор КАМАЗ-43118 от 970 до 1400 кг';
					break;

				case 'isuzu-nlr85a-330-kg':
					$data['page_title'] = 'Кран-манипулятор ISUZU NLR85A до 330 кг';
					break;

				case 'isuzu-npr75l-900-kg':
					$data['page_title'] = 'Кран-манипулятор ISUZU NPR75L до 900 кг';
					break;

				case 'isuzu-cyz51q-1830-kg':
					$data['page_title'] = 'Кран-манипулятор ISUZU CYZ51Q до 1830кг';
					break;

				case 'hyundai-78-620-kg':
					$data['page_title'] = 'Кран-манипулятор HYUNDAI 78 до 620 кг';
					break;

				case 'hyundai-120-800-kg':
					$data['page_title'] = 'Кран-манипулятор HYUNDAI 120 до 800 кг';
					break;

				case 'hyundai-170-1180-kg':
					$data['page_title'] = 'Кран-манипулятор HYUNDAI 170 до 1180 кг';
					break;

				case 'hyundai-78':
					$data['page_title'] = 'Эвакуатор HYUNDAI-78 до 3250 кг';
					break;

				case 'isuzu-npr75l':
					$data['page_title'] = 'Эвакуатор ISUZU NPR75L до 3540 кг';
					break;

				case 'gaz-33106':
					$data['page_title'] = 'Эвакуатор ГАЗ 33106 Валдай до 3000 кг';
					break;

				case 'kamaz-4308':
					$data['page_title'] = 'Эвакуатор КАМАЗ 4308 до 4950 кг';
					break;

				default:
					$data['page_title'] = '';
					break;
			}
		}
		else
		{
			switch ($category_id)
			{
				case 'avtovyshki':
					$data['page_title'] = 'Автовышки, автогидроподъемники, АГП';
					break;

				case 'kmu':
					$data['page_title'] = 'Краны-манипуляторы, КМУ';
					break;

				case 'evakuatory':
					$data['page_title'] = 'Эвакуаторы';
					break;

				case 'contacts':
					$data['page_title'] = 'Связаться с нами';
					break;

				default:
					$data['page_title'] = '';
					break;
			}
		}


		$data['page_title'] .= ' | Спецавто-торг.рф';

		$data['contact_us'] = $this->load->view('contact_us', '', true);

		$this->load->view('header', $data);

		if ($product_id != '')
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
