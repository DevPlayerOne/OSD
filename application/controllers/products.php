<?php
class Products extends CI_Controller{
    public function index (){
        $data['title'] = 'Latest Posts';
        $data['products'] = $this->product_model->get_products();


        $this->load->view('templates/header');
        $this->load->view('products/index', $data);
        $this->load->view('templates/footer');

    }
    public function add(){
        $data['title'] = 'Add Products';
        $data['companies'] = $this->product_model->get_all_company();
        print_r($data['companies']);

        $this->form_validation->set_rules('ProductName', 'Product Name','required');
        $this->form_validation->set_rules('Company', 'Company','required');
        $this->form_validation->set_rules('ExpirationDate', 'Expiration Date','required');
        $this->form_validation->set_rules('BoughtPrice', 'Bought Price','required');
        $this->form_validation->set_rules('SellPrice', 'Sell Price','required');
        
        
        if($this->form_validation->run()===false){
        $this->load->view('templates/header');
        $this->load->view('products/add', $data);
        $this->load->view('templates/footer');
        }else{
        //try to insert to database
        //if successful output snackbar
            $this->product_model->add_product();
            redirect('products');
        }
    }

}

?>