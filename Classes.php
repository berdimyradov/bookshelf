<?php

include 'funk.php';

class Author{
    function Create($Value){
    InsertAuthor($Value);
    }

    function Read($id){
    return ReadAuthor($id);
    }

    function Update($id,$NewValue){
    UpdateAuthor($id,$NewValue);
    }

    function Delete($id){
    DeleteData('Authors',$id);
    }

}



class Book{
    function Create($BookName,$Author){
    InsertBook($BookName,$Author);
    }

    function Read($id){
    return ReadBook($id);
    }

    function Update($id,$NewBookName,$NewAuthor){
    UpdateBook($id,$NewBookName,$NewAuthor);
    }

    function Delete($id){
    DeleteData('Books',$id);
    }

}

?>