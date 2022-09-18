<?php

use yii\db\Migration;

/**
 * Class m220918_074924_createTableProductInOrder
 */
class m220918_074924_createTableProductInOrder extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product_in_order',[
            'id' => $this->primaryKey(),
            'created_at' => $this->integer(),
            'price' => $this->decimal(10,2),
            'product_id' => $this->integer(),
            'order_id' => $this->integer(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product_in_order');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220918_074924_createTableProductInOrder cannot be reverted.\n";

        return false;
    }
    */
}
