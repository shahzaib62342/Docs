<?php

class Documentation extends MY_Controller {
	//Array variable
	public $data = array();

	public function __construct() {
		parent::__construct();
		$this->init();
	}

	public function init() {
		//Loading model
		$this->load->model('Module');
		$this->load->model('Content');
		$this->load->model('Search');
		$this->load->model('HelpBot');
	}

	public function index($slug = null) {
		//get all modules
		$this->data['modules'] = $this->getModules();
		//get content of current module
		$this->data['content'] = $this->Content->getContentByModuleSlug($slug);

		
		//search textbox name is 'keyword';
		$keyword = $this->input->get('keyword');
		
		if($keyword) {
			$this->data['content'] = $this->Search->searchbycontent($keyword);
		}
		$this->load->view('Documentation', $this->data);

		//insert HelpBot
		if ($this->input->post()) { 
			$data = array(
				'name'=>$this->input->post('fullname'),
	        	'email'=>$this->input->post('mail'),
	        	'message'=>$this->input->post('msg')
	        );

		    $this->HelpBot->addhelp($data);
		    sleep(2);

		    redirect('Documentation/successfull');

		}
	}

	private function getModules() {
		$finalModules = array();

		//model function
		$module = $this->Module->allmodule();
		$parentModules = $this->getParentModules($module);

		$i = 0;
		foreach($parentModules as $item) 
		{
			$finalModules[$i] = $item;
			$finalModules[$i]->children = $this->Module->getchilds($item->id);
			$i++;
		}

		return $finalModules;
	}

	private function getParentModules($modules) {
		$finalModules = array();
		foreach($modules as $key) {
			if($key->parent_id == 0) {
				array_push($finalModules, $key);
			}
		}
		return $finalModules;
	}

	public function successfull()
	{
		$this->load->view('successfull_message');
	}

		
}