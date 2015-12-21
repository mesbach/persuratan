<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//agenda
class Coord extends Koordinator_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('guest/model_tamu');
    }
    public function index() {
        $this->title="Daftar Tamu";
        $this->script_header_spesific = 'lay-scripts/header_bukutamu';
        $this->script_footer_spesific = 'lay-scripts/footer_bukutamu';
        $data['tamu'] = $this->model_tamu->gettamu2();
        $this->display('listtamu',$data);
    }
    
    public function submitguest(){

        $data['nama'] = $this->input->post('namatamu');
        $data['telp'] = $this->input->post('nohptamu');
        $data['asal'] = $this->input->post('instansitamu');
        $data['keterangan'] = $this->input->post('keterangantamu');
        $data['disposisi'] = $this->input->post('disposisitamu');
        $data['hasil'] = $this->input->post('hasilpertemuan');
        $data['file'] = $this->do_upload($this->input->post('namatamu'));
        $data['foto'] = $this->do_upload_photo($this->input->post('namatamu'));
        $jam = date("Y-m-d H:i:00", strtotime($this->input->post('waktukunjungan')));
        $data['waktu'] = $jam;
        
        if($this->input->post('forpublic')=='yes')
        {$data['publik'] = 1;}
        else {$data['publik'] = 0;}
        
        $this->db->insert("tamu",$data);
        redirect('guest/coord/');
    }
    
    public function detailtamu($tes) {
        $id = $tes;
        $this->title="Detail Tamu";
        $this->script_header_spesific = 'lay-scripts/header_bukutamu';
        $this->script_footer_spesific = 'lay-scripts/footer_bukutamu';
        $data['detil'] = $this->model_tamu->gettamudetail($id);
        $this->display('detailTamu',$data);
    }
    
    public function edit($id) {
        $this->title="Ubah Data Tamu";
        $this->script_header_spesific = 'lay-scripts/header_bukutamu';
        $this->script_footer_spesific = 'lay-scripts/footer_bukutamu';
        $data['detil'] = $this->model_tamu->gettamudetail($id);
        $this->display('ubahtamu',$data);
    }
    
    public function submitedit($id) {
        $data['nama'] = $this->input->post('namatamu');
        $data['telp'] = $this->input->post('nohptamu');
        $data['asal'] = $this->input->post('instansitamu');
        $data['keterangan'] = $this->input->post('keterangantamu');
        $data['disposisi'] = $this->input->post('disposisitamu');
        $data['hasil'] = $this->input->post('hasilpertemuan');
        $data['file'] = $this->do_upload($this->input->post('namatamu'));
        $data['foto'] = $this->do_upload_photo($this->input->post('namatamu'));
        $jam = date("Y-m-d H:i:00", strtotime($this->input->post('waktukunjungan')));
        $data['waktu'] = $jam;
        
        if($this->input->post('forpublic')=='yes')
        {$data['publik'] = 1;}
        else {$data['publik'] = 0;}
        
        $this->model_tamu->update($id,$data);
        redirect('guest/coord/detailtamu/'.$id);
    }
    
    function changeverify($flag,$id){
        if($flag==2)
        { 
            $wkt = date('Y-m-d H:i:s',time());
            $this->model_tamu->updateverify2($id,$flag,$wkt); 
        }
        else { $this->model_tamu->updateverify($id,$flag); }
        redirect('guest/coord');
    }
    
    //sama dengan atas, tapi redirect ke detil tamu
    function changeverify2($flag,$id){
        if($flag==2)
        { 
            $wkt = date('Y-m-d H:i:s',time());
            $this->model_tamu->updateverify2($id,$flag,$wkt); 
        }
        else { $this->model_tamu->updateverify($id,$flag); }
        redirect('guest/coord/detailtamu/'.$id);
    }
    
    function do_upload($nama)
    {
        $config['upload_path'] = 'uploads/tamulampiran/';
        $config['allowed_types'] = 'pdf|zip|rar|doc|docx';
        $config['max_size'] = '5000';
        $config['encrypt_name'] = false;
        $new_name = time().'_'.$nama;//$_FILES["lampiran"]['name'];
        $config['file_name'] = $new_name;
        $this->load->library('upload', $config);
//        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload("lampiran"))
        {
            $error = array('error' => $this->upload->display_errors());
//            print_r($error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
//            print_r($data);   
            return $data['upload_data']['file_name'];
        }
        return $new_name;
    }
    
    function do_upload_photo($nama)
    {
        $config2['upload_path'] = 'uploads/tamufoto/';
        $config2['allowed_types'] = 'jpg|jpeg|png';
        $config2['max_size'] = '15000';
        $config2['encrypt_name'] = false;
        $new_name = time().'_'.$nama;//$_FILES["fototamu"]['name'];
        $config2['file_name'] = $new_name;
        $this->load->library('upload', $config2);
        $this->upload->initialize($config2);

        if ( ! $this->upload->do_upload("fototamu"))
        {
            $error = array('error' => $this->upload->display_errors());
//            print_r($error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
//            print_r($data);   
            return $data['upload_data']['file_name'];
        }
        return $new_name;
    }
}