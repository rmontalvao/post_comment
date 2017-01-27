'use strict';

angular.module('Post').factory('PostService', ['$http', function ($http) {
        var post = {};

        post.GetAll = function () {
            return $http.get('api/posts');
        };

        post.GetById = function (id) {
            return $http.get('api/posts/' + id);
        };

        post.Create = function (post) {
            return $http.post('api/posts', post);
        };

        post.Update = function (post) {
            return $http.put('api/posts/' + post.id, post);
        };

        post.Delete = function (id) {
            return $http.delete('api/posts/' + id);
        };

        post.CreateComment = function (comment) {
            return $http.post('api/comments', comment);
        };
        return post;
    }]);

       