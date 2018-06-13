<?php

use yii\db\Migration;

/**
 * Handles dropping city from table `collaborator`.
 */
class m180613_132519_drop_city_column_from_collaborator_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('collaborator', 'city');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('collaborator', 'city', $this->string());
    }
}
