<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Formato $model */

$this->title = 'Create Formato';
$this->params['breadcrumbs'][] = ['label' => 'Formatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formato-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
