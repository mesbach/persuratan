<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//dashboard
class operator extends Operator_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('dashboard/model');
    }
    public function index() {
        $data['inbox'] = $this->model->getInbox();
        $data['outbox'] = $this->model->getOutbox();
        $data['jml'] = $this->model->countguest();
        $data['agenda'] = $this->model->getagenda();
        $data['agendatoday'] = $this->model->getagendatoday();
        $this->title="Dashboard";
        $this->script_header_spesific = 'lay-scripts/header_calendaragenda';
        $this->script_footer_spesific = 'lay-scripts/footer_calendaragenda';
        $data["urlgetagendacal"] = base_url()."agenda/operator/getAgenda";
        $this->display('dashboard_operator',$data);
    }
    
}