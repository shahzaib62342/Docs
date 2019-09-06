<?php 

/**
 * 
 */
class Content extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	public function getcontent() {
		$query=$this->db->select('*')
				 ->from('doc_content')
				 ->get();

		return $query->result();
	}


	public function getContentByModuleSlug($slug) {
		$sql = "SELECT 
					* 
				FROM 
					doc_content C, doc_module m 
				WHERE 
					c.module_id = m.id 
				AND 
					m.slug = '$slug'";
		$result = $this->db->query($sql);
		if($result->num_rows() > 0) {
			return $result->first_row();
		}
		return false;
	}
}



?>