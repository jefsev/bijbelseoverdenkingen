<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section_latest_video_sand = new FieldsBuilder('section_latest_video_sand');

$section_latest_video_sand
    ->addMessage('message_field', 'Laatste video wordt automatisch ingeladen', [
        'label' => 'Laatste video',
    ]);

;return $section_latest_video_sand;