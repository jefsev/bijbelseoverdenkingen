<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section_duo_text = new FieldsBuilder('section_duo_text');

$section_duo_text
    ->addGroup('section_duo_text')
        ->addWysiwyg('text_left')->setWidth('50')
        ->addWysiwyg('text_right')->setWidth('50')
    ->endgroup()

;return $section_duo_text;