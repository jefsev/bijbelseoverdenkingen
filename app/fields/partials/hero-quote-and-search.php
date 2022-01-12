<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero_quote_and_search = new FieldsBuilder('hero_quote_and_search');

$hero_quote_and_search
    ->addGroup('hero_quote_and_search')
        ->addGroup('qoute_block')->setWidth('50')
            ->addText('verse_number')
            ->addTextarea('verse')
            ->addWysiwyg('extra_text')
        ->endgroup()
        ->addGroup('search_block')->setWidth('50')
            ->addText('search_title')
            ->addText('search_subtitle')
            ->addText('contact_title')
            ->addText('contact_subtitle')
        ->endgroup()
    ->endgroup()

;return $hero_quote_and_search;