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
        '/admin-panel' => [[['_route' => 'app_admin_panel', '_controller' => 'App\\Controller\\Admin\\AdminPanel::index'], null, null, null, false, false, null]],
        '/admin/list-all-clients' => [[['_route' => 'app_list_all_clients', '_controller' => 'App\\Controller\\Admin\\ListClientsController::index1'], null, null, null, false, false, null]],
        '/list-defects' => [[['_route' => 'app_list_defects', '_controller' => 'App\\Controller\\Admin\\ListDefectsController::index'], null, null, null, false, false, null]],
        '/admin/list-all-defects' => [[['_route' => 'app_list_all_defects', '_controller' => 'App\\Controller\\Admin\\ListDefectsController::index1'], null, null, null, false, false, null]],
        '/order/my-order' => [[['_route' => 'app_list_my_order', '_controller' => 'App\\Controller\\Admin\\ListOrderController::index1'], null, null, null, false, false, null]],
        '/admin/list-all-order' => [[['_route' => 'app_list_all_order', '_controller' => 'App\\Controller\\Admin\\ListOrderController::listAllOrder'], null, null, null, false, false, null]],
        '/defects' => [[['_route' => 'app_defects', '_controller' => 'App\\Controller\\Defects\\DefectsController::index'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'app_delete_account', '_controller' => 'App\\Controller\\DeleteAccount\\DeleteAccountController::index'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'homepage', '_controller' => 'App\\Controller\\Home\\HomePageController::index'], null, null, null, false, false, null],
            [['_route' => 'homePage', '_controller' => 'App\\Controller\\HomeController\\HomePageController::index'], null, null, null, false, false, null],
        ],
        '/contact' => [
            [['_route' => 'app_contact', '_controller' => 'App\\Controller\\Home\\ContactPageController::index'], null, null, null, false, false, null],
            [['_route' => 'contactPage', '_controller' => 'App\\Controller\\HomeController\\ContactPageController::index'], null, null, null, false, false, null],
        ],
        '/gallery' => [
            [['_route' => 'app_gallery', '_controller' => 'App\\Controller\\Home\\GalleryPageController::index'], null, null, null, false, false, null],
            [['_route' => 'galleryPage', '_controller' => 'App\\Controller\\HomeController\\GalleryPageController::index'], null, null, null, false, false, null],
        ],
        '/offer' => [
            [['_route' => 'app_offer', '_controller' => 'App\\Controller\\Home\\OfferPageController::index'], null, null, null, false, false, null],
            [['_route' => 'offerPage', '_controller' => 'App\\Controller\\HomeController\\OfferPageController::index'], null, null, null, false, false, null],
        ],
        '/profile' => [[['_route' => 'app_profile_info', '_controller' => 'App\\Controller\\Home\\ProfileInfoController::index'], null, null, null, false, false, null]],
        '/my-profile' => [[['_route' => 'app_my_profile', '_controller' => 'App\\Controller\\Home\\ProfileInfoController::myProfile'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\Login\\LoginSecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\Login\\LoginSecurityController::logout'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'app_order', '_controller' => 'App\\Controller\\Order\\OrderProductController::index'], null, null, null, false, false, null]],
        '/change-password' => [[['_route' => 'app_change_password', '_controller' => 'App\\Controller\\Password\\ChangePasswordController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\Password\\ResetPasswordController::register'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController\\RegistrationController::register'], null, null, null, false, false, null]],
        '/owner' => [[['_route' => 'app_owner', '_controller' => 'App\\Controller\\SuperAdmin\\OwnerDashboardController::index'], null, null, null, false, false, null]],
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
                .'|/list\\-(?'
                    .'|all\\-clients/([^/]++)/(?'
                        .'|ban(*:207)'
                        .'|active(*:221)'
                    .')'
                    .'|defects/([^/]++)(*:246)'
                .')'
                .'|/admin/(?'
                    .'|list\\-all\\-defects/([^/]++)/(?'
                        .'|close(*:301)'
                        .'|open(*:313)'
                        .'|in\\-progress(*:333)'
                        .'|delete(*:347)'
                    .')'
                    .'|defects/([^/]++)(*:372)'
                    .'|order/([^/]++)(?'
                        .'|(*:397)'
                        .'|/(?'
                            .'|in\\-(?'
                                .'|process(*:423)'
                                .'|road(*:435)'
                            .')'
                            .'|del(?'
                                .'|ivered(*:456)'
                                .'|ete(*:467)'
                            .')'
                            .'|waiting(*:483)'
                            .'|price_(?'
                                .'|YES(*:503)'
                                .'|NO(*:513)'
                            .')'
                            .'|update\\-price(*:535)'
                        .')'
                    .')'
                .')'
                .'|/order/my\\-order/([^/]++)(?'
                    .'|(*:574)'
                    .'|/cancel(*:589)'
                .')'
                .'|/confirm/([^/]++)(?'
                    .'|(*:618)'
                .')'
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
        207 => [[['_route' => 'app_list_all_clients_ban', '_controller' => 'App\\Controller\\Admin\\ListClientsController::banAccount'], ['id'], null, null, false, false, null]],
        221 => [[['_route' => 'app_list_all_clients_active', '_controller' => 'App\\Controller\\Admin\\ListClientsController::activeAccount'], ['id'], null, null, false, false, null]],
        246 => [[['_route' => 'app_list_defects_show', '_controller' => 'App\\Controller\\Admin\\ListDefectsController::listDefectsShow'], ['id'], null, null, false, true, null]],
        301 => [[['_route' => 'app_list_all_defects_close', '_controller' => 'App\\Controller\\Admin\\ListDefectsController::closeDefects'], ['id'], null, null, false, false, null]],
        313 => [[['_route' => 'app_list_all_defects_open', '_controller' => 'App\\Controller\\Admin\\ListDefectsController::openDefects'], ['id'], null, null, false, false, null]],
        333 => [[['_route' => 'app_list_all_defects_in_process', '_controller' => 'App\\Controller\\Admin\\ListDefectsController::inProgressDefects'], ['id'], null, null, false, false, null]],
        347 => [[['_route' => 'app_list_all_defects_delete', '_controller' => 'App\\Controller\\Admin\\ListDefectsController::deleteDefects'], ['id'], ['POST' => 0], null, false, false, null]],
        372 => [[['_route' => 'app_defects_show', '_controller' => 'App\\Controller\\Admin\\ListDefectsController::defectsShow'], ['id'], null, null, false, true, null]],
        397 => [[['_route' => 'app_order_show', '_controller' => 'App\\Controller\\Admin\\ListOrderController::orderShow'], ['id'], null, null, false, true, null]],
        423 => [[['_route' => 'app_list_all_order_in_process', '_controller' => 'App\\Controller\\Admin\\ListOrderController::inProgressOrder'], ['id'], null, null, false, false, null]],
        435 => [[['_route' => 'app_list_all_order_in_road', '_controller' => 'App\\Controller\\Admin\\ListOrderController::inRoadOrder'], ['id'], null, null, false, false, null]],
        456 => [[['_route' => 'app_list_all_order_delivered', '_controller' => 'App\\Controller\\Admin\\ListOrderController::deliveredOrder'], ['id'], null, null, false, false, null]],
        467 => [[['_route' => 'app_list_all_order_delete', '_controller' => 'App\\Controller\\Admin\\ListOrderController::deleteDefects'], ['id'], ['POST' => 0], null, false, false, null]],
        483 => [[['_route' => 'app_list_all_order_waiting', '_controller' => 'App\\Controller\\Admin\\ListOrderController::inWaitingOrder'], ['id'], null, null, false, false, null]],
        503 => [[['_route' => 'app_list_all_order_price_YES', '_controller' => 'App\\Controller\\Admin\\ListOrderController::priceOrderYES'], ['id'], null, null, false, false, null]],
        513 => [[['_route' => 'app_list_all_order_price_NO', '_controller' => 'App\\Controller\\Admin\\ListOrderController::priceOrderNO'], ['id'], null, null, false, false, null]],
        535 => [[['_route' => 'app_list_all_order_update_price', '_controller' => 'App\\Controller\\Admin\\ListOrderController::updatePrice'], ['id'], ['POST' => 0], null, false, false, null]],
        574 => [[['_route' => 'app_list_my_order_show', '_controller' => 'App\\Controller\\Admin\\ListOrderController::listOrderShow'], ['id'], null, null, false, true, null]],
        589 => [[['_route' => 'app_list_my_order_cancel', '_controller' => 'App\\Controller\\Admin\\ListOrderController::cancelOrder'], ['id'], null, null, false, false, null]],
        618 => [
            [['_route' => 'app_confirm_register', '_controller' => 'App\\Controller\\RegisterController\\ConfirmController::index'], ['code'], null, null, false, true, null],
            [['_route' => 'confirm_register', '_controller' => 'App\\Controller\\RegisterController\\ConfirmController::index'], ['code'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
