<?php
$host = 'test.hackers.com';
$user = 'root';
$password = '';
$port = '3306';
$database = 'hackers';

$db = new mysqli($host, $user, $password);
$db->set_charset('utf8');

if(mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit;
}