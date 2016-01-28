<?php

class m160128_153706_change_user_password extends CDbMigration
{
	public function up()
	{
            $this->execute("ALTER TABLE `user` CHANGE `password` `password` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;");
	}

	public function down()
	{
		$this->execute("ALTER TABLE `user` CHANGE `password` `password` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;");
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