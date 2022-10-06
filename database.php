<?php

declare(strict_types=1);

/**
 * Database object connetion
 * 
 * @var PDO
 */
$db = new PDO("sqlite:db.sqlite");
return $db;