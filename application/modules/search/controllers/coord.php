<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Coord extends Koordinator_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('search/searchmodel');
    }

    //pencarian surat lanjut
    public function index() {
        $this->title = "Pencarian Surat";
        $this->script_header_spesific = 'lay-scripts/header_advancedsearch';
        $this->script_footer_spesific = 'lay-scripts/footer_advancedsearch';
        $this->display('searchmail');
    }

    public function searchmail() {
        $this->title = "Pencarian Surat";
        $this->script_header_spesific = 'lay-scripts/header_advancedsearch';
        $this->script_footer_spesific = 'lay-scripts/footer_advancedsearch';
        $this->display('searchmail');
    }

    public function searchagenda() {
        $this->title = "Pencarian Agenda";
        $this->script_header_spesific = 'lay-scripts/header_advancedsearch';
        $this->script_footer_spesific = 'lay-scripts/footer_advancedsearch';
        $this->display('searchagenda');
    }

    public function searchguest() {
        $this->title = "Pencarian Tamu";
        $this->script_header_spesific = 'lay-scripts/header_advancedsearch';
        $this->script_footer_spesific = 'lay-scripts/footer_advancedsearch';
        $this->display('searchguest');
    }

    public function resultmail() {
        $keyword = $this->input->post('keyword');
        $tes = $this->input->post('alltime');
        if ($tes == 'checked')
            $alltime = 1;
        else
            $alltime = 0;
        $from = $this->input->post('from');
        $to = $this->input->post('to');
        $sifatsurat = $this->input->post('sifatsurat');
        $jenis = $this->input->post('jenis');
        $kategori = $this->input->post('kategori');

        $sql = "select * from surat 
                where 
                surat.nomor like '%" . $keyword . "%' or
                surat.pengirim like '%" . $keyword . "%' or
                surat.penerima like '%" . $keyword . "%' or
                surat.perihal like '%" . $keyword . "%' or
                surat.isi like '%" . $keyword . "%' or
                surat.jurnal like '%" . $keyword . "%'";
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
                surat.tanggal_surat >= '$newFrom'
                and
                surat.tanggal_surat <= '$newTo'
                )";
            $fr = date("d-m-Y", strtotime($from));
            $t = date("d-m-Y", strtotime($to));
            $data['interval'] = $fr.' - '.$t;
        }
        else
        {
            $data['interval'] = 'Semua Tanggal';
        }
        
        if (!empty($sifatsurat)) {
            $data['sifat'] = '';
            foreach ($sifatsurat as $v) {
                $sql .= " and 
                            surat.sifat like '%$v%'";
                $data['sifat'] .= ' '.$v;
            }
        }
        else
            $data['sifat'] = '<i>Tidak Diisi</i>';
            
        
        if (!empty($jenis)) {
            $sql .= " and
                        surat.jenis_surat = '$jenis'";
            $data['jenis'] = $jenis;
        }
        if (!empty($kategori)) {
            $sql .= " and
                    surat.kategori like '%$kategori%'";
            $data['kategori'] = $kategori;
        }
        else
            $data['kategori'] = 'Semua Kategori';
        $sql .= " ORDER BY surat.tanggal_surat asc";
//        echo $sql;
        $result = $this->searchmodel->getquery($sql);
        $data['jmldata'] = count($result);
        $data['result'] = $this->searchmodel->getquery($sql);

        $this->title = "Hasil Pencarian Surat";
        $this->script_header_spesific = 'lay-scripts/header_advancedsearch';
        $this->script_footer_spesific = 'lay-scripts/footer_advancedsearch';
        $this->display('resultmail',$data);
    }

    public function resultagenda() {
        $this->title = "Hasil Pencarian Agenda";
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
        
        $sql = "select * from agenda 
                where 
                agenda.judul like '%$keyword%' or
                agenda.tempat like '%$keyword%' or
                agenda.isi like '%$keyword%' or
                agenda.hasil like '%$keyword%' ";
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
                agenda.awal >= '$newFrom'
                and
                agenda.akhir <= '$newTo'
                )";
            $fr = date("d-m-Y", strtotime($from));
            $t = date("d-m-Y", strtotime($to));
            $data['interval'] = $fr.' - '.$t;
        }
        else
        {
            $data['interval'] = 'Semua Tanggal';
        }
        
        $sql .= " ORDER BY agenda.awal asc";
        $result = $this->searchmodel->getquery($sql);
        $data['jmldata'] = count($result);
        $data['result'] = $this->searchmodel->getquery($sql);
        
        $this->display('resultagenda',$data);
    }

    public function resultguest() {
        $this->title = "Hasil Pencarian Tamu";
        $this->script_header_spesific = 'lay-scripts/header_advancedsearch';
        $this->script_footer_spesific = 'lay-scripts/footer_advancedsearch';
        $this->display('resultguest');
    }

}
