<?php
$conn = mysqli_connect('localhost', 'root', '', 'truecaller');
$query = "SELECT * FROM `block list`";
// include 'conn.php';
$query_run = mysqli_query($conn, $query);
foreach ($query_run as $items){
if(isset($_POST[$items['blockId'].""]))
{
        $query = "INSERT INTO `contactlist`(callerName,callerPhone) 
    SELECT blockName,blockPhone  FROM `block list` where  blockId='" . $items['blockId'] . "'";
        $result = mysqli_query($conn, $query);
    $query = "DELETE FROM `block list` WHERE blockId='".$items['blockId']."'";
    $result = mysqli_query($conn, $query);
    header("Location: block.php");
}
}
?>

    <!-- $ID = $_POST[$items['blockId'] . ""];
    $query = "INSERT INTO `contactlist`(callerName,callerPhone) 
    SELECT blockName,blockPhone  FROM `block list` where  blockId='" . $ID . "'";
    $result = mysqli_query($conn, $query);
    // include('conn.php');
    $query = mysqli_query($conn, "DELETE FROM `block list` where  blockId='" . $ID . "'");
    header("Location: ../index.php");
    break; -->
