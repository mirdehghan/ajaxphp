<?php
include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$db->query("UPDATE messages SET name = " . $name . " WHERE id = " . $id);