<?php

use yii\db\Migration;

/**
 * Class m220918_074546_createTableProduct
 */
class m220918_074546_createTableProduct extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product',[
            'id' => $this->primaryKey(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'name' => $this->string(),
            'color' => $this->string(),
            'price' => $this->decimal(10,2)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220918_074546_createTableProduct cannot be reverted.\n";

        return false;
    }
    */
}
