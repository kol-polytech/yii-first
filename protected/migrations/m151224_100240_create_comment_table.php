<?php

class m151224_100240_create_comment_table extends CDbMigration
{
	public function up()
	{
            $this->execute("CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `article_id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `article_id` (`article_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1");
	}

	public function down()
	{
		 $this->execute("DROP TABLE IF EXISTS `comment`");
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}