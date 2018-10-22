<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>3D Print Aus Admin Page</title>
<link href="../css/styles.css" rel="stylesheet">
<link href="../css/normalize.css" rel="stylesheet">
<script src="../JS/script.js" defer ></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<!-- change all the CSS class names, reposition all content -->
<body>

 

<header class="banner"><h1>3D Print Aus Admin</h1></header>   

<div class="gridContain">
	<div class="gridBox2"><a href="../../index.php">Logout</a></div>

<div class="gridBox">
  <nav class="navLinks">
  	  <div><a href="../../index.php">Login</a></div>
      <div><a href="homepage.php">Homepage</a></div>
      <div><a href="projectNews.php">Project News</a></div>
      <div><a href="archive.php">Archive</a></div>
      <div><a href="privacy.php">Privacy Policy</a></div>
      <div><a href="#">Admin Create User</a></div>
      <div><a href="contact.php">Contact</a></div>
  </nav>
</div>
<div class="gridBox">
    <p>
    <h2>News feed</h2>
        Default text Default text Default text Default text Default text Default text Default text Default text Default text 
  </p>
  <p>
    <h2>Social media feed</h2>
     Default text Default text Default text Default text Default text Default text Default text 
  </p>
</div>


<div class="gridBox">
    <!--<div class="gridContain2">-->
    	<div class="gridBox2">	
			
		<div class="loginForm"> 
	<h2>User list & edit/delete</h2>
	<form action="registration.php" method="post">
		<input type="text" name=username placeholder="user name">				
		<input type="text" name=password placeholder="password">				
		<input type="text" name=FullName placeholder="Fullname">				
		<input type="date" name=DateOfBirth>					
		<input type="text" name="mobileNumber" placeholder="Mobile Number">				
		<input type="text" name="email" placeholder="Email">				
		<input type="text" name="address" placeholder="Address">				
		<input type="text" name="accessRights" placeholder="Access Rights">
		<!--<input type="text" name="loginID" placeholder="login ID">-->
		<input type="submit" name="submit">
	</form>	
</div>
<?php 

if(isset($_POST['submit'])) {
    //$conn = new PDO("mysql:host=localhost;dbname=3dprint", 'root', '');
	//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
		function transaction(Closure $callback) {
    global $pdo; // let's assume our PDO connection is in a global var

    // start the transaction outside of the try block, because
    // you don't want to rollback a transaction that failed to start
    $pdo->beginTransaction(); 
    try
    {
        $callback();
        $pdo->commit(); 
    }
    catch (Exception $e) // it's better to replace this with Throwable on PHP 7+
    {
        $pdo->rollBack();
        throw $e; // we still have to complain about the exception
    }
}
	$pdo = new PDO('mysql:host=localhost;dbname=3dprint;charset=utf8', 'root', '', [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // this is important
		]);

		transaction(function() {
    	global $pdo;
	//	https://stackoverflow.com/questions/25865104/field-id-doesnt-have-a-default-value <- follow guide to remove strict mode to get this query to run.
	// why does it post ':value' like that directly? 
    	$pdo->query("INSERT INTO login (username, password) VALUES (':username', ':password')");
    	$pdo->query("INSERT INTO users (FullName, DateOfBirth, mobileNumber, email, address, accessRights) 
		VALUES (':FullName', ':DateOfBirth', ':mobileNumber', ':email', ':address', ':accessRights')");
    	
	});

	


}

	
	/*$query1 = "INSERT INTO login (username, password) VALUES (':username', ':password')";
	$query2 = "INSERT INTO users (FullName, DateOfBirth, mobileNumber, email, address, accessRights) 
	VALUES (':FullName', ':DateOfBirth', ':mobileNumber', ':email', ':address', ':accessRights')";	*/
	
	/*$query = "START TRANSACTION	
	INSERT INTO login (username, password) VALUES (':username', ':password');
	INSERT INTO users (FullName, DateOfBirth, mobileNumber, email, address, accessRights) 
	VALUES (':FullName', ':DateOfBirth', ':mobileNumber', ':email', ':address', ':accessRights');
	COMMIT";

	$stmt = $conn->prepare($query); 
	$stmt->bindValue(':username', $_POST['username']);
	$stmt->bindValue(':password', $_POST['password']);
	$stmt->bindValue(':FullName', $_POST['FullName']);
    $stmt->bindValue(':DateOfBirth', $_POST['DateOfBirth']);
    $stmt->bindValue(':mobileNumber', $_POST['mobileNumber']);
    $stmt->bindValue(':email', $_POST['email']);
    $stmt->bindValue(':address', $_POST['address']);
	$stmt->bindValue(':accessRights', $_POST['accessRights']);
	
	$result = $stmt->execute();
    return $result;
}
*/


/*


// Change database details according to your database
if(isset($_POST['submit'])) {
$dbConnection = mysqli_connect('localhost', 'root', '', '3dprint');

mysqli_autocommit($dbConnection, false);

$flag = true;

$query1 = "INSERT INTO login (username, password) VALUES (':username', ':password')";
$query2 = "INSERT INTO users (FullName, DateOfBirth, mobileNumber, email, address, accessRights) 
VALUES (':FullName', ':DateOfBirth', ':mobileNumber', ':email', ':address', ':accessRights')";

$result = mysqli_query($dbConnection, $query1);

if (!$result) {
	$flag = false;
    echo "Error details: " . mysqli_error($dbConnection) . ".";
}

$result = mysqli_query($dbConnection, $query2);

if (!$result) {
	$flag = false;
    echo "Error details: " . mysqli_error($dbConnection) . ".";
}

if ($flag) {
    mysqli_commit($dbConnection);
    echo "All queries were executed successfully";
} else {
	mysqli_rollback($dbConnection);
    echo "All queries were rolled back";
} 

mysqli_close($dbConnection);
}
*/
/*
https://stackoverflow.com/questions/2708237/php-mysql-transactions-examples# 
// when using PDO
$pdo = new PDO('mysql:host=localhost;dbname=3dprint;charset=utf8', 'root', '', [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // this is important
	]);


// follows this convention
function transaction(Closure $callback)
{
    global $pdo; // let's assume our PDO connection is in a global var

    // start the transaction outside of the try block, because
    // you don't want to rollback a transaction that failed to start
    $pdo->beginTransaction(); 
    try
    {
        $callback();
        $pdo->commit(); 
    }
    catch (Exception $e) // it's better to replace this with Throwable on PHP 7+
    {
        $pdo->rollBack();
        throw $e; // we still have to complain about the exception
    }
}

//Usage example:
transaction(function()
{
    global $pdo;

    $pdo->query('first query');
    $pdo->query('second query');
    $pdo->query('third query');
});
*/

selectAll();

function selectAll() {
    $conn  = new PDO("mysql:host=localhost;dbname=3dprint", 'root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sel_query = "SELECT login.*, users.* from users INNER JOIN login ON users.loginID = login.loginID";
    $stmt = $conn->prepare($sel_query);
    $stmt->execute();
    $result = $stmt->fetchAll();


    foreach($result as $row) {
        echo $row['username'];        
		echo $row['password']; 
		echo $row['FullName'];
		echo $row['DateOfBirth'];
		echo $row['MobileNumber'];
		echo $row['email'];
		echo $row['Address'];
		echo $row['accessRights'];

        //echo '<a href="delete.php?rowid='. $row['id'] . '">del</a>';
        //echo '<a href="edit.php?rowid='. $row['id'] . '">edit</a>';
    }
}
?>
			<!--<form class="regForm" action="../../controller/reg.php"  method="post">
				<h2>Register New user</h2>
				<label>Username:</label>
				<input type="text" name=username required>
				<label>Password:</label>
				<input type="text" name=password required>
				<label>Full Name:</label>
				<input type="text" name=FullName required>
				<label>Date of Birth:</label>
				<input type="date" name=DateOfBirth required>	
				<label>Mobile Number:</label>
				<input type="text" name="mobileNumber" required>
				<label>Email:</label>
				<input type="text" name="email" required>
				<label>Address:</label>
				<input type="text" name="address" required>
				<label>Access Rights:</label>
				<input type="text" name="accessRights" required>
				<input type="hidden" name="action type" value="add"/>
				<input type="submit">
		</form>-->
	<!--</div>-->          
</div>
 
</div>
</div>

<footer class="footer"><h2>Copyright PrintAus 2018</h2> </footer>
  
</div>
</body>
</html>

