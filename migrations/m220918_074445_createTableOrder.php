<?php

use yii\db\Migration;

/**
 * Class m220918_074445_createTableOrder
 */
class m220918_074445_createTableOrder extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order',[
            'id' => $this->primaryKey(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'address' => $this->string(1000)
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220918_074445_createTableOrder cannot be reverted.\n";

        return false;
    }
    */
}
