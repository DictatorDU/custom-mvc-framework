<?php 
/**
 * Admin login..
 */
class login extends extends_controller{
    private $tbl_post = "tbl_post";
    private $tbl_catagory = "tbl_catagory";
    private $tbl_user = "tbl_user";
	
	public function __construct(){     
     parent::__construct();
     session::chkSessionStared();
     $this->index();
    }

    public function index(){
    	$this->login();
    }

    public function login(){
        //$modelObj = $this->loadObj->model('adminLogin_model');
		$this->loadObj->view('header');
		$this->loadObj->view('admin/login'); 
		$this->loadObj->view('footer');
    }
    
    public function something_happen(){
        $this->loadObj->view('header');
        $this->loadObj->view('admin/login',$data); 
        $this->loadObj->view('footer');
    }

    public function loginAuth(){
        $modelObj = $this->loadObj->model("adminLogin_model");
    	if(isset($_POST['admin_submit'])){
    		$email = $_POST['email'];
    		$password = md5($_POST['password']);

            $data = array();
            $chkInput = $modelObj->chkInput($this->tbl_user,$email,$password); 

            if($chkInput == false){
                 $data['emailFound'] = "Email Address or Password not found";
                header("Location:".BASE_URL."login");
            }else{
              $adminAccess = $modelObj->adminAccess($this->tbl_user,$email,$password);
                foreach($adminAccess as $value){
                session::init();
                session::set("login",ture);
                session::set("user_id",$value['user_id']);
                session::set("level",$value['level']);
              }
                header("Location:".BASE_URL."admin");
            }
        }
    }

}//End of the class
?>