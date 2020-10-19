<?php
class Database{

	private  $ocon=null;
	/*public function Database()
	{
			$conn=null;
	}*/
	public function __construct()
	{
	}
		
		
	public  function getConnection() {
		if($this->ocon==null) {
			
			$this->ocon=new PDO("mysql:host=localhost;dbname=qlbanthuoc", 'root', '');
			$this->ocon->exec("set names utf8");
        }
			
			
			return $this->ocon;
	}
	public function db_close()
	{
		$this->ocon->close();
	}
}

?>