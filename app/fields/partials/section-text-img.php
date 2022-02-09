<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section_text_img = new FieldsBuilder('section_text_img');

$section_text_img
    ->addGroup('section_text_img')
        ->addWysiwyg('text_left')->setWidth('50')
        ->addImage('img_right')->setWidth('50')
    ->endgroup()

;return $section_text_img;