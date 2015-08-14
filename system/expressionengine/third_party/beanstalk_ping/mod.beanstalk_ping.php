<?php if (!defined("BASEPATH")) die("No direct script access allowed");



class Beanstalk_ping {

	var $EE;

	public function Beanstalk_ping() {
		$this->EE =& get_instance();
	}

	
	
	
	public function dump_cache()
	{
		if ($this->EE->functions->clear_caching('all')) {
			header("HTTP/1.1 200 OK");
		}
	}

}
