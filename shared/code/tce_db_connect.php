<?php

/**
 * @file
 * Open a connection to a MySQL Server and select a database.
 * @package com.tecnick.tcexam.shared
 * @author Nicola Asuni
 * @since 2001-09-02
 */

/**
 */

require_once('../../shared/code/tce_db_dal.php'); // Database Abstraction Layer for selected DATABASE type

if (!$db = @F_db_connect(K_DATABASE_HOST, K_DATABASE_PORT, K_DATABASE_USER_NAME, K_DATABASE_USER_PASSWORD, K_DATABASE_NAME)) {
    die('<h2>Unable to connect to the database!</h2>');
}

//============================================================+
// END OF FILE
//============================================================+
