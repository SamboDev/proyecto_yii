<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Director;
use app\models\Formato;
use app\models\Genero;

/** @var yii\web\View $this */
/** @var app\models\Pelicula $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pelicula-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'GEN_ID')->dropDownList(
        ArrayHelper::map(Genero::find()->all(),'GEN_ID','GEN_NOMBRE'),
        ['prompt'=>'Seleccione...'])?>

    <?= $form->field($model, 'DIR_ID')->dropDownList(
        ArrayHelper::map(Director::find()->all(),'DIR_ID','DIR_NOMBRE'),
        ['prompt'=>'Seleccione...'])?>

    <?= $form->field($model, 'FOR_ID')->dropDownList(
        ArrayHelper::map(Formato::find()->all(),'FOR_ID','FOR_NOMBRE'),
        ['prompt'=>'Seleccione...'])?>

    <?= $form->field($model, 'PEL_NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PEL_COSTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PEL_FECHA_ESTRENO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
