<?php

use yii\db\Migration;

/**
 * Handles adding identification_code to table `collaborator`.
 */
class m180613_131738_add_identification_code_column_to_collaborator_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('collaborator', 'identification_code', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('collaborator', 'identification_code');
    }
}
