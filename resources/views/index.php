<!DOCTYPE html>
<html ng-app="BasicHttpAuthExample">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    </head>

    <body>

        <div class="jumbotron">
            <div class="container">
                <div class="col-xs-offset-2 col-xs-8">
                    <div ng-view></div>
                </div>
            </div>
        </div>



        <script src="//code.jquery.com/jquery-2.0.3.min.js"></script>
        <script src="//code.angularjs.org/1.2.20/angular.js"></script>
        <script src="//code.angularjs.org/1.2.20/angular-route.js"></script>
        <script src="//code.angularjs.org/1.2.13/angular-cookies.js"></script>
        <script src="js/main.js"></script>

        <script src="js/modules/authentication/services.js"></script>
        <script src="js/modules/authentication/controllers.js"></script>

        <script src="js/modules/home/services.js"></script>
        <script src="js/modules/home/controllers.js"></script>
        
<!--        <script src="js/modules/userprofile/services.js"></script>-->
        <script src="js/modules/userprofile/controllers.js"></script>
    </body>

</html>