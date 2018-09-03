<?php // Database
function processLogin() {
    $_SESSION['error'] = 'login failed';
    return false;

}
function processRegister() {
    $_SESSION['error'] = 'Registration failed';
    return false;
}

?>