<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$bijbelseO = new FieldsBuilder('bijbelseO', [ 
    'position' => 'acf_after_title',
    'hide_on_screen'    => [
        'the_content'
    ]   
]);

$bijbelseO
    ->setLocation('page_template', '==', 'views/template-bijbelseoverdenkingen.blade.php');


// Load content partials
$hero_blue_img = get_field_partial('partials.hero-blue-img'); 
$section_duo_text = get_field_partial('partials.section-duo-text');    



$bijbelseO
    ->addFields($hero_blue_img)
    ->addFields($section_duo_text)
    
;return $bijbelseO;