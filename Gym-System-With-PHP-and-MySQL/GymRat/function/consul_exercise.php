<?php
$id_exercise = isset($_POST['id_exercise']) ? $_POST["id_exercise"] : "";
$exercise_name="";
$description="";
$image_url="";
include("conn.php");
$sql = "SELECT * FROM Exercises where id_exercise =" .$id_exercise;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $exercise_name= $row['exercise_name'];
        $description=$row['description'];
        $image_url=$row['image_url'];
    }
} 

