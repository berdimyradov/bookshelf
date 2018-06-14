<?php
include 'classes.php';

$Name=$_POST['book'];
$Author=$_POST['author'];

$Book=new Book;
$Book->Create($Name,$Author);
unset($Book);
echo $Author.". ".$Name.": Added to bookshelf.";

?>