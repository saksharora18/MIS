<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Myusers $model */

$this->title = 'Update Myusers: ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Myusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'user_id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="myusers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
