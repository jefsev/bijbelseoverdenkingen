<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section_video_nature = new FieldsBuilder('section_video_nature');

$section_video_nature
    ->addMessage('message_field', 'Laatste nature videos wordt automatisch ingeladen', [
        'label' => 'Laatste video',
    ]);

;return $section_video_nature;