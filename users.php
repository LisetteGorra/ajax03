<?php
//Create Connection
$conn = mysqli_connect('localhost', 'lgorra', '', 'ajaxtest');

$query = 'SELECT * FROM users';

//GET result 
$result = mysqli_query($conn, $query);

//Fetch Data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);
// this takes our result and puts the array into json format and gives us our response