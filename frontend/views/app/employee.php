<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

?>
<div class="row">
    <div class="col-lg-5">
        <?php $form = ActiveForm::begin(['id' => 'form-employee']); ?>

        <?= $form->field($model, 'nama')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'nip') ?>

        <?= $form->field($model, 'jekel')->dropdownList(
            [
                ''  => 'Pilih Jenis Kelamin',
                'L' => 'Laki-laki',
                'P' => 'Perempuan'
            ]
        ) ?>

        <?= $form->field($model, 'tempat_lahir') ?>

        <?= $form->field($model, 'tgl_lahir')->widget(\yii\jui\DatePicker::classname(), [
            'dateFormat' => 'dd-MM-yyyy',
            'options' => ['class' => 'form-control']
        ]) ?>

        <?= $form->field($model, 'telpon') ?>

        <?= $form->field($model, 'agama')->dropdownList(
            [
                ''          => 'Pilih Agama',
                'islam'     => 'islam',
                'kristen'   => 'Kristen',
                'hindu'     => 'Hindu',
                'Katolik'   => 'Katolik',
                'KongHuchu' => 'KongHuchu'
            ]
        ) ?>

        <?= $form->field($model, 'alamat') ?>
        <?= $form->field($model, 'golongan') ?>

        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
        ]) ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-success', 'name' => 'submit-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>