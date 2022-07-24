<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

$this->title = 'Add Vacation';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-add-vacation">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Update vacation:</p>
    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'form-update-vacation']); ?>
            <?= $form->errorSummary($model) ?>
            <?= $form->field($model, 'started_at')->textInput() ?>
            <?= $form->field($model, 'ended_at')->textInput() ?>
            <div class="form-group">
                <?= Html::submitButton('Update', ['class' => 'btn btn-primary', 'name' => 'add-vacation-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>