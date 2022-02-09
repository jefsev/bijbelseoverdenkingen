<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section_img_text = new FieldsBuilder('section_img_text');

$section_img_text
    ->addGroup('section_img_text')
        ->addImage('img_left')->setWidth('50')
        ->addWysiwyg('text_right')->setWidth('50')
    ->endgroup()

;return $section_img_text;