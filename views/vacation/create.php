<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

$this->title = 'Add Vacation';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-add-vacation">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to signup:</p>
    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'form-add-vacation']); ?>
            <?= $form->errorSummary($model) ?>
            <?= $form->field($model, 'started_at')->textInput(['type' => 'date', 'value' => '2022-02-06']) ?>
            <?= $form->field($model, 'ended_at')->textInput(['type' => 'date', 'value' => '2022-03-06']) ?>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'name' => 'add-vacation-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>