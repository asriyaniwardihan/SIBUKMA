<!-- <base href='http://localhost/git/saferental'/> -->
<?php
class Config{
	private $config;
	function __construct($folder){
		$this->config["base_url"] = "http://".$_SERVER['HTTP_HOST']."/$folder/";
		$this->config["base_dir"] = $_SERVER['DOCUMENT_ROOT']."/$folder/";
	}
	
	function base_dir(){
		return $this->config['base_dir'];
	}

	function base_url(){
		return $this->config['base_url'];
	}
	
	
	
}


?>
