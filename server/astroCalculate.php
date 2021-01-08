<?php
require './saveSession.php';
function updateHoroscope ($dateOfBirth) {
    $dateOfBirth = new DateTime($dateOfBirth);
    $month = $dateOfBirth->format('m');
    $day = $dateOfBirth->format('d');
    if  (($month == 1 && 20 <=$day  || $month == 2 && 18 >=$day )) {
        return saveSession("Aquarius", true);
    } else if  (($month == 2 && 19 <=$day  || $month == 3 && 20 >= $day )) {
        return saveSession("Pisces", true);
    } else if  (($month == 3 && 21<= $day  || $month == 4 && 19 >= $day )) {
        return saveSession("Aries", true);
    } else if  (($month == 4 && 20<= $day  || $month == 5 && 20 >= $day )) {
        return saveSession("Taurus", true);
    } else if  (($month == 5 && 21<=$day  || $month == 6 && 20 >= $day )) {
        return saveSession("Gemini", true);
    } else if  (($month == 6 && 21<=$day  || $month == 7 && 22 >= $day )) {
        return saveSession("Cancer", true);
    } else if  (($month == 7 && 23 <= $day   || $month == 8 && 22 >= $day )) {
        return saveSession("Leo", true);
    } else if  (($month == 8 && 23<=$day  || $month == 9 && 22 >= $day )) {
        return saveSession ("Virgo", true);
    } else if  (($month == 9 && 23<=$day  || $month == 10 && 22 >= $day )) {
        return saveSession ("Libra", true);
    } else if  (($month == 10 && 23<=$day  || $month == 11 && 21 >= $day )) {
        return saveSession ("Scorpio", true);
    } else if  (($month == 11 && 22<=$day  || $month == 12 && 21 >= $day )) {
        return saveSession ("Sagittarius", true);
    } else if (($month == 12 && 22<=$day  || $month == 1 && 19 >= $day )) {
        return saveSession ("Capricorn", true);
}}
    

?>