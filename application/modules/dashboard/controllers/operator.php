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
        $this->title="Dashboard";
        $this->script_header_spesific = 'lay-scripts/header_calendaragenda';
        $this->script_footer_spesific = 'lay-scripts/footer_calendaragenda';
        $data["some"] = base_url()."agenda/coord/getAgenda";
        $this->display('dashboard_operator',$data);
    }
    
}