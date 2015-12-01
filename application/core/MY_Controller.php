<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller {

    /*What string should be used to separate title segments sent via $this->template->title('Foo', 'Bar'); */
    
    private $_folderHeader='lay-header/';
    private $_folderFooter='lay-footer/';
    private $_folderLeft='lay-left-sidebar/';
    private $_folderRight='lay-right-sidebar/';
    private $_folderScript='lay-scripts/';
    private $data = array(
        
        'theme_folder' => 'ui',
        'theme_layout' => 'template',
        'header' => 'lay-header/default',
        'left_sidebar' => 'lay-left-sidebar/default',
        'right_sidebar' => 'lay-right-sidebar/default',
        'script_header' =>'lay-scripts/header-default',
        'script_footer' =>'lay-scripts/footer-default',
        'script_header_spesific' => 'lay-scripts/header_spesific',
        'script_footer_spesific' => 'lay-scripts/footer_spesific',
        'menuMail' => 'other/default',
        
    );
    
    /*
     * Setter dan Getter
     */
    function set_idModule()
    {
        $this->data['idModule']=$this->module_m->getModulebyCode($this->router->fetch_class());
    }
    
    
    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
    
    public function get($name)
    {
        if (array_key_exists($name, $this->data)) {
           return $this->data[$name];
        }
        else
        {
            echo 'error unset data '.$name;
        }
    }
    public function __isset($name) {
        return isset($this->data[$name]);
    }
    
    public function __unset($name) {
        unset($this->data[$name]);
    }
    
    /**
    * Construct dari My Controller
    * @package Controller
    * @todo finish Modules dan Permission
    */
   
   
    public function __construct() {
            parent::__construct();  
            
            //bug untuk form_validation
            $this->form_validation->CI =& $this; 
            
        }
        
        
        public function display($view_page,$content=array())
	{
            $content['nama']="SIM Persuratan";
            
            //nice to be able to set title right in the controller in one shot. 
            //Before using template, I had to keep passing the title value here and 
            //there till it reached the header where finally it could get echoed.
            //$this->template->title($this->data['title'],"SIM Persuratan");
            
            //'default_theme' is a folder name.
            $this->template->set_theme($this->data['theme_folder']);

            //This layout file can use $template['variables'] to put your contents
            $this->template->set_layout($this->data['theme_layout']);

            //setting partials view. see the image above for header.php and footer.php locations.
            //these will be available in layout file as $template['partials']['header'] and 
            //$template['partials']['footer']
            $this->template->title($this->data['title'],"SI Persuratan");
            $this->template->set_partial('header',$this->data['header'],$content);
            $this->template->set_partial('left_sidebar',$this->data['left_sidebar'],$content);
            $this->template->set_partial('right_sidebar',$this->data['right_sidebar'],$content);
            $this->template->set_partial('script_header',$this->data['script_header'],$content);
            $this->template->set_partial('script_footer',$this->data['script_footer'],$content);
            $this->template->set_partial('script_header_spesific',$this->data['script_header_spesific'],$content);
            $this->template->set_partial('script_footer_spesific',$this->data['script_footer_spesific'],$content);
            $this->template->set_partial('menuMail',$this->data['menuMail'],$content);
            
            //the main content view that contains about page's content. 
            //this will be available in layout file as $template['body']
            
            $res= $this->template->build($view_page,$content);
            return $res;    
            
	}
        
        
        
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */