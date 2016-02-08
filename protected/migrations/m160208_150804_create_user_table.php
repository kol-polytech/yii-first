<?php

class m160208_150804_create_user_table extends CDbMigration
{
	public function up()
	{
            $this->createTable('user', array(
                'id' => 'pk',
                'username' => 'string NOT NULL',
                'email' => 'string NOT NULL',
                'password' => 'string NOT NULL',
                'token' => 'string NOT NULL',
            ));
	}

	public function down()
	{
		$this->dropTable('user');
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