<?php

use yii\db\Migration;

/**
 * Class m181101_110159_create_table_category_article
 */
class m181101_110159_create_table_category_article extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category_article', [
            'id' => $this->primaryKey(),
            'category' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181101_110159_create_table_category_article cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181101_110159_create_table_category_article cannot be reverted.\n";

        return false;
    }
    */
}
