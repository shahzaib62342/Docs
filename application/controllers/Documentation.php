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
	}

	public function index($slug = null) {
		//get all modules
		$this->data['modules'] = $this->getModules();
		//get content of current module
		$this->data['content'] = $this->Content->getContentByModuleSlug($slug);

		$this->load->view('Documentation', $this->data);
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
}