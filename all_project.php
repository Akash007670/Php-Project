<?php
 
include ("db.php");
 
$stmt = $conn->prepare("select id,name,course,fees,status from records order by id Desc");
$stmt->bind_result($id,$name,$course,$fees,$status);
 
if($stmt->execute())
{
    while($stmt->fetch())
    {
        $output[] = array('id' => $id,'name' => $name,'course' => $course,'fees' => $fees,'status' => $status);
    }
    echo json_encode($output);
}
 
 
$stmt->close();
 
 
?>