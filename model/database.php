<?php

class Database{
    //phpmysql login info
    private static $dsn='mysql:host=phpmyadmin.mandrake.arvixe.com;dbname=webtrends';
    private static $username = 'webtrends';
    private static $password ='webtrends2015';
            
    //reference to db connection
    private static $dbCon;
    
public function __construct(){}
    
//return reference to pdo object
public static function getDB(){
    
        if(!isset(self::$dbCon)){
                try{
                    self::$dbCon = new PDO(self::$dsn, self::$username, self::$password);
                    //echo "PDO connected";
                }
                catch(PDOException $e){
                    $error_message= $e->getMessage();
                    exit();
                }
        }  
        return self::$dbCon;
    }
}

$pdo = Database::getDB();
?>
