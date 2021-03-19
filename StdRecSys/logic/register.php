<?php
include '../config/database.php';

session_start();

function regno() {
    $regno = 'HTI-'.substr(rand(1, 100000000), 3, 4). '-' . rand(2,20000);
    return $regno;
}

if (isset($_POST['register'])) {
    if (empty($_POST['fullname']) and (empty($_POST['phone'])) and (empty($_POST['email'])) and ($_POST['gender'] == '- - Gender - -') and ($_POST['TrainingType'] == '- - Training Type - -') and ($_POST['course'] == '- - Course - -') and (empty($_POST['address']))) {
        $message = "Please input all required data";
    } elseif (empty($_POST['fullname'])){
        $message = "Please input fullname";
    } elseif (empty($_POST['phone'])) {
        $message = "Please input phone number";
    } elseif (empty($_POST['email'])) {
        $message = "Please input email";
    } elseif ($_POST['gender'] == '- - Gender - -') {
        $message = "Please select gender";
    } elseif ($_POST['TrainingType'] == '- - Training Type - -') {
        $message = "Please select training type";
    } elseif ($_POST['course'] == '- - Course - -') {
        $message = "Please select course";
    } elseif (empty($_POST['address'])){
        $message = "Please input address";
    } else {
    
        if ($connect) {
            $fullname = htmlentities($_POST['fullname']);
            $phone = htmlentities ($_POST['phone']);
            $email = htmlentities ($_POST['email']);
            $gender = htmlentities ($_POST['gender']);
            $TrainingType = htmlentities ($_POST['TrainingType']);
            $course = htmlentities ($_POST ['course']);
            $address = htmlentities ($_POST['address']);
            $regno = regno();
            /*$created_at = date("F d, Y h:i:s A");
            $created_at = date("Y-m-d H:i:s");
            echo $created_at;*/
        }
        
        //Database Query here
        
        /*select query to check if there is an existing record using the regno*/
        $selectQuery = mysqli_query($connect, "SELECT regno, phone, email FROM students");
        $selectResult = mysqli_fetch_array($selectQuery);
        
            if ($regno == $selectResult['regno']) {
                $message = "Student Exist With Same Reg. Number";
            } else {
                /*insert query to insert into the database when there is no existing user*/
                $statement = "INSERT INTO students (fullname, regno, phone, email, gender, training_type, course, std_address) VALUES ('$fullname', '$regno', '$phone', '$email', '$gender', '$TrainingType', '$course', '$address')";
                    $query = mysqli_query($connect, $statement);
                    if ($query) {
                        $_SESSION['regno'] = $regno;
                        
                        $message = "You Have Successfully Registered";
                        
                        header('location: ./view.php');
                    } else {
                        $message = die(mysqli_error($connect) . "Registration Failed");
                    }
            }
            /*echo "<div><td>$row[regno]</td>";
            echo "<td>$row[phone]</td>";
            echo "<td>$row[email]</td></div>";*/
    }
}
?>