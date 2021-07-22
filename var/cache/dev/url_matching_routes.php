<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/test1' => [[['_route' => 'test1', '_controller' => 'App\\Controller\\TestOneController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/test(?'
                    .'|3/(?'
                        .'|setter/([^/]++)(?'
                            .'|(*:38)'
                            .'|(*:45)'
                        .')'
                        .'|getter/([^/]++)(*:68)'
                    .')'
                    .'|2(?'
                        .'|([^/]++)(*:88)'
                        .'|/([^/]++)(*:104)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:142)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'test3', '_controller' => 'App\\Controller\\TestThreeController::setter'], ['setter'], null, null, false, true, null]],
        45 => [[['_route' => 'api_magicSetter', '_controller' => 'App\\Controller\\TestThreeController::setter'], ['magic'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        68 => [[['_route' => 'api_magicGetter', '_controller' => 'App\\Controller\\TestThreeController::getter'], ['magic'], ['GET' => 0, 'POST' => 1, 'HEAD' => 2], null, false, true, null]],
        88 => [[['_route' => 'test2', '5', '_controller' => 'App\\Controller\\TestTwoController::index'], ['num'], null, null, false, true, null]],
        104 => [[['_route' => 'api_fibonacci', '_controller' => 'App\\Controller\\TestTwoController::index'], ['num'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        142 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
