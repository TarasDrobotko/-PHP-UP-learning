<?php

use yii\db\Migration;

/**
 * Handles adding city to table `collaborator`.
 */
class m180619_091333_add_city_column_to_collaborator_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $this->addColumn('collaborator', 'city', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }
}
