<?php

use yii\db\Migration;

/**
 * Class m180707_070007_add_index_news_content
 */
class m180707_070007_add_index_news_content extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->execute("ALTER TABLE news ADD  FULLTEXT INDEX idx_content (content)");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('idx_content', 'news');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180707_070007_add_index_news_content cannot be reverted.\n";

        return false;
    }
    */
}
