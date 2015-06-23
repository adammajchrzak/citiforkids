<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Address\Controller\Address' => 'Address\Controller\AddressController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'address' => __DIR__ . '/../view',
        ),
    ),
);