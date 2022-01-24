<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero_blue_text = new FieldsBuilder('hero_blue_text');

$hero_blue_text
    ->addGroup('hero_blue_text')
        ->addGroup('content_left')->setWidth('50')
            ->addWysiwyg('text')
            ->addLink('button')
        ->endgroup()
        ->addImage('img_right')->setWidth('50')
    ->endgroup()

;return $hero_blue_text;