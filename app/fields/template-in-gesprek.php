<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$bijbelse1 = new FieldsBuilder('bijbelse1', [ 
    'position' => 'acf_after_title',
    'hide_on_screen'    => [
        'the_content'
    ]   
]);

$bijbelse1
    ->setLocation('page_template', '==', 'views/template-in-gesprek.blade.php');


// Load content partials
$hero_blue_img = get_field_partial('partials.hero-blue-img'); 
$section_duo_text = get_field_partial('partials.section-duo-text');    



$bijbelse1
    ->addFields($hero_blue_img)
    ->addFields($section_duo_text)
    
;return $bijbelse1;