CREATE TABLE `games` (
  `id` char(36) NOT NULL DEFAULT '',
  `hsbt` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `singles` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `doubles` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `triples` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `homeruns` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `stolenbases` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `strikeouts` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `doubleplays` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `tripleplays` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;