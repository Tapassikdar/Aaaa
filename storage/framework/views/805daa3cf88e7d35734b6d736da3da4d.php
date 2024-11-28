<div class="row p-3 text-left">
    <div class="col-md-12 text-center">
        <h3 class="text-uppercase">Your Stats</h3>
    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('height','Height',['class'=>'required-star']); ?>

        <?php echo Form::text('height','',['class'=>$errors->has('height')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('weight','Weight',['class'=>'required-star']); ?>

        <?php echo Form::text('weight','',['class'=>$errors->has('weight')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>

    <div class="col-md-6 form-group">
        <?php echo Form::label('bust_size','Bust Size',['class'=>'required-star']); ?>

        <?php echo Form::text('bust_size','',['class'=>$errors->has('bust_size')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('cup_size','Cup Size',['class'=>'required-star']); ?>

        <?php echo Form::text('cup_size','',['class'=>$errors->has('cup_size')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>

    <div class="col-md-6 form-group">
        <?php echo Form::label('waist','Waist',['class'=>'required-star']); ?>

        <?php echo Form::text('waist','',['class'=>$errors->has('waist')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('hips','Hips',['class'=>'required-star']); ?>

        <?php echo Form::text('hips','',['class'=>$errors->has('hips')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>

    <div class="col-md-6 form-group">
        <?php echo Form::label('hair_color','Hair Color',['class'=>'required-star']); ?>

        <?php echo Form::select('hair_color',['Black' => 'Black', 'Brown' => 'Brown', 'Blonde' => 'Blonde', 'Red' => 'Red'],'',['class'=>$errors->has('gender')?'form-control is-invalid':'form-control required','placeholder'=>'---']); ?>

    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('eye_color','Eye Color',['class'=>'required-star']); ?>

        <?php echo Form::text('eye_color','',['class'=>$errors->has('eye_color')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>

    <div class="col-md-6 form-group">
        <?php echo Form::label('tattoos','Tattoos',['class'=>'required-star']); ?>

        <?php echo Form::text('tattoos','',['class'=>$errors->has('tattoos')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>
</div>    
    <?php /**PATH /home/mytopten/model.alluringintros.eu/resources/views/layouts/includes/four-step.blade.php ENDPATH**/ ?>