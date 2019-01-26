<?php

use yii\db\Migration;

/**
 * Class m190113_111853_createRecipesTable
 */
class m190113_111853_createRecipesTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("recipes", [
            'id' => $this->primaryKey(),
            'userId' => $this->integer(),
            'title' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'preparingTime' => $this->string(),
            'rationCount' => $this->integer(),
            'imageUrl' => $this->string(),
            'videoUrl' => $this->string(),
            'categoryId' => $this->integer(),
            'ingredients' => $this->json()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('recipes');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190113_111853_createRecipesTable cannot be reverted.\n";

        return false;
    }
    */
}
