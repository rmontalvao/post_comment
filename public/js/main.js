'use strict';

// declare modules
angular.module('Authentication', []);
angular.module('User', []);
angular.module('Home', []);
angular.module('User', []);
angular.module('Userprofile', []);

angular.module('BasicHttpAuthExample', [
    'Authentication',
    'Home',
    'User',
    'Userprofile',
    'ngRoute',
    'ngCookies'
])

        .config(['$routeProvider', function ($routeProvider) {

                $routeProvider
                        .when('/login', {
                            controller: 'LoginController',
                            templateUrl: 'js/modules/authentication/views/login.html',
                            hideMenus: true
                        })

                        .when('/', {
                            controller: 'HomeController',
                            templateUrl: 'js/modules/home/views/home.html'
                        })
                        .when('/profile/:id', {
                            controller: 'UserprofileController',
                            templateUrl: 'js/modules/userprofile/views/userprofile.html'
                        })
                        .otherwise({redirectTo: '/login'});
            }])

        .run(['$rootScope', '$location', '$cookieStore', '$http',
            function ($rootScope, $location, $cookieStore, $http) {
                // keep user logged in after page refresh
                $rootScope.globals = $cookieStore.get('globals') || {};
                if ($rootScope.globals.currentUser) {
                    $http.defaults.headers.common['Authorization'] = 'Basic ' + $rootScope.globals.currentUser.authdata; // jshint ignore:line
                }

                $rootScope.$on('$locationChangeStart', function (event, next, current) {
                    // redirect to login page if not logged in
                    if ($location.path() !== '/login' && !$rootScope.globals.currentUser) {
                        $location.path('/login');
                    }
                });
            }]);