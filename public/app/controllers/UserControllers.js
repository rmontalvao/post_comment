'use strict';

angular.module('Userprofile')

        .controller('UserprofileController',
                ['$scope', '$rootScope', '$http', '$routeParams', 'UserService',
                    function ($scope, $rootScope, $http, $routeParams, UserService) {
                        // object to hold all the data for the new user form
                        $scope.profile = {};
                        $scope.loginUser = $rootScope.globals.currentUser;

                        // loading variable to show the spinning loading icon
                        $scope.loading = true;
                        //console.log($routeParams);

                        UserService.GetById($routeParams.id)
                                .success(function (data) {
                                    $scope.profile = data;
                                    $scope.loading = false;
                                });

                    }]);



  