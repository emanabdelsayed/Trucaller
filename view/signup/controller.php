<?php
include 'phpmailer.php';
session_start();
error_reporting(E_ALL & ~E_NOTICE);
class Controller
{
    function __construct()
    {
        $this->processMobileVerification();
    }
    function processMobileVerification()
    {
        switch ($_POST["action"]) {

            case "save_into_db":

                $firstName = $_POST['userName'];
                $phoneNo = $_POST['userPhone'];
                $password = $_POST['userPassword'];
                $password = md5($password);
                $conn = mysqli_connect('localhost', 'root', '', 'truecaller');
                $query1 = "SELECT * FROM users WHERE userPhone='$phoneNo'";
                $result1 = mysqli_query($conn, $query1);
                $row = mysqli_fetch_array($result1, MYSQLI_ASSOC);
                if ($row) {
                    echo json_encode(array("type" => "error", "message" => "This Account already exist."));
                    exit();
                } else {

                    $query = "INSERT INTO users (userName,userPhone,userPassword) 
                    VALUES ('$firstName','$phoneNo','$password')";

                    $result = mysqli_query($conn, $query);
                    if ($result == FALSE) {
                        die(mysqli_error($conn));
                        echo json_encode(array("type" => "error", "message" => "Error."));
                        exit();
                    } else
                    
                        echo json_encode(array("type" => "success", "message" => "Successfully inserted."));
                    sendMail($firstName, $phoneNo);
                    // header("Location: index.php");
                }

                break;
        }
    }
}
$controller = new Controller();
