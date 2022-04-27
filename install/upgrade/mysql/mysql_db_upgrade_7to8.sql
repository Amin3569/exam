
ALTER TABLE tce_questions ADD question_explanation Text NULL;
ALTER TABLE tce_answers ADD answer_explanation Text NULL;
ALTER TABLE tce_users CHANGE user_ip user_ip VARCHAR(39) NOT NULL;
ALTER TABLE tce_tests_logs CHANGE testlog_user_ip testlog_user_ip VARCHAR(39) NULL DEFAULT NULL;

