<?php
include("conn.php");
$sql = "SELECT * FROM Exercises where created_by =" . $_SESSION['id_user'];
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div  style="margin-top: 5%;">
            <div class="card" style="width: 18rem;">
                <img src="'.$row["image_url"].'" width="200px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">'.$row["exercise_name"].'</h5>
                <div class="btn_exercises">
                    <form action="Edit_exercise.php" method="post">
                        <button class="btn btn-primary" type="submit" name="id_exercise" value='.$row['id_exercise'].'> Edit </button></th>
                    </form>
                    <form action="Especific_exercise.php" method="post">
                        <button class="btn btn-primary" type="submit" name="id_exercise" value='.$row['id_exercise'].'> Show </button></th>
                    </form>
                    <form action="function/Delete_exercise.php" method="post">
                        <button class="btn btn-primary" type="submit" name="id_exercise" value='.$row['id_exercise'].'> Delte </button></th>
                    </form>
                </div>
                </div>
            </div>
        </div>';
    }
} 
