<?php

use yii\db\Migration;

/**
 * Class m190113_111904_createCategoryTable
 */
class m190113_111904_createCategoryTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("category", [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("category");
        return false;
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190113_111904_createCategoryTable cannot be reverted.\n";

        return false;
    }
    */
}
