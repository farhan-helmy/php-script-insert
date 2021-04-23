<?php

$conn = mysqli_connect('localhost', 'root', '', 'api_test');

$test = mysqli_query($conn, "SELECT * FROM questions");
$rows = array();
while($res = mysqli_fetch_array($test)){
    $rows[] = $res;
}

$encode = json_encode($rows);

print_r($encode);