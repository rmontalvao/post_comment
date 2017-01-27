'use strict';

angular.module('Post')

        .controller('PostController',
                ['$scope', '$rootScope', '$http', 'PostService',
                    function ($scope, $rootScope, $http, PostService) {
                        // object to hold all the data for the new user form
                        $scope.postData = {};
                        $scope.commentData = {};
                        $scope.loginUser = $rootScope.globals.currentUser;
                        console.log($rootScope.globals);
                        // loading variable to show the spinning loading icon
                        $scope.loading = true;
                        // get all the comments first and bind it to the $scope.comments object
                        PostService.GetAll()
                                .success(function (data) {
                                    $scope.posts = data;
                                    $scope.loading = false;
                                });
                        $scope.submitPost = function () {
                            $scope.loading = true;
                            $scope.postData.user_id = $scope.loginUser.id;
                            // save the post. pass in post data from the form
                            PostService.Create($scope.postData)
                                    .success(function (data) {
                                        $scope.postData = {};
                                        // if successful, we'll need to refresh the post list
                                        PostService.GetAll()
                                                .success(function (getData) {
                                                    $scope.posts = getData;
                                                    $scope.loading = false;
                                                });
                                    })
                                    .error(function (data) {
                                        console.log(data);

                                    });
                        };
                        
                        $scope.submitComment = function (postId) {
                            $scope.loading = true;
                            $scope.commentData[postId].user_id = $scope.loginUser.id;
                            $scope.commentData[postId].post_id = postId;
                            // save the post. pass in post data from the form
                            PostService.CreateComment($scope.commentData[postId])
                                    .success(function (data) {
                                        $scope.commentData = {};
                                        // if successful, we'll need to refresh the post list
                                        PostService.GetAll()
                                                .success(function (getData) {
                                                    $scope.posts = getData;
                                                    $scope.loading = false;
                                                });
                                    })
                                    .error(function (data) {
                                        console.log(data);

                                    });
                        };
                    }]);



  