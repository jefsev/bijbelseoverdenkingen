<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section_text = new FieldsBuilder('section_text');

$section_text
    ->addGroup('section_text')
        ->addWysiwyg('tekst')
    ->endgroup()

;return $section_text;