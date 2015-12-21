<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//dashboard
class Fo extends Frontoffice_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('search/searchmodel');
    }
    public function index() {
        $this->title = "Pencarian Tamu";
        $this->script_header_spesific = 'lay-scripts/header_advancedsearch';
        $this->script_footer_spesific = 'lay-scripts/footer_advancedsearch';
        $this->display('searchguest');
    }
    
    public function resultguest() {
        $this->title = "Hasil Pencarian Tamu";
        $this->script_header_spesific = 'lay-scripts/header_advancedsearch';
        $this->script_footer_spesific = 'lay-scripts/footer_advancedsearch';
        
        $keyword = $this->input->post('keyword');
        $tes = $this->input->post('alltime');
        if ($tes == 'checked')
            $alltime = 1;
        else
            $alltime = 0;
        $from = $this->input->post('from');
        $to = $this->input->post('to');
        
        $sql = "select * from tamu 
                where 
                tamu.nama like '%$keyword%' or
                tamu.asal like '%$keyword%' or
                tamu.keterangan like '%$keyword%'";
        if(!empty($keyword))
        {
            $data['keyword'] = $keyword;
        }
        else
            $data['keyword'] = '<i>Tidak Diisi</i>';
        
        if (!empty($from) && !empty($to)) {

            $newFrom = date("Y-m-d", strtotime($from));
            $newTo = date("Y-m-d", strtotime($to));
            $sql .= " and
                (
                tamu.waktu >= '$newFrom'
                and
                tamu.waktu <= '$newTo'
                )";
            $fr = date("d-m-Y", strtotime($from));
            $t = date("d-m-Y", strtotime($to));
            $data['interval'] = $fr.' - '.$t;
        }
        else
        {
            $data['interval'] = 'Semua Tanggal';
        }
        
        $sql .= " ORDER BY tamu.waktu asc";
        $result = $this->searchmodel->getquery($sql);
        $data['jmldata'] = count($result);
        $data['result'] = $this->searchmodel->getquery($sql);
        
        $this->display('resultguest',$data);
    }
    
}