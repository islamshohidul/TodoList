<?php
namespace Todo;
use Todo\DbConfig;
$filepath = realpath (dirname(__FILE__));

require_once($filepath."/DbConfig.php");

class ApiOperation extends DbConfig{
	 
	public function __construct(){
		return 'this this api endpoint';
	}
	
	
	public function storeData(){
		
		$db = new DbConfig();
		
	
		 
                $FirstName = $_REQUEST['title'];	
                $LastName = 0;
               

                 $query = "insert into todolist (title,completed) values('$FirstName','$LastName')";
            $result = mysqli_query($db->connection,$query);
            
		  
	}
}

?>