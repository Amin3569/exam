

ALTER TABLE "tce_modules" ADD "module_user_id" Bigint NOT NULL Default 1;
ALTER TABLE "tce_modules" ADD Constraint "rel_module_author" foreign key ("module_user_id") references "tce_users" ("user_id") ON DELETE cascade;
ALTER TABLE "tce_questions" DROP INDEX "ak_question";
ALTER TABLE "tce_answers" DROP INDEX "ak_answer";
