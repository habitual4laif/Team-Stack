<?php
session_start();
session_destroy();

if (!isset($_SESSION['id'])) {
    exit();
}

header("Location: index.php?error=signout");
