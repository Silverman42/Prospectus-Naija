<?php 
    include ("./view/sign-up.php");
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prospectus::Sign Up</title>
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
        <a class="navbar-brand red-title" href="./index.php"><span class="glyphicon glyphicon-fire"></span>Prospectus <sub>NAIJA</sub></a>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="./index.php">
                    <span data-toggle="tooltip" title="Home" data-placement="bottom" class="glyphicon glyphicon-home" aria-hidden="true"></span>
                </a>
            </li>
            <li>
                <a href="./sign-in.php">
                    <span data-toggle="tooltip" title="Sign-in" data-placement="bottom" class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
       <div class="col-lg-6 col-lg-push-3 cover-4">
            <div class="cover-3 ">
                <form action="model/backend.php" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
                    <div class="form-group">
                        <legend>Sign-Up</legend>
                    </div>
                    <div class="form-group">
                        <em id="ErrPass"><?php echo $err; ?></em>
                    </div>
                    <div class="form-group">
                        <label for="inputPassport" class="col-sm-2 control-label">Passport:</label>
                        <div class="col-sm-10">
                            <input type="file" name="passport" id="inputPassport" class="form-control primary-border primary-border" value="" title="">
                            <em>File must be 15mb max</em>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inputFirst-Name">First-Name:</label>
                        <div class="col-sm-10">
                            <input type="text" name="first-name" id="inputFirst-Name" class="form-control primary-border" value="" required="required" pattern="^[a-zA-Z\s]*$">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSurname" class="col-sm-2 control-label">Surname</label>
                        <div class="col-sm-10">
                            <input type="text" name="surname" id="inputSurname" class="form-control primary-border" value=""  required="required" pattern="^[a-zA-Z\s]*$" title="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputOther-Name" class="col-sm-2 control-label">Other-Name:</label>
                        <div class="col-sm-10">
                            <input type="text" name="othername" id="inputOther-Name" class="form-control primary-border" value="" required="required" pattern="^[a-zA-Z\s]*$" title="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputE-mail" class="col-sm-2 control-label">E-mail:</label>
                        <div class="col-sm-10">
                            <input type="E-mail" placeholder="Eg, Example@examplemail.com" name="e-mail" id="inputE-mail" class="form-control primary-border" value="" required="required" pattern="[^\s@]+@[^\s@]+\.[^\s@]+" title="">
                        </div>
                    </div>
                                        
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" id="inputPassword" class="form-control primary-border" placeholder="Password must not be minimum of 6 characters" value="" pattern="^.{6,}$" required="required"
                                title="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCP" class="col-sm-2 control-label">Confirm Password:</label>
                        <div class="col-sm-10">
                            <input type="password" name="" id="inputCP" class="form-control primary-border" placeholder="Must match password" value="" pattern="^.{6,}$" required="required" title="">
                            <em id="ErrPass"></em>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputDate-Of-Birth" class="col-sm-2 control-label">Date-Of-Birth:</label>
                        <div class="col-sm-10 primary-border">
                            <input type="date" name="dob" id="inputDate-Of-Birth" class="form-control primary-border" value="" required="required" pattern="^[0-3]?[0-9].[0-3]?[0-9].(?:[0-9]{2})?[0-9]{2}$" title="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputNationality" class="col-sm-2 control-label">Nationality:</label>
                        <div class="col-sm-10">
                            <input type="text" name="nationality" id="inputNationality" class="form-control primary-border" value=""  title="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textareaAddress" class="col-sm-2 control-label">Address:</label>
                        <div class="col-sm-10">
                            <textarea name="address" id="textareaAddress" class="form-control primary-border" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPhoneNumber" class="col-sm-2 control-label">Phone Number:</label>
                        <div class="col-sm-10">
                            <input type="number" name="phonenumber" placeholder="Must be at least 11 digits" id="inputPhoneNumber" class="form-control primary-border" value="" pattern="^.{11,}$" required="required" title="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" name="submit" id="inputSubmit" class="btn btn-danger">
                                <span data-toggle="tooltip" title="Submit Profile" data-placement="right" class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </button>
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