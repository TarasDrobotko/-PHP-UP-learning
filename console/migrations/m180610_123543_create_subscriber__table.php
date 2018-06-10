<?php

use yii\db\Migration;

/**
 * Handles the creation of table `subscriber_`.
 */
class m180610_123543_create_subscriber__table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('subscriber_', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('subscriber_');
    }
}
