<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//agenda
class Fo extends Frontoffice_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->title="Daftar Tamu";
        $this->script_header_spesific = 'lay-scripts/header_bukutamu';
        $this->script_footer_spesific = 'lay-scripts/footer_bukutamu';
        $this->display('listtamu');
    }
    
    public function detailtamu() {
        $this->title="Detail Tamu";
        $this->script_header_spesific = 'lay-scripts/header_bukutamu';
        $this->script_footer_spesific = 'lay-scripts/footer_bukutamu';
        $this->display('detailTamu');
    }
}