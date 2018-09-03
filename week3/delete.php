<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Week3 Delete</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<p><h1>Delete</h1></p>


<form action="delete.php" method="get">
<input type="text" name="username">
<input type="text" name="email">
<input type="text" name="password">
<input type="submit" name="submit" value"submit">
</form>

<?php 

'srv/sunnies.php';

if(isset($_GET['delete'])) {
    echo 'delme';
    $conn = new PDO("mysql:host=localhost;dbname=sunnies", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    //$id=$_GET['rowid'];

    $del_query = "DELETE FROM users WHERE id '{$_GET['rowid']}'"; 
    //$del_query="DELETE FROM users WHERE id='$id'";

    $stmt = $conn->prepare($del_query);
    $result = $stmt->execute();
    
}



/*if(isset($_GET['rowid'])) {
    $result = mysql_query("DELETE FROM `users` WHERE id='".mysql_real_escape_string($_GET['rowid']). "'");
    echo mysql_error();
    if($result)
        echo "succces";

} else {
    echo 'GET NOT SET';
}*/

//example? 
/*if(isset($_POST['delete'])) {
    
    $conn = new PDO("mysql:host=localhost;dbname=sunnies", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $id = $_POST['emp_id'];
    
    $sql = "DELETE FROM users WHERE id = $id" ;
    mysql_select_db('test_db');
    $retval = mysql_query( $sql, $conn );
    
    if(! $retval ) {
       die('Could not delete data: ' . mysql_error());
    }
    
    echo "Deleted data successfully\n";
    
    mysql_close($conn);
 }*/


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