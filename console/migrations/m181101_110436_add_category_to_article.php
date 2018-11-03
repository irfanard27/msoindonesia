<?php

use yii\db\Migration;

/**
 * Class m181101_110436_add_category_to_article
 */
class m181101_110436_add_category_to_article extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('article', 'category_article_id', $this->integer());
        
        $this->createIndex(
            'idx-article-category_article_id',
            'article',
            'category_article_id'
        );

        $this->addForeignKey(
            'fk-article-category_article_id',
            'article',
            'category_article_id',
            'category_article',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181101_110436_add_category_to_article cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181101_110436_add_category_to_article cannot be reverted.\n";

        return false;
    }
    */
}
