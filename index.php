<?php 

  require_once __DIR__ . '/vendor/autoroad.php';
  
  $inputString = file_get_contents('php://input');
  error_log($inputString);
  
?>