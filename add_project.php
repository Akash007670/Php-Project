<?php
 
include("db.php");
 
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $stmt = $conn->prepare("insert into records(name,course,fees,status)values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$course,$fees,$status);
 
 
    $name = $_POST['studname'];
    $course = $_POST['course'];
    $fees = $_POST['fees'];
    $status = $_POST['status'];
 
    if($stmt->execute())
    {
        echo 1;
    }
    else
    {
        echo 0;
    }
 
    $stmt->close();
}
 
?>