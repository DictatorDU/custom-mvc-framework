<?php 
/**
 * Controller catagory..
 */
class catagory extends extends_controller{
	private $tbl_catgory = "tbl_catgory";
	public function __construct(){		
     parent::__construct();
	}
    
	public function catagory_add(){
	$this->loadObj->view('header');    
    $this->loadObj->view('catagory-add');
	$this->loadObj->view('footer');
	} 



	public function catagory_list(){
	$this->loadObj->view('header');    
	$modelObj = $this->loadObj->model('cat_model');
	$data = $modelObj->readAll($this->tbl_catgory);
	$this->loadObj->view('catagory',$data);
	$this->loadObj->view('footer');    
	}
    
    public function readDouble(){
      $this->loadObj->view('header');    
      $conOne = "cat_id = 4";
      $conTwo = "cat_title = 15";
      $modelObj = $this->loadObj->model('cat_model');
      $data = $modelObj->readByDouble($this->tbl_catgory,$conOne,$conTwo);
      $this->loadObj->view('cat_by_id',$data);
      $this->loadObj->view('footer');    
    }

    public function readSingle(){
      $this->loadObj->view('header');     
      $conOne = "cat_id = 4";
      $modelObj = $this->loadObj->model('cat_model');
      $data = $modelObj->readBySingle($this->tbl_catgory,$conOne);
      $this->loadObj->view('cat_by_id',$data);
      $this->loadObj->view('footer');    
    }

	public function insertCat(){
		$this->loadObj->view('header');    
		if(isset($_POST['submit'])){
		$cat_name = $_POST['name'];
		$cat_title = $_POST['title'];

		$data = array(
			'cat_name' => $cat_name,
			'cat_title' => $cat_title
		);
		$modelObj = $this->loadObj->model('cat_model');
		$addCat = $modelObj->insert($this->tbl_catgory,$data);
	  }
	    if($addCat == true){
        $_SESSION['in_suc'] = 1;
		}else{
		 $_SESSION['in_fail'] = 1; 
		}    
		$this->loadObj->view("catagory-add");
		$this->loadObj->view('footer');    
    }
    
    public function catagory_update(){
      $this->loadObj->view('header');    
      $conOne = "cat_id = 55";
      $modelObj = $this->loadObj->model('cat_model');
      $data = $modelObj->readBySingle($this->tbl_catgory,$conOne);
      $this->loadObj->view('catagory-update',$data);
      $this->loadObj->view('header');    
    }
    
	public function updateCat(){
		$this->loadObj->view('header');    
		if(isset($_POST['submit'])){
			$catagory = $_POST['name'];
			$title    = $_POST['title'];
			$con    = "cat_id=".$_POST['cat_id'];
		$data = array(
			'cat_name'  => $catagory,
			'cat_title' => $title
		);
		$modelObj = $this->loadObj->model('cat_model');
		$addCat = $modelObj->update($this->tbl_catgory,$data,$con);
		if($addCat == true){
			$_SESSION['up_suc'] = "You have successfully update your data..";
		}else{
			$_SESSION['up_fail'] = "Something went wrong...";
		}
	    $this->loadObj->view('catagory-update');
	    $this->loadObj->view('footer');    
	 }
	}

    public function delete_catagory(){
    	$this->loadObj->view('header');    
    	$con = 'cat_id = 56';
    	$modelObj = $this->loadObj->model('cat_model');
    	$addCat = $modelObj->delete($this->tbl_catgory,$con);
    	$this->loadObj->view('footer');    
    }
}
?>