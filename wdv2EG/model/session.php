<?php
function doLogout() {
    session_destroy();
    // this won't work! $_SESSION['message'] = 'Logout Successful';
    header('location: index.php'); // delete cookie
}
?>
