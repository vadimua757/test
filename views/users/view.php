<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $searchAdressModel app\models\Adress */
/* @var $model app\models\Users */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'login',
            'password:ntext',
            'name',
            'surname',
            [
                'attribute' => 'sex',
                'value' => $model::SEX[$model->sex],
                'format' => 'raw',
            ],
            'email:email',
        ],
    ]) ?>

</div>
<div class="adress-view">

    <p>
        <?= Html::a('Create Adress', ['adress/create', 'user_id'=>$model->id], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    $dataProvider =
    Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $adressDataProvider,
        'filterModel' => $searchAdressModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'post_code',
            'country',
            'city',
            'street',
            'house_number',
            'flat_number',
            [
                    'class' => 'yii\grid\ActionColumn',
                'controller' => 'adress'
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
