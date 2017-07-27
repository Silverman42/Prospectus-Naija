<?php
include_once("view/view.php");
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prospectus::User-profile</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/non-responsive.css" rel="stylesheet">
    <script src="holder/holder.js"></script>
    <script>
        function forprint() {
            if (!window.print) {
                return
            }
            window.print()
        }
    </script>
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
                <a href="#">
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
                <a href="./create-letter.php">
                    <span data-toggle="tooltip" title="Create New Letter" data-placement="bottom" class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="col-lg-6 col-lg-push-3 cover-4">
            <div class="cover-3 ">
                <legend>User Profile</legend>
                <?php foreach ($queryExecute as $output){?>
                <div class="col-xs-2 col-sm-2 col-md-4">
                    <div class="col-xs-3 col-sm-12">
                        <a href="#" class="thumbnail passport">
                            <?php if(empty($output['passport'])){?>
                            <img  data-src="holder.js/150x150?theme=grey&text=No image&fg=777777" alt="profile pic">
                            <?php }else{?>
                            <img  src="uploads/<?php echo $output['passport'];?>" alt="profile pic">
                            <?php } ?>                           
                        </a>
                    </div>
                </div>
                <div class="col-xs-2 col-sm-10 col-md-8 table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="details">Name:</td>
                                <td><?php echo $output['fullname']; ?></td>
                            </tr>
                            <tr>
                                <td class="details">Date of Birth:</td>
                                <td><?php echo $output['dob']; ?></td>
                            </tr>
                            <tr>
                                <td class="details">E-mail:</td>
                                <td><?php echo $output['email']; ?></td>
                            </tr>
                            <tr>
                                <td class="details">Nationality:</td>
                                <td><?php echo $output['nationality']; ?></td>
                            </tr>
                            <tr>
                                <td class="details">Phone Number:</td>
                                <td><?php echo $output['phoneNumber']; ?></td>
                            </tr>
                            <tr>
                                <td class="details">Address:</td>
                                <td><?php echo $output['address']; ?></td>
                            </tr>
                        </tbody>
                    </table>
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