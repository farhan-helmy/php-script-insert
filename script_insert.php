<?php
include 'iyres-survey-questionaire.php';

$conn = mysqli_connect('localhost', 'root', '', 'api_test');
$decode = json_decode($data);

for ($x = 0; $x <= 100; $x++) {
    $key = $decode->sections[0]->fields[$x]->key;
    $text = $decode->sections[0]->fields[$x]->text;
    $no = $decode->sections[0]->fields[$x]->no;
    $sections = $decode->sections[0]->section_key;

    echo $key . ":" . $text . PHP_EOL;
    if ($key !== NULL) {
        $insert = "INSERT INTO questions(id, q_number, question, section) VALUES ('$key', '$no', '$text', '$sections')";
        $go = mysqli_query($conn, $insert);
        echo $insert . PHP_EOL;
    } else {
        for ($y = 0; $y <= 100; $y++) {
            $key = $decode->sections[1]->fields[$y]->key;
            $text = $decode->sections[1]->fields[$y]->text;
            $no = $decode->sections[1]->fields[$y]->no;
            $sections = $decode->sections[1]->section_key;
        
            echo $key . ":" . $text . PHP_EOL;
            if ($key !== NULL) {
                $insert = "INSERT INTO questions(id, q_number, question, section) VALUES ('$key', '$no', '$text', '$sections')";
                $go = mysqli_query($conn, $insert);
                echo $insert . PHP_EOL;
            } else {
                die();
            }
        }
        
    }
}




