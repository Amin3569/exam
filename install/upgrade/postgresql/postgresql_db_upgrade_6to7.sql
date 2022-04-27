
CREATE TABLE "tce_modules" (
	"module_id" BigSerial NOT NULL,
	"module_name" Varchar(255) NOT NULL,
	"module_enabled" Boolean NOT NULL Default '0',
constraint "PK_tce_modules_module_id" primary key ("module_id")
) Without Oids;
INSERT INTO tce_modules (module_name,module_enabled) VALUES ('default','1');
ALTER TABLE "tce_modules" ADD Constraint "ak_module_name" UNIQUE ("module_name");
ALTER TABLE "tce_subjects" ADD "subject_module_id" Bigint NOT NULL Default 1,
ALTER TABLE "tce_subjects" DROP Constraint "ak_subject_name";
ALTER TABLE "tce_subjects" ADD Constraint "ak_subject_name" UNIQUE ("subject_module_id","subject_name");
ALTER TABLE "tce_subjects" ADD Constraint "rel_module_subjects" foreign key ("subject_module_id") references "tce_modules" ("module_id") ON DELETE cascade;
ALTER TABLE "tce_users" ALTER "user_ip" TYPE Varchar(39);
ALTER TABLE "tce_tests_logs" ALTER "testlog_user_ip" TYPE Varchar(39);

