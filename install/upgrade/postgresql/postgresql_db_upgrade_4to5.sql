

ALTER TABLE "tce_answers" ADD "answer_position" Bigint NULL;
ALTER TABLE "tce_tests_logs_answers" ADD "logansw_position" Bigint NULL;
ALTER TABLE "tce_answers" DROP CONSTRAINT "ak_answer", ADD CONSTRAINT "ak_answer" UNIQUE ("answer_question_id","answer_description","answer_position");
