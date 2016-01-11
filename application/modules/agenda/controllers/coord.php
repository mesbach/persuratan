<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//agenda
class Coord extends Koordinator_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('agenda/model_agenda');
    }
    public function index() {
        $this->title="Agenda Kegiatan";
        $this->script_header_spesific = 'lay-scripts/header_calendaragenda';
        $this->script_footer_spesific = 'lay-scripts/footer_calendaragenda';
        $this->display('calendarAgenda');
    }
    
    public function calendarAgenda() {
        $this->title="Agenda Kegiatan";
        $this->script_header_spesific = 'lay-scripts/header_calendaragenda';
        $this->script_footer_spesific = 'lay-scripts/footer_calendaragenda';
        $data["urlgetagendacal"] = base_url()."agenda/coord/getAgenda";
        $data['agenda'] = $this->model_agenda->agenda();
        $data['pendamping'] = $this->model_agenda->pendamping();
        $data['id']='';
        $this->display('calendarAgenda',$data);
    }
    
    public function detailAgenda($id) {
        $data['agenda'] = $this->model_agenda->getdetailagenda($id);
        $data['pendamping'] = $this->model_agenda->getpendamping($id);
        $data['satpassus'] = $this->model_agenda->getsatpassus($id);
        $data['rundown'] = $this->model_agenda->getrundown($id);
        $this->title="Detil Agenda Kegiatan";
        $this->display('detailAgenda',$data);
    }
    
    public function editAgenda($id) {
        $this->title="Ubah Agenda Kegiatan";
        $data['agendaedit'] = $this->model_agenda->getdetailagenda($id);
        $data['pendampingedit'] = $this->model_agenda->getpendamping($id);
        $data['satpassusedit'] = $this->model_agenda->getsatpassus($id);
        $data['rundownedit'] = $this->model_agenda->getrundown($id);
        $this->display('editAgenda',$data);
    }
    
    public function agendaByMail($idsurat) {
        $this->title="Buat Agenda Kegiatan";
        $this->script_header_spesific = 'lay-scripts/header_calendaragenda';
        $this->script_footer_spesific = 'lay-scripts/footer_calendaragenda';
        $data['surat'] = $this->model_agenda->getsurat($idsurat);
        $this->display('formagenda_withsurat',$data);
    }
    
    public function updateagenda($id) {
        $id = $this->session->userdata['logged_in']["id"];
        if($this->input->post('forpublic')=='yes')
        {$data['publik'] = 1;}
        else {$data['publik'] = 0;}
        $idagenda = $this->input->post('idagenda');
        $data['judul'] = $this->input->post('judul');
        $data['awal'] = date("Y-m-d H:i:00", strtotime($this->input->post('awal')));
        $data['akhir'] = date("Y-m-d H:i:00", strtotime($this->input->post('akhir')));
        $data['isi'] = $this->input->post('isi');
        $data['hasil'] = $this->input->post('hasil');
        $data['tempat'] = $this->input->post('tempat');
        $data['admin'] = $id;
        $data['file'] = $this->do_upload($this->input->post('judul'));
        if($this->input->post('surat')!='')
            $data['surat'] = $this->input->post('surat');
        if($this->input->post('mendesak')=='mendesak') 
            $data['ispublic']=1;
        $this->model_agenda->updateAgenda($idagenda,$data);
        $this->model_agenda->delpendamping($idagenda);
        $this->model_agenda->delsatpassus($idagenda);
        $this->model_agenda->delrundown($idagenda);
        $this->createPendamping($idagenda);
        $this->createSat($idagenda);
        $this->saverundown($idagenda);
        redirect('agenda/coord/detailAgenda/'.$idagenda);
    }
    
    public function save(){
        $id = $this->saveAgenda();
        $this->createPendamping($id);
        $this->createSat($id);
        $this->saverundown($id);
        redirect('agenda/coord/calendarAgenda');
    }
    public function createPendamping($id){
        $count = $this->input->post('countpendamping');
        for($i=1;$i<=$count;$i++){
            $data['nama'] = $this->input->post('npen'.$i);
            $data['telp'] = $this->input->post('hpen'.$i);
            $data['agenda'] = $id;
            $this->db->insert('pendamping',$data);
        }
    }
    public function createSat($id){
        $count = $this->input->post('countsatpas');
        for($i=1;$i<=$count;$i++){
            $data['nama'] = $this->input->post('nsat'.$i);
            $data['telp'] = $this->input->post('hsat'.$i);
            $data['agenda'] = $id;
            $this->db->insert('satpassus',$data);
        }
    } 
    public function saveAgenda(){
        $id = $this->session->userdata['logged_in']["id"];
        if($this->input->post('forpublic')=='yes')
        {$data['publik'] = 1;}
        else {$data['publik'] = 0;}
        $data['judul'] = $this->input->post('judul');
        $data['awal'] = date("Y-m-d H:i:00", strtotime($this->input->post('awal')));
        $data['akhir'] = date("Y-m-d H:i:00", strtotime($this->input->post('akhir')));
        $data['isi'] = $this->input->post('isi');
        $data['hasil'] = $this->input->post('hasil');
        $data['tempat'] = $this->input->post('tempat');
        $data['admin'] = $id;
        $data['verifikasi'] = 1;
        $data['file'] = $this->do_upload($this->input->post('judul'));
        $idsurat = $this->input->post('surat');
        if(!empty($idsurat))
            $data['surat'] = $this->input->post('surat');
        if($this->input->post('mendesak')=='mendesak') $data['ispublic']=1;
        $this->db->insert('agenda',$data);
        return $this->db->insert_id();
    }
    public function saverundown($id){

        $temp = $this->input->post('countrundown');
        $count = $temp-1;
        for($i=1;$i<=$count;$i++){
            $data['nama'] = $this->input->post('namard'.$i);
            $data['waktu'] = date("Y-m-d H:i:00", strtotime($this->input->post('jamrd'.$i)));
            $data['tempat'] = $this->input->post('tempatrd'.$i);
            $data['pic'] = $this->input->post('picrd'.$i);
            $data['keterangan'] = $this->input->post('ketrd'.$i);
            $data['agenda'] = $id;
            $temp = $this->input->post('namard'.$i);
            if(!empty($temp))
            {
                $this->db->insert('rundown',$data);
            }
            
        }
    }
    
    public function getAgenda(){
        $data = $this->model_agenda->calagenda();

        echo json_encode($data);
    }
    
    // untuk upload file
    function do_upload($nama)
    {
        $config['upload_path'] = 'uploads/fileagenda/';
        $config['allowed_types'] = 'zip|rar|pdf';
        $config['max_size'] = '5000';
        $config['encrypt_name'] = false;
        $tgl = date("d-m-Y", time());
        $new_name = $tgl.'_'.$nama;
        $config['file_name'] = $new_name;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload("fileagenda"))
        {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
//            print_r($data);   
            return $data['upload_data']['file_name'];
        }
        return "";
    }
    
    function changeverifiy($flag,$id)
    {
        $this->model_agenda->updateverify($id,$flag);
        redirect('agenda/coord/calendarAgenda/');
    }
    
    function changeverifiy2($flag,$id)
    {
        $this->model_agenda->updateverify($id,$flag);
        redirect('agenda/coord/detailAgenda/'.$id);
    }
}