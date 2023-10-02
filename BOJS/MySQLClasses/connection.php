<?php

class MySQLDB
{
	
	private $params = [];
	private $connection = null;

	public function __construct($params){
		$this->params = $params;
		$this->connect();
	}


	public function __destruct(){
		$this->disconnect();
	}

	public function connect(){
		$this->connection = mysqli_connect($this->params['host'], $this->params['user'], $this->params['password'], $this->params['db']);
		return $this->isConnect();
	}

	public function isConnect(){
		return ($this->connection != null);
	}

	public function disconnect(){
		if($this->connection)mysqli_close($this->connection);
	}

	public function query($sql){

		if(!$this->isConnect()) return false;

		$r = mysqli_query($this->connection, $sql);
        if (!$r) { echo "Error query\n"; return false; } 
    	
    	$rows = [];	
    	while ($row = mysqli_fetch_assoc($r)) {
			$rows[] = $row;
		}
		return $rows;


	}
}
?>