<?php

use yii\db\Migration;

/**
 * Class m180608_182536_create_table_subscriber
 */
class m180608_182536_create_table_subscriber extends Migration
{
    public function up()
    {
        $sql = 'CREATE TABLE subscriber (id INT(11) AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) UNIQUE);';
        Yii::$app->db->createCommand($sql)->execute();
    }

    public function down()
    {
     $sql = 'DROP TABLE subscriber';
        Yii::$app->db->createCommand($sql)->execute();  
    }
}
