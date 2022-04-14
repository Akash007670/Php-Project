<?php
 
include("db.php");
 
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $stmt = $conn->prepare("delete from records where id = ?");
 
    $stmt->bind_param("s",$project_id);
 
    $project_id = $_POST['project_id'];
 
 
 
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