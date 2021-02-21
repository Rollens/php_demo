<?
session_start();
require "vendor/autoload.php";
require "router.php";
/*
if(isset($_GET['page']) AND !empty($_GET['page'])){
    $page=$_GET['page'];
}
else{
    $page='main';
}

switch($page){
    case'main':
        include('main.php');
        break;
    case'name':
        include('name.php');
}*/

#require_once __DIR__ . '/cla.php';
#$NewOne = new Info('Hello World','18');
#echo "The guy is ". $NewOne->getName();
#require_once __DIR__ . '/lib/database.php';
#$db=Database::get();
#$DAO = new DatabaseAccessObject($mysql_address,$mysql_username,$mysql_password,$mysql_database);
#$table="user_info";
#$holder=$DAO->execute("SELECT * FROM $table");
#print_r($holder);