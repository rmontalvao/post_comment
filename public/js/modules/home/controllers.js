'use strict';

angular.module('Home')

        .controller('HomeController',
                ['$scope', '$rootScope', '$http', 'UserService',
                    function ($scope, $rootScope, $http, UserService) {
                        // object to hold all the data for the new user form
                        $scope.userData = {};
                        $scope.loginUser = $rootScope.globals.currentUser;

                        // loading variable to show the spinning loading icon
                        $scope.loading = true;

                        // get all the comments first and bind it to the $scope.comments object
                        UserService.GetAll()
                                .success(function (data) {
                                    $scope.users = data;
                                    $scope.loading = false;
                                });

                    }]);



  