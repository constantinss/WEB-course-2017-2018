<?php

    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

  
    // define('DB_SERVER', 'localhost');
    // define('DB_USERNAME', 'root');
    // define('DB_PASSWORD', '');
    // define('DB_NAME', 'phpdb');
    

    define('DB_SERVER', 'remotemysql.com');
    define('DB_USERNAME', 'A5Zeln8sTd');
    define('DB_PASSWORD', '66uUHzfUly');
    define('DB_NAME', 'A5Zeln8sTd'); 
    
    /* Attempt to connect to MySQL database */
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    /* Check connection */
    if(!$conn){
        header("Location: ./components/error.php");
        die("Connection failed: ".mysqli_connect_error());
    }
