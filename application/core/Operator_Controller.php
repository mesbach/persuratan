<?php if (!defined('BASEPATH'))     exit('No direct script access allowed');

/* controller di setiap modul dapat extends pada controller admin. Berfungsi untuk membatasi hak akses*/
class Operator_Controller extends MY_Controller{
    function __construct() {
        
        parent::__construct();
        $this->header = 'lay-header/header_op';
        $this->left_sidebar = 'lay-left-sidebar/sidebar_operator';
//        $this->theme_folder='ui';
               
        if(!isset($this->session->userdata['logged_in'])){
            redirect('login/login', 'refresh');
        }
        if($this->session->userdata['logged_in']["privilege"]!="operator")
        {
            $this->session->set_userdata(array('last_url' => current_url()));
//print_r($this->session->userdata['logged_in']);
           // redirect('login/login', 'refresh');
        }
    }   
}
?>
