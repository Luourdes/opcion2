<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/pdfdownload' => [[['_route' => 'app_entrega_getpdf', '_controller' => 'App\\Controller\\EntregaController::getPdf'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_entrega_login', '_controller' => 'App\\Controller\\EntregaController::login'], null, null, null, false, false, null]],
        '/enviardatos' => [[['_route' => 'app_enviar', '_controller' => 'App\\Controller\\EntregaController::enviar'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
