#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (


	image_w2 tinyint(1) unsigned DEFAULT '0' NOT NULL,
	image_h2 tinyint(1) unsigned DEFAULT '0' NOT NULL,
	ishighlighted int(11) DEFAULT '0' NOT NULL,
	completion bigint(20) DEFAULT '0' NOT NULL,
	subheader text,

);

#
# Table structure for table 'sys_file_reference'
#
CREATE TABLE sys_file_reference (
	showinsizes tinyint(4) DEFAULT '0' NOT NULL
);
