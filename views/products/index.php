<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php foreach ($models as $model):?>
    <div class="col-md-6">
        <?= $model->product_name; ?>
    </div>
    <p>Автор: <?php echo($model->user->username) ?></p>

    <div class="col-md-6"> Створено:
        <?= $model->date_created; ?>
    </div>
    <div class="col-md-6">
        <?= $model->price; ?>
    </div>
    <?php endforeach; ?>

</div>
