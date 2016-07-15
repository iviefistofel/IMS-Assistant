<?php

namespace Files;

$env = (getenv('APP_ENV') == 'development') ? true : false;
return [
    'router' => [
        'routes' => [
            'api-files' => [
                'type'    => 'Segment',
                'options' => [
                    'route'    => '/api/files[/:action[/:id]]',
                    'constraints' => [
                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'         => '[0-9]+',
                    ],
                    'defaults' => [
                        '__NAMESPACE__' => 'Files\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ],
                ],
                'may_terminate' => true,
            ],
        ],
    ],

    'controllers' => [
        'invokables' => [
            'Files\Controller\Index' => Controller\IndexController::class,
        ],
    ],

    'acl' => [
        'resources' => [
            'allow' => [
                'Files\Controller\Index' => [
                    GUEST_ROLE,
                ],
            ],
        ],
    ],

    'view_manager' => [
        'display_not_found_reason'  => $env,
        'display_exceptions'        => $env,
        'doctype'                   => 'HTML5',
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
        'strategies' => [
            'ViewJsonStrategy',
        ],
    ],

    'doctrine' => [
        'driver' => [
            strtolower(__NAMESPACE__) . '_entities' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => [
                    __DIR__ . '/../src/Entity/',
                ],
            ],

            'orm_default' => [
                'drivers' => [
                    __NAMESPACE__ .'\Entity' => strtolower(__NAMESPACE__) . '_entities',
                ],
            ],
        ],
    ],
];