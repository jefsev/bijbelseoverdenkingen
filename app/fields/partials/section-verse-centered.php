<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section_verse_centered = new FieldsBuilder('section_verse_centered');

$section_verse_centered
    ->addGroup('section_verse_centered')
        ->addText('verse_number')
        ->addTextarea('verse')
    ->endgroup()

;return $section_verse_centered;