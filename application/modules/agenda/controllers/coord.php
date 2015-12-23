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
    
    public function calendarAgenda($id=null) {
        $this->title="Agenda Kegiatan";
        $this->script_header_spesific = 'lay-scripts/header_calendaragenda';
        $this->script_footer_spesific = 'lay-scripts/footer_calendaragenda';
        $data["some"] = base_url()."agenda/coord/getAgenda";
        $data['agenda'] = $this->model_agenda->agenda();
        $data['pendamping'] = $this->model_agenda->pendamping();
        $data['id']=$id;
        $this->display('calendarAgenda',$data);
    }
    
    public function detailAgenda() {
        $this->title="Detil Agenda Kegiatan";
        $this->display('detailAgenda');
    }
    
    public function editAgenda() {
        $this->title="Ubah Agenda Kegiatan";
        $this->display('editAgenda');
    }
    public function home(){
        $data["some"] = base_url()."agenda/coord/getAgenda";
        $this->load->view('agenda/jscal',$data);
    }
    public function save(){
        $id = $this->saveAgenda();
        $this->createPendamping($id);
        $this->createSat($id);
        
        $this->saverundown($id);
        //redirect('agenda/coord/calendarAgenda');
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
        $data['judul'] = $this->input->post('judul');
        $data['awal'] = date("Y-m-d H:i:00", strtotime($this->input->post('awal')));
        $data['akhir'] = date("Y-m-d H:i:00", strtotime($this->input->post('akhir')));
        $data['isi'] = $this->input->post('isi');
        $data['hasil'] = $this->input->post('hasil');
        $data['tempat'] = $this->input->post('tempat');
        $data['admin'] = $id;
        if($this->input->post('mendesak')=='mendesak') $data['ispublic']=1;
        $this->db->insert('agenda',$data);
        return $this->db->insert_id();
    }
    public function saverundown($id){

        $count = $this->input->post('tnamard1');
        echo $count;
        for($i=1;$i<=$count;$i++){
            $data['nama'] = $this->input->post('tnamard'.$i);
            $data['waktu'] = date("Y-m-d H:i:00", strtotime($this->input->post('tjamrd'.$i)));
            $data['tempat'] = $this->input->post('tempatrd'.$i);
            $data['pic'] = $this->input->post('picrd'.$i);
            $data['keterangan'] = $this->input->post('ketrd'.$i);
            $data['agenda'] = $id;
            print_r($data); 
            $this->db->insert('rundown',$data);
        }
    }
    private function calendar($tanggal)
    {
        $date = str_replace('T'," ", $tanggal);
        return $date;
    }
    public function getAgenda(){
        $data = $this->model_agenda->calagenda();

        echo json_encode($data);

    }
}