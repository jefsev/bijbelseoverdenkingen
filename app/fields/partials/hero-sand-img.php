<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero_sand_text = new FieldsBuilder('hero_sand_text');

$hero_sand_text
    ->addGroup('hero_sand_text')
        ->addGroup('content_left')->setWidth('50')
            ->addWysiwyg('text')
            ->addLink('button')
        ->endgroup()
        ->addImage('img_right')->setWidth('50')
    ->endgroup()

;return $hero_sand_text;