<?php

require_once('src/AssistantConnect.php');
require_once('src/Select/Select.php');

$db = new src\AssistantConnect('ass', 'localhost', 'root', '');
$testAll = new src\Select\Select($db);

echo '<pre>';
var_dump($testAll->findAll('test'));
echo '</pre>';
?>