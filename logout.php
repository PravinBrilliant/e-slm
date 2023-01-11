<?php 

session_start();

session_destroy();
header("location:index.php?mes=Your session is finished");






?>