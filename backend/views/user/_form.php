<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>



    <?php $form =  yii\bootstrap\ActiveForm::begin(
        [
            'layout' => 'horizontal',
            'fieldConfig' => [
                'horizontalCssClasses' => ['label' => 'col-sm-2',]
            ],
            'options' => ['enctype' => 'multipart/form-data']
        ]
    ); ?>



    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avatar')->fileInput(['accept' => 'image/*'])
        ->label('Avatar'.Html::img(
                $model->getThumbUploadUrl('avatar', \common\models\User::AVATAR_ICO))
        )?>

    <?= $form->field($model, 'status')->dropDownList(\common\models\User::STATUS_LABELS) ?>

<div class="row">
    <div class="col-md-2 col-md-offset-2">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
</div>

    <?php yii\bootstrap\ActiveForm::end(); ?>

</div>
