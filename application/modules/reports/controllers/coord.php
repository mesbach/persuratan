<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//inbox
class Coord extends Koordinator_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('mail/model_mail');
    }
    
    //inbox
    public function index() {
        $this->title="Tes";
        $this->load->helper(array('pdf', 'date'));
        $this->theme_layout = 'reports';
        $this->header = 'lay-scripts/header_spesific';
        $this->left_sidebar = 'lay-scripts/header_spesific';
        $this->right_sidebar = 'lay-scripts/header_spesific';
        //$this->script_header = 'lay-scripts/header_spesific';
        //$this->script_footer = 'lay-scripts/header_spesific';
        $this->menuMail = 'lay-scripts/header_spesific';
        $filename = 'Laporan.pdf';
        $data['state'] = 'Report';
//        $this->display('tes');
        $html = $this->display('tes',$data,true);
        
        header("Content-type:application/pdf");
        echo generate_pdf($html, $filename, false);
    }
}
