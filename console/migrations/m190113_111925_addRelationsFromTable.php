<?php

use yii\db\Migration;

/**
 * Class m190113_111925_addRelationsFromTable
 */
class m190113_111925_addRelationsFromTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey("FK_Recipes_UserId", "user", "id", "recipes", "id", "CASCADE", "CASCADE");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey("FK_Recipes_UserId", "user");
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190113_111925_addRelationsFromTable cannot be reverted.\n";

        return false;
    }
    */
}
