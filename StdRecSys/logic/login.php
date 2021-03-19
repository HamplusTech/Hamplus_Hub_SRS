<?php
//importing the database connection
include '../config/database.php';

session_start();

//login button
if (isset($_POST['login'])) {
    $regno = $_POST['regno'];
    $phone = $_POST['phone'];
    
    if ((empty($regno)) && (empty($phone))) {
        $message = "Please fill all fields";
    } elseif (empty($regno)) {
        $message = "Please fill the registration number";
    } elseif (empty($phone)) {
        $message = "Please fill the phone number";
    } elseif (!is_numeric($phone)) {
        $message = "Phone number must be numeric";
    } else {
        $query = mysqli_query($connect, "SELECT * FROM students");
        
        if ($query):
            while ($result = mysqli_fetch_assoc($query)):

                if ($regno == $result['regno'] and $phone == $result["phone"]) {
                    $message = "Successful";
                    $_SESSION['regno'] = $result['regno'];
                    header('Location:./view.php');
                } elseif ($regno != $result['regno']) {
                    $message = "Login Error! <em>Invalid Registration Number</em>";
                } elseif ($phone != $result['phone']) {
                    $message = "Login Error! <em>Invalid Phone Number</em>";
                }
            endwhile;
        endif;
    }
}



?>