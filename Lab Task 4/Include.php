<?php
$username = $usernameErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"])) {
        $username = test_input($_POST["username"]);

      } else {
        $usernameErr = "Username is required";

      }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$submit = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submit = test_input($_POST["submit"]);
  }







 ?>
