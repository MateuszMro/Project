<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'app_delete_account', '_controller' => 'App\\Controller\\DeleteController\\DeleteAccountController::index'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController\\HomePageController::index'], null, null, null, false, false, null],
            [['_route' => 'homePage', '_controller' => 'App\\Controller\\HomeController\\HomePageController::index'], null, null, null, false, false, null],
        ],
        '/contact' => [
            [['_route' => 'app_contact', '_controller' => 'App\\Controller\\HomeController\\ContactPageController::index'], null, null, null, false, false, null],
            [['_route' => 'contactPage', '_controller' => 'App\\Controller\\HomeController\\ContactPageController::index'], null, null, null, false, false, null],
        ],
        '/defects' => [[['_route' => 'app_defects', '_controller' => 'App\\Controller\\HomeController\\DefectsController::index'], null, null, null, false, false, null]],
        '/gallery' => [
            [['_route' => 'app_gallery', '_controller' => 'App\\Controller\\HomeController\\GalleryPageController::index'], null, null, null, false, false, null],
            [['_route' => 'galleryPage', '_controller' => 'App\\Controller\\HomeController\\GalleryPageController::index'], null, null, null, false, false, null],
        ],
        '/list_defects' => [[['_route' => 'app_list_defects', '_controller' => 'App\\Controller\\HomeController\\ListDefectsController::index'], null, null, null, false, false, null]],
        '/offer' => [
            [['_route' => 'app_offer', '_controller' => 'App\\Controller\\HomeController\\OfferPageController::index'], null, null, null, false, false, null],
            [['_route' => 'offerPage', '_controller' => 'App\\Controller\\HomeController\\OfferPageController::index'], null, null, null, false, false, null],
        ],
        '/profile' => [[['_route' => 'app_profile_info', '_controller' => 'App\\Controller\\HomeController\\ProfileInfoController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController\\LoginSecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController\\LoginSecurityController::logout'], null, null, null, false, false, null]],
        '/change_password' => [[['_route' => 'app_change_password', '_controller' => 'App\\Controller\\PasswordController\\ChangePasswordController::register'], null, null, null, false, false, null]],
        '/reset_password' => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\PasswordController\\ResetPasswordController::register'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController\\RegistrationController::register'], null, null, null, false, false, null]],
        '/panel_super_admin' => [[['_route' => 'app_panel_super_admin', '_controller' => 'App\\Controller\\SuperAdmin\\SuperAdminDashboardController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/confirm/([^/]++)(*:186)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        186 => [
            [['_route' => 'confirm_register', '_controller' => 'App\\Controller\\RegisterController\\ConfirmController::index'], ['code'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
