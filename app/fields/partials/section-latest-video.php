<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section_latest_video = new FieldsBuilder('section_latest_video');

$section_latest_video
    ->addMessage('message_field', 'Laatste video wordt automatisch ingeladen', [
        'label' => 'Laatste video',
    ]);

;return $section_latest_video;