<?php

	class Module extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		//Select Module /Content
		public function getModule($slug)
		{
			$sql="SELECT * 
				  FROM
				    doc_module d, doc_content c 
				  WHERE
				    d.id=c.module_id
				  AND 
				    d.slug=$slug";
				    
			$result = $this->db->query($sql);
			return $result->result();
		}

		public function allmodule()
		{
			$query= $this->db->select('*')
				->from('doc_module')
				->get();

			return $query->result();
		}



		public function getchilds($id)
		{
			$query = $this->db->select('*')
							->from('doc_module')
							->where('parent_id', $id)
							->get();
			return $query->result();
		}

	}















?>
