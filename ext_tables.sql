#
# Table structure for table 'tx_accountingsystem_domain_model_patient'
#
CREATE TABLE tx_accountingsystem_domain_model_patient (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	last_name varchar(255) DEFAULT '' NOT NULL,
	first_name varchar(255) DEFAULT '' NOT NULL,
	address varchar(255) DEFAULT '' NOT NULL,
	street varchar(255) DEFAULT '' NOT NULL,
	postal_code varchar(255) DEFAULT '' NOT NULL,
	city varchar(255) DEFAULT '' NOT NULL,
	mobile_phone varchar(255) DEFAULT '' NOT NULL,
	phone varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	birth_date date DEFAULT '0000-00-00',
	comments varchar(255) DEFAULT '' NOT NULL,
	anamnesis varchar(255) DEFAULT '' NOT NULL,
	accidents varchar(255) DEFAULT '' NOT NULL,
	operations varchar(255) DEFAULT '' NOT NULL,
	diseases varchar(255) DEFAULT '' NOT NULL,
	treatments varchar(255) DEFAULT '' NOT NULL,
	other varchar(255) DEFAULT '' NOT NULL,
	consultations int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
	hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,


	PRIMARY KEY (uid),
	KEY parent (pid),

);

#
# Table structure for table 'tx_accountingsystem_domain_model_consultation'
#
CREATE TABLE tx_accountingsystem_domain_model_consultation (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	patient int(11) unsigned DEFAULT '0' NOT NULL,

	date datetime DEFAULT '0000-00-00 00:00:00',
	place varchar(255) DEFAULT '' NOT NULL,
	reason varchar(255) DEFAULT '' NOT NULL,
	note varchar(255) DEFAULT '' NOT NULL,
	comments varchar(255) DEFAULT '' NOT NULL,
	amount_code varchar(255) DEFAULT '' NOT NULL,
	quantity varchar(255) DEFAULT '' NOT NULL,
	price varchar(255) DEFAULT '' NOT NULL,
	point_value varchar(255) DEFAULT '' NOT NULL,
	tva varchar(255) DEFAULT '' NOT NULL,
	amount varchar(255) DEFAULT '' NOT NULL,
	invoice int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
	hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,


	PRIMARY KEY (uid),
	KEY parent (pid),

);

#
# Table structure for table 'tx_accountingsystem_domain_model_invoice'
#
CREATE TABLE tx_accountingsystem_domain_model_invoice (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	consultation int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
	hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,



	PRIMARY KEY (uid),
	KEY parent (pid),

);

#
# Table structure for table 'tx_accountingsystem_domain_model_consultation'
#
CREATE TABLE tx_accountingsystem_domain_model_consultation (

	patient int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_accountingsystem_domain_model_invoice'
#
CREATE TABLE tx_accountingsystem_domain_model_invoice (

	consultation int(11) unsigned DEFAULT '0' NOT NULL,

);
