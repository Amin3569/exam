

ALTER TABLE tce_users ADD user_otpkey Varchar(255);
ALTER TABLE tce_tests ADD test_questions_order_mode Smallint(3) UNSIGNED NOT NULL DEFAULT 0;
ALTER TABLE tce_tests ADD test_answers_order_mode Smallint(3) UNSIGNED NOT NULL DEFAULT 0;
ALTER TABLE tce_tests ADD test_password Varchar(255);
ALTER TABLE tce_tests_users DROP KEY ak_testuser;
ALTER TABLE tce_tests_users ADD UNIQUE ak_testuser (testuser_test_id,testuser_user_id,testuser_status);
CREATE TABLE IF NOT EXISTS tce_testuser_stat (tus_id Bigint UNSIGNED NOT NULL AUTO_INCREMENT, tus_date Datetime NOT NULL, PRIMARY KEY (tus_id)) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_unicode_ci;
