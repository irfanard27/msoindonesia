<?php

use yii\db\Migration;

/**
 * Class m181103_054546_create_table_product
 */
class m181103_054546_create_table_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'product_name' => $this->string(),
            'description' => $this->text(),
            'price' => $this->integer(),
            'images' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181103_054546_create_table_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181103_054546_create_table_product cannot be reverted.\n";

        return false;
    }
    */
}
