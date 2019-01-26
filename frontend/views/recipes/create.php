<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Recipes */

$this->title = 'Добавление рецепта';
$this->params['breadcrumbs'][] = ['label' => 'Рецепты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recipes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
