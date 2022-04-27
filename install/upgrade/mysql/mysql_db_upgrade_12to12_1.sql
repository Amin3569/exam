

CREATE TABLE tce_sslcerts (
	ssl_id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	ssl_name VARCHAR(255) NOT NULL,
	ssl_hash VARCHAR(32) NOT NULL,
	ssl_end_date DATETIME NOT NULL,
	ssl_enabled Bool NOT NULL DEFAULT '0',
	ssl_user_id BIGINT UNSIGNED NOT NULL DEFAULT 1,
 Primary Key (ssl_id)
) ENGINE = InnoDB
CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE tce_testsslcerts (
	tstssl_test_id BIGINT UNSIGNED NOT NULL,
	tstssl_ssl_id BIGINT UNSIGNED NOT NULL,
 Primary Key (tstssl_test_id, tstssl_ssl_id)
) ENGINE = InnoDB
CHARACTER SET utf8 COLLATE utf8_unicode_ci;

ALTER TABLE tce_testsslcerts ADD INDEX p_tstssl_test_id (tstssl_test_id);
ALTER TABLE tce_testsslcerts ADD INDEX p_tstssl_ssl_id (tstssl_ssl_id);

ALTER TABLE tce_testsslcerts ADD Foreign Key (tstssl_test_id) references tce_tests (test_id) ON DELETE cascade ON UPDATE no action;
ALTER TABLE tce_testsslcerts ADD Foreign Key (tstssl_ssl_id) references tce_sslcerts (ssl_id) ON DELETE cascade ON UPDATE no action;
