CREATE TABLE dpx_projects_domain_model_project (
    uid int(11) unsigned NOT NULL auto_increment,
    title varchar(255) NOT NULL,
    description text NOT NULL,
    status varchar(255) NOT NULL,
    image varchar(255) DEFAULT '0',
    PRIMARY KEY (uid)
);
