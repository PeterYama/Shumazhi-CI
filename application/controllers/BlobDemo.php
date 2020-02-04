<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlobDemo extends CI_Controller 
{
	public function __construct()
	{
    parent::__construct();
 
    $this->load->model('blobModel', 'register_p'); 
	
	}

public function register()
	{
       if (isset($_POST['register'])){
        // $data=array(
        // 'product_instructions ' => $_POST['product_instructions'],
        // );
        $this->register_p->register_product('C:\Users\yamam\Downloads\AETA pricelist.pdf','rb');
        }
    }
}
