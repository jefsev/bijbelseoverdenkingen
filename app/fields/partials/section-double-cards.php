<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section_double_cards = new FieldsBuilder('section_double_cards');

$section_double_cards
    ->addGroup('section_double_cards')
        ->addGroup('card_left')->setWidth('50')
            ->addImage('featured_img')
            ->addText('title')
            ->addTextarea('text')
            ->addLink('button')
        ->endgroup()
        ->addGroup('card_right')->setWidth('50')
            ->addImage('featured_img')
            ->addText('title')
            ->addTextarea('text')
            ->addLink('button')
        ->endgroup()
    ->endgroup()

;return $section_double_cards;