<?php

require_once('db_credentials.php');

function db_connect() {
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $connection;
}

function db_disconnect($connection) {
    if(isset($connection)) {
        mysqli_close($connection);
    }
}

//No longer needed with prepared statements in place
// function db_escape($connection, $string) {
//   return mysqli_real_escape_string($connection, $string);
// }

function confirm_db_connect() {
    if(mysqli_connect_errno()) {
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error() ; 
        $msg .= "(" . mysqli_connect_errno()   . ")";
        exit($msg);
    }
}

function confirm_result_set($resultSet, $sql) {
    if(!$resultSet) {
        exit("Database query failed. The SQL is: $sql");
    }
    
}
