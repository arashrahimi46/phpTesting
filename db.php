
<?php
class DB {

  protected static $instance;

	protected function __construct() {}
	public static function getInstance() {
   $servername = "localhost";
     $username = "root";
     $password = "";
     $db_name = "makeen_news";

		if(empty(self::$instance)) {

			$db_info = array(
				"db_host" => $servername,
				"db_port" => "3306",
				"db_user" => $username,
				"db_pass" => $password,
				"db_name" => $db_name,
				"db_charset" => "UTF-8");

			try {
				self::$instance = new PDO("mysql:host=".$db_info['db_host'].';port='.$db_info['db_port'].';dbname='.$db_info['db_name'], $db_info['db_user'], $db_info['db_pass']);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);  
				self::$instance->query('SET NAMES utf8');
				self::$instance->query('SET CHARACTER SET utf8');
        echo "okkkkkkkkkkk";

			} catch(PDOException $error) {
				echo $error->getMessage();
			}

		}

		return self::$instance;
	}

	public static function setCharsetEncoding() {

		self::$instance->exec(
			"SET NAMES 'utf8';
			SET character_set_connection=utf8;
			SET character_set_client=utf8;
			SET character_set_results=utf8");
	}
}

?>

<!-- use DB class -->
<?php
/*
require_once ('database.class.php');

try {
	$db = DB::getInstance();
	DB::setCharsetEncoding();

	$sqlExample = 'SELECT * FROM users WHERE _id = 1';
	$stm = $db->prepare($sqlExample);

	$stm->execute();

	return $stm->fetchAll(PDO::FETCH_ASSOC);
  
} catch (Exception $e) {
	print $e->getMessage();
  
} 
*/
?>