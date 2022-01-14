<?php
declare(strict_types=1);

session_start();

if (isset($_SESSION['name'])) {
    echo "Привет, ${_SESSION['name']}
    </br>
    <a href='./exit.php'>Выйти</a>" . PHP_EOL;
} else {
    include('form.html');
}
