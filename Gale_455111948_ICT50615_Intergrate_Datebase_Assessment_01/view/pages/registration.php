<form action="../../controller/reg.php"  method="post">
	<label>Username:</label>
	<input type="text" name=username required>
	<label>Password:</label>
	<input type="text" name=password required>
	<label>Name:</label>
	<input type="text" name=name required>
	<label>Surname:</label>
	<input type="text" name=surname required>
	<label>Access Rights:</label>
	<input type="text" name=accessRights required>
	<input type="hidden" name="action type" value="add"/>
	<input type="submit">
</form>
