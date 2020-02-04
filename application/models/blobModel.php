<?php 

class blobModel extends CI_Model{ 
    function __construct() {  
        parent::__construct();
    } 
    
    protected $PDO;
    public function register_product($filePath,$mime){  
        $blob = fopen($filePath,$mime);

        $data = array(
            'mime' => 'application/pdf',
            'data'  => $blob
        );

        // $sql = "INSERT INTO files(mime,data) VALUES('',:$blob)";
        // $this->db->set($data)->get_compiled_insert('files');
        // $stmt = $this->PDO->prepare($sql);
        // $stmt->bindParam(':mime', $mime);
        // $stmt->bindParam(':data', $blob, PDO::PARAM_LOB);
        // echo $insert = "insert into products(product_name, product_brand, product_desc, product_inst, product_img) values ('$product_name', '$product_brand', '$product_desc', '$product_inst','$product_img')";
 
        // return $stmt->execute();
        
    }
}

?>