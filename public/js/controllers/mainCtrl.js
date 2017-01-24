angular.module('mainCtrl', [])

        .controller('mainController', function ($scope, $http, Comment, Post) {
            // object to hold all the data for the new comment form
            $scope.commentData = {};
            $scope.postData = {};

            // loading variable to show the spinning loading icon
            $scope.loading = true;

            // get all the comments first and bind it to the $scope.comments object
            Comment.get()
                    .success(function (data) {
                        $scope.comments = data;
                        $scope.loading = false;
                    });

            // get all the comments first and bind it to the $scope.comments object
            Post.get()
                    .success(function (data) {
                        $scope.posts = data;
                        $scope.loading = false;
                    });


            // function to handle submitting the form
            $scope.submitComment = function (postId) {
                $scope.loading = true;
                $scope.commentData[postId].user_id = 1;
                $scope.commentData[postId].post_id = postId;
                // save the comment. pass in comment data from the form
                Comment.save($scope.commentData[postId])
                        .success(function (data) {
                            $scope.commentData = {};
                            // if successful, we'll need to refresh the post list
                            Post.get()
                                    .success(function (getData) {
                                        $scope.posts = getData;
                                        $scope.loading = false;
                                    });

                        })
                        .error(function (data) {
                            console.log(data);
                        });
            };

            $scope.submitPost = function () {
                $scope.loading = true;
                $scope.postData.user_id = 1;
                // save the post. pass in post data from the form
                Post.save($scope.postData)
                        .success(function (data) {
                            $scope.postData = {};
                            // if successful, we'll need to refresh the post list
                            Post.get()
                                    .success(function (getData) {
                                        $scope.posts = getData;
                                        $scope.loading = false;
                                    });

                        })
                        .error(function (data) {
                            console.log(data);
                        });
            };

            // function to handle deleting a comment
            $scope.deleteComment = function (id) {
                $scope.loading = true;

                Comment.destroy(id)
                        .success(function (data) {

                            // if successful, we'll need to refresh the comment list
                            Comment.get()
                                    .success(function (getData) {
                                        $scope.comments = getData;
                                        $scope.loading = false;
                                    });

                        });
            };

            $scope.deletePost = function (id) {
                $scope.loading = true;

                Post.destroy(id)
                        .success(function (data) {

                            // if successful, we'll need to refresh the post list
                            Post.get()
                                    .success(function (getData) {
                                        $scope.posts = getData;
                                        $scope.loading = false;
                                    });

                        });
            };

        });