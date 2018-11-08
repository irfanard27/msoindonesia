<?php

use yii\db\Migration;

/**
 * Class m181107_122610_create_table_materi
 */
class m181107_122610_create_table_materi extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('materi', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'mso_class_id' => $this->integer(),
            'day' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-materi-mso_class_id',
            'materi',
            'mso_class_id'
        );

        $this->addForeignKey(
            'fk-materi-mso_class_id',
            'materi',
            'mso_class_id',
            'mso_class',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181107_122610_create_table_materi cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181107_122610_create_table_materi cannot be reverted.\n";

        return false;
    }
    */
}
