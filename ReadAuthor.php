<?php
include 'classes.php';

$Id=$_POST['id'];

$Author=new Author;
echo $Author->Read($Id);
unset($Author);
?>