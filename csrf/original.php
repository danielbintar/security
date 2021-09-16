<html>
<body>
<?php

echo 'hello, ';
echo $_COOKIE['name'];

?>

<form method="POST" action="/original_login.php">
	Name: <input type"text" name="name">
	<input type="submit" value="Login">
</form>

<form method="POST" action="/original_logout.php">
	<input type="submit" value="Logout">
</form>

</body>
</html>
