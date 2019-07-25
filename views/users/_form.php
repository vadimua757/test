<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $adress app\models\Adress */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>

<div class="row">
    <div class="col-md-6">
        <h3>Данные пользователя</h3>
        <div class="users-form">

            <?= $form->field($model, 'login')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput(); ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'sex')->dropdownList(
                $model::SEX,
                ['prompt'=>'Выберите Ваш пол'] );
            ?>

            <?= $form->field($model, 'email')->input('email'); ?>
        </div>
    </div>
    <div class="col-md-6">
        <?php if ($model->isNewRecord): ?>
        <h3>Данные адреса</h3>
        <div class="adress-form">

            <?= $form->field($adress, 'post_code')->textInput(['maxlength' => true]) ?>

            <?= $form->field($adress, 'country')->textInput(['maxlength' => true]) ?>

            <?= $form->field($adress, 'city')->textInput(['maxlength' => true]) ?>

            <?= $form->field($adress, 'street')->textInput(['maxlength' => true]) ?>

            <?= $form->field($adress, 'house_number')->textInput() ?>

            <?= $form->field($adress, 'flat_number')->textInput() ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="row">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

