#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users
(
    yourName      varchar(60) DEFAULT '',
    email      varchar(60) DEFAULT '',
    password      varchar(50) DEFAULT '',
    date_of_birth int(11) DEFAULT '0' NOT NULL,
    privacy       tinyint(4) unsigned DEFAULT '0' NOT NULL,
    comments      text NOT NULL
);
