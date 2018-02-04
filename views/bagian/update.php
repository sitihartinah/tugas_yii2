<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bagian */

$this->title = 'Update Bagian: ' . $model->kd_bagian;
$this->params['breadcrumbs'][] = ['label' => 'Bagians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_bagian, 'url' => ['view', 'id' => $model->kd_bagian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bagian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
