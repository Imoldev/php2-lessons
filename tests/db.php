<?php
require_once __DIR__ . '/../Db.php';

$db = new Db();

$paramsInsert = [
    'charField' => date('H:i:s'),
    'intField'=> 11111
];

$insert = 'INSERT INTO test_db (char_field, int_field) VALUES (:charField, :intField)';

$resultInsert = $db->execute($insert, $paramsInsert);
var_dump($resultInsert);

// exit();

$paramsUpdate = [
    'charField' => 'modified',
    'intField'=> 222222,
    'mod' => date('H:i:s'),
    'id' => 1
];

$update = 'UPDATE test_db SET char_field=:charField, int_field=:intField, modified_at=:mod WHERE id=:id';
$resultUpdate = $db->execute($update, $paramsUpdate);
var_dump($resultUpdate);


