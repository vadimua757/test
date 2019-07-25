<?php

use app\models\Users;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel app\models\UsersSearch */



$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'login',
            'password:ntext',
            'name',
            'surname',
            [
                'attribute' => 'sex',
                'filter' => Users::SEX,
                'value' => function ($model) {
                return $model::SEX[$model->sex];
                },
            ],
            [
                'attribute' => 'date_add',
                'value' => function ($model) {
                return Yii::$app->formatter->asDatetime($model->date_add, "php:d-m-y  H:i");
                },
            ],
            'email:email',

            [
                'class' => 'yii\grid\ActionColumn',
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
