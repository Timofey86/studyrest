<?php

use yii\db\Migration;

/**
 * Class m220918_074705_add_demo_data_to_order
 */
class m220918_074705_add_demo_data_to_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $rows = [];
        for($i = 0; $i < 200; $i++){
            $faker = \Faker\Factory::create();
            $rows[] = [
                $faker->unixTime('now'),
                $faker->firstName,
                $faker->lastName,
                $faker->address,
            ];
        }
        $this->batchInsert('order',[
            'created_at',
            'first_name',
            'last_name',
            'address'
        ],$rows);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('order');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220918_074705_add_demo_data_to_order cannot be reverted.\n";

        return false;
    }
    */
}
