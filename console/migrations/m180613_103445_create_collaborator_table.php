<?php

use yii\db\Migration;

/**
 * Handles the creation of table `collaborator`.
 */
class m180613_103445_create_collaborator_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('collaborator', [
            'id' => $this->primaryKey()->unique(),
            'name' => $this->string(),
            'surname' => $this->string(),
            'patronymic' => $this->string(),
            'date_of_birth' => $this->date(),
            'city' => $this->string(),
            'date_of_commencement_of_work' => $this->date(),
            'lendth_of_work' => $this->integer(3),
            'position' => $this->string(),
            'department_number' => $this->integer(11),
            'identification_code' => $this->integer(12),
            'email' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('collaborator');
    }
}
