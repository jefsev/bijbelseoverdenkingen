<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$familylife = new FieldsBuilder('familylife', [ 
    'position' => 'acf_after_title',
    'hide_on_screen'    => [
        'the_content'
    ]   
]);

$familylife
    ->setLocation('page_template', '==', 'views/template-family-life.blade.php');


// Load content partials
$hero_blue_img = get_field_partial('partials.hero-sand-img'); 
$section_latest_video_sand = get_field_partial('partials.section-latest-video-sand');   



$familylife
    ->addFields($hero_blue_img)
    ->addFields($section_latest_video_sand)
    
;return $familylife;