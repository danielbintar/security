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

</body>
</html>
