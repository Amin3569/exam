

INSERT INTO tce_user_groups (group_name) VALUES ('default');
INSERT INTO tce_users (user_regdate,user_ip,user_name,user_password,user_level) VALUES ('2001-01-01 01:01:01', '0.0.0.0', 'anonymous', '$2y$10$Uj0i8eUQibn5S7Q2cl8k8ecAzwrK333uG8PWYe9iqz2kig9Ql36g6', 0);
INSERT INTO tce_users (user_regdate,user_ip,user_name,user_password,user_level) VALUES ('2001-01-01 01:01:01', '127.0.0.0', 'admin', '$2y$10$f4hALLkUK06EgTQ8b1OWTu4JFvRTXRc0cxqSz5sKaLKhCNGeLemTO', 10);
INSERT INTO tce_usrgroups (usrgrp_user_id,usrgrp_group_id) VALUES (2, 1);
INSERT INTO tce_modules (module_name,module_enabled) VALUES ('default', '1');
