<?php

class m160208_150802_create_coment_table extends CDbMigration {

    public function up() {
        $this->createTable('comment', array(
            'id' => 'pk',
            'article_id' => 'int',
            'username' => 'string',
            'content' => 'text'
        ));
    }

    public function down() {
        $this->dropTable('comment');
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
