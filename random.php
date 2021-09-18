<?php
include('config.php');
$msgs = array(
    array(
        'Welcome, Google'
    ),
    array(
        'Login Successfull'
    ),
    array(
        'Data Added id #45',
        'Data Updated id #40'
    ),
    array(
        'Thank Your for But',
        'Visit Again'
    ),
);
$set = rand(0, (count($msgs) - 1));
foreach ($msgs[$set] as $msg) {
    add_message($msg);
}
header('location:index.php');
exit();
