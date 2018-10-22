
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Books Website</title>
<link href="../css/styles.css" rel="stylesheet">
<link href="../css/normalize.css" rel="stylesheet">
</head>

<body class="bodyCustom">
<div class="flex-container">
 
  <header class="nav">header</header>

  <nav class="nav">
    <div class="menuItem"><a href="../../index.php">Home</a></div>
	<div class="menuItem"><a href="mainLibary.php">View Books</a></div>
    <div class="menuItem"><a href="bookAdd.php">Add Books</a></div>
    <div class="menuItem"><a href="#">Admin Only</a></div>      
    <div class="menuItem"><a href="policy.html">Policies list</a></div>
 </nav>




<article class="article">

<div class="regForm">
		<fieldset class="fieldSet">
			<legend>Create User</legend>
  <form action="../../controller/reg.php"  method="post">
	<label>Username:</label>
	<input type="text" name=username required>
	<label>Password:</label>
	<input type="text" name=password required>
	<label>Name:</label>
	<input type="text" name=name required>
	<label>Surname:</label>
	<input type="text" name=surname required>
	<label>Email:</label>
	<input type="text" name="email" required>
	<label>Access Rights:</label>
	<input type="text" name="accessRights" required>
	<input type="hidden" name="action type" value="add"/>
	<input type="submit">
	</fieldset>
	</form>
</div>




</article>



<footer>
   <p>footer</p>
</footer>
  
</div>
</body>
</html>





