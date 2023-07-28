<?php

function getRandomText() {
    $filename = 'hitokoto.txt';
    $file = file($filename);
    $randomLine = array_rand($file);
    return $file[$randomLine];
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Content-Type: text/plain');
    header('Cache-Control: no-cache, no-store, must-revalidate');
    header('Pragma: no-cache');
    header('Expires: 0');
    echo getRandomText();
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: text/plain');
    header('Cache-Control: no-cache, no-store, must-revalidate');
    header('Pragma: no-cache');
    header('Expires: 0');
    echo getRandomText();
}

?>
