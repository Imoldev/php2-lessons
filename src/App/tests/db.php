<?php
require_once __DIR__ . '/../Db.php';
require_once __DIR__ . '/../App/Config.php';

$db =  Db::instance();

$paramsInsert = [
    'charField' => date('H:i:s'),
    'intField'=> 22222
];

$insert = 'INSERT INTO test_db (char_field, int_field) VALUES (:charField, :intField)';

$resultInsert = $db->execute($insert, $paramsInsert);
echo '<pre>';
var_dump($resultInsert);
echo '</pre>';

//exit();

$paramsUpdate = [
    'charField' => 'modified',
    'intField'=> 222222,
    'mod' => date('H:i:s'),
    'id' => 1
];

$update = 'UPDATE test_db SET char_field=:charField, int_field=:intField, modified_at=:mod WHERE id=:id';
$resultUpdate = $db->execute($update, $paramsUpdate);
echo '<pre>';
var_dump($resultUpdate);
echo '</pre>';


