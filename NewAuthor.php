<?php
include 'classes.php';

$Name=$_POST['author'];

$Author=new Author;
$Author->Create($Name);
unset($Author);
echo $Name.": Added to authors list";

?>