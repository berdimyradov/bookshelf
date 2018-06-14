<?php

include 'const.php';


function connectToDB()
{
    global $ServerHost;
    global $UserName;
    global $Password;
    global $DBase;
   $con= mysqli_connect($ServerHost,$UserName,$Password); 
   mysqli_select_db($con,$DBase); 
   return $con;
}

 function InsertAuthor($Author){
    $conn=connectToDB();
    $command = "INSERT INTO Authors (Author) VALUES ('$Author')";
    mysqli_query($conn,$command);
    mysqli_close($conn);  
}


function UpdateAuthor($id,$NewValue){
    $conn=connectToDB();
    $command = "UPDATE Authors SET Author = '$NewValue' WHERE id = '$id'";
    mysqli_query($conn,$command);
    mysqli_close($conn);    
}


function DeleteData($Table,$id){
    $conn=connectToDB();
    $command = "DELETE FROM $Table WHERE id = '$id'";
    mysqli_query($conn,$command);
    mysqli_close($conn);    
}


function ReadAuthor($id){
    $conn=connectToDB();
    $command = "SELECT * FROM Authors WHERE (id='$id')";
    $query = mysqli_query($conn,$command);
    $resArray = mysqli_fetch_array($query);
    $result =$resArray['Author'];
    mysqli_close($conn);
    if ($result=='') {$result="Nothing not found by this ID";}
    return $result;
}


//// Functions for working with table "Books"

function InsertBook($BookName,$Author){
    $conn=connectToDB();
    $command = "INSERT INTO Books (Book, Author) VALUES ('$BookName' ,'$Author')";
    mysqli_query($conn,$command);
    mysqli_close($conn);  
}


function UpdateBook($id,$NewBookName,$NewAuthor){
    $conn=connectToDB();
    $command = "UPDATE Books SET Book = '$NewBookName', Author = '$NewAuthor' WHERE id = '$id'";
    mysqli_query($conn,$command);
    mysqli_close($conn);    
}


function ReadBook($id){
    $conn=connectToDB();
    $command = "SELECT * FROM Books WHERE (id='$id')";
    $query = mysqli_query($conn,$command);
    $resArray = mysqli_fetch_array($query);
    $result ="Author: ".$resArray['Author']."<br> Book name: ".$resArray['Book'];
    if ($result=='') {$result="Nothing not found by this ID";}
    mysqli_close($conn);
    return $result;
}

function ListAuthors(){
    $conn=connectToDB();
    $command = "SELECT * FROM Authors";   
    $query = mysqli_query($conn,$command);
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Author</th>";
    while ($res=mysqli_fetch_array($query))
    {
        echo "<tr>";
        echo "<td>" . $res['id'] . "</td>";
        echo "<td>" . $res['Author'] . "</td>";
        echo "</tr>";
    } 
    echo "</table>";
    mysqli_close($conn); 
}


function ListBooks(){
    $conn=connectToDB();
    $command = "SELECT * FROM Books";   
    $query = mysqli_query($conn,$command);
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Author</th>";
    echo "<th>Book Name</th>";
    while ($res=mysqli_fetch_array($query))
    {
        echo "<tr>";
        echo "<td>" . $res['id'] . "</td>";
        echo "<td>" . $res['Author'] . "</td>";
        echo "<td>" . $res['Book'] . "</td>";
        echo "</tr>";
    } 
    echo "</table>";
    mysqli_close($conn); 
}

?>