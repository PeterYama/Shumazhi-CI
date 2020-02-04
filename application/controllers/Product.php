<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller 
{
	public function __construct()
	{
    parent::__construct();
 
    $this->load->model('productModel', 'register_p'); 
	
	}

	public function register()
	{
        if(isset($_POST['register'])){
       $data=array(
            
	'product_name' => $_POST['product_name'],
	'product_brand ' => $_POST['product_brand'],
    'product_desc ' => $_POST['product_description'],
	'product_inst ' => $_POST['product_instructions'],
	//'product_img' => $_POST['product_image'],
	//'product_img' => $_FILES['product_image']['img_name'],
	//ext = pathinfo($_FILES['product_img']['img_name'],PATHINFO_EXTENSION)
);
	//if($ext == 'gif'|| $ext =='png' ||$ext =='jpg' ||$ext=="jpeg" ||$ext == 'GIF'|| $ext =='PNG' ||$ext =='JPG' ||$ext=="JPEG" ){
		//move_uploaded_file($_FILES['img']['tmp_name'],"img/".$img);
        $insert = $this->register_p->register_product($data);
//		$insert = "insert into products(product_name, product_brand, product_desc, product_inst, product_img) values ('$product_name', '$product_brand', '$product_desc', '$product_inst','$product_img')";
//              
    }
				
}
    }

?>