<?php
include 'classes.php';

$Id=$_POST['id'];

$Book=new Book;
$Book->Delete($Id);
unset($Book);
echo "Successufully deleted!";
?>