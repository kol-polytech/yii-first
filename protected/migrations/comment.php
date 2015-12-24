<?php

class comment extends CDbMigration
{
	public function up()
	{
            $this->execute("CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(5) NOT NULL,
  `article_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`article_id`),
  UNIQUE KEY `article_id` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");
	}

	public function down()
	{
            
		$this->execute("DROP TABLE if exists `comment`");
	}
}