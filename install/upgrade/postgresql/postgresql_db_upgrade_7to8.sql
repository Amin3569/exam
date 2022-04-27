
ALTER TABLE "tce_questions" ADD "question_explanation" Text NULL;
ALTER TABLE "tce_answers" ADD "answer_explanation" Text NULL;
ALTER TABLE "tce_users" ALTER "user_ip" TYPE Varchar(39);
ALTER TABLE "tce_tests_logs" ALTER "testlog_user_ip" TYPE Varchar(39);

