<?php
include 'classes.php';

$Id=$_POST['id'];

$Book=new Book;
echo $Book->Read($Id);
unset($Book);
?>