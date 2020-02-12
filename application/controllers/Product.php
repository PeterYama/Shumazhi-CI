<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('productModel', 'register_p');
		// $this->load->library('curl');
		// $this->load->library('cURL');
	}

	public function viewProducts()
	{
		$data['products']=$this->register_p->getProducts();		
		$this->load->view("pages/product", $data);
	}

	public function register()
	{
		
		$target_dir = "application/resources/product_img/";
		$target_file = $target_dir . time().basename($_FILES["product_image"]["name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$imgName = time().basename($_FILES["product_image"]["name"]);
		move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);

		//file upload
		$target_dir1 = "application/resources/product_instructions/";
		$target_file1 = $target_dir1 . time().basename($_FILES["product_instructions"]["name"]);
		$instFileType = pathinfo($target_file1,PATHINFO_EXTENSION);
		$instName = time().basename($_FILES["product_instructions"]["name"]);
		move_uploaded_file($_FILES["product_instructions"]["tmp_name"], $target_file1);

		if(isset($_POST['register'])){
			$this->form_validation->set_rules('product_name', 'Product Name', 'required');
			$this->form_validation->set_rules('product_brand', 'Product Brand', 'required');
			$this->form_validation->set_rules('product_description', 'Product Details', 'required');
			$this->form_validation->set_rules('product_instructions', 'Product Instructions');
			$this->form_validation->set_rules('product_image', 'Image File');

     		//if form validation true
			if ($this->form_validation->run() == TRUE) {
				$data=array(
					'product_name' => $_POST['product_name'],
					'product_description ' => $_POST['product_description'],
					'product_instructions ' => $instName,
					'brand_name ' => $_POST['product_brand'],
					'product_image' =>  $imgName 
				);

				$insert = $this->register_p->register_product($data); 
			// $result = $this->curl->simple_get('GET', 'https://api.example.com/get_url/'.$data['product_name']['brand_name'], false);
			// $get_data= $this->curl-> callAPI('GET', 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data='.$data['product_name'], false);
			// //var_dump($result);

			// echo $get_data ?? "waiting";
			// // $get_data == NULL ? echo "waiting"; : echo $get_data; 
			// echo ($get_data=='')?$redText:'';
			// $response = json_decode($get_data, true);
			// $errors = $response['response']['errors'];
			// $data = $response['response']['data'][0]; 
			// $this->load->view("pages/test", $get_data);
				$this->session->set_flashdata('msg', 'Product added!'); 
				redirect(base_url() . 'product'); 
			}else{ 
				$this->session->set_flashdata('errors', validation_errors());
				redirect(base_url() . 'product_registration');           
			}

			
		}
	}
}
