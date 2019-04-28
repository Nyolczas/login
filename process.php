<?php 
    // get values from form in login.php
    $username = $_POST['username'];
    $password = $_POST['password'];

    // to prevent mysql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    // $username = mysql_real_escape_string($username);
    // $password = mysql_real_escape_string($password);

    // connect to the server
    mysql_connect("localhost", "root", "");
    mysql_select_db("login");

    // query the database for user
    $result = mysql_query("select * from users where username = '$username' and password = '$password'") or die("Failed to query database ".mysql_error());
    $row = mysql_fetch_array($result);
    if($row['username'] == $usename && $row['password'] == $password) {
        include "./includes/hello.php";
    } else {
        echo "hiba";
    }              
?>
