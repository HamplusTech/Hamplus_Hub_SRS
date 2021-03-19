<?php
include '../config/database.php';

session_start();

(empty($_SESSION['regno'])) ? header('Location:../index.php') : "";

(isset($_POST['edit'])) ? header('location:../template/edit.php') : "";

$regno = $_SESSION['regno'];

$stmt = "SELECT * FROM students WHERE regno = '$regno'";

$query = mysqli_query($connect, $stmt);

$result = mysqli_fetch_array($query);

//var_dump($_SESSION);

if (isset($_POST['delete'])) {
    $delete = 1;
}

(isset($_POST['no'])) ? header('location:../template/view.php') : "";

if (isset($_POST['yes'])) {
    if ($connect) {
        $delete = "DELETE FROM students WHERE regno = '$regno'";
        $query2 = mysqli_query($connect, $delete);
        if ($query2):
            $message = "<b>Record deleted successfully!</b>";
            header('location:../index.php');
        else:
            $message = "<b>Record deletion failed!</b>";
        endif;
    }
}
?>