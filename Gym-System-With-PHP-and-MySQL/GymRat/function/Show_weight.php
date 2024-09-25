<?php
$sql = "SELECT * FROM ExerciseWeights where id_exercise = $id_exercise";
$dates = array();
$weights = array();
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($dates, $row["date_recorded"]);
        array_push($weights, $row["weight"]);

        echo '<li class="list-group-item">Date / ' . $row["date_recorded"] . ' / ' . $row["weight"] . ' kg</li>';
    }
} else {
    echo '<li class="list-group-item">Empty</li>';
}
