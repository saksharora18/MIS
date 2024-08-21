<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Myusers $model */

$this->title = 'Create Myusers';
$this->params['breadcrumbs'][] = ['label' => 'Myusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="myusers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
