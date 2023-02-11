<html>
<body>
  <script>
alert("successfully logged out");
</script>
<?php
echo '<script>alert("Welcome to Geeks for Geeks")</script>';
// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();
// Redirect to login page
header("location: login.php");
exit;
?>
</body></html>
