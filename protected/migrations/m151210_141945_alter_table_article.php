<?php

class m151210_141945_alter_table_article extends CDbMigration
{
	public function up()
	{
            $this->execute("ALTER TABLE  `article` ADD  `user_id` INT( 11 ) NOT NULL;");
	}

	public function down()
	{
		$this->execute("ALTER TABLE `article` DROP `user_id`;");
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