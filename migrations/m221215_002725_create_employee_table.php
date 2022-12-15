<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `{{%employee}}`.
 */
class m221215_002725_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('employee', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'job' => Schema::TYPE_STRING . ' NOT NULL',
            'salary' => Schema::TYPE_DOUBLE . ' NOT NULL',        
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('employee');
    }
}
