<?php

use yii\db\Migration;

/**
 * Class m181107_123957_create_table_kelas
 */
class m181107_123957_create_table_kelas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('kelas', [
            'id' => $this->primaryKey(),
            'member_id' => $this->integer(),
            'start_date' => $this->text(),
            'mso_class_id' => $this->integer(),
            'day' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-kelas-member_id',
            'kelas',
            'member_id'
        );

        $this->addForeignKey(
            'fk-kelas-member_id',
            'kelas',
            'member_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181107_123957_create_table_kelas cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181107_123957_create_table_kelas cannot be reverted.\n";

        return false;
    }
    */
}
