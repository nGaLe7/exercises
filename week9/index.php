<?php

include 'processForm.php';

?>
<!-- http://php.net/manual/en/session.examples.basic.php -->
<!Doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Postcode check</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <script src="script.js" defer ></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    
</head>
<body>   
    
<?php

/*if (isset($_SESSION['successful'])) {
    // this user has visited us before;    
    $_SESSION['successful'] = $successful
    print_r($_SESSION['count']);
}
else {
    $_SESSION['user'] = 'anon';
    $_SESSION['count'] = 1;
    print_r($_SESSION['count']);
}*/


?>

 <form>
 <label>Check Postcode for Suburb</label>
 <input type="text" id="pcode" name="postcode" placeholder="Suburb or Postcode">
 <select id="pcode_list">
 </select>
 
</form>
    
<!--action="processform.php"-->

<form method="post" id="enterForm" action="processForm.php">
<fieldset>
<legend>Users table insert</legend>
    <label>Full Name:</label>
    <input type="text" name="valFullName" required>
    <label>Date of Birth:</label>
    <input type="text" name="valDateOfBirth" required>
    <label>Email:</label>
    <input type="text" name="valEmail" required>
    <label>Mobile Number:</label>
    <input type="text" name="valMobileNumber" required>
    <label>Address:</label>
    <input type="text" name="valAddress" required>
    <input type="submit" name="submit">
  </fieldset>
</form>

<div id="divMessage">Placeholder text</div>

<?php
// define variables and set to empty values

?>
<!--
<a href="partners.php" target="output">text</a>
<iframe id="frameIt" name="output"></iframe>
-->

</body>
<!-- https://www.w3schools.com/php/php_form_validation.asp PHP form validation help -->
</html>