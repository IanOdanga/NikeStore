<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "", "nike_store");
		return $this->con;
	}
}

?>