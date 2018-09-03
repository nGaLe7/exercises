<html>

<head>

<title>Week 7</title>
<style></style>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
 function doEmailCheck(emailAddr) {
     var ajaxUrl = 'view.php?email=' + emailAddr;
        $.ajax({
            type: "get",
            url: ajaxUrl,
            dataType:'html',
        success: function (msg) {
            if(msg == 'user exists') {         
            $( "#errmsg" ).html( msg );}
            else {
                $( "#errmsg" ).html( '' );
            }
        }
    });
}
</script>

</head>

<body>

<?php 
include 'view.php';
include 'model.php';
?>

<ul>
 <li><a href="index.php?pageid=home">Home</a></li>
 <li><a href="index.php?pageid=productList">Product List</a></li>
 <li><a href="index.php?pageid=register">Register</a></li>
 <li><a href="index.php?pageid=login">Login</a></li>
</ul>

<section>

<?php

if(isset($_GET['pageid'])) {
    // something;
    if($_GET['pageid'] == 'home') {
        home();
    }
    if($_GET['pageid'] == 'productList') {
        productList();
    }

    if($_GET['pageid'] == 'register') {
        registerForm();
    }
    if($_GET['pageid'] == 'login') {
        loginForm();
    }
    if($_GET['pageid'] == 'loggingin') {
        if(processLogin() == false) {
            loginForm();
        } else {

        }
    }
    if($_GET['pageid'] == 'registering') {
        if(processRegister() == false) {
        registerForm();
        } else {
            
        }
    }
}
else {
    home();
}
showMessage();
?>

</section>

</body>

</html>