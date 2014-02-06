<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Users $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="users-form">

	<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'fname')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'mi')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'lname')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'emailadd')->textInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'contact')->textInput(['maxlength' => 10]) ?>

		<?= $form->field($model, 'password')->passwordInput(['maxlength' => 45]) ?>

		<?= $form->field($model, 'username')->textInput(['maxlength' => 45]) ?>

		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
