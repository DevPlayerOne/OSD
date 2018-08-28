<?php
class Products extends CI_Controller{
    public function index (){
        $data['title'] = 'Latest Posts';
        
        $data['products'] = $this->product_model->get_products();
        
        //print_r($data['products']);
        
        
        $this->load->view('templates/header');
        $this->load->view('products/index', $data);
        $this->load->view('templates/footer');
    }
}

?>