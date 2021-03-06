<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_update extends CI_Controller {

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
        $this->load->model('');
    }
    public function index(){
        $data = $this->model_paket->();
        $this->session->set_userdata('',$data);
        $this->load->view->('view/updatepaket',$data);
    }
    public function update(){
        $data['tanggaldatang'] = $this->input->post('tanggaldatang');
	    $data['penghuni'] = $this->input->post('penghuni');
	    $data['karyawan'] = $this->input->post('karyawan');
        $data['isi'] = $this->input->post('isi');
        $data['tanggalambil'] = $this->input->post('tanggalambil');

	   $this->load->view('view/listpaket',$data);
    }
}
