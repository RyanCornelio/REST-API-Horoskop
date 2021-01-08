<?php
function saveSession ($horoscope) {
    if (!isset($_SESSION['horoscope']) || true) {
        $_SESSION['horoscope'] = $horoscope;
        return 'Success';
    } else {
        return 'Fail';
    }
}
?>