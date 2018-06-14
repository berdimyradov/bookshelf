<?php
include 'classes.php';

$Id=$_POST['id'];
$NewValue=$_POST['name'];

$Author=new Author;
$Author->Update($Id,$NewValue);
unset($Author);
echo "Successufully Updated!";
?>