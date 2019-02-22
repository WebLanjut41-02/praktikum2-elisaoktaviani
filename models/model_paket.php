<?php
defined('BASEPATH') OR exit('No direct script access allowed');

public class model_paket extends CI_Model{
    public function paketmasuk($tanggaldatang,$penghuni,$karyawan,$isi,$tanggalambil){
        $data = array(
            'tanggaldatang' => $tanggaldatang,
            'penghuni' => $penghuni,
            'karyawan' => $karyawan,
            'isi' => $isi,
            'tanggal_ambil' => $tanggalambil
        );
    }
    public function getpaket(){
        $this->db->from('postt');
        $query = this->db->get();

        return $query->result();
    }

}


?>