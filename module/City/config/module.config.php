<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'City\Controller\City' => 'City\Controller\CityController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'city' => __DIR__ . '/../view',
        ),
    ),
);