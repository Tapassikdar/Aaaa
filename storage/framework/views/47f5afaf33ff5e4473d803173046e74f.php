<div class="row text-left p-3 model-experiences">
    <div class="col-md-12 mb-3 text-center">
        <h3 class="text-uppercase">Model Experience</h3>
    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('foreign_model', 'Are you a foreign model?', ['class' => 'required-star']); ?> <br>
        <div class="form-check form-check-inline ml-3">
            <input class="form-check-input" type="radio" name="foreign_model" id="foreignModelYes" value="Yes">
            <label class="form-check-label" for="foreignModelYes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="foreign_model" id="foreignModelNo" value="No">
            <label class="form-check-label" for="foreignModelNo">No</label>
        </div>
    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('medeled_before', 'Have you Modeled before?', ['class' => 'required-star']); ?> <br>
        <div class="form-check form-check-inline ml-3">
            <input class="form-check-input" type="radio" name="medeled_before" id="modeledBeforeYes" value="Yes">
            <label class="form-check-label" for="modeledBeforeYes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="medeled_before" id="modeledBeforeNo" value="No">
            <label class="form-check-label" for="modeledBeforeNo">No</label>
        </div>
    </div>

    <div class="col-md-6 form-group">
        <?php echo Form::label('base_city','What is your Base City?',['class'=>'required-star']); ?>

        <?php echo Form::text('base_city','',['class'=>$errors->has('base_city')?'form-control is-invalid':'form-control required','placeholder'=>'Type Here']); ?>

    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('model_base_city', 'Do you Model in your Base City?', ['class' => 'required-star']); ?> <br>
        <div class="form-check form-check-inline ml-3">
            <input class="form-check-input" type="radio" name="model_base_city" id="modeledBaseCityYes" value="Yes">
            <label class="form-check-label" for="modeledBaseCityYes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="model_base_city" id="modeledBaseCityNo" value="No">
            <label class="form-check-label" for="modeledBaseCityNo">No</label>
        </div>
    </div>

    <div class="col-md-6 form-group base_city_checkbox">
        <?php echo Form::label('availability_base_city', 'Available in Based City?', ['class' => 'required-star']); ?> <br>
        <div class="form-check form-check-inline ml-3">
            <input class="form-check-input" type="checkbox" name="availability_base_city_incall" id="availableBaseCityYes" value="Incall">
            <label class="form-check-label" for="availableBaseCityYes">Incall</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="availability_base_city_outcall" id="availableBaseCityNo" value="Outcall">
            <label class="form-check-label" for="availableBaseCityNo">Outcall</label>
        </div>
    </div>

    <div class="col-md-6 form-group">
        <?php echo Form::label('travel_often', 'Do you travel often?', ['class' => 'required-star']); ?> <br>
        <div class="form-check form-check-inline ml-3">
            <input class="form-check-input" type="radio" name="travel_often" id="travelOftenYes" value="Yes">
            <label class="form-check-label" for="travelOftenYes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="travel_often" id="travelOftenNo" value="No">
            <label class="form-check-label" for="travelOftenNo">No</label>
        </div>
    </div>

    <div class="col-md-6 form-group">
        <?php echo Form::label('model_tour', 'Do you do model tours?', ['class' => 'required-star']); ?> <br>
        <div class="form-check form-check-inline ml-3">
            <input class="form-check-input" type="radio" name="model_tour" id="modelTourYes" value="Yes">
            <label class="form-check-label" for="modelTourYes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="model_tour" id="modelTourNo" value="No">
            <label class="form-check-label" for="modelTourNo">No</label>
        </div>
    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('adult_film_star', 'Are you an adult film star?', ['class' => 'required-star']); ?> <br>
        <div class="form-check form-check-inline ml-3">
            <input class="form-check-input" type="radio" name="adult_film_star" id="adultFilmStarYes" value="Yes">
            <label class="form-check-label" for="adultFilmStarYes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="adult_film_star" id="adultFilmStarNo" value="No">
            <label class="form-check-label" for="adultFilmStarNo">No</label>
        </div>
    </div>

    <div class="col-md-6 form-group">
        <?php echo Form::label('companion_experience', 'Do you have experience as a companion?'); ?>

        <?php echo Form::select('companion_experience',['Yes' => 'Yes', 'No'],'',['class'=>$errors->has('companion_experience')?'form-control is-invalid':'form-control required','placeholder'=>'---']); ?>

    </div>
    <div class="col-md-6 form-group">
        <?php echo Form::label('time_length_experience', 'What is the time length of your experience?'); ?>

        <?php echo Form::text('time_length_experience','',['class'=>'form-control','placeholder'=>'Type Here']); ?>

    </div>

    <div class="col-md-12 form-group">
        <?php echo Form::label('resume_highlight', "List of resume highlights we should know about (Ex. Awards, Magazines, Films etc.)"); ?>

        <?php echo Form::text('resume_highlight','',['class' => 'form-control','placeholder'=>'Type Here']); ?>

    </div>
    <div class="col-md-12 form-group">
        <?php echo Form::label('profile_url', "Please mention your Free one's Profile URL if you have?"); ?>

        <?php echo Form::text('profile_url','',['class'=>'form-control','placeholder'=>'Type Here']); ?>

    </div>
</div>
  <?php /**PATH /home/mytopten/model.alluringintros.eu/resources/views/layouts/includes/two-step.blade.php ENDPATH**/ ?>