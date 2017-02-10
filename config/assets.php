<?php

/**
 * @return array
 */
function angularAppJs()
{
    return [
        "/app/pages/users/usersList/UsersListCtrl.js",
        "/app/pages/users/usersList/usersList.directive.js",
        "/app/pages/users/users.module.js",

        "/app/pages/nomenclature/detail/DetailCtrl.js",
        "/app/pages/nomenclature/detail/detail.directive.js",
        "/app/pages/nomenclature/detailsList/DetailsListCtrl.js",
        "/app/pages/nomenclature/detailsList/detailsList.directive.js",
        "/app/pages/nomenclature/nomenclature.module.js",

        "/app/pages/orders/ordersList/OrdersListCtrl.js",
        "/app/pages/orders/ordersList/ordersList.directive.js",
        "/app/pages/orders/orders.module.js",

        "/app/pages/clients/clientsList/ClientsListCtrl.js",
        "/app/pages/clients/clientsList/clientsList.directive.js",
        "/app/pages/clients/clients.module.js",

        "/app/pages/pages.module.js",
    ];
}

/**
 * @return array
 */
return [
    'alwaysMinCss' => false,
    'alwaysMinJs' => false,
    'assetsCss' => [
        "/bower/Ionicons/css/ionicons.min.css",
        "/bower/angular-toastr/dist/angular-toastr.min.css",
        "/bower/animate.css/animate.min.css",
        "/bower/bootstrap/dist/css/bootstrap.min.css",
        "/bower/bootstrap-select/dist/css/bootstrap-select.min.css",
        "/bower/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css",
        "/bower/bootstrap-tagsinput/dist/bootstrap-tagsinput.css",
        "/bower/font-awesome/css/font-awesome.min.css",
        "/bower/fullcalendar/dist/fullcalendar.min.css",
        "/bower/leaflet/dist/leaflet.css",
        "/bower/angular-progress-button-styles/dist/angular-progress-button-styles.min.css",
        "/bower/angular-chart.js/dist/angular-chart.min.css",
        "/bower/chartist/dist/chartist.min.css",
        "/bower/morris.js/morris.css",
        "/bower/ionrangeslider/css/ion.rangeSlider.css",
        "/bower/ionrangeslider/css/ion.rangeSlider.skinFlat.css",
        "/bower/textAngular/dist/textAngular.css",
        "/bower/angular-xeditable/dist/css/xeditable.min.css",
        "/bower/angular-ui-select/dist/select.min.css",
        "/bower/cropper/dist/cropper.min.css",
        "/css/plugins/ng-image-gallery/ng-image-gallery.css",
        "app/main.css",
    ],
    'assetsJs' => array_merge(angularAppJs(), [
//        "/app/theme/filters/text/removeHtml.js",
//        "/app/theme/components/widgets/widgets.directive.js",
//        "/app/theme/components/backTop/lib/jquery.backTop.min.js",
//        "/app/theme/components/backTop/backTop.directive.js",
//        "/app/theme/components/baWizard/baWizardStep.directive.js",
//        "/app/theme/components/baWizard/baWizardCtrl.js",
//        "/app/theme/components/baWizard/baWizard.directive.js",
//        "/app/theme/components/baPanel/baPanelSelf.directive.js",
//        "/app/theme/components/baPanel/baPanelBlurHelper.service.js",
//        "/app/theme/components/baPanel/baPanelBlur.directive.js",
//        "/app/theme/components/baPanel/baPanel.service.js",
//        "/app/theme/components/baPanel/baPanel.directive.js",
//        "/app/theme/services/stopableInterval.js",
//        "/app/theme/services/fileReader.js",
//        "/app/theme/directives/zoomIn.js",
//        "/app/theme/directives/trackWidth.js",
//        "/app/theme/directives/scrollPosition.js",
//        "/app/theme/directives/ngFileSelect.js",
//        "/app/theme/directives/ionSlider.js",
//        "/app/theme/directives/includeWithScope.js",
//        "/app/theme/directives/autoFocus.js",
//        "/app/theme/directives/autoExpand.js",
//        "/app/theme/directives/animatedChange.js",
        "/app/theme/components/pageTop/PageTopCtrl.js",
        "/app/theme/components/pageTop/pageTop.directive.js",
        "/app/theme/components/msgCenter/MsgCenterCtrl.js",
        "/app/theme/components/msgCenter/msgCenter.directive.js",
        "/app/theme/components/contentTop/contentTop.directive.js",
        "/app/theme/components/contentActions/ContentActionsCtrl.js",
        "/app/theme/components/contentActions/contentActions.directive.js",
        "/app/theme/components/baSidebar/baSidebarHelpers.directive.js",
        "/app/theme/components/baSidebar/BaSidebarCtrl.js",
        "/app/theme/components/baSidebar/baSidebar.service.js",
        "/app/theme/components/baSidebar/baSidebar.directive.js",
        "/app/theme/services/preloader.js",
        "/app/theme/services/baUtil.js",
        "/app/theme/directives/switch.js",

        "/app/theme/components/toastrLibConfig.js",
        "/app/theme/components/components.module.js",
        "/app/theme/theme.service.js",
        "/app/theme/theme.run.js",
        "/app/theme/theme.constants.js",
        "/app/theme/theme.configProvider.js",
        "/app/theme/theme.config.js",
        "/app/theme/theme.module.js",
        "/app/app.js",

//        "http://maps.google.com/maps/api/js?sensor=false",

        "/bower/ng-idle/angular-idle.min.js",
        "/js/plugins/ng-image-gallery/ng-image-gallery.js",
        "/bower/tiff/tiff.min.js",
        "/bower/cropper/dist/cropper.min.js",
        "/bower/angular-ui-select/dist/select.min.js",
        "/bower/angular-tree-dnd/dist/ng-tree-dnd.min.js",
        "/bower/angular-xeditable/dist/js/xeditable.min.js",
        "/bower/textAngular/dist/textAngularSetup.js",
        "/bower/textAngular/dist/textAngular-sanitize.min.js",
        "/bower/textAngular/dist/textAngular.min.js",
        "/bower/rangy/rangy-textrange.min.js",
        "/bower/rangy/rangy-serializer.min.js",
        "/bower/rangy/rangy-selectionsaverestore.min.js",
        "/bower/rangy/rangy-highlighter.min.js",
        "/bower/rangy/rangy-classapplier.min.js",
        "/bower/rangy/rangy-core.min.js",
        "/bower/angular-animate/angular-animate.min.js",
        "/bower/angular-bootstrap/ui-bootstrap-tpls.min.js",
        "/bower/ionrangeslider/js/ion.rangeSlider.min.js",
        "/bower/angular-morris-chart/src/angular-morris-chart.min.js",
        "/bower/morris.js/morris.min.js",
        "/bower/mocha/mocha.js",
        "/bower/raphael/raphael.min.js",
        "/bower/angular-chartist.js/dist/angular-chartist.min.js",
        "/bower/chartist/dist/chartist.min.js",
        "/bower/angular-chart.js/dist/angular-chart.min.js",
        "/bower/angular-ui-router/release/angular-ui-router.min.js",
        "/bower/angular-progress-button-styles/dist/angular-progress-button-styles.min.js",
        "/bower/leaflet/dist/leaflet.js",
        "/bower/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js",
        "/bower/jquery.easing/js/jquery.easing.min.js",
        "/bower/fullcalendar/dist/fullcalendar.min.js",
        "/bower/moment/min/moment.min.js",
        "/bower/angular-bootstrap3-typeahead/angular-bootstrap3-typeahead.js",
        "/bower/bootstrap3-typeahead/bootstrap3-typeahead.min.js",
        "/bower/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js",
        "/bower/bootstrap-switch/dist/js/bootstrap-switch.min.js",
        "/bower/bootstrap-select/dist/js/bootstrap-select.min.js",
        "/bower/bootstrap/js/dropdown.js",
        "/bower/angular-ui-sortable/sortable.min.js",
        "/bower/jquery-ui/jquery-ui.min.js",
        "/bower/angular-touch/angular-touch.min.js",
        "/bower/angular-toastr/dist/angular-toastr.tpls.min.js",
        "/bower/angular-smart-table/dist/smart-table.min.js",
        "/bower/angular-slimscroll/angular-slimscroll.js",
        "/bower/slimScroll/jquery.slimscroll.min.js",
        "/bower/angular-route/angular-route.min.js",
        "/js/angular-locale_ru-ru.js",
        "/bower/angular/angular.min.js",
        "/bower/ammap/dist/ammap/maps/js/worldLow.js",
        "/bower/ammap/dist/ammap/ammap.js",
        "/bower/amcharts-stock/dist/amcharts/amstock.js",
        "/bower/amcharts/dist/amcharts/gantt.js",
        "/bower/amcharts/dist/amcharts/pie.js",
        "/bower/amcharts/dist/amcharts/funnel.js",
        "/bower/amcharts/dist/amcharts/serial.js",
        "/bower/amcharts/dist/amcharts/plugins/responsive/responsive.min.js",
        "/bower/amcharts/dist/amcharts/amcharts.js",
        "/bower/Chart.js/Chart.min.js",
        "/bower/jquery/dist/jquery.min.js",
    ]),
];