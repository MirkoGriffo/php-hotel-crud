<?php
require_once __DIR__ . '/partials/scripts/get-stanze.php';?>

<!DOCTYPE html>
<html lang="en">

<?php

require_once __DIR__ . '/partials/template/head.php';

?>

<body>
    <main class="container">

    <h1 class="my-4">Lista stanze</h1>

    <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Stanza n.</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php

if (!empty($rooms)) {
    foreach ($rooms as $room) {?>
                <tr>
                    <td><?php echo $room['id'] ?></td>
                    <td><?php echo $room['room_number'] ?></td>
                    <td><a class = "text-sucess" href="./show.php?id=<?php echo $room['id'] ?>">View</a></td>
                </tr>
                <?php }}?>
            </tbody>
        </table>

    </main>
</body>
</html>
