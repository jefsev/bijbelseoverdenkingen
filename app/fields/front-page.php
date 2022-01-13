<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$home = new FieldsBuilder('page_home', [
    'position' => 'acf_after_title',
    'hide_on_screen'    => [
        'the_content'
    ]
]);

// Load partials
$hero_quote_and_search = get_field_partial('partials.hero-quote-and-search');   
$section_double_cards = get_field_partial('partials.section-double-cards');   
$section_articles = get_field_partial('partials.section-articles');   

$home
    ->setLocation('page_type', '==', 'front_page');

$home
    
->addFlexibleContent('flexible_elementen', ['button_label' => 'Add Content Row'])
    ->addLayout($hero_quote_and_search)
    ->addLayout($section_double_cards)
    ->addLayout($section_articles)
->endFlexibleContent();
    
    
;return $home;