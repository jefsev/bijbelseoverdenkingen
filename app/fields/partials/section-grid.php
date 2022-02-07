<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section_grid = new FieldsBuilder('section_grid');

$section_grid
    ->addGroup('section_grid')
        ->addText('titel')
        ->addRepeater('grid_blocks')
            ->addImage('icon')
            ->addText('titel')
            ->addTextarea('tekst')
            ->addPageLink('link')
        ->endRepeater()
    ->endgroup()

;return$section_grid;