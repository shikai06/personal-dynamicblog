<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LIFEuphoria - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">HOME</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blogs<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php 
                     include "config.php";
                          $sql = "SELECT * FROM category";
                          $rs = $conn->query($sql);

                          if ($rs->num_rows > 0) {
                              while($row = $rs->fetch_assoc()) {
                                  echo "<li><a href='blog-home.php?page_id=".$row["ID_category"]."'>".$row["Name"]."</a></li>" ;
                              }
                          } else {
                              echo "0 results";
                          }
                     ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Blog
                </h1>
                <ol class="breadcrumb">
                    <li><a href="home.php">Home</a>
                    </li>
                    <li class="active">Blog Post</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
		
<?php
//TEXT FORM
include"config.php";
$sql="Select * From iblogtbl ORDER BY ID DESC ";
$result=mysqli_query($conn,$sql);
while($blog=$result->fetch_assoc())
    {
        echo"<hr>";
        echo'<div class="row">';
            echo'<div class="col-md-1 text-center">';
                echo'<p><i class="fa fa-camera fa-4x"></i></p>';
                echo'<p name="DatePost">'.$blog['DatePost'].'</p>';
            echo"</div>";
           echo '<div class="col-md-6">';
               echo"<h3>";
                   echo '<a href="blog-post2.php?id='.$blog['ID'].'" name="Title">'.$blog['Title'].'</a>';
               echo "</h3>";
                echo'<p>by <a href="about.php">Jink Po</a></p>';
               echo '<p name="Firstline">'.$blog['Firstline'].'</p>';
               echo '<a class="btn btn-primary" name="Read More" href="blog-post2.php?id='.$blog['ID'].'">Read More <i class="fa fa-angle-right"></i></a>';
           echo "</div>";
        echo"</div>";
}

?>

        <!-- Pager -->
        
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
