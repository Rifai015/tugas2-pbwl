<?php

use App\Controllers\Login;

$lgn = new Login();

if (isset($_POST['b_login'])) {
    $lgn->login();
}

if (isset($_POST['b_logout'])) {
    $lgn->logout();
}
