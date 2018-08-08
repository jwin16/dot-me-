<?php
  include 'config.php'; 

  $email = mysql_real_escape_string($_POST['em']); 

  mysql_query("INSERT INTO dj_email ( email , created ) VALUES ( '$email' , now())", $dbh1);   

  header("Location: index.php?noti=subb"); 
?> 
