<?php

if(isset($_COOKIE['name'])) {
  unset($_COOKIE['name']);
  setcookie('name', '', time() - 3600);  
  echo 'success signed out';
} else {
  echo 'not logged in';
}

?>
