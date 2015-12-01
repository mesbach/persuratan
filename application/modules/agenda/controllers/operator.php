<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//agenda
class Operator extends Operator_Controller {
    
    public function __construct() {
        parent::__construct();
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
        $this->display('calendarAgenda');
    }
    
    public function detailAgenda() {
        $this->title="Detil Agenda Kegiatan";
        $this->display('detailAgenda');
    }
    
    public function editAgenda() {
        $this->title="Ubah Agenda Kegiatan";
        $this->display('editAgenda');
    }
    
}