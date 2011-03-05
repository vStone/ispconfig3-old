-- --------------------------------------------------------
--
-- Table structure for table `web_snippet`
--

CREATE TABLE IF NOT EXISTS `web_snippet` (
  `snippet_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `version_id` int(11) unsigned NOT NULL DEFAULT 0,
  `comment` mediumtext,
  `content` mediumtext,
  PRIMARY KEY (`snippet_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `web_snippet_domains`
--

CREATE TABLE IF NOT EXISTS `web_snippet_domains` (
  `snipdom_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `snippet_id` int(11) unsigned NOT NULL,
  `domain_id` int(11) unsigned NOT NULL,
  `do_ssl` VARCHAR( 1 ) NOT NULL DEFAULT 'b' COMMENT 'Specify if you want to enable this snippet for ''s''sl or ''n''ot or ''b''oth (choose s,n,b)',
  PRIMARY KEY (`snipdom_id`),
  KEY `snippet_id` (`snippet_id`),
  KEY `domain_id` (`domain_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;