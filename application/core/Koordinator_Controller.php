<?php if (!defined('BASEPATH'))     exit('No direct script access allowed');

/* controller di setiap modul dapat extends pada controller admin. Berfungsi untuk membatasi hak akses*/
class Koordinator_Controller extends MY_Controller{
    function __construct() {
        parent::__construct();
        $this->header = 'lay-header/header_kks';
        $this->left_sidebar = 'lay-left-sidebar/sidebar_koordinator';
//        $this->theme_folder='ui';
        if(!isset($this->session->userdata['logged_in'])){
            redirect('login/login', 'refresh');
        }
        if($this->session->userdata['logged_in']["privilege"]!="coord")
        {
            $this->session->set_userdata(array('last_url' => current_url()));
//print_r($this->session->userdata['logged_in']);
        //    redirect('login/login', 'refresh');
        }
    }   
}
?>