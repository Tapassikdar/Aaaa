<div class="row text-left p-2">
    <div class="col-md-12 text-center mb-3">
        <h3 class="text-uppercase">New Model Application Form</h2>
        <h4 class="text-uppercase">Kindly fill out the form with your details</h3>
    </div>
    <div class="col-md-12">
        <div class="form-group profession">
            <?php echo Form::label('profession','Profession',['class'=>'required-star']); ?>

            <div class="row">
                <div class="checkbox col-md-4">
                    <label><?php echo Form::checkbox('pornstar', 'Pornstar', false,['class'=> 'mr-1 require']); ?> Pornstar</label>
                </div>
                <div class="checkbox col-md-4">
                    <label><?php echo Form::checkbox('cam_model', 'Cam Model', false,['class'=> 'mr-1 require']); ?> Cam Model</label>
                </div>
                <div class="checkbox col-md-4">
                    <label><?php echo Form::checkbox('social_media_star', 'Social Media Star', false,['class'=> 'mr-1 require']); ?> Social Media Star</label>
                </div>
                <div class="checkbox col-md-4">
                    <label><?php echo Form::checkbox('magazine_model', 'Magazine Model', false,['class'=> 'mr-1 require']); ?> Magazine Model</label>
                </div>
                <div class="checkbox col-md-4">
                    <label><?php echo Form::checkbox('other', 'Others', false,['class'=> 'mr-2 other-profession require']); ?> Other</label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 form-group other-profession-div">
        <?php echo Form::text('other_profession','',['class'=>$errors->has('other_profession') ? 'form-control is-invalid':'form-control required','placeholder'=>'Enter your other profession']); ?>

    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('legal_first_name', 'Your Legal First Name', ['class' => 'required-star']); ?>

        <?php echo Form::text('legal_first_name','',['class'=>$errors->has('legal_first_name')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('legal_last_name', 'Your Legal Last Name', ['class' => 'required-star']); ?>

        <?php echo Form::text('legal_last_name','',['class'=>$errors->has('legal_last_name')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>

    <div class="col-md-6 form-group">
        <?php echo Form::label('stage_first_name', 'Your Stage First Name', ['class' => 'required-star']); ?>

        <?php echo Form::text('stage_first_name','',['class'=>$errors->has('stage_first_name')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('stage_last_name', 'Your Stage Last Name', ['class' => 'required-star']); ?>

        <?php echo Form::text('stage_last_name','',['class'=>$errors->has('stage_last_name')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>

    <div class="col-md-6 form-group">
        <?php echo Form::label('email', 'Email', ['class' => 'required-star']); ?>

        <?php echo Form::email('email','',['class'=>$errors->has('email')?'form-control is-invalid':'form-control required','placeholder'=>'example@domain.com']); ?>

    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('phone', 'Phone', ['class' => 'required-star']); ?>

        <?php echo Form::tel('phone','',['class'=>$errors->has('phone')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>

    <div class="col-md-6 form-group">
        <?php echo Form::label('nationality', 'Nationality', ['class' => 'required-star']); ?>

        <?php echo Form::text('nationality','',['class'=>$errors->has('nationality')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('age', 'Age', ['class' => 'required-star']); ?>

        <?php echo Form::number('age','',['class'=>$errors->has('age')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>

    <div class="col-md-6 form-group">
        <?php echo Form::label('dob', 'Date Of Birth', ['class' => 'required-star']); ?>

        <?php echo Form::date('dob','',['class'=>$errors->has('dob')?'form-control is-invalid':'form-control required']); ?>

    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('gender', 'Gender', ['class' => 'required-star']); ?>

        <?php echo Form::select('gender',['Female' => 'Female', 'Male' => 'Male', 'Transgender Female' => 'Transgender Female', 'Transgender Male' => 'Transgender Male'],'',['class'=>$errors->has('gender')?'form-control is-invalid':'form-control required','placeholder'=>'---']); ?>

    </div>
    <div class="col-md-12 form-group">
        <?php echo Form::label('ethnicities', 'Ethnicity', ['class' => 'required-star']); ?>

        <?php echo Form::select('ethnicities',['Asian' => 'Asian', 'Black' => 'Black', 'White' => 'White', 'Latin' => 'Latin', 'European' => 'European'],'',['class'=>$errors->has('ethnicities')?'form-control is-invalid':'form-control required','placeholder'=>'---']); ?>

    </div>
</div>
<?php /**PATH /home/hellujjg/model.kdsystemsbd.com/resources/views/layouts/includes/one-step.blade.php ENDPATH**/ ?>