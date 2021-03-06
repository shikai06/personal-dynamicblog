
<!DOCTYPE html>
<html lang="en">
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Edit</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="forms.php">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Jinkee<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                 <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="addblog.php"><i class="fa fa-fw fa fa-pencil"></i>Add Blog</a>
                    </li>
                    <li>
                        <a href="addcategory.php"><i class="fa fa-fw fa fa-pencil"></i>Add Category</a>
                    </li>
                    <li class="">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Edit Forms <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="editabout.php">About</a>
                            </li>
                            <li>
                                <a href="editquotes.php">Quotes</a>
                            </li>
                        </ul>
                        <li>
                            <a href="editimg.php"><i class="fa fa-fw fa-wrench"></i>Update Blog</a>
                        </li>
                        <li>
                            <a href="editcategory.php"><i class="fa fa-fw fa fa-trash-o"></i>Delete Category</a>
                        </li>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Quotes Form
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-edit"></i> Quotes Form
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <?php
  include "config.php";

      $Quotes="";
      $ID=0; //variables

          $sql = "SELECT * FROM quotestbl WHERE ID = 1"; //Query getting recent data
              $rs=$conn->query($sql);

                        if ($rs->num_rows > 0) 
                        {
                         
                               while($row = $rs->fetch_assoc()) 
                               {
                                $Quotes=$row["Quotes"];
                              }
                        }

            if(isset($_POST['submit']) and $_SERVER["REQUEST_METHOD"]=="POST")//post method

            {
                              $Quotes=$_POST["Quotes"];

                $sql = "UPDATE quotestbl SET Quotes='$Quotes' WHERE ID = 1";


              if (mysqli_query($conn, $sql)) //checking query 

              { 
                echo "Updated record successfully";
                
              } 
              else 
              {
                echo "Error" . $sql . mysqli_error($conn);
              }
            }

            mysqli_close($conn);
?>

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                            <div class="form-group">
                                <textarea class='form-control ckeditor' name='Quotes' rows='3'><?php echo $Quotes;?></textarea>
                            </div>

                            <button type="submit" class="btn btn-default" name="submit">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>

                        </form>

                    </div>
                    <div class="col-lg-6">
                      
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
