<?php

class m160106_104943_user_token extends CDbMigration
{
	public function up()
	{
            $this->execute("ALTER TABLE  `user` ADD  `token` VARCHAR( 255 ) NULL AFTER  `password`;");
	}

	public function down()
	{
            $this->execute("ALTER TABLE `user` DROP `token`;");
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