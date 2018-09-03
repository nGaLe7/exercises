<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Week3 example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<p><h1>page counter</h1></p>


<form action="index.php" method="post">
<input type="text" name="username">
<input type="text" name="email">
<input type="text" name="password">
<input type="submit" name="submit">

</form>



<?php
// includes
'srv/sunnies.php';

//sessions
/*if (isset($_SESSION['user'])) {
    // this user has visited us before;    
    $_SESSION['count'] = $_SESSION['count'] + 1;
    print_r($_SESSION['count']);
}
else {
    $_SESSION['user'] = 'anon';
    $_SESSION['count'] = 1;
    print_r($_SESSION['count']);
}
// form actions
if (isset($_POST['login'])) {
    $_SESSION['user'] = 'user';
    echo '<p>login</p>';        
}
if (isset($_POST['register'])) {
    $_SESSION['user'] = 'user';
    echo '<p>registering</p>';
}

if (isset($_POST['logout'])) {
    $_SESSION['user'] = 'anon';
    $_SESSION['count'] = '0';
    echo '<p>loggingout</p>';
}
//header
//include ('header.php');

//display
if (isset($_GET['pageid'])) {
    if($_GET['pageid'] == 'login') {
        echo '<p>login</p>';
    }
    
    if($_GET['pageid'] == 'logout') {
        echo '<p>logout</p>';
    }
    if($_GET['pageid'] == 'register') {
        echo '<p>register</p>';
    }
    if($_GET['pageid'] == 'location') {
        echo '<p>location</p>';
    }

}
*/

/*if(isset($_GET['delete'])) {
    echo 'delme';
    $conn = new PDO("mysql:host=localhost;dbname=sunnies", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $del_query = "DELETE FROM users WHERE id ('{$_GET['rowid']}')";

    $stmt = $conn->prepare($del_query);
    $result = $stmt->execute();
    
    if($stmt->rowCount() == 0 ) {
       echo 'fail';
    }
}*/

//debug on
if(isset($_POST['submit'])) {
    $conn = new PDO("mysql:host=localhost;dbname=sunnies", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //SQL
    $query = "INSERT INTO users (username, email, password) VALUES ('{$_POST['username']}', '{$_POST['email']}', '{$_POST['password']}')";
    // invalid query
    //$del_query = "DELETE FROM users WHERE username = '{$_POST['username']}";  
    //$sel_query = "SELECT * FROM users";

    //load query
    $stmt = $conn->prepare($query);
    //execute query

    $result = $stmt->execute();
}

//another line here
//???
//if ($result->num_rows > 0); 
selectAll();

function selectAll() {
    $conn  = new PDO("mysql:host=localhost;dbname=sunnies", 'root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sel_query = "SELECT * FROM users";
    $stmt = $conn->prepare($sel_query);
    $stmt->execute();
    $result = $stmt->fetchAll();

//select
    foreach($result as $row) {
        echo $row['username'];
        echo $row['email'];
        echo $row['password'];       
        echo '<a href="delete.php?rowid='. $row['id'] . '">del</a>';
        echo '<a href="edit.php?rowid='. $row['id'] . '">edit</a>';
    }
}
?>

</body>
</html>