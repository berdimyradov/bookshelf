<?php
include 'classes.php';

$Id=$_POST['id'];

$Author=new Author;
$Author->Delete($Id);
unset($Author);
echo "Successufully deleted!";
?>