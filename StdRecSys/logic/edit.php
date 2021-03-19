<?php
include '../config/database.php';
error_reporting(0);
session_start();

$regno = $_SESSION['regno'];
$fullname = htmlentities($_POST['fullname']);
$phone = htmlentities ($_POST['phone']);
$email = htmlentities ($_POST['email']);
$gender = htmlentities ($_POST['gender']);
$TrainingType = htmlentities ($_POST['TrainingType']);
$course = htmlentities ($_POST ['course']);
$address = htmlentities ($_POST['address']);

(empty($_SESSION['regno'])) ? header('location: ./template/index.php') : "";

$stmt = "SELECT * FROM students WHERE regno = '$regno'";
$query = mysqli_query($connect, $stmt);
$result = mysqli_fetch_array($query);

/*$created_at = date("F d, Y h:i:s A");*/
$updated_at = date("Y-m-d H:i:s");
/*echo $created_at;*/

if (isset($_POST['save'])):
    if ($connect):
if ($_POST['gender'] == '- - Gender - -') {
        $message = "Please select gender";
    } elseif ($_POST['TrainingType'] == '- - Training Type - -') {
        $message = "Please select training type";
    } elseif ($_POST['course'] == '- - Course - -') {
        $message = "Please select course";
    } else {
        $update = "UPDATE students SET fullname = '$fullname', phone = '$phone', email = '$email', gender = '$gender', training_type = '$TrainingType', course = '$course', std_address = '$address', date_time_update = '$updated_at' WHERE regno = '$regno'";
        $query2 = mysqli_query($connect, $update);
if ($query2):
$message = "<b>Record updated successfully!</b>";
    header('location:../template/view.php');
else:
$message = "<b>Record update failed!</b>";
endif;
    }
    endif;
endif;

?>