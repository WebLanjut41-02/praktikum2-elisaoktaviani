<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ppenghuni extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_penghuni');
    }
    public function index(){
        $data = $this->model_paket->create_penghuni();
        $this->session->set_userdata('create_penghuni',$data);
        $this->load->view->('view/create_penghuni',$data);
    }
    public function inputpenghuni(){
        $data['nama'] = $this->input->post('nama');
	    $data['unit'] = $this->input->post('unit');
	    $data['noktp'] = $this->input->post('noktp');
        

	   $this->load->view('view/list_paket',$data);
    }
}
