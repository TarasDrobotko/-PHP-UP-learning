<?php

use yii\db\Migration;

/**
 * Handles adding salary to table `collaborator`.
 */
class m180613_124817_add_salary_column_to_collaborator_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('collaborator', 'salary', $this->money());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('collaborator', 'salary');
    }
}
