<?php
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$user_fields = new FieldsBuilder('user_fields', ['position' => 'acf_after_title']);

$user_fields
    ->setLocation('user_form', '==', 'all');

$user_fields
    ->addImage('user_profile_photo')

;return $user_fields;