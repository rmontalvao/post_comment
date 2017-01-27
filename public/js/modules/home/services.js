'use strict';

angular.module('User').factory('UserService', ['$http','$rootScope', function ($http,$rootScope) {
        var user = {};
        var api_token = $rootScope.globals.currentUser.authdata;

        user.GetAll = function () {
            return $http.get('api/users'+"?api_token="+api_token);
        };

        user.GetById = function (id) {
            return $http.get('api/users/' + id+"?api_token="+api_token);
        };

        user.GetByUsername = function (username) {
            return $http.get('api/users/' + username);
        };
        user.GetByEmail = function (email) {
            return $http.get('api/users' + email);
        };

        user.Create = function (user) {
            return $http.post('api/users', user);
        };

        user.Update = function (user) {
            return $http.put('api/users/' + user.id, user);
        };

        user.Delete = function (id) {
            return $http.delete('api/users/' + id);
        };
        return user;
    }]);

       