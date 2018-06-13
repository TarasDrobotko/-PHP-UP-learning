<?php

use yii\db\Migration;

/**
 * Handles dropping identification_code from table `collaborator`.
 */
class m180613_131100_drop_identification_code_column_from_collaborator_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('collaborator', 'identification_code');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('collaborator', 'identification_code', $this->integer());
    }
}
