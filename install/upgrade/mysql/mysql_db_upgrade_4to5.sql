

ALTER TABLE tce_answers ADD answer_position Bigint UNSIGNED NULL;
ALTER TABLE tce_tests_logs_answers ADD logansw_position Bigint UNSIGNED NULL;
ALTER TABLE tce_answers DROP INDEX ak_answer, ADD UNIQUE ak_answer (answer_question_id,answer_description(255),answer_position);
