<?php

declare(strict_types=1);

$db = require('database.php');

$testimony = $_POST['testimony'];
$stmt = $db->prepare("INSERT INTO testimonies (testimony) VALUES (:testimony)");
$stmt->bindValue(':testimony', $testimony);
$stmt->execute();

header('Location: testimonies.php');
