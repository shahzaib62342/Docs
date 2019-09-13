<?php 

class HelpBot extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}



	public function addhelp($data)
	{
		$this->db->insert("doc_helpbot",$data);
	}


}