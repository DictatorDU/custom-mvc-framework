<?php 
 /**
  * Admin pannel
  */
 class admin extends extends_controller{
 	
 	private $tbl_post = "tbl_post";
    private $tbl_catagory = "tbl_catgory";
    private $tbl_user = "tbl_user";
	
	public function __construct(){     
     parent::__construct();
     session::chkSession();

     if(isset($_GET['url']) AND $_GET['url'] != NULL){
       $url = $_GET['url'];
       $url = rtrim($url,"/");
       $url = explode("/",filter_var($url,FILTER_SANITIZE_URL));
       if(empty($url[1])){
        $this->index();
       }
     }

    }

    public function index(){
    	$this->dashboard();
    }

    public function dashboard(){
    	$this->loadObj->view('header');
    	$this->loadObj->view('admin/admin-menubar');
      $this->loadObj->view('admin/sidebar');
      $this->loadObj->view('admin/dashboard');
  		$this->loadObj->view('footer');
    } 

    public function add_catagory(){
      $this->loadObj->view('header');
      $this->loadObj->view('admin/admin-menubar');
      $this->loadObj->view('admin/sidebar');
      $this->loadObj->view('admin/catagory-add');
      $this->loadObj->view('footer');      
    }  
    
    public function post_list(){
      $data = array();
      $modelObj = $this->loadObj->model('admin_model');
      $data["read_post"] = $modelObj->readPost($this->tbl_post);
       
      $this->loadObj->view('header');
      $this->loadObj->view('admin/admin-menubar');
      $this->loadObj->view('admin/sidebar');
      $this->loadObj->view('admin/post-list',$data);
      $this->loadObj->view('footer');  
    }

    public function catagory_list(){
      $data = array();
      $modelObj = $this->loadObj->model('admin_model');
      $data["read_cat"] = $modelObj->readCat($this->tbl_catagory);

      $this->loadObj->view('header');
      $this->loadObj->view('admin/admin-menubar');
      $this->loadObj->view('admin/sidebar');
      $this->loadObj->view('admin/catagory-list',$data);
      $this->loadObj->view('footer');      
    }

    public function logout(){
    	session::sessionDestroy();
    	header("location:".BASE_URL."login");
    }

    public function catagory_add(){
      if(isset($_POST['submit'])){
        $catagory = $_POST['catagory'];
        $title = $_POST['title'];
        
        $data = array();
        if(empty($catagory)){
          $_SESSION['empty_cat'] = "Empty Catagory field";
        }elseif(empty($title)){
          $data['empty_title'] = "Empty title field";
        }else{
          $modelObj = $this->loadObj->model('admin_model');
          $addCat = $modelObj->insert_catagory($this->tbl_catagory,$catagory,$title);
          if($addCat){
            $data['cat_insertSuccess'] = "You have successfully insert data";
            header("location:".BASE_URL."admin/catagory_list");
          }else{
            header("location:".BASE_URL."admin/add_catagory");
          }
        }
      }else{
        header("location:".BASE_URL."admin");
      }
    }
    

    public function delet_cat($id=NULL){
        $data = array();
        $modelObj = $this->loadObj->model('admin_model');
        $data["delete_cat"] = $modelObj->deleteCat($this->tbl_catagory,$id);

        if($data["delete_cat"]){
          header('location:'.BASE_URL."admin/catagory_list");
        }
    } 
    public function delete_post($id=NULL){
        $data = array();
        $modelObj = $this->loadObj->model('admin_model');
        $data["delete_post"] = $modelObj->deletePost($this->tbl_post,$id);

        if($data["delete_post"]){
          header('location:'.BASE_URL."admin/post_list");
        }
    }  

    public function view_post($id=NULL){
      $data = array();
      $modelObj = $this->loadObj->model('admin_model');
      $data["view_post"] = $modelObj->view_post($this->tbl_post,$id);

      $this->loadObj->view('header');
      $this->loadObj->view('admin/admin-menubar');
      $this->loadObj->view('admin/sidebar');
      $this->loadObj->view('admin/view-post',$data);
      $this->loadObj->view('footer'); 
    }
   
    public function add_post(){
      $data = array();
      $modelObj = $this->loadObj->model('admin_model');

      $data["readCat"] = $modelObj->readCat($this->tbl_catagory);

      $this->loadObj->view('header');
      $this->loadObj->view('admin/admin-menubar');
      $this->loadObj->view('admin/sidebar');
      $this->loadObj->view('admin/post-add',$data);
      $this->loadObj->view('footer'); 
    }

    public function insert_post(){
      $modelObj = $this->loadObj->model('admin_model');
      if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $catagory_id  = $_POST['catagory'];
        $post  = $_POST['post'];
        $tag  = $_POST['tag'];
        $level  = $_POST['level'];

        $data = array(
          'post_title' => $title,
          'cat_id'     => $catagory_id,
          'post'       => $post,
          'tag'        => $tag,
          'writer_id'  => $level
        );

        $data["insert_post"] = $modelObj->insert_post($this->tbl_post,$data);
        if($data["insert_post"]){
          header("location:".BASE_URL."admin/post_list");
        }
      }
    }

    public function user_list(){
      $data = array();
      $modelObj = $this->loadObj->model('admin_model');
      $data["read_user"] = $modelObj->readUser($this->tbl_user);

      $this->loadObj->view('header');
      $this->loadObj->view('admin/admin-menubar');
      $this->loadObj->view('admin/sidebar');
      $this->loadObj->view('admin/user-list',$data);
      $this->loadObj->view('footer');     
    }

    public function post_by_user($id=NULL){
      $data = array();
      $modelObj = $this->loadObj->model('admin_model');
      $data["read_userPost"] = $modelObj->readUserpost($this->tbl_post,$id);

      $this->loadObj->view('header');
      $this->loadObj->view('admin/admin-menubar');
      $this->loadObj->view('admin/sidebar');
      $this->loadObj->view('admin/user-post',$data);
      $this->loadObj->view('footer'); 
    }

    public function delete_userPost($id=NULL){
      $data = array();
      $modelObj = $this->loadObj->model('admin_model');
      $data["delete_post"] = $modelObj->deletePost($this->tbl_post,$id);

      if($data["delete_post"]){
        header('location:'.BASE_URL."admin/post_by_user");
      }
    }

    public function add_user(){
      if(session::get("level") == '1'){
      $this->loadObj->view('header');
      $this->loadObj->view('admin/admin-menubar');
      $this->loadObj->view('admin/sidebar');
      $this->loadObj->view('admin/user-add');
      $this->loadObj->view('footer');  
      }    
    }

    public function user_add(){
      if(session::get("level") == '1'){
      $modelObj = $this->loadObj->model('admin_model');
      if(isset($_POST['submit'])){
      $data = array(
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "level" => $_POST['level']
      );

      $data["insert_user"] = $modelObj->insert($this->tbl_user,$data);
      if( $data["insert_user"]){
        $_SESSION['useradded'] = 1;
        header("location:".BASE_URL."admin/user_list");
      }
      }
     }
    }
   

    public function delet_user($id=NULL){
    if(session::get("level") == '1'){
      $data = array();
      $modelObj = $this->loadObj->model('admin_model');
      $data["delete_user"] = $modelObj->deleteUser($this->tbl_user,$id);
      if($data["delete_user"]){
        $_SESSION['useradded'] = 1;
        header("location:".BASE_URL."admin/user_list");
      }
     }
    }
 }
?>