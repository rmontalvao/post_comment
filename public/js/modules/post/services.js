'use strict';

angular.module('Post').factory('PostService', ['$http', '$rootScope', function ($http, $rootScope) {
        var post = {};
        var api_token = $rootScope.globals.currentUser.authdata;

        post.GetAll = function () {
            return $http.get('api/posts' + "?api_token=" + api_token);
        };

        post.GetById = function (id) {
            return $http.get('api/posts/' + id + "?api_token=" + api_token);
        };

        post.Create = function (post) {
            return $http.post('api/posts' + "?api_token=" + api_token, post);
        };

        post.Update = function (post) {
            return $http.put('api/posts/' + post.id, post);
        };

        post.Delete = function (id) {
            return $http.delete('api/posts/' + id);
        };

        post.CreateComment = function (comment) {
            return $http.post('api/comments' + "?api_token=" + api_token, comment);
        };

        post.Like = function (id) {
            return $http.post('api/post/like/' + id + "?api_token=" + api_token);
        };
        return post;
    }]);

       