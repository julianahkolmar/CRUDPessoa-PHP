<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Connection
 *
 * @author 182100530
 */

require_once 'config.php';
class Connection {
   //put your code here
   public static function getConnection ($host, $dbName, $user, $pass){
       $dns = "mysql:host=$host;dbname=$dbName;charset=UTF8";
       
       try{
           $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
           return new PDO($dns,$user,$pass,$option);
       } catch (PDOException $ex) {
           die($ex->getMessage());

       }
   }
}
return Connection::getConnection($host, $dbName, $user, $pass);