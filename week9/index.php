<?php
session_start()
?>

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
 <form>
 <label>Check Postcode for Suburb</label>
 <input type="text" id="pcode" name="postcode" placeholder="Suburb or Postcode">
 <select id="pcode_list">
 </select>
 
</form>
    
<a href="partners.php" target="output">text</a>
<iframe id="frameIt" name="output"></iframe>

</body>

</html>