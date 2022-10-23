<?php
$file = __DIR__ . '/build' . $_SERVER["PHP_SELF"];

if (file_exists($file)) {
    return false;
} else {
    require_once __DIR__ . '/../index.php';
}
#echo $_SERVER["PHP_SELF"];
