<?php 
/**
 * Index controller
 */
class index extends extends_controller{
	private $tbl_catgory = 'tbl_catgory';
	private $tbl_post = 'tbl_post';
	
	function __construct(){
	  parent::__construct();
	}
   
   public function index(){
    $this->home();
   }

   public function home(){
   	 $modelObj = $this->loadObj->model('home_model');
     
     $data = array();
     $data['post'] = $modelObj->readAll($this->tbl_post);
     $data['catagory'] = $modelObj->readAll($this->tbl_catgory);
     $data['letestPost'] = $modelObj->letestPost($this->tbl_post);


     $this->loadObj->view('header');
     $this->loadObj->view('menubar',$data);
	   $this->loadObj->view('home',$data);    
     $this->loadObj->view('sidebar',$data);
	   $this->loadObj->view('footer');
   }

   public function post_details($id=NULL){
   	 $modelObj = $this->loadObj->model('home_model');  

     $data = array();
     $data['post'] = $modelObj->joinQuery($this->tbl_post,$this->tbl_catgory,$id);
     $data['catagory'] = $modelObj->readAll($this->tbl_catgory);
     $data['letestPost'] = $modelObj->letestPost($this->tbl_post);


     $this->loadObj->view('header');
     $this->loadObj->view('menubar',$data);   
     $this->loadObj->view('details',$data);  
     $this->loadObj->view('sidebar',$data);
  	 $this->loadObj->view('footer');
   }

   public function postByCatId($cat_id=NULL){
     $modelObj = $this->loadObj->model('home_model');  

     $data = array();
     $data['post'] = $modelObj->postByCatModel($this->tbl_post,$this->tbl_catgory,$cat_id);
     $data['catagory'] = $modelObj->readAll($this->tbl_catgory);
     $data['letestPost'] = $modelObj->letestPost($this->tbl_post);

     $this->loadObj->view('header');
     $this->loadObj->view('menubar',$data);
     $this->loadObj->view('poatByCatId',$data);  
     $this->loadObj->view('sidebar',$data);
     $this->loadObj->view('footer');
   }

   public function search(){
    if(isset($_POST['search'])){
      $keyWord = $_POST['keyword'];
      $cat_id  = $_POST['catagory'];
      
     if(!empty($keyWord OR $cat_id)){
     $modelObj = $this->loadObj->model('home_model');  

     $data = array();
     $data['postBySearch'] = $modelObj->readBySearch($this->tbl_post,$keyWord,$cat_id);
     $data['catagory'] = $modelObj->readAll($this->tbl_catgory);
     $data['letestPost'] = $modelObj->letestPost($this->tbl_post);

     $this->loadObj->view('header');
     $this->loadObj->view('menubar',$data);
     $this->loadObj->view('search',$data);  
     $this->loadObj->view('sidebar',$data);
     $this->loadObj->view('footer');
     }else{
      header("Location:".BASE_URL."index/home");
     }
    }  
  }
}
?>

