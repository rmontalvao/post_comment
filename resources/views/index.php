<!DOCTYPE html>
<html ng-app="BasicHttpAuthExample">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
        <style>
            .comment{
                    margin: 0px 0px 0px 40px;
            }
            .jumbotron .comment p{font-size: 12px;}
            .action-btn{margin-bottom: 20px;}
            .action-btn a{padding:0 5px; color: #000;}
            .action-btn span{padding-right: 2px;}
    </style>
    </head>

    <body>

        <div class="jumbotron">
            <div class="container">
                <div class="col-xs-offset-2 col-xs-8">
                    <div ng-view></div>
                </div>
            </div>
        </div>



        <script src="js/jquery-2.0.3.min.js"></script>
        <script src="js/angular/lib/angular.js"></script>
        <script src="js/angular/lib/angular-route.js"></script>
        <script src="js/angular/lib/angular-cookies.js"></script>
        <script src="js/main.js"></script>

        <script src="js/modules/authentication/services.js"></script>
        <script src="js/modules/authentication/controllers.js"></script>

        <script src="js/modules/home/services.js"></script>
        <script src="js/modules/home/controllers.js"></script>
        
        <script src="js/modules/post/services.js"></script>
        <script src="js/modules/post/controllers.js"></script>
        
<!--        <script src="js/modules/userprofile/services.js"></script>-->
        <script src="js/modules/userprofile/controllers.js"></script>
    </body>

</html>