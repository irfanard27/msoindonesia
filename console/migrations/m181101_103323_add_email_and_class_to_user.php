<?php

use yii\db\Migration;

/**
 * Class m181101_103323_add_email_and_class_to_user
 */
class m181101_103323_add_email_and_class_to_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'mso_class_id', $this->integer());

        /* index for mso class */
        $this->createIndex(
            'idx-user-mso_class_id',
            'user',
            'mso_class_id'
        );

        /* foreign key for mso class */
        $this->addForeignKey(
            'fk-user-mso_class_id',
            'user',
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
        echo "m181101_103323_add_email_and_class_to_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181101_103323_add_email_and_class_to_user cannot be reverted.\n";

        return false;
    }
    */
}
