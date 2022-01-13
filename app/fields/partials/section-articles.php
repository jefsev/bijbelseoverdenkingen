<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section_articles = new FieldsBuilder('section_articles');

$section_articles
    ->addGroup('section_articles')
        ->addText('subtitel_meditaties',['instructions' => 'laatste meditatie wordt automatisch ingeladen',])->setWidth('50')
        ->addText('subtitel_wheels',['instructions' => 'laatste blogs worden automatisch ingeladen',])->setWidth('50')
    ->endgroup()

;return $section_articles;