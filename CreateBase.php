<?php
include 'const.php';


function CreateDB($host,$user,$pass,$DBName)
 {
    $conn = mysqli_connect($host, $user, $pass);
    
    if(! $conn ) {
        mysqli_close($conn);
        // Bu yerde oshibka ugratmaly
       die('Server informations is not valid: ' . mysqli_error());
    }
              
     $sql = 'CREATE DATABASE IF NOT EXISTS '.$DBName;
    mysqli_query( $conn,$sql );
     mysqli_close($conn);
 }
 
 
 function CreateTable($TableName,$DBName,$host,$user,$pass){
     if ($TableName=="Authors"){
     $command= "CREATE TABLE IF NOT EXISTS $TableName (
         id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
         Author VARCHAR(40) NOT NULL            
         )"; 
         } else {
        $command= "CREATE TABLE IF NOT EXISTS $TableName (
                id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                Book VARCHAR(40) NOT NULL,  
                Author VARCHAR(40) NOT NULL          
                )"; 
         }
  $conn = new mysqli($host, $user, $pass, $DBName);
  $conn->query($command);
  $conn->close();
 }
 

    CreateDB($ServerHost,$UserName,$Password,$DBase);
    CreateTable('Authors',$DBase,$ServerHost,$UserName,$Password);
    CreateTable('Books',$DBase,$ServerHost,$UserName,$Password);
   
    // bu yerde servere 200 ugratmaly

?>

