<?php 
    include ("./view/view-letter.php");
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prospectus::View Letter</title>
    <script>
        function forprint() {
            if (!window.print) {
                return
            }
            window.print()
        }
    </script>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/non-responsive.css" rel="stylesheet">
    <link href="css/printables.css" rel="stylesheet" media="print">
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
                <a href="create-letter.php">
                    <span data-toggle="tooltip" title="Create New Letter" data-placement="bottom" class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </a>
            </li>        
        </ul>
    </nav>
    <div class="container-fluid">
       <div class="col-lg-6 col-lg-push-3 cover-4">
            <div class="cover-3 ">
                <?php foreach($queryExecute as $value){?>
                <legend>Letter-Title: <?php echo $value['letterName'];?></legend>
                <div class="col-md-12 mapper" style="background-color:lightgrey; padding: 5px; margin-bottom: 9px">
                    <a href="records.php">Letter Records</a>
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    View Letter
                </div>
                <div class="col-md-12 letter-format lRight">
                    <div class="col-sm-4 col-sm-push-8">
                        <?php echo str_replace($search,$replace,$value['senderAdd']);?>
                    </div>
                </div>
                <div class="col-md-12 letter-format lLeft">
                    <div class="col-sm-4">
                        <?php echo str_replace($search,$replace,$value['recieverAdd']);?>
                    </div>
                </div>
                <div class="col-md-12 letter-format lLeft">
                    <div class="col-sm-4">
                         <?php echo $value['compliment'];?>
                    </div>
                </div>
                <div class="col-md-12 letter-format lCenter" style="text-align:center">
                    <b style="text-transform: uppercase"><?php echo $value['header'];?></b>
                </div>
                <div class="col-md-12 letter-format">
                        <?php echo str_replace($search,$replace,$value['letterBody']);?>
                        <br/><br/>
                </div>
                <div class="col-md-12 letter-format lRight">
                    <div class="col-sm-4 col-sm-push-8">
                        <?php echo str_replace($search,$replace,$value['conclusion']);?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="nav-btns">
            <ul>
                <li>
                    <a class="btn btn-danger" data-toggle="tooltip" title="Print" data-placement="right" href="javascript:forprint()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>                  
                </li>
            </ul>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>