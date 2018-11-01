<?php

use yii\db\Migration;

/**
 * Handles the creation of table `class`.
 */
class m181031_144334_create_class_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('class', [
            'id' => $this->primaryKey(),
            'class' => $this->string(100)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('class');
    }
}
