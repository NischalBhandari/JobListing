<?php class Template{
// path to the template

	protected $template;

	// vars passed in

	protected $vars = array();

	// constructor

	public function __construct($template){
		$this -> template = $template;
	}
//get data from inaccessible properties
	public function __get($key){
		return $this-> vars[$key];
	}

//when we write data to inaccessible properties
	public function __set($key,$value){
		$this -> vars[$key] = $value;
	}
//treat object as a string
	public function __toString(){
		//extract function imports variables in to the local symbol table from an array
		extract($this->vars);
		chdir(dirname($this->template));

		//turn on output buffering
		ob_start();
		//include template to file
		include basename($this-> template);
		return ob_get_clean();
	}

}