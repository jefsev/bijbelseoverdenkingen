<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$options = new FieldsBuilder('options_footer');


$options
    ->setLocation('options_page', '==', 'footer-instellingen');
  
$options
        ->addGroup('footer_1', ['wrapper' => ['width' => '50']])
            ->addImage('logo')
            ->addText('youtube_title')
            ->addRepeater('youtube_kanalen')
                ->addUrl('youtube_link')
                ->addText('youtube_titel')
                ->addText('ondertitel')
            ->endRepeater()
        ->endGroup()
        ->addGroup('footer_2', ['wrapper' => ['width' => '50']])
            ->addText('title')
            ->addRepeater('menu_links')
                ->addLink('menu_link')
            ->endRepeater()
            ->addLink('button_steun')
        ->endGroup()
        ->addGroup('footer_3', ['wrapper' => ['width' => '100']])
            ->addText('title')
            ->addTextarea('text')
        ->endGroup()

;return $options;