

ALTER TABLE tce_modules ADD module_user_id Bigint UNSIGNED NOT NULL DEFAULT 1;
ALTER TABLE tce_modules ADD INDEX p_module_user_id (module_user_id);
ALTER TABLE tce_modules ADD Foreign Key (module_user_id) references tce_users (user_id) ON DELETE cascade ON UPDATE no action;
ALTER TABLE tce_questions DROP INDEX ak_question;
ALTER TABLE tce_answers DROP INDEX ak_answer;

