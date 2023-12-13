<?php
require('db_connect.php');

$db = db_connect();

$stmt = $db->prepare('update product set name=? url=? where id=?');
if (!$stmt) {
    die($db->error);
}

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT); 
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_STRING);
$stmt->bind_param('ssi', $name, $url, $id);

$success = $stmt->execute();
if (!$success) {
    die($db->error);
}

header('Location: new-release.php');

?>