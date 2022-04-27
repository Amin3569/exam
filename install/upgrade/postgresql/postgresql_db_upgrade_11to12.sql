

ALTER TABLE "tce_users" ADD "user_otpkey" Varchar(255);
ALTER TABLE "tce_tests" ADD "test_questions_order_mode" Smallint NOT NULL Default 0;
ALTER TABLE "tce_tests" ADD "test_answers_order_mode" Smallint NOT NULL Default 0;
ALTER TABLE "tce_tests" ADD "test_password" Varchar(255);
ALTER TABLE "tce_tests_users" DROP CONSTRAINT "ak_testuser";
ALTER TABLE "tce_tests_users" ADD CONSTRAINT "ak_testuser" UNIQUE ("testuser_test_id","testuser_user_id","testuser_status");
ALTER TABLE "tce_tests_users" DROP CONSTRAINT IF EXISTS "tce_tests_users_testuser_status_check";
CREATE TABLE "tce_testuser_stat" ("tus_id" BigSerial NOT NULL, "tus_date" Timestamp NOT NULL, constraint "pk_tce_testuser_stat" primary key ("tus_id")) Without Oids;
