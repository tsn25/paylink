<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/test1' => [[['_route' => 'test1', '_controller' => 'App\\Controller\\TestOneController::rangeOfTheLoop'], null, null, null, false, false, null]],
        '/test3' => [[['_route' => 'test3', '_controller' => 'App\\Controller\\TestThreeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/test2(?'
                    .'|([^/]++)(*:24)'
                    .'|/([^/]++)(*:40)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'test2', '5', '_controller' => 'App\\Controller\\TestTwoController::index'], ['num'], null, null, false, true, null]],
        40 => [
            [['_route' => 'api_fibonacci', '_controller' => 'App\\Controller\\TestTwoController::index'], ['num'], ['GET' => 0, 'HEAD' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
