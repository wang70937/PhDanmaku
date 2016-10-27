<?php
class Database{
    private static $instance;
	private static $connection;
	
	public function __construct(){
    	self::$instance = $this;
		self::$connection = mysqli_connect(Config::DB_ADDRESS, Config::DB_USERNAME, Config::DB_PASSWORD, Config::DB_NAME);
	}

	public function init(){
		new Database();
	}

    public static function getInstance(){
        return self::$instance;
    }

	public static function process($array){
		$return = [];
		foreach($array as $oneline){
			$return[] = mysqli_real_escape_string(self::$instance->getConnection(), $oneline);
		}
		return $return;
	}
	
	public function getConnection(){
		return self::$connection;
	}
	
	public function query($SQL){
		$RESULT = [];
		foreach($SQL as $id => $query){
			$sql_rs = mysqli_query($this->getConnection(), $query);
			if(!$sql_rs){
				$RESULT[$id] = false;
			}elseif(!($sql_rs === true)){
				while($rs = mysqli_fetch_array($sql_rs)){
					$RESULT[$id][] = $rs;
				}
			}
		}
		return $RESULT;
	}
	
	public function __destruct(){
		mysqli_close(self::$connection);
	}
	
}