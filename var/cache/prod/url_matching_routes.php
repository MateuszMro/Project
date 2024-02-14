<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/change_password' => [[['_route' => 'app_change_password', '_controller' => 'App\\Controller\\ChangePasswordController::register'], null, null, null, false, false, null]],
        '/complaints_page' => [[['_route' => 'complaints_page', '_controller' => 'App\\Controller\\ComplaintsPageController::index'], null, null, null, false, false, null]],
        '/contact_page' => [[['_route' => 'contact_page', '_controller' => 'App\\Controller\\ContactPageController::index'], null, null, null, false, false, null]],
        '/gallery_page' => [[['_route' => 'gallery_page', '_controller' => 'App\\Controller\\GalleryPageController::index'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'homepage', '_controller' => 'App\\Controller\\HomePageController::index'], null, null, null, false, false, null],
            [['_route' => 'homePage', '_controller' => 'App\\Controller\\HomePageController::index'], null, null, null, false, false, null],
        ],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginSecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'loginPage', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null],
        ],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginSecurityController::logout'], null, null, null, false, false, null]],
        '/offer_page' => [[['_route' => 'offer_page', '_controller' => 'App\\Controller\\OfferPageController::index'], null, null, null, false, false, null]],
        '/orders_page' => [[['_route' => 'orders_page', '_controller' => 'App\\Controller\\OrdersPageController::index'], null, null, null, false, false, null]],
        '/pricing_page' => [[['_route' => 'pricing_page', '_controller' => 'App\\Controller\\PricingPageController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset_password' => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::register'], null, null, null, false, false, null]],
        '/gallery' => [[['_route' => 'galleryPage', '_controller' => 'App\\Controller\\GalleryPageController::index'], null, null, null, false, false, null]],
        '/offer' => [[['_route' => 'offerPage', '_controller' => 'App\\Controller\\OfferPageController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contactPage', '_controller' => 'App\\Controller\\ContactPageController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/confirm/([^/]++)(*:24)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [
            [['_route' => 'confirm_register', '_controller' => 'App\\Controller\\ConfirmController::index'], ['code'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
