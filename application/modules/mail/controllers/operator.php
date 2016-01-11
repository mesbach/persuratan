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
        $this->menuMail = 'other/menuMail';
        $no = $this->model_mail->getjurnal();
        if(!empty($no))
        {
            $data['jurnal'] = $this->hitungjurnal($no[0]->jurnal);
        }
        else
        {
            $newjurnal = 1;
            $newjurnal .= '/'.date('m').'/'.date('Y');
            $data['jurnal'] = $newjurnal;
        }
        $this->display('inbox',$data);
    }
    
    //outbox
    public function outbox() {
        $this->title="Surat Keluar";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMail';
        $this->display('outbox');
    }
    
    //list draft
    public function draft() {
        $this->title="Draft Surat";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMail';
        $this->display('draft');
    }
    
    //lihat detil draft surat. 
    //draftInView untuk surat masuk
    //draftOutView untuk surat keluar
    public function draftView() {
        $this->title="Draft Surat";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMail';
        //if draft surat masuk
        $this->display('draftInViewOp');
        //else if draft surat keluar
        //$this->display('draftOutViewOp');
    }
    
    //lihat surat
    public function viewMail($id) {
        $data['surat'] = $this->model_mail->getMail($id);
        $data['memo'] = $this->model_mail->getMemo($id);
        $parent = $this->model_mail->getmailparent($id);
        if(is_null($parent[0]->parrent))
        {
            $data['version'] = $this->model_mail->getmailversion($id);
        }
        else
        {
            $data['version'] = $this->model_mail->getmailversion2($id,$parent[0]->parrent);
        }
        $this->model_mail->readMail($id);
        $this->title="Detil Surat";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMail';
        $this->display('viewMail',$data);
    }
    
    //lihat detil surat keluar
    public function viewOutMail() {
        $this->title="Detil Surat Keluar";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMail';
        $this->display('viewOutMailOp');
    }
    
    public function newMail(){
        $mode = $this->input->post('mode');
        if($mode=="in")
        { 
            $data['isdraft'] = 0; 
        }
        else if($mode=="draft")
        { 
            $data['isdraft'] = 1; 
        }
        
        $judul = $this->input->post('judul');
        $data['lampiran'] = $this->do_upload($judul);
        $data['jurnal'] = $this->input->post('jurnal');
        $data['judul'] = $this->input->post('judul');
        $data['nomor'] = $this->input->post('nomor');
        $data['tanggal_surat'] = date("Y-m-d H:i:00", strtotime($this->input->post('tanggal_surat')));
        //$data['tanggal_surat'] = $this->calendar($this->input->post('tanggal_surat'));
        $data['perihal'] = $this->input->post('perihal');
        $data['sifat'] = $this->input->post('mendesak')."|".$this->input->post('rahasia')."|".$this->input->post('penting')."|".$this->input->post('biasa');
        $data['pengirim'] = $this->input->post('pengirim');
        $data['penerima'] = $this->input->post('penerima');
        $data['tanggal_terima'] = date("Y-m-d H:i:00", strtotime($this->input->post('tanggal_terima')));
        //$data['tanggal_terima'] = $this->calendar ($this->input->post('tanggal_terima'));
        $data['kategori'] = $this->input->post('kategori');
        $data['tembusan'] = $this->input->post('tembusan');
        $data['jenis_surat'] = 'in';
        $data['idadmin'] = $this->session->userdata['logged_in']["id"];
        $data['isi'] = $this->input->post('isi');
        
        $this->db->insert("surat",$data);
        redirect('mail/operator/inbox');
    }
    
    public function newOutMail(){
        $mode = $this->input->post('mode');
        if($mode=="out")
        { 
            $data['isdraft'] = 0; 
        }
        else if($mode=="draft")
        { 
            $data['isdraft'] = 1; 
        }
        $data['lampiran'] = $this->do_upload();
        $data['judul'] = $this->input->post('judul');
        $data['nomor'] = $this->input->post('nomor');
        $data['tanggal_surat'] = date("Y-m-d H:i:00", strtotime($this->input->post('tanggal_surat')));
        $data['perihal'] = $this->input->post('perihal');
        $data['sifat'] = $this->input->post('mendesak')."|".$this->input->post('rahasia')."|".$this->input->post('penting')."|".$this->input->post('biasa');
        $data['pengirim'] = $this->input->post('pengirim');
        $data['penerima'] = $this->input->post('penerima');
        $data['tanggal_terima'] = date("Y-m-d H:i:00", strtotime($this->input->post('tanggal_surat')));
        $data['kategori'] = $this->input->post('kategori');
        $data['tembusan'] = $this->input->post('tembusan');
        $data['jenis_surat'] = 'out';
        $data['isi'] = $this->input->post('isi');
        $data['idadmin'] = $this->session->userdata['logged_in']["id"];
        $this->db->insert("surat",$data);
        redirect('mail/operator/outbox');
    }
    
    function do_upload($nama)
    {
        $config['upload_path'] = 'uploads/filesurat/';
        $config['allowed_types'] = 'zip|rar|pdf';
        $config['max_size'] = '5000';
        $config['encrypt_name'] = false;
        $tgl = date("d-m-Y", time());
        $new_name = $tgl.'_'.$nama;
        $config['file_name'] = $new_name;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload("filesurat"))
        {
            $error = array('error' => $this->upload->display_errors());
            //print_r($error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
//            print_r($data);   
            return $data['upload_data']['file_name'];
        }
        return "";
    }
    
    public function hitungjurnal($param) {
        $arr = explode('/', $param);
        $no = $arr[0];
        if(($arr[1]==date('m')) && ($arr[2]==date('Y')) )
        {
            $newjurnal = $no+1;
            $newjurnal .= '/'.date('m').'/'.date('Y');
        }
        else
        {
            $newjurnal = 1;
            $newjurnal .= '/'.date('m').'/'.date('Y');
        }
        return $newjurnal;
    }
    
    function editinmail()
    {
        $modesimpan = $this->input->post('modesimpan');
        if($modesimpan == 'simpan')
        {
            $idsurat = $this->input->post('idsurat');
            $data['parrent'] = $this->input->post('idsurat');
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
            $data['jenis_surat'] = 'in';
            $data['idadmin'] = $this->session->userdata['logged_in']["id"];
            $data['isi'] = $this->input->post('isi');
            $this->db->insert("surat",$data);
            $newid = $this->db->insert_id();
            $this->model_mail->disabledraft($idsurat);
            redirect('mail/operator/viewMail/'.$newid);   
        }
        else if($modesimpan == 'draft')
        {
            $idsurat = $this->input->post('idsurat');
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
            $data['jenis_surat'] = 'in';
            $data['idadmin'] = $this->session->userdata['logged_in']["id"];
            $data['isi'] = $this->input->post('isi');
            $this->model_mail->updatesurat($idsurat,$data);
            redirect('mail/operator/viewMail/'.$idsurat);  
        }
     
    }
    
    function editoutmail()
    {
        $modesimpan = $this->input->post('modesimpan');
        if($modesimpan == 'simpan')
        {
            $idsurat = $this->input->post('idsurat');
            $data['parrent'] = $this->input->post('idsurat');
            $data['lampiran'] = $this->do_upload();
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
            $data['jenis_surat'] = 'out';
            $data['idadmin'] = $this->session->userdata['logged_in']["id"];
            $data['isi'] = $this->input->post('isi');
            $this->db->insert("surat",$data);
            $newid = $this->db->insert_id();
            $this->model_mail->disabledraft($idsurat);
            redirect('mail/operator/viewMail/'.$newid);
        }
        else if($modesimpan == 'draft')
        {
            $idsurat = $this->input->post('idsurat');
            $data['parrent'] = $this->input->post('idsurat');
            $data['lampiran'] = $this->do_upload();
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
            $data['jenis_surat'] = 'out';
            $data['idadmin'] = $this->session->userdata['logged_in']["id"];
            $data['isi'] = $this->input->post('isi');
            $this->model_mail->updatesurat($idsurat,$data);
            redirect('mail/operator/viewMail/'.$idsurat);
        }
                
    }
}