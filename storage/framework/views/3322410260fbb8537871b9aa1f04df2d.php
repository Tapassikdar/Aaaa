<div class="row p-3 text-left">
    <div class="col-md-12 mb-3 text-center">
        <h3 class="text-uppercase">Social Network Accts</h2>
    </div>
    <div class="col-md-12 form-group">
        <?php echo Form::label('facebook','Facebook:'); ?>

        <?php echo Form::text('facebook','',['class'=>'form-control','placeholder'=>'Type Here']); ?>

    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('twitter','Twitter:', ['class' => 'required-star']); ?>

        <?php echo Form::text('twitter','',['class'=>$errors->has('twitter')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>

    <div class="col-md-6 form-group">
        <?php echo Form::label('instagram','Instagram:',['class' => 'required-star']); ?>

        <?php echo Form::text('instagram','',['class'=>$errors->has('instagram')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>
</div><?php /**PATH /home/hellujjg/model.kdsystemsbd.com/resources/views/layouts/includes/seven-step.blade.php ENDPATH**/ ?>