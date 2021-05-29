<?php

require_once __DIR__ . '/database.php';

//ottieni stanze

$sql = "SELECT `id`, `room_number` FROM `stanze`";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {

    $rooms = [];

    while ($row = $result->fetch_assoc()) {
        //popola array
        $rooms[] = $row;
    }

} else {
    echo "query error";
}
;

$conn->close();
