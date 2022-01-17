<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$options_menu = new FieldsBuilder('options_menu');


$options_menu
    ->setLocation('options_page', '==', 'menu-instellingen');
  
$options_menu
        ->addGroup('mega_menu')
            ->addRepeater('menu-items')
                ->addLink('link')
            ->endRepeater()
        ->endGroup()

;return $options_menu;