<?php 

class General{
	public function logged_in () {
		session_start();
		return(isset($_SESSION['user_name'])) ? true : false;
	}

	
	public function logged_in_protect() {
		if ($this->logged_in() === true) {
			header('Location: products-view');
			exit();		
		}
	}
	
	
	public function logged_out_protect() {
		if ($this->logged_in() === false) {
			header('Location: index.html');
			exit();
		}	
	}
}
?>