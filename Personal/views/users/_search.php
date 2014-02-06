<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\search $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="users-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

		<?= $form->field($model, 'userid') ?>

		<?= $form->field($model, 'fname') ?>

		<?= $form->field($model, 'mi') ?>

		<?= $form->field($model, 'lname') ?>

		<?= $form->field($model, 'emailadd') ?>

		<?php // echo $form->field($model, 'contact') ?>

		<?php // echo $form->field($model, 'password') ?>

		<?php // echo $form->field($model, 'username') ?>

		<div class="form-group">
			<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
			<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
