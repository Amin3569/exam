

ALTER TABLE tce_modules ADD module_user_id NUMBER(19,0) DEFAULT 1 NOT NULL;
ALTER TABLE tce_modules ADD Constraint rel_module_author foreign key (module_user_id) references tce_users (user_id) ON DELETE cascade;

