<?php
require 'baglanti.php';
$_SESSION = [];
session_destroy();
header('Location: index.php');
exit;
