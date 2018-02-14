<?php
    // database access information for "mycreds" db
    // change the following based on your configuration
    DEFINE ('db_user', '');
    DEFINE ('db_password', '');
    DEFINE ('db_host', '');
    DEFINE ('db_name', 'mycreds');

    $conn = @mysqli_connect(db_host, db_user, db_password, db_name) 
        or die ('Could not connect to MySQL: '.mysqli_connect_error());
    mysqli_set_charset($conn, 'utf8');