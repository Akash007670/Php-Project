<?php
 
include ("db.php");
 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    $stmt = $conn->prepare("select id,name,course,fees,status from records where id = ?");
    $stmt->bind_param("s",$project_id);
    $stmt->bind_result($id, $name, $course, $fees, $status);
 
 
    $project_id = $_POST['project_id'];
 
    if ($stmt->execute()) {
        while ($stmt->fetch()) {
            $output = array('id' => $id, 'name' => $name, 'course' => $course, 'fees' => $fees, 'status' => $status);
        }
        echo json_encode($output);
    }
 
 
    $stmt->close();
 
}
 
 
?>