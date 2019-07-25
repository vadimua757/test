<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Adress */
/* @var $user_id string */

$this->title = 'Create Adress';
$this->params['breadcrumbs'][] = ['label' => 'Adresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adress-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user_id' => $user_id,
    ]) ?>

</div>
