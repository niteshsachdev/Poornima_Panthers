<?php
error_reporting(0);
  include_once('login.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
</head>

<body>
  <form action="" method="post">
    username <input type="text" name="username" /><br />
   password <input type="password" name="password" /><br />
  <input type="submit" name="sb" />
   
  </form>
  <br />
  <span style="color:red;"><?php echo $error ?></span>
</body>
</html>