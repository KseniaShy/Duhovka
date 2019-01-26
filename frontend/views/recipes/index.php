<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Рецепты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recipes-index">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'userId',
            'title',
            'description',
            'preparingTime',
            //'rationCount',
            //'imageUrl',
            //'videoUrl',
            //'categoryId',
            //'ingredients',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
