<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "recipes".
 *
 * @property int $id
 * @property int $userId
 * @property string $title
 * @property string $description
 * @property string $preparingTime
 * @property int $rationCount
 * @property string $imageUrl
 * @property string $videoUrl
 * @property int $categoryId
 * @property array $ingredients
 *
 * @property User $user
 */
class Recipes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'recipes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'rationCount', 'categoryId'], 'integer'],
            [['title', 'description', 'ingredients'], 'required'],
            [['ingredients'], 'safe'],
            [['title', 'description', 'preparingTime', 'imageUrl', 'videoUrl'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userId' => 'User ID',
            'title' => 'Title',
            'description' => 'Description',
            'preparingTime' => 'Preparing Time',
            'rationCount' => 'Ration Count',
            'imageUrl' => 'Image Url',
            'videoUrl' => 'Video Url',
            'categoryId' => 'Category ID',
            'ingredients' => 'Ingredients',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }
}
