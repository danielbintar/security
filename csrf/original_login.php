<?php

setcookie('name', $_POST['name'], time() + (1 * 60 * 60 * 5));
header('Location: http://www.original.com/original.php', true, 302);

?>
