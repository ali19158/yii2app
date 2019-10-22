<?php
 use yii\widgets\ActiveForm;
 use yii\helpers\Html;
?>

<h1>Search</h1>
<div class="col-md-12">
<?php $form = ActiveForm::begin(); ?>
    <?php echo $form->field($model, 'keyword');?>

    <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']); ?>
<?php ActiveForm::end(); ?>
</div>

<div class="col-md-12">
    <?php if($results): ?>
        <?php foreach($results as $item): ?>

        <?php echo $item['title']; ?>
        <br>
        <?php echo $item['content']; ?>
        <?php echo "<hr>"; ?>

        <?php endforeach; ?>
    <?php endif; ?>
</div>