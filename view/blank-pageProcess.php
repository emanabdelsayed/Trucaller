<?php
$conn = mysqli_connect('localhost', 'root', '', 'truecaller');
if(isset($_POST['Add'])){
    
    $userName = $_POST['name'];
    $userPhone = $_POST['phone'];
    $query = mysqli_query($conn, "SELECT * FROM `known/unknown callers` WHERE callerPhone='".$userPhone."'");
    $numrows = mysqli_num_rows($query);
    if ($numrows) {
        echo json_encode(array("type" => "error", "message" => "This contact already exist."));
        exit();
    } else {
        $query = "INSERT INTO `known/unknown callers` (callerName,callerPhone) 
        VALUES ('$userName','$userPhone')";
        $result = mysqli_query($conn, $query);
        $query = "INSERT INTO `contactlist` (callerName,callerPhone) 
        VALUES ('$userName','$userPhone')";
        $result = mysqli_query($conn, $query);
        if ($result == FALSE) {
            die(mysqli_error($conn));
            echo json_encode(array("type" => "error", "message" => "Error."));
            exit();
        } else
            echo json_encode(array("type" => "success", "message" => "Successfully inserted."));
        header("Location: index.php");
    }
}
else if (isset($_POST["block"])) {

   

    $userPhone = $_POST['phone'];
    $query = "INSERT INTO `block list`(blockName,blockPhone) SELECT callerName,callerPhone  FROM contactlist where  callerPhone='" . $userPhone . "'";

    $result = mysqli_query($conn, $query);
    // include('conn.php');
    $query = mysqli_query($conn, "DELETE FROM contactlist WHERE callerPhone='" . $userPhone . "'");
    header("Location: index.php");

    
}
    
    else if (isset($_POST["delete"])){
$userPhone = $_POST['phone'];$query = mysqli_query($conn, "DELETE FROM contactlist WHERE callerPhone='" . $userPhone . "'");
    header("Location: index.php");    
}
    
    
