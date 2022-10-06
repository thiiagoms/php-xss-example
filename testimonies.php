<?php


declare(strict_types=1);

/**
 * Database connection
 * 
 * @var PDO
 */
$db = require_once('database.php');

$stmt = $db->query("SELECT * FROM testimonies");
$testimonies = $stmt->fetchAll(PDO::FETCH_ASSOC);

require_once('view.php');
