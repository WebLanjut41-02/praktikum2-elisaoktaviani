<?php
defined('BASEPATH') OR exit('No direct script access allowed');

public class model_penghuni extends CI_Model{
    public function paketmasuk($tanggaldatang,$penghuni,$karyawan,$isi,$tanggalambil){
        $data = array(
            'nama' => $nama,
            'unit' => $unit,
            'noktp' => $noktp
        );
    }
    public function getpaket(){
        $this->db->from('postt');
        $query = this->db->get();

        return $query->result();
    }

}


?>