<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$videos_nature = new FieldsBuilder('videos_nature', [
    'position' => 'acf_after_title',
    'hide_on_screen'    => [
        'the_content'
    ]   
]);

$videos_nature
    ->setLocation('post_type', '==', 'videos-nature');

$videos_nature
    ->addOembed('youtube_field', ['label' => 'Youtube field',])
    ->addText('video_nr')
    ->addWysiwyg('samenvatting')

;return $videos_nature;