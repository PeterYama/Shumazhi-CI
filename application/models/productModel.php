<?php 

class productModel extends CI_Model{ 
    function __construct() {  
        parent::__construct();
    } 
    
    public function register_product($data){      
         $this->db->insert('products', $data);
        
    }
}

?>