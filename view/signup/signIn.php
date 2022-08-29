<?php
$conn = mysqli_connect('localhost', 'root', '', 'truecaller');
if (isset($_POST["Login"])) {


    if ( !empty($_POST['password'])) {
        // $user = $_POST['uname'];
        $pass = $_POST['password'];


        $query = mysqli_query($conn, "SELECT * FROM users WHERE userPhone='" . $pass . "'");
        $numrows = mysqli_num_rows($query);
        if ($numrows != 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $dbusername = $row['userName'];
                $dbPhone=$row['userPhone'];
            }

            if ( $pass == $dbPhone ) {
                session_start();
                $_SESSION['sess_Phone'] = $pass;
                $_SESSION['sess_Name'] = $dbusername;
                /* Redirect browser */
                header("Location: ../index.php");
            } 
        } 
    } 
}