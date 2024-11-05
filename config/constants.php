<?php 

    // Start Session
    session_start();
    // so the main reason why we are creating a different file is we are trying the approach of DRY(Don't repeat yourself) writing a managable code
    // create constants to store non repeating values 
    define('SITEURL', 'http://localhost/food-order');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food_order');

 $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); // database connection
 $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); // selecting database

?>