Description:

3Dprint site is a basic blog page with limited login functionality, build to display articles and archive older documents.



Issues: 

File pathing incorrect leading to 404 errors, unknown what path should be used for "include" php function to re-use html layout for several pages

Registration form can't be split to several pages from index to deticated registration form without path errors. 

Problems finding solution to hide elements for different user access i.e admin and guest users. 

Problems fitting 




Requirements

  PART A - FILE STRUCTURE


1: Separation of controller code from user views

2: Folder structure to contain view: html, css, js, images

3: README.TXT that outlines deployment issues 


  PART B - VIEW

4: Navigation <nav> elements defined for every user type        <-- use ajax to hide nav elements for particular users

5: Three examples of a form submitting through relevant controller

6: One example of CRUD implemented

7: Three controllers exiting back to relevant user view   <-- add in another function other than register/login


  PART C - DEBUG

8: Error DIV & Message DIV defined in layout       <--- put in registration or deticated admin page

9: Debug information DIV in footer, echo $_SESSION info       <--- put in registration or deticated admin page



  PART D - HOSTED VERSION CONTROL

9: Code commits (ten) made to a version control system       <--- perform outside of tafe

https://github.com/nGaLe7/Gale_455111948_Design-Dev_WDV2 




EG of working transaction with mySQL as multi queries need to be seperated:
<?php

//$salary = 5000;
$salary = '$5000';

/* Change database details according to your database */
$dbConnection = mysqli_connect('localhost', 'robin', 'robin123', 'company_db');

mysqli_autocommit($dbConnection, false);

$flag = true;

$query1 = "INSERT INTO `employee` (`id`, `first_name`, `last_name`, `job_title`, `salary`) VALUES (9, 'Grace', 'Williams', 'Softwaree Engineer', $salary)";
$query2 = "INSERT INTO `telephone` (`id`, `employee_id`, `type`, `no`) VALUES (13, 9, 'mobile', '270-598712')";

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

?>


other transaction example without mysqli (<- do not use mySQLi)

/ when using PDO
$pdo = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', $user, $pass, [
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
