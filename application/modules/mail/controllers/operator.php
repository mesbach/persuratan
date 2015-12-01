<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//inbox
class Operator extends Operator_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    //inbox
    public function index() {
        $this->display('inbox');
    }
    
    //inbox
    public function inbox() {
        $this->title="Surat Masuk";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMailOp';
        $this->display('inboxOp');
    }
    
    //outbox
    public function outbox() {
        $this->title="Surat Masuk";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMailOp';
        $this->display('outboxOp');
    }
    
    //list draft
    public function draft() {
        $this->title="Draft Surat";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMailOp';
        $this->display('draftOp');
    }
    
    //lihat detil draft surat. 
    //draftInView untuk surat masuk
    //draftOutView untuk surat keluar
    public function draftView() {
        $this->title="Draft Surat";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMailOp';
        //if draft surat masuk
        $this->display('draftInViewOp');
        //else if draft surat keluar
        //$this->display('draftOutViewOp');
    }
    
    //lihat surat
    public function viewMail() {
        $this->title="Detil Surat";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMailOp';
        $this->display('viewMailOp');
    }
    
    //lihat detil surat keluar
    public function viewOutMail() {
        $this->title="Detil Surat Keluar";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMailOp';
        $this->display('viewOutMailOp');
    }
    
    //form pencarian surat
    public function search() {
        $this->title="Pencarian Arsip";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMailOp';
        $this->display('search');
    }
    
    //hasil pencarian
    public function searchresult() {
        $this->title="Pencarian Arsip";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $this->menuMail = 'other/menuMailOp';
        $this->display('searchresult');
    }
    
}