<?php 
session_start();
$exercise_name = isset($_POST['exercise_name']) ? $_POST["exercise_name"] : "";
$description = isset($_POST['description']) ? $_POST["description"] : "";
$image_url = isset($_POST['image_url']) ? $_POST["image_url"] : "";
$created_by= $_SESSION['id_user'];
require_once("conn.php");
$sql = "insert into Exercises (exercise_name, description, image_url, created_by) values ('$exercise_name','$description','$image_url','$created_by')";
if ($conn->query($sql) === TRUE) {
    header("Location: ../home.php");
    die();
} else {
    header("Location: error.php");
    die();
}
