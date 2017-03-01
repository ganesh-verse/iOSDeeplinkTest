<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'demos');
class DB_con
{
	function __construct()
	{
		$conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
		mysql_select_db(DB_NAME, $conn);
	}
	public function insert($fname,$email,$contact,$gender,$education,$adrss)
	{
	$ret=mysql_query("insert into insertdata(name,email,contactno,gender,education,addrss) values('$fname','$email','$contact','$gender','$education','$adrss')");
	return $ret;
	}
} 
?>