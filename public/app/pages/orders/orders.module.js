(function () {
    'use strict';

    angular.module('BlurAdmin.pages.orders', [])
        .config(routeConfig);

    /** @ngInject */
    function routeConfig($stateProvider) {
        $stateProvider
            .state('orders', {
                url: '/orders',
                templateUrl: 'app/pages/orders/orders.html',
                title: 'Заказы',
                sidebarMeta: {
                    icon: 'fa fa-th-list',
                    order: 10
                }
            })
            .state('orders-custom', {
                url: '/orders/{id:int}',
                params: {
                    id: {
                        value:  null,
                        squash: true
                    }
                },
                templateUrl: 'app/pages/orders/orders.html',
                title: 'Заказы'
            });
    }

})();