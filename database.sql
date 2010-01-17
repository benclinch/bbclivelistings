DROP TABLE IF EXISTS `5live`;

CREATE TABLE `5live` (
  `id` int(11) NOT NULL auto_increment,
  `start` int(10) NOT NULL default '0',
  `end` int(10) NOT NULL default '0',
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `synopsis` text NOT NULL,
  `seriespid` varchar(8) NOT NULL default '',
  `pid` varchar(8) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `start` (`start`)
) ENGINE=MyISAM AUTO_INCREMENT=201 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `6music`;

CREATE TABLE `6music` (
  `id` int(11) NOT NULL auto_increment,
  `start` int(10) NOT NULL default '0',
  `end` int(10) NOT NULL default '0',
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `synopsis` text NOT NULL,
  `seriespid` varchar(8) NOT NULL default '',
  `pid` varchar(8) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `start` (`start`)
) ENGINE=MyISAM AUTO_INCREMENT=153 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `asiannetwork`;

CREATE TABLE `asiannetwork` (
  `id` int(11) NOT NULL auto_increment,
  `start` int(10) NOT NULL default '0',
  `end` int(10) NOT NULL default '0',
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `synopsis` text NOT NULL,
  `seriespid` varchar(8) NOT NULL default '',
  `pid` varchar(8) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `start` (`start`)
) ENGINE=MyISAM AUTO_INCREMENT=218 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `bbc1xtra`;

CREATE TABLE `bbc1xtra` (
  `id` int(11) NOT NULL auto_increment,
  `start` int(10) NOT NULL default '0',
  `end` int(10) NOT NULL default '0',
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `synopsis` text NOT NULL,
  `seriespid` varchar(8) NOT NULL default '',
  `pid` varchar(8) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `start` (`start`)
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `radio1`;

CREATE TABLE `radio1` (
  `id` int(11) NOT NULL auto_increment,
  `start` int(10) NOT NULL default '0',
  `end` int(10) NOT NULL default '0',
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `synopsis` text NOT NULL,
  `seriespid` varchar(8) NOT NULL default '',
  `pid` varchar(8) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `start` (`start`)
) ENGINE=MyISAM AUTO_INCREMENT=195 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `radio2`;

CREATE TABLE `radio2` (
  `id` int(11) NOT NULL auto_increment,
  `start` int(10) NOT NULL default '0',
  `end` int(10) NOT NULL default '0',
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `synopsis` text NOT NULL,
  `seriespid` varchar(8) NOT NULL default '',
  `pid` varchar(8) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `start` (`start`)
) ENGINE=MyISAM AUTO_INCREMENT=198 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `radio3`;

CREATE TABLE `radio3` (
  `id` int(11) NOT NULL auto_increment,
  `start` int(10) NOT NULL default '0',
  `end` int(10) NOT NULL default '0',
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `synopsis` text NOT NULL,
  `seriespid` varchar(8) NOT NULL default '',
  `pid` varchar(8) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `start` (`start`)
) ENGINE=MyISAM AUTO_INCREMENT=197 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `radio4`;

CREATE TABLE `radio4` (
  `id` int(11) NOT NULL auto_increment,
  `start` int(10) NOT NULL default '0',
  `end` int(10) NOT NULL default '0',
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `synopsis` text NOT NULL,
  `seriespid` varchar(8) NOT NULL default '',
  `pid` varchar(8) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `start` (`start`)
) ENGINE=MyISAM AUTO_INCREMENT=681 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `radio7`;

CREATE TABLE `radio7` (
  `id` int(11) NOT NULL auto_increment,
  `start` int(10) NOT NULL default '0',
  `end` int(10) NOT NULL default '0',
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `synopsis` text NOT NULL,
  `seriespid` varchar(8) NOT NULL default '',
  `pid` varchar(8) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `start` (`start`)
) ENGINE=MyISAM AUTO_INCREMENT=635 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `worldservice`;

CREATE TABLE `worldservice` (
  `id` int(11) NOT NULL auto_increment,
  `start` int(10) NOT NULL default '0',
  `end` int(10) NOT NULL default '0',
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `synopsis` text NOT NULL,
  `seriespid` varchar(8) NOT NULL default '',
  `pid` varchar(8) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `start` (`start`)
) ENGINE=MyISAM AUTO_INCREMENT=1536 DEFAULT CHARSET=utf8;
