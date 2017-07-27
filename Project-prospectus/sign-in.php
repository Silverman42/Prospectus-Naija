<?php
 session_start();
 session_destroy();
$err=NULL;
if(isset($_GET['err'])){
    if($_GET['err']==1){
        $err = "Invalid password or email";
    }
    elseif($_GET['err']==2){
         $err = "User not logged in";
    }
    else{
        $err = NULL;
    }
}
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome To Prospectus Naija</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/non-responsive.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <a class="navbar-brand red-title" href="./index.php"><span class="glyphicon glyphicon-fire"></span> Prospectus <sub>NAIJA</sub></a>
    </nav>
    <div class="container-fluid">
       <div class="col-xs-2 col-sm-2 col-md-6 col-lg-6 col-lg-push-3 cover-4">
            <div class="cover-3 ">
                <form action="model/login.php" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <legend>Login</legend>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inputEmail">Email:</label>
                        <div class="col-sm-10">
                            <input type="E-mail" name="email" id="inputEmail" class="form-control primary-border" value="" requried="required" pattern="[^\s@]+@[^\s@]+\.[^\s@]+" placeholder="Eg, Example@examplemail.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" id="inputEmail" class="form-control primary-border" value="" min="{6}"  max="" step="" required="required" title="Password must be at least 6 characters long">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-danger" name="submit">
                                <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <em id="ErrPass"><?php echo $err; ?></em>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                          Don't have an account? Sign up <a href="sign-up.php">here</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>