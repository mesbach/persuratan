<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//inbox
class Operator extends Operator_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('mail/model_mail');
    }
    
    //inbox
    public function index() {
        $this->display('inbox');
    }
    
    //inbox
    public function inbox() {
        $this->title="Surat Masuk";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMailOp';
        $this->display('inbox');
    }
    
    //outbox
    public function outbox() {
        $this->title="Surat Masuk";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMailOp';
        $this->display('outboxOp');
    }
    
    //list draft
    public function draft() {
        $this->title="Draft Surat";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMailOp';
        $this->display('draftOp');
    }
    
    //lihat detil draft surat. 
    //draftInView untuk surat masuk
    //draftOutView untuk surat keluar
    public function draftView() {
        $this->title="Draft Surat";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMailOp';
        //if draft surat masuk
        $this->display('draftInViewOp');
        //else if draft surat keluar
        //$this->display('draftOutViewOp');
    }
    
    //lihat surat
    public function viewMail($id) {
        $data['surat'] = $this->model_mail->getMail($id);
        $data['memo'] = $this->model_mail->getMemo($id);
        $this->model_mail->readMail($id);
        $this->title="Detil Surat";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMailCoord';
        $this->display('viewMail',$data);
    }
    
    //lihat detil surat keluar
    public function viewOutMail() {
        $this->title="Detil Surat Keluar";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMailOp';
        $this->display('viewOutMailOp');
    }
    
    //form pencarian surat
    public function search() {
        $this->title="Pencarian Arsip";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMailOp';
        $this->display('search');
    }
    
    //hasil pencarian
    public function searchresult() {
        $this->title="Pencarian Arsip";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMailOp';
        $this->display('searchresult');
    }
    public function newMail($mode){
        $data['lampiran'] = $this->do_upload();
        $data['jurnal'] = $this->input->post('jurnal');
        $data['judul'] = $this->input->post('judul');
        $data['nomor'] = $this->input->post('nomor');
        $data['tanggal_surat'] = date("Y-m-d H:i:00", strtotime($this->input->post('tanggal_surat')));
        $data['perihal'] = $this->input->post('perihal');
        $data['sifat'] = $this->input->post('mendesak')."|".$this->input->post('rahasia')."|".$this->input->post('penting')."|".$this->input->post('biasa');
        $data['pengirim'] = $this->input->post('pengirim');
        $data['penerima'] = $this->input->post('penerima');
        $data['tanggal_terima'] = date("Y-m-d H:i:00", strtotime($this->input->post('tanggal_terima')));
        $data['kategori'] = $this->input->post('kategori');
        $data['tembusan'] = $this->input->post('tembusan');
        $data['jenis_surat'] = $mode;
        $data['idadmin'] = $this->session->userdata['logged_in']["id"];
        $data['isi'] = $this->input->post('isi');
        //print_r($data);
        $this->db->insert("surat",$data);
        redirect('mail/coord/inbox');
    }
    function do_upload()
    {
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'zip|rar|pdf';
        $config['max_size'] = '5000';
        $config['encrypt_name'] = TRUE;
        $new_name = time().$_FILES["filesurat"]['name'];
        $config['file_name'] = $new_name;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload("filesurat"))
        {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            print_r($data);   
            return $data['upload_data']['file_name'];
        }
        return "";
    }
}