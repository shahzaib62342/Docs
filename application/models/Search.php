<?php

class Search extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function searchbycontent($keyword)
	{
		$sql="SELECT * FROM doc_module, doc_content WHERE doc_module.id = doc_content.module_id AND doc_content.text LIKE '%".$keyword."%'";
		
		//var_dump($sql);
		$query = $this->db->query($sql);
		return $query->first_row();	
	}
}