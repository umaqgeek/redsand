<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class InsertBatch extends CI_Controller {
    function index() {
        $this->load->view('masukdata');
    }
    public function insertProcess()
    {
    	$data = array_shift($this->input->post());
    	$arrData = explode("|", $data);
    	print_r($arrData);
    	//BIL.,GELARAN,NAMA PENUH,ALAMAT KEDIAMAN,ALAMAT SURAT MENYURAT,ic,JANTINA,BANGSA,TARIKH LAHIR,PEKERJAAN,TARIKH MENJADI ANGGOTA,TARIKH TERHENTI ANGGOTA,JUMLAH MODAL SYER,JUMLAH MODAL YURAN,EMAIL
    	//

    }
}
        
?>