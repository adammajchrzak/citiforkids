<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Place\Controller\Place' => 'Place\Controller\PlaceController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'place' => __DIR__ . '/../view',
        ),
    ),
);