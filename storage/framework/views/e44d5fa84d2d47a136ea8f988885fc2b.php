<!-- Email content -->

<!DOCTYPE html>
<html>
<head>
    <style>
        

    </style>
</head>
<body>
    <h1>Form Data</h1>

    <p><strong>Profession:</strong>
        <?php echo e(isset($formData['pornstar']) ? $formData['pornstar']. ',' : null); ?>

        <?php echo e(isset($formData['cam_model']) ? $formData['cam_model'] .',' : null); ?>

        <?php echo e(isset($formData['social_media_star']) ? $formData['social_media_star'] .',' : null); ?>

        <?php echo e(isset($formData['magazine_model']) ? $formData['magazine_model'] .',' : null); ?>

        <?php if(isset($formData['other']) && $formData['other'] == 'Others'): ?> 
        <?php echo e($formData['other']); ?> - <?php echo e(isset($formData['other_profession']) ?  $formData['other_profession'] : null); ?> 
        <?php else: ?>
        <?php echo e(isset($formData['other_profession']) ? $formData['other_profession'] : null); ?>

        <?php endif; ?>
    </p>
    <p><strong>Legal First Name:</strong> <?php echo e(isset($formData['legal_first_name']) ? $formData['legal_first_name'] : null); ?> </p>
    <p><strong>Legal Last Name:</strong> <?php echo e(isset($formData['legal_last_name']) ? $formData['legal_last_name'] : null); ?> </p>
    <p><strong>Stage First Name:</strong> <?php echo e(isset($formData['stage_first_name']) ? $formData['stage_first_name'] : null); ?> </p>
    <p><strong>Stage Last Name:</strong> <?php echo e(isset($formData['stage_last_name']) ? $formData['stage_last_name'] : null); ?> </p>
    <p><strong>Email:</strong> <?php echo e(isset($formData['email']) ? $formData['email'] : null); ?></p>
    <p><strong>Phone:</strong><?php echo e(isset($formData['phone']) ? $formData['phone'] : null); ?></p>
    <p><strong>Nationality:</strong><?php echo e(isset($formData['nationality']) ? $formData['nationality'] : null); ?></p>
    <p><strong>Age:</strong><?php echo e(isset($formData['age']) ? $formData['age'] : null); ?></p>
    <p><strong>Date of Birth:</strong><?php echo e(isset($formData['dob']) ? $formData['dob'] : null); ?></p>
    <p><strong>Gender:</strong> <?php echo e(isset($formData['gender']) ? $formData['gender'] : null); ?> </p>
    <p><strong>Ethnicity:</strong> <?php echo e(isset($formData['ethnicities']) ? $formData['ethnicities'] : null); ?> </p>
    </br>

    <h2>Model Experience</h2>
    <p><strong>Foreign Model:</strong> <?php echo e(isset($formData['foreign_model']) ? $formData['foreign_model']: null); ?> </p>
    <p><strong>Have You Model Before:</strong> <?php echo e(isset($formData['medeled_before']) ? $formData['medeled_before'] : null); ?> </p>
    <p><strong>Base City:</strong> <?php echo e(isset($formData['base_city']) ? $formData['base_city'] : null); ?> </p>
    <p><strong>Do You Model in Your Base City:</strong> <?php echo e(isset($formData['model_base_city']) ? $formData['model_base_city'] : null); ?> </p>
    <p><strong>Availability in Base City:</strong> 
        <?php echo e(isset($formData['availability_base_city_incall']) ? $formData['availability_base_city_incall'] : null); ?> 
        <?php echo e(isset($formData['availability_base_city_outcall']) ? $formData['availability_base_city_outcall'] : null); ?> 
    </p>
    </p>
    <p><strong>Do You Travel:</strong> <?php echo e(isset($formData['travel_often']) ? $formData['travel_often'] : null); ?> </p>
    <p><strong>Model Tours:</strong> <?php echo e(isset($formData['model_tour']) ? $formData['model_tour'] : null); ?> </p>
    <p><strong>Are you an adult film star:</strong> <?php echo e(isset($formData['adult_film_star']) ? $formData['adult_film_star'] : null); ?> </p>
    <p><strong>Experience as a companion:</strong> <?php echo e(isset($formData['companion_experience']) ? $formData['companion_experience'] : null); ?> </p>
    <p><strong>Experience time length:</strong> <?php echo e(isset($formData['time_length_experience']) ? $formData['time_length_experience'] : null); ?> </p>
    <p><strong>List of resume highlights:</strong> <?php echo e(isset($formData['resume_highlight']) ? $formData['resume_highlight'] : null); ?> </p>
    <p><strong>Free one's Profile URL:</strong> <?php echo e(isset($formData['profile_url']) ? $formData['profile_url'] : null); ?> </p>
    
    <h2>All AIA Models are legal adults.</h2>
    
    <p><strong>Are You Over the age of 18:</strong> <?php echo e(isset($formData['over_eighteen']) ? $formData['over_eighteen'] : null); ?> </p>


    <h2>Your Stats</h2>

    <p><strong>Height:</strong> <?php echo e(isset($formData['height']) ? $formData['height'] : null); ?> </p>
    <p><strong>Weight:</strong> <?php echo e(isset($formData['weight']) ? $formData['weight'] : null); ?> </p>
    <p><strong>Bust Size:</strong> <?php echo e(isset($formData['bust_size']) ? $formData['bust_size'] : null); ?> </p>
    <p><strong>Cup Size:</strong> <?php echo e(isset($formData['cup_size']) ? $formData['cup_size'] : null); ?> </p>
    <p><strong>Waist:</strong> <?php echo e(isset($formData['waist']) ? $formData['waist'] : null); ?> </p>
    <p><strong>Hips:</strong> <?php echo e(isset($formData['hips']) ? $formData['hips'] : null); ?> </p>
    <p><strong>Hair Color:</strong> <?php echo e(isset($formData['hair_color']) ? $formData['hair_color'] : null); ?> </p>
    <p><strong>Eye Color:</strong> <?php echo e(isset($formData['eye_color']) ? $formData['eye_color'] : null); ?> </p>
    <p><strong>Tattoos:</strong> <?php echo e(isset($formData['tattoos']) ? $formData['tattoos'] : null); ?> </p>
    
    <h2>Your Donation For:</h2>
    
    <p><strong>30 Mins:</strong> <?php echo e(isset($formData['mins_30']) ? $formData['mins_30'] : null); ?> </p>
    <p><strong>1 Hour:</strong> <?php echo e(isset($formData['hour_1']) ? $formData['hour_1'] : null); ?> </p>
    <p><strong>90 Mins:</strong> <?php echo e(isset($formData['mins_90']) ? $formData['mins_90'] : null); ?> </p>
    <p><strong>2 Hours:</strong> <?php echo e(isset($formData['hours_2']) ? $formData['hours_2'] : null); ?> </p>
    <p><strong>3 Hours:</strong> <?php echo e(isset($formData['hours_3']) ? $formData['hours_3'] : null); ?> </p>
    <p><strong>4 Hours:</strong> <?php echo e(isset($formData['hours_4']) ? $formData['hours_4'] : null); ?> </p>
    <p><strong>5  Hours:</strong> <?php echo e(isset($formData['hours_5']) ? $formData['hours_5'] : null); ?> </p>
    <p><strong>Over Night (8 Hours):</strong> <?php echo e(isset($formData['overnight_8_hours']) ? $formData['overnight_8_hours'] : null); ?> </p>
    <p><strong>Over Day (12 Hours):</strong> <?php echo e(isset($formData['overday_12_hours']) ? $formData['overday_12_hours'] : null); ?> </p>

    <h2>Social Networks Accts:</h2>
    <p><strong>Facebook:</strong> <?php if(isset($formData['facebook'])): ?> <a href="<?php echo e($formData['facebook']); ?>" target="_blank"> <?php echo e($formData['facebook']); ?></a> <?php endif; ?></p>
    <p><strong>Twitter:</strong> <?php if(isset($formData['twitter'])): ?> <a href="<?php echo e($formData['twitter']); ?>" target="_blank"> <?php echo e($formData['twitter']); ?></a> <?php endif; ?></p>
    <p><strong>Instagram:</strong> <?php if(isset($formData['instagram'])): ?> <a href="<?php echo e($formData['instagram']); ?>" target="_blank"> <?php echo e($formData['instagram']); ?></a> <?php endif; ?></p>

    <h2>Please answer these following questions:</h2>
    
    <p><strong>Quesion 1: What is your primary focus and secondary focus in the industry?</strong>
        <?php echo e(isset($formData['primary_focus']) ? $formData['primary_focus'] . ',' : null); ?>

        <?php echo e(isset( $formData['secondary_focus']) ? $formData['secondary_focus'] : null); ?>

    </p>

    <p><strong>Question 2: Do you entertain fetish?:</strong> 
        <?php if(isset($formData['entertain']) && $formData['entertain'] == 'Others'): ?>
        <?php echo e($formData['entertain']); ?> - <?php echo e(isset($formData['others_fetiches']) ? $formData['others_fetiches'] : null); ?>

        <?php else: ?>
            <?php echo e(isset($formData['entertain']) ? $formData['entertain'] : null); ?>

        <?php endif; ?>
    </p>

    <p><strong>Question 3: Do you have any racial objections?:</strong> <?php echo e(isset($formData['racial_objections']) ? $formData['racial_objections'] : null); ?> </p>
    

    <p><strong>Question 4: Do you only see:</strong>
        <?php if(isset($formData['men'])): ?> <?php echo e($formData['men']); ?>, <?php endif; ?>
        <?php if(isset($formData['women'])): ?> <?php echo e($formData['women']); ?>, <?php endif; ?>
        <?php if(isset($formData['couple'])): ?> <?php echo e($formData['couple']); ?>, <?php endif; ?>
        <?php if(isset($formData['transgender'])): ?> <?php echo e($formData['transgender']); ?>, <?php endif; ?>
    </p>

    <div style="margin-top : 1em">
        <?php if(isset($imageFiles) && count($imageFiles) > 0): ?>
            <?php $__currentLoopData = $imageFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uplodedImg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($uplodedImg); ?>" target="_blank"><?php echo e($uplodedImg); ?></a> <br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</body>
</html>
<!-- Display form data --><?php /**PATH /home/hellujjg/model.kdsystemsbd.com/resources/views/emails/document-signed.blade.php ENDPATH**/ ?>