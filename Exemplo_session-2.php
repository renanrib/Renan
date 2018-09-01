<?php

require_once("config.php"); 

//session_unset();
unset($_SESSION['nome']); 

echo $_SESSION['nome'];

session_destroy()

?> 