<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Laravel and Angular Comment System</title>

        <!-- CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
        <style>
            body 		{ padding-top:30px; }
            form 		{ padding-bottom:20px; }
            .comment 	{ padding-bottom:20px; }
        </style>

        <!-- JS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->

        <!-- ANGULAR -->
        <!-- all angular resources will be loaded from the /public folder -->
        <script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
        <script src="js/services/commentService.js"></script> <!-- load our service -->
        <script src="js/services/postService.js"></script> <!-- load our service -->
        <script src="js/app.js"></script> <!-- load our application -->

    </head>
    <!-- declare our angular app and controller -->
    <body class="container" ng-app="commentApp" ng-controller="mainController">
        <div class="col-md-8 col-md-offset-2">

            <!-- PAGE TITLE -->
            <div class="page-header">
                <h2>Laravel and Angular Single Page Application</h2>
                <h4>Commenting System</h4>
            </div>

            <!-- NEW POST FORM -->
            <form ng-submit="submitPost()">
                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="post" ng-model="postData.text" placeholder="Say what you have to say">
                </div>
                <div class="form-group text-right">	
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </form>


            <pre>
	{{ postData}}
            </pre>

            <!-- LOADING ICON -->
            <!-- show loading icon if the loading variable is set to true -->
            <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
            <!-- THE POSTS -->
            <!-- hide these posts if the loading variable is true -->
            <div class="post" ng-hide="loading" ng-repeat="post in posts">
                <h3>Post #{{ post.id}} <small>by : {{ post.user.name}}</small></h3>
                <p>{{ post.text}}</p>
                <!--<p><a href="#" ng-click="deletePost(post.id)" class="text-muted">Delete</a></p>-->
                <!-- THE COMMENTS -->
                <div class="comment" ng-hide="loading" ng-repeat="comment in post.comments">
                    <h3>Comment #{{ comment.id}} <small>by {{ comment.user.name}}</small></h3>
                    <p>{{ comment.text}}</p>

                    <!--<p><a href="#" ng-click="deleteComment(comment.id)" class="text-muted">Delete</a></p>-->
                </div>
                <!-- NEW COMMENT FORM -->
                <form ng-submit="submitComment(post.id)">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" name="comment" ng-init="commentData[post.id]={}" ng-model="commentData[post.id].text" placeholder="Comment.....">
                    </div>
                    <div class="form-group text-right">	
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </body>
</html>
