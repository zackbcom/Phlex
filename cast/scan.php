<?php
require_once('Discover.php');

$scanner = new Scanner();
$results = $scanner->discover();
echo json_encode($results);