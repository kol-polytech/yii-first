<?php

class m160208_144811_create_article_table extends CDbMigration
{
    public function up()
	{
            $this->createTable('article', array(
                'id' => 'pk',
                'title' => 'string NOT NULL',
                'content' => 'text',
                'user_id' => 'int',
            ));
	}

	public function down()
	{
		$this->dropTable('article');
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