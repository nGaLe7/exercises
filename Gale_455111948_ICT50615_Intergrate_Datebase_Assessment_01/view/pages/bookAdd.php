
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
    <div class="menuItem"><a href="#">Add Books</a></div>
    <div class="menuItem"><a href="createUser.php">Admin Only</a></div>
    <div class="menuItem"><a href="policy.html">Policies list</a></div>
  </nav>


        

<article class="article">

<div class="addForm">
		<fieldset class="fieldSet">
			<legend>Add New Book</legend>
  <form action="../../controller/reg.php"  method="post">
	<label>Book title:</label>
	<input type="text" name=title required>
	<label>Original Book Title:</label>
	<input type="text" name="Original"required>
	<label>Year of Publication:</label>
	<input type="text" name=publication required>
	<label>Genre:</label>
	<input type="text" name=genre required>
	<label>Millions Sold:</label>
	<input type="text" name="milSold" required>
	<label>Language Writen:</label>
    <input type="text" name="langWrite" required>
    <label>Cover Image Path:</label>
	<input type="text" name="imgPath" required>
	<input type="hidden" name="action type" value="add"/>
	<input type="submit">
	</fieldset>
	</form>
</div>
