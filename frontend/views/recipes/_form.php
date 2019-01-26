<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Recipes */
/* @var $form yii\widgets\ActiveForm */
$authors = \app\models\Category::find()->all();
// формируем массив, с ключем равным полю 'id' и значением равным полю 'name'
$items = ArrayHelper::map($authors,'id','title');
$params = [
    'prompt' => 'выберите категорию'
];
?>

<div class="recipes-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preparingTime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rationCount')->textInput() ?>

    <?= $form->field($model, 'imageUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'videoUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoryId')->dropDownList($items, $params) ?>

    <?= $form->field($model, 'ingredients')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
