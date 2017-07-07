<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="images/favicon.png">

    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />

    <meta property="fb:app_id" content="" />

    <title>Gmail Password Recovery</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.unpacker.org/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.unpacker.org/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="styles/vendors/Vidage.min.css" rel="stylesheet">
    <link href="styles/vendors/animate.min.css" rel="stylesheet">
    <link href="styles/main.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">

        <!-- Basic-header-1 -->

        <div class="basic-header-1">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" width="285" alt="Gmail Password Recovery"></a>
            </div>
        </div>

        <!-- Basic-form-conatiner-1 -->

        <div class="content animated slideInDown">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <div class="basic-conatiner-1">
                            <div class="inner-basic-conatiner-1 text-center animated slideInDown">
                                <img src="images/avatar-3.png" width="80" class="img-circle img-custom" alt="">
                                <h2>Lorem ipsum dolor</h2>
                                <p class="p-custom">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <form class="form-wrapper cf helper-margin" action="index.php" method="POST">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                                                <input  id="username" class="form-control" name="grab" type="text" placeholder="Enter your gmail username" required>
                                            </div>
                                            <div class="switch">
                                                <label>Proxy
                                                    <input type="checkbox" class="simple-switch-input proxy"/>
                                                    <span class="simple-switch dark"></span>
                                                </label>

                                                <label>SHA 256
                                                    <input type="checkbox" class="simple-switch-input sha"/>
                                                    <span class="simple-switch dark"></span>
                                                </label>
                                            </div>

                                            <button id="next" class="btn btn-default btn-lg btn-block btn-custom helper-margin" type="button">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Basic-form-conatiner-1 -->
        <div class="content-2 hide">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <div class="basic-consol-1">
                            <div class="inner-basic-consol-1 text-center animated slideInDown">
                                <img src="images/console.png" width="80" class="img-circle img-custom" alt="">
                                <div class="console-space">
                                    <div class="loader"></div>

                                    <div id="codes" class="consol-code text-center">

                                    </div>
                                    <div class="col-md-6 col-md-offset-3">
                                    <!-- change this onclick function with function from  your network. -->
                                        <button class="btn btn-default btn-lg btn-block btn-custom  hide offers" onclick="alert('demo')" >Proceed</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Basic-footer-1 -->
        <div class="basic-footer-1 text-center">
            <span class="basic-footer-1-text">© 2016. All rights reserved.</span class="basic-footer-1-text">
        </div>

        <!-- modal-error -->
        <div class="modal fade bs-example-modal-sm" id="modal-error" tabindex="-1" role="dialog" aria-labelledby="modal-error">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Error <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></h4>
                        <p class="error-message text-center">Username Cannot be empty!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script type="text/javascript">
    //consoleMessages edit text if you wish just leave text in {}
        hack = ['Connecting to the server ...', 'Proxy Protection: {proxy} ...', 'SHA 256 Encryption: {sha}...', 'Searching for username: [ {username} ]   ...', 'Verifying user account ...', 'User: [ {username} ] was found ...', 'Resetting password on: [ {username} ] account ...', 'Verifying password...', 'Password Verified...', 'Please verify you are not bot... '];


    </script>

    <!-- JS -->

    <script src="https://cdn.unpacker.org/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.unpacker.org/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--     <script src="scripts/vendors/Vidage.js"></script> -->
    <script src="scripts/vendors/jquery.shuffleLetters.js"></script>
    <script src="scripts/script.min.js"></script>

</body>
</html>
