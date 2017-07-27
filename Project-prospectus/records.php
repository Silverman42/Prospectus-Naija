<?php
include_once("view/records.php");
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prospectus::View letter list</title>
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
                <a href="#">
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
                <legend>Letter Records</legend>
                <div class="col-md-12 table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title of letter</th>
                                <th>Date Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($queryExecute as $value) { ?>
                            <tr>
                                <td><a href="view-letter.php?id=<?php echo $value['id'];?>"><?php echo $value['letterName']; ?></a></td>
                                <td><?php echo $value['docCreateDate']; ?></td>
                            </tr> 
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
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