<?php 
 
require_once 'connection.php';
 
if($_POST) {
    $id = $_POST['id'];
 
$sql = "DELETE FROM tiffin WHERE tname='{$id}'";
    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully removed!!</p>";
        echo "<a href='../index.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
    }
 
    $connect->close();
}
 
?>