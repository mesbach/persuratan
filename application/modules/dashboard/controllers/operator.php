<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//dashboard
class operator extends Operator_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('mail/model_mail');
    }
    public function index() {
        $data['inbox'] = $this->model_mail->getInbox();
        $data['outbox'] = $this->model_mail->getOutbox();
        $this->title="Dashboard";
        $this->script_header_spesific = 'lay-scripts/header_dashboard_koordinator';
        $this->script_footer_spesific = 'lay-scripts/footer_dashboard_koordinator';
        $this->display('dashboard_operator',$data);
    }
    
}