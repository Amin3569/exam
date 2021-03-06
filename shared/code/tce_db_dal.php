<?php

/**
 * @file
 * Database Abstraction layer (DAL).
 * Loads the Database functions for the selected DATABASE type.
 * The database type is defined by K_DATABASE_TYPE constant on /shared/config/tce_db_config.php configuration file.
 * @package com.tecnick.tcexam.shared
 * @author Nicola Asuni
 * @since 2003-10-12
 */

/**
 */

switch (K_DATABASE_TYPE) {
    case 'MYSQL': {
        require_once('../../shared/code/tce_db_dal_mysqli.php');
        break;
    }
    case 'POSTGRESQL': {
        require_once('../../shared/code/tce_db_dal_postgresql.php');
        break;
    }
    case 'ORACLE': {
        require_once('../../shared/code/tce_db_dal_oracle.php');
        break;
    }
    case 'MYSQLDEPRECATED': {
        require_once('../../shared/code/tce_db_dal_mysql.php');
        break;
    }
    default: {
        F_print_error('ERROR', 'K_DATABASE_TYPE is not set!');
    }
}

//============================================================+
// END OF FILE
//============================================================+
