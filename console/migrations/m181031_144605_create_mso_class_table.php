<?php

use yii\db\Migration;

/**
 * Handles the creation of table `mso_class`.
 */
class m181031_144605_create_mso_class_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('mso_class', [
            'id' => $this->primaryKey(),
            'string' => $this->string(100)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('mso_class');
    }
}
