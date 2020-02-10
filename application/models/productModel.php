<?php 

class productModel extends CI_Model{ 
	function __construct() {  
		parent::__construct();
	} 

	public function register_product($get_data){      
         $this->db->insert('product', $data);
		// $this->load->view("pages/test", $get_data);

	}

	public function getProducts(){
		$this->db->select('*');
		$this->db->from('product');
		$query=$this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}

	}

}

?>