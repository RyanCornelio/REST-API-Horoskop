<?php

session_start();
require './astroCalculate.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['dateOfBirth']) && isset($_SESSION ['horoscope'])){
        updateHoroscope($_POST['dateOfBirth'], false);
        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array ('success' => false, 'message' => '',
    'session'=>$_SESSION['horoscope'], 'input'=>$_POST['dateOfBirth']));
    }
} else {
    echo json_encode(array ('success' => false, 'message' => ''));
}

?>