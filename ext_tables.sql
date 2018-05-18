#
# Table structure for table 'tx_accountingsystem_domain_model_patient'
#
CREATE TABLE tx_accountingsystem_domain_model_patient (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	nom varchar(255) DEFAULT '' NOT NULL,
	prenoms varchar(255) DEFAULT '' NOT NULL,
	adresse varchar(255) DEFAULT '' NOT NULL,
	rue varchar(255) DEFAULT '' NOT NULL,
	codepostal varchar(255) DEFAULT '' NOT NULL,
	ville varchar(255) DEFAULT '' NOT NULL,
	telephoneportable varchar(255) DEFAULT '' NOT NULL,
	telephonefixe varchar(255) DEFAULT '' NOT NULL,
	mail varchar(255) DEFAULT '' NOT NULL,
	datenaissance varchar(255) DEFAULT '' NOT NULL,
	commentaires varchar(255) DEFAULT '' NOT NULL,
	anamnese varchar(255) DEFAULT '' NOT NULL,
	accidents varchar(255) DEFAULT '' NOT NULL,
	operations varchar(255) DEFAULT '' NOT NULL,
	maladies varchar(255) DEFAULT '' NOT NULL,
	traitements varchar(255) DEFAULT '' NOT NULL,
	divers varchar(255) DEFAULT '' NOT NULL,
	consultation int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
	hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state smallint(6) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

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

	date varchar(255) DEFAULT '' NOT NULL,
	place varchar(255) DEFAULT '' NOT NULL,
	note varchar(255) DEFAULT '' NOT NULL,
	comment varchar(255) DEFAULT '' NOT NULL,
	tarif varchar(255) DEFAULT '' NOT NULL,
	codetarif varchar(255) DEFAULT '' NOT NULL,
	quantity varchar(255) DEFAULT '' NOT NULL,
	price varchar(255) DEFAULT '' NOT NULL,
	pointvalue varchar(255) DEFAULT '' NOT NULL,
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

	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state smallint(6) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,


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

	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state smallint(6) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,


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
