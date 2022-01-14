<?php
declare(strict_types=1);

session_start();

if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
}

header('Location: ./index.php');