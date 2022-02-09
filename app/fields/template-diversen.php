<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$diversen = new FieldsBuilder('diversen', [ 
    'position' => 'acf_after_title',
    'hide_on_screen'    => [
        'the_content'
    ]   
]);

$diversen
    ->setLocation('page_template', '==', 'views/template-diversen.blade.php');


// Load partials
$hero_black_img = get_field_partial('partials.hero-black-img'); 
$hero_quote_and_search = get_field_partial('partials.hero-quote-and-search');   
$section_double_cards = get_field_partial('partials.section-double-cards');   
$section_articles = get_field_partial('partials.section-articles');   
$section_latest_video = get_field_partial('partials.section-latest-video'); 
$section_verse_centered = get_field_partial('partials.section-verse-centered');  
$section_grid = get_field_partial('partials.section-grid'); 
$section_text = get_field_partial('partials.section-text'); 
$section_text_img = get_field_partial('partials.section-text-img'); 
$section_img_text = get_field_partial('partials.section-img-text'); 


$diversen
    ->addFlexibleContent('flexible_elementen', ['button_label' => 'Add Content Row'])
        ->addLayout($hero_black_img)
        ->addLayout($hero_quote_and_search)
        ->addLayout($section_double_cards)
        ->addLayout($section_articles)
        ->addLayout($section_latest_video)
        ->addLayout($section_verse_centered)
        ->addLayout($section_grid)
        ->addLayout($section_text)
        ->addLayout($section_text_img)
        ->addLayout($section_img_text)
    ->endFlexibleContent();
    
;return $diversen;