<?php
include 'classes.php';

$Id=$_POST['id'];
$NewName=$_POST['name'];
$NewAuthor=$_POST['author'];

$Book=new Book;
$Book->Update($Id,$NewName,$NewAuthor);
unset($Book);
echo "Successufully Updated!";
?>