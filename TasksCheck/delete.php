<?php


require 'database/QueryBuilder.php';

$db = new QueryBuilder;

$id = $_GET['id'];

$db->delete("posts", $id);

header('Location: ./');