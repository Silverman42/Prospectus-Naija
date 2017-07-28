<?php
    include_once("./view/edit-user-profile.php");
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prospectus::Edit User profile</title>
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
        <a class="navbar-brand red-title" href="#"><span class="glyphicon glyphicon-fire"></span>Prospectus <sub>NAIJA</sub></a>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="./view.php">
                    <span data-toggle="tooltip" title="View Profile" data-placement="bottom" class="glyphicon glyphicon-user" aria-hidden="true"></span>
                </a>
            </li>
            <li>
                <a href="model/logout.php">
                    <span data-toggle="tooltip" title="Logout" data-placement="bottom" class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span data-toggle="tooltip" title="Edit User Profile" data-placement="bottom" class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </li>
             <li>
                <a href="./records.php">
                    <span data-toggle="tooltip" title="Letter Records" data-placement="bottom" class="glyphicon glyphicon-list" aria-hidden="true"></span>
                </a>
            </li>
             <li>
                <a href="create-letter.php">
                    <span data-toggle="tooltip" title="Create New Letter" data-placement="bottom" class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
       <div class="col-lg-6 col-lg-push-3 cover-4">
            <div class="cover-3 ">
                <form action="model/update.php" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
                    <div class="form-group">
                        <legend>Profile Picture Update</legend>
                    </div>
                    <div class="form-group">
                        <em id="successInfo"><?php echo $success1; ?></em>
                        <em id="ErrPass"><?php echo $errpic; ?></em>
                    </div>
                    <div class="form-group">
                        <label for="inputPassport" class="col-sm-2 control-label">Passport:</label>
                        <div class="col-sm-10">
                            <input type="file" name="passport" id="inputPassport" class="form-control primary-border primary-border" value="" title="">
                            <em>File must be 15mb max</em>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" name="submit1" id="inputSubmit2" class="btn btn-danger">
                        <span data-toggle="tooltip" title="Update profile pic." data-placement="right" class="glyphicon glyphicon-upload" aria-hidden="true"></span>
                        </button>
                        </div>
                    </div>
                    <br/>
                </form>
                <form action="model/update.php" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
                    
                    <div class="form-group">
                        <legend>Edit User Profile</legend>
                    </div>
                    <div class="form-group">
                        <em id="succInfo"><?php echo $success2; ?></em>
                        <em id="ErrPass"><?php echo $err; ?></em>
                    </div>
                    <?php foreach($queryExecute as $output){?>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inputFullname">Fullname:</label>
                        <div class="col-sm-10">
                            <input placeholder="SURNAME FIRSTNAME OTHERNAME" type="text" name="fullname" id="inputFullname" class="form-control primary-border" value="<?php echo $output['fullname'];?>" required="required" pattern="^[A-Z\s]*$">
                            <em>All in Uppercase</em>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputE-mail" class="col-sm-2 control-label">E-mail:</label>
                        <div class="col-sm-10">
                            <input type="E-mail" placeholder="Eg, Example@examplemail.com" name="e-mail" id="inputE-mail" class="form-control primary-border" value="<?php echo $output['email'];?>" required="required" pattern="[^\s@]+@[^\s@]+\.[^\s@]+" title="">
                        </div>
                    </div>
                                        
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" id="inputPassword" class="form-control primary-border" placeholder="Password must not be minimum of 6 characters" pattern="^.{6,}$" required="required" title="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCP" class="col-sm-2 control-label">Confirm Password:</label>
                        <div class="col-sm-10">
                            <input type="password" name="" id="inputCP" class="form-control primary-border" placeholder="Must match password" pattern="^.{6,}$"  required="required" title="">
                            <em id="ErrPass"></em>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputDate-Of-Birth" class="col-sm-2 control-label">Date-Of-Birth:</label>
                        <div class="col-sm-10 primary-border">
                            <input type="date" name="dob" id="inputDate-Of-Birth" class="form-control primary-border" value="<?php echo $output['dob'];?>" required="required" pattern="^[0-3]?[0-9].[0-3]?[0-9].(?:[0-9]{2})?[0-9]{2}$" title="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputNationality" class="col-sm-2 control-label">Nationality:</label>
                        <div class="col-sm-10">
                            <input type="text" name="nationality" id="inputNationality" class="form-control primary-border" value="<?php echo $output['nationality'];?>"  title="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textareaAddress" class="col-sm-2 control-label">Address:</label>
                        <div class="col-sm-10">
                            <textarea name="address"  id="textareaAddress" class="form-control primary-border" rows="3"><?php echo $output['address'];?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPhoneNumber" class="col-sm-2 control-label">Phone Number:</label>
                        <div class="col-sm-10">
                            <input type="number" name="phonenumber" placeholder="Must be at least 11 digits" id="inputPhoneNumber" class="form-control primary-border" value="<?php echo $output['phoneNumber'];?>" pattern="^.{11,}$" required="required" title="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" name="submit2" id="inputSubmit" class="btn btn-danger">
                                <span data-toggle="tooltip" title="Edit User Profile" data-placement="right" class="glyphicon glyphicon-edit"  aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                    <?php } ?>
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