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

        $this->form_validation->set_rules('ProductName', 'Product Name','required');
        $this->form_validation->set_rules('Company', 'Company','required');
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
    public function details($id=NULL){

        $data['title'] = "Details";
        $data['product'] = $this->product_model->get_product($id);

        $this->load->view('templates/header');
        $this->load->view('products/details', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id=NULL){
        $data['title']="Edit Product Information";
        $data['product']=$this->product_model->get_product($id);

        $this->load->view('templates/header');
        $this->load->view('products/edit',$data);
        $this->load->view('templates/footer');

    }

    public function update(){
        if($this->input->post('productID')===null){
            redirect('products');
        }
        $this->product_model->update_product();
        redirect('products');
    }

    public function delete($id=null){
        $data['title'] = "Delete";
        $data['message'] ="Are you sure you want to procede? <br>
                            There is no way to retrive this data.";
        $data['product']=$this->product_model->get_product($id);
        $this->load->view('templates/header');
        $this->load->view('products/delete',$data);
        $this->load->view('templates/footer');
    }
    public function delete_product(){
        if($this->input->post('productID')===NULL){
            redirect('products');
        }
        $this->product_model->delete_product();
        redirect('products');
    }

}

?>