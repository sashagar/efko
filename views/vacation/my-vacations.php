<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

$this->title = 'My vacations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-add-vacation">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="actions my-3">
        <?php echo Html::a('Create', array('vacation/create'), array('class'=>'btn btn-success')); ?>
    </div>
    <?php if(!empty($dataProvider)):?>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Started at</th>
            <th>Ended at</th>
            <th>Status</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($dataProvider as $row):?>
                <tr>
                    <td><?= $row->id ?></td>
                    <td><?= $row->started_at ?></td>
                    <td><?= $row->ended_at ?></td>
                    <td><?= $row->status_txt ?></td>
                    <td>
                        <?php if ($row->can_edit):?>
                            <a href="/vacation/update/<?= $row->id?>" class="btn btn-primary">Edit</a>
                            <?php echo Html::a('Delete', array('vacation/delete', 'id' => $row->id), array('class'=>'btn btn-danger')); ?>
                        <?php endif;?>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else:?>
        <p class="alert alert-info">You don't have any vacation. <a href="/vacation/create" class="btn btn-secondary">Please add a vacation</a></p>
    <?php endif;?>
</div>