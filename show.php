<?php
require_once __DIR__ . '/partials/scripts/get-single-room.php'
?>


<body>

<main class="container">
<h1>Dettaglio stanza:</h1>

<ul>
    <li>Stanza n.: <?php echo $room['room_number'] ?></li>
    <li>Piano: <?php echo $room['floor'] ?></li>
    <li>N. letti: <?php echo $room['beds'] ?></li>
</ul>

<a href="./index.php">Back</a>

</body>
