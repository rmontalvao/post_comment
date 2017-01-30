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



        <script src="app/js/jquery-2.0.3.min.js"></script>
        <script src="app/lib/angular/angular.js"></script>
        <script src="app/lib/angular/angular-route.js"></script>
        <script src="app/lib/angular/angular-cookies.js"></script>
        <script src="app/main.js"></script>

        <script src="app/controllers/authControllers.js"></script>
        <script src="app/controllers/homeControllers.js"></script>
        <script src="app/controllers/postControllers.js"></script>
        <script src="app/controllers/UserControllers.js"></script>

        <script src="app/services/authServices.js"></script>
        <script src="app/services/homeServices.js"></script>
        <script src="app/services/postServices.js"></script>


<!--        <script src="js/modules/userprofile/services.js"></script>-->
        
    </body>

</html>