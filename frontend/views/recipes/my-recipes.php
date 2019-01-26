<?php

use yii\data\Pagination;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мои рецепты';
$this->params['breadcrumbs'][] = $this->title;

$query = \app\models\Recipes::find();
$pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 9, 'forcePageParam' => false, 'pageSizeParam' => false]);
$recipes = $query->offset($pages->offset)->limit($pages->limit)->all();
?>
<div class="recipes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('добавить рецепт', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <div class="row">
        <?php foreach ($recipes as $recipe) { ?>
            <div class="recipe col-md-4">
                <?= Html::img(Url::to('/images/recipe1.jpg', true), ['alt' => 'pic', 'class' => 'recipe-image']) ?>
                <h2><?=$recipe->title?></h2>
                <?= Html::a('подробнее', ['recipes/view', 'id' => $recipe->id], ['class' => 'btn btn-success']) ?>
            </div>
        <?php } ?>
    </div>


    <div>
    <?php echo \yii\widgets\LinkPager::widget([
        'pagination' => $pages,
    ]);?>
    </div>


</div>
