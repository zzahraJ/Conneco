<!-- php
    abstract class Db {
        private static $conn;

        private static function getConfig(){
            // get the config file
            return parse_ini_file(__DIR__ . "../config.ini");
        }

        public static function getInstance() {
            if(self::$conn != null) {
                // REUSE our connection
                // echo "🚀";
                return self::$conn;
            }
            else {
                // CREATE a new connection

                // get the configuration for our connection from one central settings file
                $config = self::getConfig();
                $database = $config['database'];
                $user = $config['user'];
                $password = $config['password'];
                $host = $config['host'];

                // echo "💥";
                self::$conn = new PDO("mysql:host=$host;dbname=".$database, $user, $password);
                return self::$conn;
            }
        }
    } --

    <?php
	function canLogin($p_username, $p_password) {

		$conn = new PDO('mysql:host=ID391610_conneco.db.webhosting.be;dbname=ID391610_conneco', "ID391610_conneco", "C0nn3c01sg3w3ld1g");
		$statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
		$statement->bindValue(":email", $p_username); // sql beschermen tegen injectie
		$statement->execute();
		$user = $statement->fetch(PDO::FETCH_ASSOC);
		$hash = $user['password'];
		
		if(password_verify($p_password, $hash)){
			return true;
		}
		else{
			return false;
		}
	
	}; 
?>