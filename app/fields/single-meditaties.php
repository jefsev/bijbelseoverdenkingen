<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$meditaties = new FieldsBuilder('meditaties', [
    'position' => 'acf_after_title',
    'hide_on_screen'    => [
        'the_content'
    ]   
]);

$meditaties
    ->setLocation('post_type', '==', 'meditaties');

$meditaties
    ->addOembed('oembed_field', ['label' => 'Youtube field',])
    ->addWysiwyg('artikel')

;return $meditaties;