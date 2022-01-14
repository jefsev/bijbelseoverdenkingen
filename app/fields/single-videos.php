<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$videos = new FieldsBuilder('videos', [
    'position' => 'acf_after_title',
    'hide_on_screen'    => [
        'the_content'
    ]   
]);

$videos
    ->setLocation('post_type', '==', 'videos');

$videos
    ->addOembed('youtube_field', ['label' => 'Youtube field',])
    ->addText('video_nr')
    ->addWysiwyg('samenvatting')

;return $videos;