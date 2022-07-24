<?php

use app\models\Vacation;
use yii\bootstrap4\ActiveForm;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'My vacations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-add-vacation">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="actions my-3">
        <?php echo Html::a('Create', array('vacation/create'), array('class'=>'btn btn-success')); ?>
    </div>
    <?php print "<pre>"?>
    <?php if(!empty($vacations)):?>
        <?php foreach( $vacations as $vacation ):?>

        <?php endforeach;?>
    <?php else:?>
        <p class="alert alert-info">You don't have any vacation. <a href="/vacation/create" class="btn btn-secondary">Please add a vacation</a></p>
    <?php endif;?>
</div>