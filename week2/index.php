<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Week2 example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<p><h1>page counter</h1></p>    

<?php
// includes
'srv/sunnies.php';

//sessions
if (isset($_SESSION['user'])) {
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
//debug on
//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//SQL
//$query = "INSERT INTO users (username, password)
//        VALUES ('{$_POST['username']}', '{$_POST['username']}'";

// invalid query

//$del_query = "DELETE FROM users WHERE username = '{$_POST['username']}"
//$sel_query = "SELECT * FROM users";

//load query
//$stmt = $conn->prepare($query);
//execute query

//$result = $stmt->execute();
//$result = $conn->query($sql);

//another line here
//???
//if ($result->num_rows > 0) 

function selectAll() {

    $conn  = new PDO("mysql:host=localhost;dbname=sunnies", 'root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sel_query = "SELECT * FROM user";
    $stmt = $conn->prepare($sel_query);
    $stmt->execute();
    $result = $stmt->fetchAll();

//select
    foreach($result as $row) {
        echo $row['username'];
        echo $row['password'];
        echo '<a href="del.php?rowid="'. $row['id'] . '>del</a>';
        echo '<a href="edit.php?rowid="'. $row['id'] . '>del</a>';
    }
}

?>

</body>
</html>