<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Country\Controller\Country' => 'Country\Controller\CountryController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'country' => __DIR__ . '/../view',
        ),
    ),
);