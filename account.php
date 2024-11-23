<?php
require 'storage.php';
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;
$limit = max(1, min($limit, 100)); 
$users_list = array_slice($users, 0, $limit); 
require 'account_page.html';
?>