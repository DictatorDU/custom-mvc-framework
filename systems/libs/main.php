<?php
/**
 * main class
 */
class main{
  public $url;
  public $controllerName = "index";
  public $method = "home";
  public $controllerPath = "apps/controllers/";
  public $controllerObj;

  

  function __construct(){
    $this->getUrl();
    $this->loadController();
    $this->callMethod();
  }

  public function getUrl(){
  	 $this->url = isset($_GET['url'])?$_GET['url'] : NULL;
		 if($this->url != NULL){
		 $this->url = rtrim($this->url,"/");
		 $this->url = explode("/",filter_var($this->url,FILTER_SANITIZE_URL));
		 }else{
			unset($this->url);
		}
  }

  public function loadController(){
  	if(!isset($this->url[0])){
  		include($this->controllerPath.$this->controllerName.".php");
  		$this->controlletObj = new $this->controllerName();
  		$this->controlletObj->index();
  	}else{
  		$this->controllerName = $this->url[0];
  		$fileName = $this->controllerPath . $this->controllerName.".php";
  		if(file_exists($fileName)){
  			include $fileName;
  			if(class_exists($this->controllerName)){
  				$this->controllerObj = new $this->controllerName(); 
  			}else{
  				$this->controlletObj->index();
  			}
  		}else{
  			header("location:".BASE_URL);
  		}
  	}
  }

  public function callMethod(){
  	if(isset($this->url[2])){
  		$this->method = $this->url[1];
  		if(method_exists($this->controllerObj, $this->method)){
  			$this->controllerObj->{$this->method}($this->url[2]);
  		}else{
  		    header("location:".BASE_URL);
  		}
  	}else{
  		if(isset($this->url[1])){
  			$this->method = $this->url[1];
  			if(method_exists($this->controllerObj, $this->method)){
  				$this->controllerObj->{$this->method}();
  			}else{
  				header("location:".BASE_URL);
  			}
  		}else{
  			if(method_exists($this->controllerObj, $this->method)){
  				$this->controllerObj->{$this->method}();
  			}
  		}
  	}
  }

}
?>
