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

<?php
  include "config.php";

      $Title=$DatePost=$Image=$Firstline=$Secondline=$ImageA=$ImageB=$ImageC=$ImageD=$ImageE="";
      $ID=0; //variables

          if(isset($_GET['id']) and$_SERVER["REQUEST_METHOD"]=="GET")//request method to GET
          { 
              $ID=$_GET["id"];
              $sql = "SELECT * FROM blog WHERE ID_blogs=".$ID.""; //Query getting recent data
              $rs=$conn->query($sql);

                        if ($rs->num_rows > 0) 
                        {
                         
                               while($row = $rs->fetch_assoc()) 
                               {
                                $Title=$row["Title"];
                                $DatePost=$row["DatePost"];
                                $Image=$row["Image"];
                                $Firstline=$row["Firstline"];
                                $Secondline=$row["Secondline"];
                                $ImageA=$row["ImageA"];
                                $ImageB=$row["ImageB"];
                                $ImageC=$row["ImageC"];
                                $ImageD=$row["ImageD"];
                                $ImageE=$row["ImageE"];
                              }
                        }
          }


            mysqli_close($conn);
?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"name="Title"><?php echo $Title;?></h1>
                <ol class="breadcrumb">
                    <li><a href="home.php">Home</a>
                    </li>
                    <li class="active">Blog Post</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <hr>

                <!-- Date/Time -->
                <p><i class="fa fa-clock-o" name="DatePost"></i> <?php echo $DatePost;?></p>

                <hr>

                <!-- Preview Image -->
                <?php
                if( !($Image==""))
                    {
                        echo '<img class="img-responsive" src="../WEBDEVDYNAMICNEW/article/'.$Image.'" alt="">';
                      echo "<hr>";
                     
                    }
                else
                    {
                       echo '<img class="img-responsive" src="" alt="">';
                      
                    } 
                
                ?>

                <!-- Post Content -->
                <p class="lead" name="Firstline"><?php echo $Firstline;?></p>
                <p><?php echo $Secondline;?></p>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
			

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Featured Quote of the Week</h4>
                    <?php
                        include"config.php";
                        $sql="Select * From quotestbl";
                        $result=mysqli_query($conn,$sql);
                        while($blog=$result->fetch_assoc())
                            {
                                 echo'<p>'.$blog['Quotes'].'</p>';
                            }
                    ?>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        <div class="row">
            <?php
                if( !($ImageA=="") )
                    { //Is not empty
                        echo '<div class="col-md-2 portfolio-item">';
                                echo '<img class="img-responsive" src="../WEBDEVDYNAMICNEW/article/'.$ImageA.'" alt="">';
                        echo '</div>';
                    }
                    else{
                        echo '<div class="col-md-2 portfolio-item">';
                                echo '<img class="img-responsive" src="" alt="">';
                        echo '</div>';
                    }
            ?>
            <?php
                if( !($ImageB=="") )
                    { //Is not empty
                        echo '<div class="col-md-2 portfolio-item">';
                                echo '<img class="img-responsive" src="../WEBDEVDYNAMICNEW/article/'.$ImageB.'" alt="">';
                        echo '</div>';
                    }
                    else{
                        echo '<div class="col-md-2 portfolio-item">';
                                echo '<img class="img-responsive" src="" alt="">';
                        echo '</div>';
                    }
            ?>
            <?php
                if( !($ImageC=="") )
                    { //Is not empty
                        echo '<div class="col-md-2 portfolio-item">';
                                echo '<img class="img-responsive" src="../WEBDEVDYNAMICNEW/article/'.$ImageC.'" alt="">';
                        echo '</div>';
                    }
                    else{
                        echo '<div class="col-md-2 portfolio-item">';
                                echo '<img class="img-responsive" src="" alt="">';
                        echo '</div>';
                    }
            ?>
            <?php
                if( !($ImageD=="") )
                    { //Is not empty
                        echo '<div class="col-md-2 portfolio-item">';
                                echo '<img class="img-responsive" src="../WEBDEVDYNAMICNEW/article/'.$ImageD.'" alt="">';
                        echo '</div>';
                    }
                    else{
                        echo '<div class="col-md-2 portfolio-item">';
                                echo '<img class="img-responsive" src="" alt="">';
                        echo '</div>';
                    }
            ?>
            <?php
                if( !($ImageE=="") )
                    { //Is not empty
                        echo '<div class="col-md-2 portfolio-item">';
                                echo '<img class="img-responsive" src="../WEBDEVDYNAMICNEW/article/'.$ImageE.'" alt="">';
                        echo '</div>';
                    }
                    else{
                        echo '<div class="col-md-2 portfolio-item">';
                                echo '<img class="img-responsive" src="" alt="">';
                        echo '</div>';
                    }
            ?>
        </div>
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
