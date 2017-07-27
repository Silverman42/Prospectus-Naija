<?php
    include_once("./view/create-letter.php");
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prospectus::Create New Letter</title>
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
                <a href="./edit-user-profile.php">
                    <span data-toggle="tooltip" title="Edit User Profile" data-placement="bottom" class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </li>
             <li>
                <a href="./records.php">
                    <span data-toggle="tooltip" title="Letter Records" data-placement="bottom" class="glyphicon glyphicon-list" aria-hidden="true"></span>
                </a>
            </li>
             <li>
                <a href="#">
                    <span data-toggle="tooltip" title="Create New Letter" data-placement="bottom" class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
       <div class="col-lg-6 col-lg-push-3 cover-4">
            <div class="cover-3 ">
                <form action="model/create-letter.php" id="createLetter" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form" >
                    <div class="form-group">
                        <legend>Create New Letter</legend>
                    </div>
                    <div class="col-md-12 new-input">
                        <div class="col-sm-2">
                            <label for="lTitle" class="control-label">Letter Title:</label>
                        </div>
                        <div class="col-sm-7 letter-input">
                            <div class="letterTitle">
                                <input type="text" name="lTitle" id="lTitle" class="form-control primary-border" value="" title="" required="required" pattern="^[a-zA-Z\s]*$">
                            </div>                            
                        </div>
                    </div>
                    <div class="col-md-12 new-input">
                        <div class="col-sm-2">
                            <label for="sAddress" class="control-label">Sender's address:</label>
                        </div>
                        <div class="col-sm-7 letter-input">
                            <div class="addresser">
                                <input type="text" name="sAddress" id="sAddress" class="form-control primary-border" value="" title="">
                            </div>                            
                        </div>
                        <div class="col-sm-3">
                            <button type="button" id="sAddressBtn" class="btn btn-danger">
                                <span data-toggle="tooltip" title="New Address line" data-placement="bottom" class="glyphicon glyphicon-plus"  aria-hidden="true"></span>
                            </button>
                            <button type="button" id="sAddressRemove" class="btn btn-danger">
                                <span data-toggle="tooltip" title="Remove Address line" data-placement="bottom" class="glyphicon glyphicon-remove"  aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12 new-input">
                        <div class="col-sm-2">
                            <label for="rAddress" class="control-label">Receiver's address:</label>
                        </div>
                        <div class="col-sm-7 letter-input">
                            <div class="addressee">
                                <input type="text" name="rAddress" id="rAddress" class="form-control primary-border" value="" title="">
                            </div>                            
                        </div>
                        <div class="col-sm-3">
                            <button type="button" id="rAddressBtn" class="btn btn-danger">
                                <span data-toggle="tooltip" title="New Address line" data-placement="bottom" class="glyphicon glyphicon-plus"  aria-hidden="true"></span>
                            </button>
                            <button type="button" id="rAddressRemove" class="btn btn-danger">
                                <span data-toggle="tooltip" title="Remove Address line" data-placement="bottom" class="glyphicon glyphicon-remove"  aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12 new-input">
                        <div class="col-sm-2">
                            <label for="#compliment" class="control-label">Compliment:</label>
                        </div>
                        <div class="col-sm-7 letter-input">
                            <div class="compliment">
                                <input type="text" name="compliment" id="compliment" class="form-control primary-border" value="" title="">
                            </div>                            
                        </div>
                    </div>
                    <div class="col-md-12 new-input">
                        <div class="col-sm-2">
                            <label for="header" class="control-label">Header:</label>
                        </div>
                        <div class="col-sm-7 letter-input">
                            <div class="header">
                                <input type="text" name="header" id="header" class="form-control primary-border" value="" title="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 new-input">
                        <div class="col-sm-2">
                            <label for="sAddress" class="control-label">Letter Body:</label>
                        </div>
                        <div class="col-sm-7 letter-input">
                            <div class="lBody">
                                <textarea name="lBody" class="form-control primary-border" id="sAddress" rows="3" cols=""></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" id="lBodyBtn" class="btn btn-danger">
                                <span data-toggle="tooltip" title="New paragraph" data-placement="bottom" class="glyphicon glyphicon-plus"  aria-hidden="true"></span>
                            </button>
                            <button type="button" id="lBodyRemove" class="btn btn-danger">
                                <span data-toggle="tooltip" title="Remove New paragraph" data-placement="bottom" class="glyphicon glyphicon-remove"  aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12 new-input">
                        <div class="col-sm-2">
                            <label for="conclude" class="control-label">Conclusion:</label>
                        </div>
                        <div class="col-sm-7 letter-input">
                            <div class="conclude">
                                <input type="text" name="conclude" id="conclude" class="form-control primary-border" value="" title="">
                            </div>                            
                        </div>
                        <div class="col-sm-3">
                            <button type="button" id="concludeBtn" class="btn btn-danger">
                                <span data-toggle="tooltip" title="New Conclusion line" data-placement="bottom" class="glyphicon glyphicon-plus"  aria-hidden="true"></span>
                            </button>
                            <button type="button" id="concludeRemove" class="btn btn-danger">
                                <span data-toggle="tooltip" title="Remove Conclusion line" data-placement="bottom" class="glyphicon glyphicon-remove"  aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                    <input type="hidden" name="ui" id="ui" value="<?php echo $userId;?>">
                    <p class="out"></p>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button type="submit" name="submit2" id="inputSubmit" class="btn btn-danger">
                                    <span data-toggle="tooltip" title="Create Letter" data-placement="left" class="glyphicon glyphicon-edit"  aria-hidden="true"></span>
                                </button>
                            </div>
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