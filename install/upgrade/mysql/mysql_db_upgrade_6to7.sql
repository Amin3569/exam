
CREATE TABLE tce_modules (
	module_id Bigint UNSIGNED NOT NULL AUTO_INCREMENT,
	module_name Varchar(255) NOT NULL,
	module_enabled Bool NOT NULL DEFAULT '0',
 Primary Key (module_id)
) ENGINE = InnoDB
CHARACTER SET utf8 COLLATE utf8_unicode_ci;
INSERT INTO tce_modules (module_name,module_enabled) VALUES ('default','1');
ALTER TABLE tce_modules ADD UNIQUE ak_module_name (module_name);
ALTER TABLE tce_subjects ADD subject_module_id Bigint UNSIGNED NOT NULL DEFAULT 1;
ALTER TABLE tce_subjects DROP KEY ak_subject_name;
ALTER TABLE tce_subjects ADD UNIQUE ak_subject_name (subject_module_id,subject_name);
ALTER TABLE tce_subjects ADD Foreign Key (subject_module_id) references tce_modules (module_id) ON DELETE cascade ON UPDATE no action;
ALTER TABLE tce_users CHANGE user_ip user_ip VARCHAR(39) NOT NULL;
ALTER TABLE tce_tests_logs CHANGE testlog_user_ip testlog_user_ip VARCHAR(39) NULL DEFAULT NULL;

