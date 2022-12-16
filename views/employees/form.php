<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="container">
	
	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'name', ['options' => ['class' => 'mb-3']]) ?>
	<?= $form->field($model, 'job', ['options' => ['class' => 'mb-3']]) ?>
	<?= $form->field($model, 'salary', ['options' => ['class' => 'mb-3']]) ?>

	<div class="form-group">
		<?= Html::submitButton('Submit', [
			'type' => 'submit',
			'class' => 'btn btn sm btn-success',
		]) ?>
	</div>

	<?php $form = ActiveForm::end() ?>

</div>