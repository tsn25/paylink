<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'test1' => [[], ['_controller' => 'App\\Controller\\TestOneController::index'], [], [['text', '/test1']], [], []],
    'test3' => [['setter'], ['_controller' => 'App\\Controller\\TestThreeController::setter'], [], [['variable', '/', '[^/]++', 'setter', true], ['text', '/test3/setter']], [], []],
    'test2' => [['num'], ['5', '_controller' => 'App\\Controller\\TestTwoController::index'], [], [['variable', '', '[^/]++', 'num', true], ['text', '/test2']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'api_fibonacci' => [['num'], ['_controller' => 'App\\Controller\\TestTwoController::index'], [], [['variable', '/', '[^/]++', 'num', true], ['text', '/test2']], [], []],
    'api_magicGetter' => [['magic'], ['_controller' => 'App\\Controller\\TestThreeController::getter'], [], [['variable', '/', '[^/]++', 'magic', true], ['text', '/test3/getter']], [], []],
    'api_magicSetter' => [['magic'], ['_controller' => 'App\\Controller\\TestThreeController::setter'], [], [['variable', '/', '[^/]++', 'magic', true], ['text', '/test3/setter']], [], []],
];
