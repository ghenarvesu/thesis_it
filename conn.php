<?php
  session_start();

  $conn = mysqli_connect("localhost","root"," ","db_ccasd");

  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  session_start();// Starting Session

  // Storing Session
  $user_check=$_SESSION['login_user'];

  // SQL Query To Fetch Complete Information Of User
  $ses_sql=mysql_query("select * from systemcred where username='$user_check'", $connection);
  $row = mysql_fetch_assoc($ses_sql);
  $login_session =$row['username'];

  if(!isset($login_session)){
    mysql_close($connection); // Closing Connection
    header('Location: login.php'); // Redirecting To Home Page
  }
?>
