<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero_black_text = new FieldsBuilder('hero_black_text');

$hero_black_text
    ->addGroup('hero_black_text')
        ->addGroup('content_left')->setWidth('50')
            ->addWysiwyg('text')
            ->addLink('button')
        ->endgroup()
        ->addImage('img_right')->setWidth('50')
    ->endgroup()

;return $hero_black_text;